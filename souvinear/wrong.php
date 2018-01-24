<?php require_once 'includes/initialize.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form</title>
  <style media="screen">
    form {
      height: 6.25rem;
      width: 6.25rem;
      position: absolute;
      top: 0; right: 0; bottom: 0; left: 0;
      margin: auto;
    }
    .control {
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>

  <form action="login_processing.php" method="post">
    <h1>Log-In</h1>
    <div class="control">
      <label for="username">Username:</label>
        <p>Account not found. </p>
      <input type="text" name="username">
    </div>
    <div class="control">
      <label for="password">Password:</label>
      <input type="password" name="password" value="">
    </div>
    <input type="submit" name="submit" value="Log In">
      <br>
      <a href="createAccount.php">Create Account</a>
  </form>

</body>
</html>