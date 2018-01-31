<?php 
$app->get('/session', function() {
    $db = new DbHandler();
    $session = $db->getSession();
    $response["id"] = $session['id'];
    $response["username"] = $session['username'];
//    $response["name"] = $session['name'];
    echoResponse(200, $session);
});

$app->post('/login', function() use ($app) {
    require_once 'passwordHash.php';
    $r = json_decode($app->request->getBody());
    verifyRequiredParams(array('username', 'password'),$r->customer);
    $response = array();
    $db = new DbHandler();
    $password = $r->customer->password;
    $username = $r->customer->username;
    $user = $db->getOneRecord("select id,hashed_password,created from user_accounts where username='$username'");
    if ($user != NULL) {
        if(passwordHash::check_password($user['hashed_password'],$password)){
        $response['status'] = "success";
        $response['message'] = 'Logged in successfully.';
        $response['username'] = $user['username'];
        $response['id'] = $user['id'];
//        $response['email'] = $user['email'];
        $response['createdAt'] = $user['created'];
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user["username"];
//        $_SESSION['name'] = $user['name'];
        } else {
            $response['status'] = "error";
            $response['message'] = 'Login failed. Incorrect credentials';
        }
    }else {
            $response['status'] = "error";
            $response['message'] = 'No such user is registered';
        }
    echoResponse(200, $response);
});
$app->post('/signUp', function() use ($app) {
    $response = array();
    $r = json_decode($app->request->getBody());
    verifyRequiredParams(array('username', 'password'),$r->customer);
    require_once 'passwordHash.php';
    require_once 'dbConnect.php';
    $db = new DbHandler();
    $username = $r->customer->username;
//    $name = $r->customer->name;
//    $email = $r->customer->email;
//    $address = $r->customer->address;
    $password = $r->customer->password;
    $isUserExists = $db->getOneRecord("select 1 from user_accounts where username='$username'");
    if(!$isUserExists){
//        $r->customer->password = sha1($password);
//        $hashed_password = sha1($password);
        $tabble_name = "user_accounts";
        $column_names = array('username', 'hashed_password');
//        
//        $result = "INSERT INTO user_accounts (";
//        $result .= " username, hashed_password";
//        $result .= ") VALUES (";
//        $result .= " '{$username}', '{$hashed_password}'";
//        $result .= ")"; 
      
        //$result = mysqli_query($connection, $query);
       $result = $db->insertIntoTable($r->customer, $column_names, $tabble_name);
        if ($result != NULL) {
            $response["status"] = "success";
            $response["message"] = "User account created successfully";
            $response["id"] = $result;
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $response["id"];
            $_SESSION['username'] = $username;
//            $_SESSION['name'] = $name;
//            $_SESSION['email'] = $email;
            echoResponse(200, $response);
        } else {
            $response["status"] = "error";
            $response["message"] = "Failed to create user. Please try again";
            echoResponse(201, $response);
        }            
    }else{
        $response["status"] = "error";
        $response["message"] = "An user with the provided username already exists!";
        echoResponse(201, $response);
    }
});
$app->get('/logout', function() {
    $db = new DbHandler();
    $session = $db->destroySession();
    $response["status"] = "info";
    $response["message"] = "Logged out successfully";
    echoResponse(200, $response);
});
?>