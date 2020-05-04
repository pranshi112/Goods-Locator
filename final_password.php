<?php 
session_start();
$db = mysqli_connect("localhost", "root", "", "first_db");

if(isset($_POST['reset'])){
$selector = $_POST['selector'];
$validator = $_POST['validator'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmpassword'];

if(empty($password) || empty($confirmPassword)){
    header("Location: create-new-password.php?newpwd=empty");
}else if($password !=$confirmPassword){
    header("Loaction: create-new-password.php?newpwds=does_not_match");
    
}

$currentDate = date("U");



$sql = "SELECT * from pwdreset where pwdResetSelector=? and pwdResetExpires=?;";

$stmt = mysqli_stmt_init($db);
if(!mysqli_stmt_prepare($stmt, $sql)){
  echo "There was an error!";
  exit();
}else{
    mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
    mysqli_stmt_execute($stmt);
}

$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result)<0){
echo "You need to re-submit your reset-password request";
exit();
}else{
while($row = mysqli_fetch_assoc($result)){
$tokenBin = hex2bin($validator);
$hashpwd = $row['pwdResetToken'];
$tokenCheck = password_verify($tokenBin, $hashpwd);



if($tokenCheck == true){
    $tokenEmail = $row['pwdResetEmail'];
}else{
  echo "error";
}
}
$sqlc = "SELECT * from users where email=?;";
  

    $stmt = mysqli_stmt_init($db);

if(!mysqli_stmt_prepare($stmt, $sqlc)){
  echo "There was an error!";
  exit();
}else{
    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
    mysqli_stmt_execute($stmt);
 
    $results = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($results)<0){
    echo "There was an error!";
    exit();
    }else{
      while($rows = mysqli_fetch_assoc($results)){
        echo $results['email'];
      }
      $password = $_POST['password'];
      $sqlu = "UPDATE users SET password=? where email=?;";

            
    $stmt = mysqli_stmt_init($db);

    if(!mysqli_stmt_prepare($stmt, $sqlu)){
      echo "There was an error!";
      exit();
    }else{
        $newhashpwd = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ss", $newhashpwd, $tokenEmail);
        mysqli_stmt_execute($stmt);

        $sqlr = "DELETE from pwdreset where pwdResetEmail=?;";
                $stmt = mysqli_stmt_init($db);
                if(!mysqli_stmt_prepare($stmt, $sqlr)){
                echo "There was an error!";
                exit();
                }else{
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    header('Location:login.php?newpwd=success');
                }


    }
     }
   }
  
  
}
}else{
    
}