<?php
  session_start();
  $db = mysqli_connect("localhost", "root", "", "first_db");
  //$_SESSION['id'] = 1;
  
  ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
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


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     <link rel="stylesheet" href="login.css">


<title>Document</title>
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

   <form action ='test2.php' method = 'post'>
   <?php
     echo '<div class="login-box">';
     echo '<h1>Login</h1>';

     echo '<div class="dropdown">';
     if(isset($_GET['register'])){
          $dealer = $_GET['register'];
          echo '<select id="down"  name="register" value="'.$dealer.'"><br><br>';
          }else{
         echo '<select id="down"  name="register"><br><br>';
          }
          echo '<option>--Select--</option>';
          echo '<option>User</option>';
          echo '<option>Volunteer</option>';
          echo '<option>Retailer/Producer</option>';
          echo '</select>';
          echo '</div>';

     echo '<div class="textbox">';
     echo '<i class="fa fa-user" aria-hidden="true"></i>';
     if(isset($_GET['email'])){
        $email = $_GET['email'];
        echo '<input type="email"  name="email"  placeholder="Email Address" value="'.$email.'"><br><br>';
    }else{
      echo '<input type="email"  name="email"  placeholder="Email Address"><br><br>';
    }
    echo '</div>';

    ?>

     <div class="textbox">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password"  name="password"  placeholder="Password"><br><br>
     </div>
    <!-- <input type="password"  name="cpassword"  placeholder="Confirm_Password"><br><br> -->

    <button class="btn" type = 'submit' name='submit'><a href="index.php">LOGIN</a></button> 
    
    

          <a href="forgot_password.php" id="first">Forgot password?</a>
          <br>

          <p>Don't have an account?<a href="test9.php" id="second">Create one!</a></p>
          </div>
     </form>



   <!-- SCRIPTS -->
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.sticky.js"></script>
   <script src="js/jquery.stellar.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/smoothscroll.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>

    
    <div style="font-size:0.8em; text-align:center;">
    <?php
     if(isset($_GET['newpwd'])){
       if($_GET['newpwd']=="success"){
         echo "password updated";
       }
     }
    ?>
    </div>
    </form>

  
   </body>
   </html>
  