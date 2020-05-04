<?php
  session_start();
  $db = mysqli_connect("localhost", "root", "", "first_db");
  $sqlCheck = "SELECT max(user_id) from users;";
    $resultss =mysqli_query($db,$sqlCheck);
$resultssCheck=mysqli_num_rows($resultss);
 if($resultssCheck>0){
     $row=mysqli_fetch_assoc($resultss);
      $id=1+$row['max(user_id)'];
     }
  ?>

<?php
if(isset($_POST['submit'])){
$file = $_FILES['file'];
     $filename = $file['name'];
     $fileType = $file['type'];
     $fileSize = $file['size'];
     $fileTmpName = $file['tmp_name'];
     $fileError = $file['error'];

     $fileExt = explode('.', $filename);                            
     $fileActualExt = strtolower(end($fileExt));            
     $allowed  = array('jpg', 'jpeg', 'png','pdf');
     if(in_array($fileActualExt, $allowed)){        
         if($fileError === 0){
            if($fileSize<10000000){                 

              $fileNewName = "profile".$id.".".$fileActualExt;

  
               $fileDestination = "fonts/".$fileNewName;
               move_uploaded_file($fileTmpName, $fileDestination);
               
          }else{
               echo "Your file size is out of limit!";
             }
          }else{}
          echo "Their was an error while uploading the file!";
      }
      else{
        echo "You cannot enter the file of this format!";
      }
    
  
    
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email =  mysqli_real_escape_string($db,$_POST['email']);
    $password =  mysqli_real_escape_string($db,$_POST['password']);
    $pass =  password_hash($password,PASSWORD_DEFAULT);
    $confirmPassword =  mysqli_real_escape_string($db,$_POST['cpassword']);
    $name = mysqli_real_escape_string($db,$_POST['name']);
    $address=  mysqli_real_escape_string($db,$_POST['address']);
    $city= mysqli_real_escape_string($db,$_POST['city']);
    $state =  mysqli_real_escape_string($db,$_POST['state']);
    $dealer =  mysqli_real_escape_string($db,$_POST['register']);
    $size =  mysqli_real_escape_string($db,$_POST['item']);
    $contact =  mysqli_real_escape_string($db,$_POST['contact']);
    $add= mysqli_real_escape_string($db,$_POST['add']);

   if($file!=true){
     
    header("Location: test6.php?form=id_not_uploaded&name=$name&address=$address&contact=$contact&add=$add&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$size");
     
    exit(); 
   }else{
    if(!$password == $confirmPassword){ 
      header("Location: test6.php?form=password_unmatched&name=$name&address=$address&contact=$contact&add=$add&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$size");
      
          exit(); 
    
    }else{
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: test6.php?form=invalid_email&name=$name&address=$address&contact=$contact&add=$add&state=$state&city=$city&username=$username&register=$dealer&item=$size");
          exit();

      }
       else{
        if(empty($name) || empty($address) ||empty($contact) ||empty($add) || empty($state) || empty($city) 
        || empty($dealer) || empty($size) || empty($username) ||empty($email) ||empty($password)){
          header("Location: test6.php?form=empty&name=$name&address=$address&contact=$contact&add=$add&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$size");
          exit();

       }
    
      
        
       else{
           if(!preg_match("/^[a-zA-Z]*$/", $name)){
             header("Location: test6.php?form=invalid_factory_name&address=$address&contact=$contact&add=$add&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$size");
             exit();

           }
           elseif(!preg_match("/^[a-zA-Z0-9]*$/", $address)){
            header("Location: test6.php?form=invalid_address&name=$name&contact=$contact&add=$add&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$size");
            exit();
           }
           elseif(!preg_match("/^[0-9]*$/", $contact)){
            header("Location: test6.php?form=invalid_contact&name=$name&address=$address&add=$add&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$size");
            exit();
           }
           elseif(!preg_match("/^[a-zA-Z0-9]*$/", $add)){
            header("Location: test6.php?form=invalid_add&name=$name&contact=$contact&address=$address&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$size");
            exit();
           }
           elseif(!preg_match("/^[a-zA-Z]*$/", $state)){
            header("Location: test6.php?form=invalid_state&name=$name&contact=$contact&add=$add&address=$address&city=$city&username=$username&email=$email&register=$dealer&item=$size");
            exit();
           }
           elseif(!preg_match("/^[a-zA-Z]*$/", $city)){
            header("Location: test6.php?form=invalid_city&name=$name&contact=$contact&add=$add&state=$state&address=$address&username=$username&email=$email&register=$dealer&item=$size");
            exit();
           }
           elseif(!preg_match("/^[a-zA-Z]*$/", $dealer)){
            header("Location: test6.php?form=invalid_dealer&name=$name&contact=$contact&add=$add&state=$state&city=$city&username=$username&email=$email&address=$address&item=$size");
            exit();
           }
           elseif(!preg_match("/^[a-zA-Z0-9]*$/", $size)){
            header("Location: test6.php?form=invalid_item&name=$name&contact=$contact&add=$add&state=$state&city=$city&username=$username&email=$email&register=$dealer&address=$address");
            exit();
           }
           else{
            $sql = "INSERT INTO users(username, email, password, name, user_address, city, user_state, user_service,
            user_item, user_contact, user_stock) VALUE('$username', '$email', '$pass', '$name', '$address',
             '$city','$state', '$dealer','$size', '$contact', '$add');";
            mysqli_query($db, $sql);
             header("Location: test6.php?form=success");
             exit();
           }
         }
       }
     }
   }
}