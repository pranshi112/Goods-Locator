<?php
   session_start();
     $db = mysqli_connect("localhost", "root", "", "login");

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Goods Locator - News Page</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

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

                    <div class="col-md-4 col-sm-3">
                         <p>Welcome to Goods Locator</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-9 text-align-right">
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
                         <li><a href="index.php#top" class="smoothScroll">Home</a></li>
                         <li><a href="index.php#about" class="smoothScroll">About Us</a></li>
                         <li><a href="index.php#news" class="smoothScroll">News</a></li>
                         <li><a href="index.php#contact-info" class="smoothScroll">Contact</a></li>   
                    </ul>
               </div>

          </div>
     </section>

     <!--drop-down-box-->

     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/volunteer.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">

                         <form id="appointment-form" role="form" method="post" action="button2.php">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Current Volunteers</h2>
                              </div>
                    
                                   <div class="wow fadeInUp" data-wow-delay="0.8s">

                                        <div class="col-md-12 col-sm-12">
                                        
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

                                        <div class="col-md-12 col-sm-12">
                                        <br><br>
                                        <label for="select">State</label>
                                             <select class="form-control" name="states">
                                                  <option>--Select--</option>
                                                  <option>DELHI</option>
                                                  <option>MAHARASHTRA</option>
                                                  <option>KERALA</option>
                                             </select>
                                        </div>
                                        
                                        <div class="col-md-12 col-sm-12">
                                        <br><br>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Search</button><br><br><br><br>
                                        </div>
                                   </div>
                         </form>
                    </div>
               </div>
          </div>
     </section>
     <?php
   if(isset($_POST['submit'])){
    
    $state = mysqli_real_escape_string($db,$_POST['states']);
    $city = mysqli_real_escape_string($db,$_POST['city']);
    
      if($state!='NONE' && $city!='NONE') {
            $sql = ("SELECT * FROM users where user_state = '$state' AND user_city = '$city';");
            $results = mysqli_query($db,$sql);
            $resultsCheck = mysqli_num_rows($results);

            if($resultsCheck>0){
                echo "<font color=green  size='6pt'>Volunteers in $city, $state:</b>  <br><br></font>";
                
                while($row = mysqli_fetch_assoc($results)){
                    echo "<font size='3pt'><b>Name of Group:</b>  </font>";
                    echo $row['organization'] . "<br>";
                    echo "<font size='3pt'><b>Group Strength:</b>  </font>";
                    echo $row['strength'] . "<br>";
                    echo "<font size='3pt'><b>Registered or Not:</b>  </font>";
                    echo $row['registered'] . "<br>";
                    echo "<font size='3pt'><b>Address:</b>  </font>";
                    echo $row['user_address'] . "<br>";
                    echo "<font size='3pt'><b>City:</b>  </font>";
                    echo $row['user_city'] . "<br>";
                    echo "<font size='3pt'><b>State:</b>  </font>";
                    echo $row['user_state'] . "<br>";
                    echo "<font size='3pt'><b>Contact No:</b>  </font>";
                    echo $row['user_contact'] . "<br>";
                    echo "<font size='3pt'><b>Additional Information:</b>  </font>";
                    echo $row['people'] . "<br>";
                    echo "<br><br><br>";
                }
                 echo '<iframe src="https://www.google.com/maps/d/embed?mid=1Lq7w1LgFpeWGDbwi4-pmXat5nd1F0Lt6" width="640" height="480"></iframe>';
                
            } 
                
        } 
        else{
           echo "choose an option";
        }     
    }
?>




     




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
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/magnific-popup-options.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>





