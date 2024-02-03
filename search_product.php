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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-bottom-none" href="#">Total Price: LKR <?php total_cart_price(); ?></a>
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

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Welcome to ComfyBaby Online Store</h3>
    <p class="text-center">Feel the real world shopping expirience with us</p>
</div>


<!-- New Navigation Open -->  

<section class="w3l-ecommerce-main mx-4">
        <!-- /products-->                  
    <div class="row px-1">
      <div class="col-md-12 mx-auto">
    <!-- all products -->
      <div class="row">
                                                            
<?php 
search_product();
get_unique_categories();
get_unique_brands();
?>
             <!-- row end-->
      </div>    
      <!-- column end -->
  </div>
    </section>


  <!-- New Navigation close -->



  <!-- old Nav Start -->
<!-- fourth child-
<div class="row px-1">
   <div class="col-md-10">
     all products -->
      <!-- <div class="row"> -->
<!-- fetching products -->
      <?php
      //calling function
//       search_product();
// get_unique_categories();
// get_unique_brands();
      ?> 
        <!-- row end-->
      <!-- </div>     -->
      <!-- column end -->
  <!-- </div> -->

   <!-- <div class="col-md-2 bg-secondary p-0"> -->
    <!-- brands to be displayed-->
    <!-- <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Delivery Brands
                </h4> -->
            <!-- </a>
        </li> -->
<?php
// getbrands();
?>
    <!-- </ul>
    categories to be displayed-->
    <!-- <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Categories
                </h4>
            </a>
        </li> --> 
<?php
//getcategories();
?>
<!--        
    </ul>
    side nav-->  
   <!-- </div>
</div>  -->
<!--old nav end -->



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