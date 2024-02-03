<!-- connect file-->
<?php
include('includes/connect.php');
include('functions/common_fucntion.php');
session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfy Baby Clothing Store</title>
    <!--bootstarp Css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-liberty.css">
    <!--font -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!-- css file-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/all.css">

    <script src="script.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
  <style>
    body{
      overflow-x:hidden;
    }
    </style>
    <script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <!--nav-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a href=" index.php"><img src="./images/logo.png" alt="" class="logo" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: LKR <?php total_cart_price(); ?></a>
        </li>
        
      </ul>
      <form class="d-flex" action="../search_product.php" method="get">
  <div class="col-auto mt-3 px-0">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
  </div>
  <div class="col-auto mt-3 mr-0"> <!-- col-auto will take the minimum required space -->
    <input type="submit" value="Search" class="btn btn-outline-info" name="search_data_product">
  </div>
  <ul class="navbar-nav me-auto">
    
  
    <?php

if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
  <a class='nav-link text-secondary' href='#'> Welcome Guest </a>
</li>";
}else{
 echo "<li class='nav-item text-secondary'>
  <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
</li>";
}


    if(!isset($_SESSION['username'])){
       echo "<li class='nav-item text-secondary'>
       <a class='nav-link' href='./users_area/user_login.php'>Login</a>
     </li>";
    }else{
      echo "<li class='nav-item text-secondary'>
       <a class='nav-link' href='./users_area/logout.php'>Logout</a>
     </li>";
    }

    ?>

  </ul>
</form>
      
    </div>
  </div>
</nav>

<!-- calling cart function -->
<?php
cart();
?>
<!--second child comment for my own design -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link text-secondary" href="#"> Welcome Guest </a>
        </li>  
        <li class="nav-item text-secondary">
          <a class="nav-link" href="#">Login</a>
        </li>  
    </ul>
</nav> -->


<!-- New Navigation Open -->  

<section class="w3l-ecommerce-main mx-4">
        <!-- /products-->

                        
    <div class="row px-1">
      <div class="col-md-12 mx-auto">
    <!-- all products -->
      <div class="row">
                           
                                    

             <!-- row end-->
      </div>    
      <!-- column end -->
  </div>
    </section>


  <!-- New Navigation close -->


<!-- Old Nav start -->
<!--fourth child--->
<!-- <div class="row px-1">
   <div class="col-md-10">
     all products -->
      <!-- <div class="row">  -->
<!-- fetching products -->
      <?php
      //calling function
// getproducts();
// get_unique_categories();
// get_unique_brands();
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  
      ?>
        <!-- row end-->
      <!-- </div>     -->
      <!-- column end -->
  <!-- </div> -->
 <!-- Staring side navigation bar -->
 <!-- <div class="col-md-2 bg-secondary p-0">
     brands to be displayed-->
    <!-- <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4>
            </a>
        </li>  -->
<?php
// getbrands();
?>
    <!-- </ul> -->
    <!--categories to be displayed-->
    <!-- <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Categories</h4>
            </a>
        </li> -->
<?php
// getcategories();
?>   
    <!-- </ul>
    side nav-->
   <!-- </div>Ending side navigation bar -->
