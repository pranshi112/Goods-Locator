<?php
   session_start();


   
   $db = mysqli_connect("localhost", "root", "", "login");
   $conn = mysqli_connect("localhost", "root", "", "first_db");
?>

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


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

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
                         <span class="chat"><i class="fa fa-commenting-o" aria-hidden="true"></i><a href="chat/index.php">Chatroom</a></span>
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
                         <li class="appointment-btn"><a href="test3.php" style ="background: #bfe02a;border-radius: 6px;color: #ffffff;font-weight: 600;padding-top: 12px;padding-bottom: 12px;">Log In / Sign Up</a></li>
                         <li class="appointment-btn"><select name="Username">
                              <option value="">Username</option>
                              <option value="">Edit</option>
                              <option value="">Out</option>
                              </select>
                         </li>
                    </ul>
                    
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>We are here to help you</h3>
                                             <h1>Stay Home Stay Safe</h1>
                                             <a href="#about" class="section-btn btn btn-default smoothScroll">Know more about us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-sixth">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10"> 
                                             <h3>Contact the </h3>
                                             <h1>Volunteers</h1>
                                             <a href="chat/index.php" class="section-btn btn btn-default smoothScroll">Go to Chatroom</a>                                                                                       
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Protect yourself with</h3> 
                                             <h1>Masks</h1>                                            
                                        </div>
                                   </div>
                              </div>

                              <!-- <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10"> 
                                             <h3>Test yourself with</h3>
                                             <h1>Medical Kits</h1>                                                                                       
                                        </div>
                                   </div>
                              </div> -->

                              <div class="item item-fourth">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Feed yourself with</h3> 
                                             <h1>Groceries</h1>                                                                                        
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-fifth">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10"> 
                                             <!-- <h1>...and many more!</h1>
                                             <h1>Medical Kits</h1>                                                                                        -->
                                        </div>
                                   </div>
                              </div>

                              
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <p2>G</p2>oods Locator</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>We are here to keep you updated with the locations manufacturing or selling the essentials in
                                        this period of pandemic outbreak.
                                   </p>
                                   <p>Find the nearby services providing masks, medical kits and grocery items and fulfill your basic 
                                        requirements.
                                   </p>
                              </div>

                                   <div class="wrapper"> 
                                        <div class="app">                                       
                                             <button type="button"><a href="button.php">Find services</a></button>
                                   
                                        </div>
                                   </div>

                          <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p> <br><br>If you want the goods to be delivered to you, <a href="test9.php"><strong>Sign Up here</strong></a> .
                              </p>
                         </div>
                         

                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p> <br><br>We also provide an opportunity to citizens to volunteer for the distribution of goods to
                                   other citizens.
                              </p>
                         </div>

                         <div class="wrapper"> 
                              <div class="app">                                       
                                   <button type="button"><a href="test6.php">Apply for Volunteering</a></button>              
                              </div>
                         </div>

                         <div class="wrapper"> 
                              <div class="app">                                       
                                   <br><button type="button"><a href="button2.php">Current Volunteers</a></button>              
                              </div>
                         </div>

                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p> <br><br>Retailers and small-scale Producers can update their information regularly, regarding stock availability,
                                    making it easy for the citizens to reach them.
                              </p>
                         </div>

                         <div class="wrapper"> 
                              <div class="app">                                       
                                   <button type="button"><a href="test3.php">Update Information</a></button>
                         
                              </div>
                         </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest News</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.html">
                                   <img src="images/odisha.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>May 3, 2020</span>
                                   <h3><a href="news-detail.html">Odisha</a></h3>
                                   <p>Odisha airlifts 4,000 Covid-19 test kits, reagents, VTM from Mumbai.</p>
                                   <div class="author">
                                        <img src="images/author.png" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>India Today</h5>
                                             <p>Media Conglomerate</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail1.html">
                                   <img src="images/hydroxy.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>May 4, 2020</span>
                                   <h3><a href="news-detail1.html">Hydroxychloroquine</a></h3>
                                   <p>There is ample capacity in Himachal Pradesh to produce this drug.</p>
                                   <div class="author">
                                        <img src="images/tribune.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>The Tribune</h5>
                                             <p>English daily</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail2.html">
                                   <img src="images/mask22.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>May 3, 2020</span>
                                   <h3><a href="news-detail2.html">Mask Shortage</a></h3>
                                   <p>Rise of corona cases sees mask shortage in Hyderabad.</p>
                                   <div class="author">
                                        <img src="images/logo.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Telangana Today</h5>
                                             <p>English language newspaper</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- MAKE AN APPOINTMENT -->
     <!-- <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/volunteer.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                        <!-- <form id="appointment-form" role="form" method="post" action="index.php">

                              <!-- SECTION TITLE -->
                              <!-- <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Apply for Volunteering</h2>
                              </div>
                              
                              <div class="wow fadeInUp" data-wow-delay="0.8s">

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Group Strength</label>
                                        <select class="form-control" name="strength">
                                             <option>Individual</option>
                                             <option>Group</option>
                                             <option>Organisation</option>
                                        </select>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label> -->
                                        <!-- <input type="text" class="form-control" id="name" name="organization" placeholder="Name of your Group">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Your Address">
                                   </div>

                                   

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Is your group legally registered?</label>
                                        <select class="form-control" name="registered">
                                             <option>No</option>
                                             <option>Yes</option>
                                        </select>
                                   </div> -->

                                   <!-- <div class="col-md-6 col-sm-6">
                                        <label for="select">City</label>
                                        <select class="form-control" name="city">
                                             <option>--Select--</option>
                                             <option>Delhi</option>
                                             <option>Kochi</option>
                                             <option>Thiruvananthpuram</option>
                                             <option>Pune</option>
                                             <option>Solapur</option>
                                        </select>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">State</label>
                                        <select class="form-control" name="states">
                                             <option>--Select--</option>
                                             <option>DELHI</option>
                                             <option>MAHARASHTRA</option>
                                             <option>KERALA</option>
                                        </select>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="contact" placeholder="Phone">
                                        <label for="Message">Additional Information</label>
                                        <textarea class="form-control" rows="3" id="message" name="people" placeholder="Approximation of number of people in your group"></textarea>                                      
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>
                                   </div>
                              </div>
                              <?php
