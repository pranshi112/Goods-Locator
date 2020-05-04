
 <?php
   session_start();
$db = mysqli_connect("localhost", "root", "", "first_db");
$sqlCheck = "SELECT max(user_id) from users;";
    $resultss =mysqli_query($db,$sqlCheck);
$resultssCheck=mysqli_num_rows($resultss);
 if($resultssCheck>0){
     $row=mysqli_fetch_assoc($resultss);
      $id=1+$row['max(user_id)'];
     // $_SESSION['var2']=$id;
      //$ids=$_SESSION['var2'];
      
 }
 
?>
 
  <?php
   
  // print_r($file);
  if(isset($_POST['submit'])){
     /*if(isset($_POST['upload']) ){
    header("Location: test5.php?hold&name=$Shopname&address=$Shopaddress&contact=$contact&stock=$stock&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$dealsIn"); 
    */
    
    
     
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
               //header("Location:test5.php?upload=success");
            
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email =  mysqli_real_escape_string($db,$_POST['email']);
    $password =  mysqli_real_escape_string($db,$_POST['password']);
    $pass =  password_hash($password,PASSWORD_DEFAULT);
    $confirmPassword =  mysqli_real_escape_string($db,$_POST['cpassword']);
    $Shopname = mysqli_real_escape_string($db,$_POST['name']);
    $Shopaddress=  mysqli_real_escape_string($db,$_POST['address']);
    $city= mysqli_real_escape_string($db,$_POST['city']);
    $state =  mysqli_real_escape_string($db,$_POST['state']);
    // $dealer =  mysqli_real_escape_string($db,$_POST['register']);
    $dealsIn =  mysqli_real_escape_string($db,$_POST['item']);
    $contact =  mysqli_real_escape_string($db,$_POST['contact']);
    $stock= mysqli_real_escape_string($db,$_POST['stock']);
    $file = $_FILES['file'];
   if($file != true){
     
    header("Location: test5.php?form=id_not_uploaded&name=$Shopname&address=$Shopaddress&contact=$contact&stock=$stock&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$dealsIn");
     
    exit(); 
   }else{
    if(!$password == $confirmPassword){ 
      header("Location: test5.php?form=password_unmatched&name=$Shopname&address=$Shopaddress&contact=$contact&stock=$stock&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$dealsIn");
      
          exit(); 
    
    }else{
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: test5.php?form=invalid_email&name=$Shopname&address=$Shopaddress&contact=$contact&stock=$stock&state=$state&city=$city&username=$username&register=$dealer&item=$dealsIn");
          exit();

      }
       else{
        if(empty($Shopname) || empty($Shopaddress) ||empty($contact) ||empty($stock) || empty($state) || empty($city) 
        || empty($dealer) || empty($dealsIn) || empty($username) ||empty($email) ||empty($password)){
          header("Location: test5.php?form=empty&name=$Shopname&address=$Shopaddress&contact=$contact&stock=$stock&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$dealsIn");
          exit();

       }
    
      
        
       else{
           if(!preg_match("/^[a-zA-Z]*$/", $Shopname)){
             header("Location: test5.php?form=invalid_factory_name&address=$Shopaddress&contact=$contact&stock=$stock&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$dealsIn");
             exit();

           }
           //elseif(!preg_match("/^[a-zA-Z]*$/", $Shopaddress)){
            //header("Location: test5.php?form=invalid_address&name=$Shopname&contact=$contact&stock=$stock&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$dealsIn");
            //exit();
           //}
           elseif(!preg_match("/^[0-9]*$/", $contact)){
            header("Location: test5.php?form=invalid_contact&name=$Shopname&address=$Shopaddress&stock=$stock&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$dealsIn");
            exit();
           }
           elseif(!preg_match("/^[a-zA-Z0-9]*$/", $stock)){
            header("Location: test5.php?form=invalid_stock&name=$Shopname&contact=$contact&address=$Shopaddress&state=$state&city=$city&username=$username&email=$email&register=$dealer&item=$dealsIn");
            exit();
           }
           elseif(!preg_match("/^[a-zA-Z]*$/", $state)){
            header("Location: test5.php?form=invalid_state&name=$Shopname&contact=$contact&stock=$stock&address=$Shopaddress&city=$city&username=$username&email=$email&register=$dealer&item=$dealsIn");
            exit();
           }
           elseif(!preg_match("/^[a-zA-Z]*$/", $city)){
            header("Location: test5.php?form=invalid_city&name=$Shopname&contact=$contact&stock=$stock&state=$state&address=$Shopaddress&username=$username&email=$email&register=$dealer&item=$dealsIn");
            exit();
           }
           elseif(!preg_match("/^[a-zA-Z]*$/", $dealer)){
            header("Location: test5.php?form=invalid_dealer&name=$Shopname&contact=$contact&stock=$stock&state=$state&city=$city&username=$username&email=$email&address=$Shopaddress&item=$dealsIn");
            exit();
           }
           elseif(!preg_match("/^[a-zA-Z]*$/", $dealsIn)){
            header("Location: test5.php?form=invalid_item&name=$Shopname&contact=$contact&stock=$stock&state=$state&city=$city&username=$username&email=$email&register=$dealer&address=$Shopaddress");
            exit();
           }
           else{
            $sql = "INSERT INTO users(username, email, password, name, user_address, city, user_state, user_service,
            user_item, user_contact, user_stock) VALUE('$username', '$email', '$pass', '$Shopname', '$Shopaddress',
             '$city','$state', '$dealer','$dealsIn', '$contact', '$stock');";
            mysqli_query($db, $sql);
             header("Location: test5.php?form=success");
             exit();
           }
         }
       }
     }
   }
}else{
    echo "Your file size is out of limit!";
  }
}else{
echo "Their was an error while uploading the file!";
}
}
else{
echo "You cannot enter the file of this format!";
}
   }

   $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   if (strpos($fullUrl, "form=empty") == true){
        echo "You have not filled the entries!";
        exit();
   }
   elseif (strpos($fullUrl, "form=id_not_uploaded") == true){
    echo "Upload your national id please!";
    exit();
   }
   elseif (strpos($fullUrl, "form=password_unmatched") == true){
    echo "The 2 passwords do not match!";
    exit();
   }
   elseif (strpos($fullUrl, "form=invalid_email") == true){
    echo "Enter a valid email";
    exit();
   }
   elseif (strpos($fullUrl, "form=success") == true){
    echo "You are SIGNED UP!";
    exit();
   }
   elseif (strpos($fullUrl, "form=invalid_item") == true){
    echo "invalid characters in item name!";
    exit();
   }
   elseif (strpos($fullUrl, "form=invalid_dealer") == true){
    echo "invalid characters in dealer service!";
    exit();
   }
   elseif (strpos($fullUrl, "form=invalid_state") == true){
    echo "invalid characters in state!";
    exit();
   }
   elseif (strpos($fullUrl, "form=invalid_city") == true){
    echo "invalid characters in city!";
    exit();
   }
   elseif (strpos($fullUrl, "form=invalid_stock") == true){
    echo "invalid characters in stock!";
    exit();
   }
   elseif (strpos($fullUrl, "form=invalid_contact") == true){
    echo "invalid characters in contact no!";
    exit();
   }
   elseif (strpos($fullUrl, "form=invalid_address") == true){
    echo "invalid characters in address!";
    exit();
   }
   elseif (strpos($fullUrl, "form=invalid_factory_name") == true){
    echo "invalid characters in sitename of manfacturing/distribution!";
    exit();
   }

 ?>