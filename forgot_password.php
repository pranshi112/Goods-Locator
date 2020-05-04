<?php
  session_start();
  $db = mysqli_connect("localhost", "root", "", "first_db");
  //$_SESSION['id'] = 1;
  
  ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
     <meta charset="UTF-8">
     <title>Document</title>
   </head>
   <body>
   <?php
     echo "Enter your Email Address";
    ?>
   <form action ='reset_password.php' method = 'post'>
   <input type="email" name="email" placeholder="Email Address">
   <button type="submit" name="forgot" value="submit">Send the Mail</button>
   </form>
   <?php
    if(isset($_GET['reset'])){
      if($_GET["reset"]=="success"){
        echo "Check your Email";
      }
    }
   ?>
   
   </body>
   </html>