//    if(isset($_POST['submit'])) { -->
       
//       $organization = mysqli_real_escape_string($db,$_POST['organization']);
//       $strength = mysqli_real_escape_string($db,$_POST['strength']);
//       $registered = mysqli_real_escape_string($db,$_POST['registered']);
//       $address = mysqli_real_escape_string($db,$_POST['address']);
//       $city = mysqli_real_escape_string($db,$_POST['city']);
//       $state = mysqli_real_escape_string($db,$_POST['states']);
//       $contact = mysqli_real_escape_string($db,$_POST['contact']);
//       $people = mysqli_real_escape_string($db,$_POST['people']);
      

//       if($city!='--Select--' && $state!='--Select--') {
//          $sql = "INSERT INTO users(strength, organization, registered, user_address, user_city, user_state, user_contact, people)
//                    VALUES ('$strength', '$organization', '$registered','$address', '$city', '$state','$contact','$people');";
//          mysqli_query($db,$sql);
//          echo "<h5 align=center>Thank You for Registering!</h5>";
         
//       }
         
//    }
// ?>
                        </form>
                    </div>

               </div>
          </div>
     </section>

     <!-- UPDATE INFO
     <section id="info" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/info.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <!-- <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <!-- <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Update Information</h2>
                              </div>
                              
                              <div class="wow fadeInUp" data-wow-delay="0.8s">

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Position</label>
                                        <select class="form-control" name="service">
                                             <option>--Select--</option>
                                             <option>Manufacturer</option>
                                             <option>Distributor</option>
                                             <option>Retailer</option>
                                        </select>
                                   </div>

                                   <div class="col-md-6 col-sm-6"> -->
                                        <!-- <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="factories" placeholder="Name of your Firm"> -->
                                   <!-- </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address of the Firm">
                                   </div>

                                   

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Product available</label>
                                        <select class="form-control" name="product"> -->
                                             <!-- <option>--Select--</option>
                                             <option>Masks</option>
                                             <option>Test Kit</option>
                                             <option>Groceries</option>
                                        </select>
                                   </div>

                                    --> 

                                   <!-- <div class="col-md-6 col-sm-6">
                                        <label for="select">City</label>
                                        <select class="form-control" name="city">
                                             <option>--Select--</option>
                                             <option>Delhi</option>
                                             <option>Kochi</option>
                                             <option>Thiruvananthpuram</option>
                                             <option>Pune</option>
                                             <option>Solapur</option> -->
                                        <!-- </select>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">State</label> -->
                                        <!-- <select class="form-control" name="states">
                                             <option>--Select--</option>
                                             <option>DELHI</option>
                                             <option>MAHARASHTRA</option>
                                             <option>KERALA</option>
                                        </select>
                                   </div> --> 

                                   <!-- <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="contact" placeholder="Phone">
                                        <label for="Message">Stock Available</label>
                                        <textarea class="form-control" rows="5" id="message" name="stock" placeholder="Approximate quantity"></textarea>                                      
                                        <button type="submit" class="form-control" id="cf-submit" name="register_btn">Submit</button>
                                   </div>
                              </div> -->
                               <!-- <?php 
//    if(isset($_POST['register_btn'])) {
       
//       $factories = mysqli_real_escape_string($conn,$_POST['factories']);
//       $address = mysqli_real_escape_string($conn,$_POST['address']);
//       $state = mysqli_real_escape_string($conn,$_POST['states']);
//       $contact = mysqli_real_escape_string($conn,$_POST['contact']);
     //  $item = mysqli_real_escape_string($conn,$_POST['product']);
     //  $service = mysqli_real_escape_string($conn,$_POST['service']);
     //  $stock = mysqli_real_escape_string($conn,$_POST['stock']); -->

     //  if($state!='NONE' && $item!='NONE') {
     //     $sql = "INSERT INTO users(factories, user_address, user_state, user_contact, user_item, user_service, user_stock)
     //               VALUES ('$factories','$address', '$state', '$contact','$item','$service', '$stock');";
     //     mysqli_query($conn,$sql);
     //     echo "<h5 align=center>Thank You for Registering!</h5>";
         
//       }
         
//    }
// ?>

                        </form>
                    </div>

               </div>
          </div>
     </section> -->



     <!-- GOOGLE MAP -->
     <!-- <section id="google-map"> -->
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> -->
     <!-- </section>            -->


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>For any queries, contact us!</p>

                              <div id="contact-info">
                                   <p><i class="fa fa-phone"></i> +91-8449703408</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">yash.agarwal1214@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="news-detail1.html"><img src="images/hydroxy.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="news-detail1.html"><h5>Hydroxychloroquine</h5></a>
                                        <span>May 4, 2020</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="news-detail2.html"><img src="images/mask22.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="news-detail2.html"><h5>Mask Shortage</h5></a>
                                        <span>May 3, 2020</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Feedback</h4>
                                   <p>We value your feedbacks. Write us here!</p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 Goods Locator</p>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>