<!-- </div>  -->
<!--old Nav End -->



   <!--//inner-page-->
   <div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
    <!-- /contacts -->
    <!-- contact-form 2 -->
    <section class="w3l-contact-2 py-5" id="contact">
        <div class="container py-lg-4 py-md-3 py-2">
            <div class="title-content text-center">
                <h6 class="title-subw3hny mb-1">Get in touch</h6>
                <h3 class="title-w3l mb-5">Contact with our support <br>
                    during emergency!</h3>
            </div>

            <div class="contact-grids mt-5 pt-lg-3">
                <div class="contact-left">
                    <div class="row cont-details">
                        <div class="col-lg-4 col-md-6 cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fas fa-map-marker-alt"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Office Address:</h6>
                                <p>998 13h Street, Aniwatta 61466, Kandy, LK</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 cont-top margin-up ps-lg-5">
                            <div class="cont-left text-center">
                                <span class="fas fa-phone-alt"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Call for help :</h6>
                                <p><a href="tel:(081) 255 9998">(081) 255 9998</a></p>
                                <p><a href="tel:(081) 255 9998">(081) 255 9999</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="far fa-envelope"></span>
                            </div>
                            <div class="cont-right">
                                <h6>
                                    Mail us:</h6>
                                <p><a href="/cdn-cgi/l/email-protection#0b787e7b7b64797f4b666a626725686466" class="mail"><span class="__cf_email__" data-cfemail="d9aaaca9a9b6abad99b4b8b0b5f7bab6b4">ComfyBaby@gmail.com</span></a></p>
                                <!-- <p><a href="/cdn-cgi/l/email-protection#96f5f9f8e2f7f5e2d6fbf7fffab8f5f9fb" class="mail"><span class="__cf_email__" data-cfemail="0b6864657f6a687f4b666a626725686466">[email&#160;protected]</span></a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-right mt-lg-4">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input" required="">
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="">
                            <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Enter your Phone Number *" required="">
                            <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input" required="">
                        </div>
                        <div class="form-input">
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
                        </div>
                        <div class="submit-w3l-button text-lg-right">
                            <button class="btn btn-style btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map-iframe mt-5">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15830.246999155637!2d80.61884155!3d7.290598749999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae36886445162a9%3A0xb76bf09520c7826f!2sAnniewatta%2C%20Kandy!5e0!3m2!1sen!2slk!4v1702732536652!5m2!1sen!2slk" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- /contact-form-2 -->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
       <!--/w3l-footer-29-main-->
       <footer class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <h2>Special Offer All Branded Dresses are <br>Flat 50% Discount</h2>
                <div class="row footer-top-29 mt-md-5">
                   <div class="col-lg-3 col-md-6 footer-list-29 footer-3 pe-lg-5">
                        <h6 class="footer-title-29">USeful Links</h6>
                        <div class="footer-listw3-grids">
                            <ul class="footer-listw3">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">Blogs</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="#support">Support</a></li>
                                <!-- <li><a href="#news">News & Media</a></li>
                                <li><a href="#Careers">Careers</a></li> -->

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-list-29 footer-1 ps-lg-5 mt-lg-0 mt-md-5 mt-4">
                        <h6 class="footer-title-29">Information</h6>
                        <div class="footer-listw3-grids">
                            <ul class="footer-listw3">
                                <li><a href="assets/Documents/Terms and Conditions.pdf">Terms & Conditions</a>
                                    <!-- <a href="/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf">example</a> -->
                                <li><a href="assets/Documents/Delivery terms.pdf">Delivery Terms</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="assets/Documents/Returns Policy.pdf">Returns Policy</a></li>
                                <li><a href="assets/Documents/Privacy policy.pdf">Privacy Policy</a></li>
                                <li><a href="assets/Documents/FAQ.pdf">FAQ</a></li>
                                <!-- <li><a href="#shop">The Shop</a></li> -->

                            </ul>

                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-md-5 mt-4 pe-lg-5">
                        <h6 class="footer-title-29">Address</h6>
                        <div class="footer-listw3-grids">
                            <ul class="footer-listw3">
                                <li>Kandy, LK</li>
                                <li>998 13h Street,</li>
                                <li>Aniwatta 61466</li>
                                <li><a href="tel:(081) 255 9998">(081) 255 9998</a></li>
                                <li><a href="/cdn-cgi/l/email-protection#683b000718181123091a1c2805090104460b0705">ComfyBaby@gmail.com</a></li>
                                <!-- <li><a href="/cdn-cgi/l/email-protection#683b000718181123091a1c2805090104460b0705" class="mail"><span class="__cf_email__" data-cfemail="e8bb8087989891a3899a9ca885898184c68b8785">[email&#160;protected]</span></a></li> -->

                            </ul>

                        </div>
                    </div>

                    
                </div>
                <div>
                    <p class="copy-footer-29 col-lg-8">© 2023 All rights reserved | Designed by ComfyBaby <a href="" target="_blank"></a></p>
                    <h6 class="footer-title-29">Get In Touch</h6>
                        <div class="main-social-footer-29">
                            <a href="https://www.facebook.com/ComfyBabySL?mibextid=ZbWKwL" class="facebook"><span class="fab fa-facebook-f"></span></a>
                            <a href="https://wa.me/94766394323" class="whatsapp"><span class="fab fa-twitter"></span></a>
                            <a href="https://www.instagram.com/comfybaby_sl?igshid=OGQ5ZDc2ODk2ZA==" class="instagram"><span class="fab fa-instagram"></span></a>
                            <!-- <a href="#linkd" class="linkd"><span class="fab fa-linkedin-in"></span></a> -->
                        </div>
                </div>
                    
            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer>
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- cart-js -->
    <script src="assets/js/minicart.js"></script>
    <script>
        shopv.render();

        shopv.cart.on('shopv_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });

    </script>
    <!-- //cart-js -->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>



<!-- last child -->
<!-- include footer-->
<?php   include("./includes/footer.php")   ?>
    </div>


  <!--bootstarp js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  crossorigin="anonymous"></script>
</body>
</html>