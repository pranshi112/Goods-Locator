<?php

session_start();
$db = mysqli_connect("localhost", "root", "", "first_db");
//$_SESSION['id'] = 1;


   
  if(isset($_POST['submit'])){
    $email =  mysqli_real_escape_string($db,$_POST['email']);
    $_SESSION['var'] = $email;
    $password =  mysqli_real_escape_string($db,$_POST['password']);
    
    $confirmPassword =  mysqli_real_escape_string($db,$_POST['cpassword']);
     if($password==$confirmPassword){
      $sql =  "SELECT * FROM users where email='$email';";
      $results= mysqli_query($db,$sql);
      $resultsCheck = mysqli_num_rows($results);
      if($resultsCheck>0){
        
        while($row = mysqli_fetch_assoc($results)){
          $pass = $row['password'];
          $passwordHashDb = password_hash($pass,PASSWORD_DEFAULT);    //dehashinhg
          
          if(password_verify($password, $passwordHashDb) ==true){
               echo "hi";
               header('Location:index.php?login=success');
          }else{
            echo "Wrong Password! ";
          }
        }
      }else{
        echo "The user registered with this email not found!";
      } 
     }else{
       echo "The 2 passwords do not match";
     }
  
  }
?> 