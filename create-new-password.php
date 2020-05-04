<?php
  session_start();
  $db = mysqli_connect("localhost", "root", "", "first_db");
  //$_SESSION['id'] = 1;
  //$email=$_SESSION['var']
  ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
     <meta charset="UTF-8">
     <title>Document</title>
   </head>
   <body>
   <?php
    $selector = $_GET["selector"];
    $validator = $_GET["validator"];
    echo  $selector ;
    echo $validator;

    if(empty($selector) || empty($validator)){
        echo "Could not validate your request";
    }else{
        if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){    // to check whether token is in hexadecimal format or not we use ctype_xdigit function

        }
    }
   ?> 
       <form action="final_password.php" method="post">
       <input type="hidden" name="selector" value="<?php echo $selector?>">
       <input type="hidden" name="validator" value="<?php echo $validator?>">
       <input type="password" name="password" placeholder="Enter New Password">
       <input type="password" name="confirmpassword" placeholder="Confirm Password">
       <button type="submit" name="reset">Reset Password</button>
       </form>

   <?php
   ?>
   </body>
   </html>