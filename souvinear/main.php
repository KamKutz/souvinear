<?php require_once 'includes/initialize.php'; ?>
<?php require_once 'form_processing.php'; ?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Main</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>SOUVINEAR</h1>
    <?php echo $_SESSION['user']; ?>
    <br>
    
    
    <div class="concerts">
        
        <?php
    
            $user_id = $_SESSION['user'];
    
            $query = 'SELECT * ';
            $query .= 'FROM concert_info WHERE';
            $query .= " user_id = '{$user_id}'";
            $query .= "ORDER BY concert_date ASC";
            $result = mysqli_query($connection, $query);
 
            if (!$result) {
              die('Database query failed.');
            }

//            $row = mysqli_fetch_row($result);
            
            while ($concert_info = mysqli_fetch_assoc($result)) { 
          ?>
        
                <div class="concert-chunk" id="<?php echo $concert_info['headliner'] ?>+<?php echo $concert_info['concert_date']?>">

                    <p><?php echo   $concert_info['concert_date']; ?> <?php echo $concert_info['concert_time']; ?> <?php echo $concert_info['headliner']; ?>  <?php echo $concert_info['supporting_act']; ?> <?php echo $concert_info['venue']; ?> <?php echo $concert_info['entry']; ?> </p>
                    
                    <form action="edit_concert.php" method="post">
                      <div id="gather">
                        <p>
                          <input type="text" name="headliner" id="headliner" value="<?php echo $concert_info['headliner']; ?>" class="uneeded">
                          </p>   
                        <p>
                          <input type="date" name="concert_date" id="concert_date" value="<?php echo $concert_info['concert_date']; ?>" class="uneeded">
                        </p>                 

                        <input type="submit" name="submit" value="Edit">
                          <hr>

                      </div>
                    </form>
                
                </div>

        <?php
                        
          } 
        
//                function get_concert_info($headliner, $concert_date){
//               $_SESSION['headliner'] = $headliner;
//               $_SESSION['concert_date'] = $concert_date;
//                echo $_SESSION['headliner'];
//                echo $_SESSION['concert_date'];
        mysqli_free_result($result);
        ?>
        
     </div> 
    
    <a href='add_concert.php'>Add Concert</a>
    
    <form action='logout_processing.php' method='post'>
    <input type='submit' name='submit' value='Log Out'>
    </form>
    
    <script src="recordAdd.js"></script>
</body>
</html>