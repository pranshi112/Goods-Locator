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
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>SignUp</title>
  </head>
  <body>



  <!DOCTYPE html>
<html lang="en">
<head>

     <title>Goods Locator</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     <link rel="stylesheet" href="signupVol.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to Goods Locator</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> +91-8449703408</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">yash.agarwal1214@gmail.com</a></span>
                         <span class="chat"><i class="fa fa-commenting-o" aria-hidden="true"></i>Chatroom</span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand"><p1>G</p1>oods Locator</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#contact-info" class="smoothScroll">Contact</a></li>
                         <li class="appointment-btn"><a href="login.html" style ="background: #bfe02a;border-radius: 6px;color: #ffffff;font-weight: 600;padding-top: 12px;padding-bottom: 12px;">Log In / Sign Up</a></li>
                    </ul>

               </div>

          </div>
     </section>

     <div class="login-box">
         <h1>Sign Up</h1>
        <div class="nav-wrapper">
            <div class="left-side">
                <div class="nav-link-wrapper active-nav-link">
                    <a href="test6.php">Volunteer</a>
                </div>
                <div class="nav-link-wrapper">
                    <a href="test9.php">User</a>
                </div>
                <div class="nav-link-wrapper">
                    <a href="test5.php">Retailer</a>
                </div>
            </div><br><br>

        </div>


   <!-- SCRIPTS -->
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.sticky.js"></script>
   <script src="js/jquery.stellar.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/smoothscroll.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>

  <form action ='test7.php' method = 'post'  enctype = "multipart/form-data">
  <?php

     echo '<div class="textbox">';
    if(isset($_GET['name'])){
        $name = $_GET['name'];
        echo '<input type="text"  name="name"  placeholder="Name of individual/organization" value="'.$name.'"><br><br>';
     } else{
       echo '<input type="text"  name="name"  placeholder="Name of individual/organization"><br><br>';
     }
     echo '</div>';

     echo '<div class="textbox5">';
     echo '<div class="dropdown">';
     echo '<label for="down">Category:</label>';
     if(isset($_GET['register'])){
     $dealer = $_GET['register'];
     echo '<select id="down"  name="register" value="'.$dealer.'"><br><br>';
     }else{
    echo '<select id="down"  name="register"><br><br>';
     }
     echo '<option>--Select--</option>';
     echo '<option>Individual</option>';
     echo '<option>Group</option>';
     echo '<option>Organisation</option>';
     echo '</select>';
     echo '</div>';
     echo '</div>';

     echo '<div class="textbox4">';
     echo '<label for="size" class="second">Size of Group/Organisation:</label><br>';
     if(isset($_GET['xyz'])){
     $add = $_GET['xyz'];
     echo '<input id="size" type="number" min="1"  name="xyz" value="'.$size.'"><br><br>';
     }else{
     echo '<input id="size" type="number" min="1" name="xyz"><br><br>';
     }
     echo '</div>';

     echo '<div class="textbox">';
     if(isset($_GET['email'])){
          $email = $_GET['email'];
          echo '<input type="email"  name="email"  placeholder="Email Address" value="'.$email.'"><br><br>';
      }else{
        echo '<input type="email"  name="email"  placeholder="Email Address"><br><br>';
      }
      echo '</div>';

      echo '<div class="textbox">';
      if(isset($_GET['contact'])){
          $contact = $_GET['contact'];
          echo '<input type="tel"  name="contact"  placeholder="Contact Number" value="'.$contact.'"><br><br>';
       }else{
         echo '<input type="tel"  name="contact"  placeholder="Contact Number"><br><br>';
      }
      echo '</div>';
      
      echo '<div class="textbox">';
     if(isset($_GET['address'])){
       $address = $_GET['address'];
       echo '<input type="text"  name="address"  placeholder="Address of Individual/Organization" value="'.$address.'"><br><br>';
    } else{
      echo '<input type="text"  name="address"  placeholder="Address of Individual/Organization"><br><br>';
    }
    echo '</div>';

    echo '<div class="textbox">';
    if(isset($_GET['city'])){
        $city = $_GET['city'];
        echo '<input type="text"  name="city"  placeholder="City" value="'.$city.'"><br><br>';
     }else{
       echo '<input type="text"  name="city"  placeholder="City"><br><br>';
    }
    echo '</div>';

    echo '<div class="textbox">';
    if(isset($_GET['state'])){
        $state = $_GET['state'];
        echo '<input type="text"  name="state"  placeholder="State" value="'.$state.'"><br><br>';
     }else{
       echo '<input type="text"  name="state"  placeholder="State"><br><br>';
    }
    echo '</div>'; 

     echo "<div class='textbox2'>";
     echo '<label for="id">Upload a National ID (Ex- Aadhar Card, Organisation documents etc.):</label>';
     echo '<input id="id" type="file" name="file" required>';
     echo '</div>';
    
     echo '<div class="textbox3">';
     echo '<label>Additional details(if any):</label>';
    if(isset($_GET['add'])){
      $add = $_GET['add'];
      echo '<textarea rows="6" cols="80"  name="add" value="'.$add.'"></textarea><br><br>';
   }else{
     echo '<textarea rows="6" cols="80"  name="add"></textarea><br><br>';
   }
   echo '</div>';

   echo '<hr>';
   
    echo '<div class="textbox">';
    if(isset($_GET['username'])){
      $username = $_GET['username'];
      echo '<input type="text"  name="username"  placeholder="Username" value="'.$username.'"><br><br>';
   }else{
     echo '<input type="text"  name="username"  placeholder="Username"><br><br>';
      }
      echo '</div>';

     ?>
    <!-- <input type="file"  name="file"><br><br> -->
    <div class="textbox"> 
     <input type="password"  name="password"  placeholder="Password"><br><br>
     </div>
     <div class="textbox">
          <input type="password"  name="cpassword"  placeholder="Confirm_Password"><br><br>
     </div>
     
     <button class="btn" type = 'submit' name='submit' value='submit'>SIGN UP</button>  
     </form>
  
      
  <?php

  


     
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

       echo "<div class='error'>";
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
       elseif (strpos($fullUrl, "form=invalid_xyz") == true){
        echo "invalid characters in xyz name!";
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
       elseif (strpos($fullUrl, "form=invalid_add") == true){
        echo "invalid characters in add!";
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
       echo '</div>';
  
      
?>

      
</body>
</html>