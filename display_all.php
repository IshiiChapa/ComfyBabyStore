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
          <a class="nav-link active" href="display_all.php">Products</a>
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

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Welcome to ComfyBaby Online Store</h3>
    <p class="text-center">Feel the real world shopping expirience with us</p>
</div>

<!--fourth child--->
<!-- <div class="row px-1">
   <div class="col-md-10">
     all products -->
      <!-- <div class="row"> --> 
<!-- fetching products -->
      <?php
      //calling function
//       get_all_products();
// get_unique_categories();
// get_unique_brands();
      ?>
       
        <!-- row end-->
      <!-- </div>     -->
      <!-- column end -->
  <!-- </div> -->

  <!-- New Navigation Open -->  

   <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny w3l-ecommerce-main-inn py-5">
            <div class="container py-lg-5">
                <div class="ecommerce-grids row">
                  <!--fetching all products -->


                    <div class="ecommerce-left-hny col-lg-4">
                        <!--/ecommerce-left-hny-->
                        <aside class="pe-lg-4">
                            <div class="sider-bar">
                                <!-- /Gallery-imgs -->

                                <div class="single-gd mb-5">
                                    <h4>Product Brands</h4>
                                    <ul class="list-group single">
                                    <?php
                                        getbrands();
                                    ?>
                                       
                                    </ul>

                                    
                                </div>
                                <div class="single-gd mb-5">
                                    <h4>Product Categories</h4>
                                    <ul class="list-group single">
                                    <?php
                                        getcategories();
                                    ?>
                                       
                                    </ul>

                                    
                                </div>
                               

                                <div class="single-gd mb-5">
                                    <h4>Discount </h4>
                                    <div classes="box-hny">
                                        <label class="containerhny-checkbox">15% or More
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="containerhny-checkbox">20% or More
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="containerhny-checkbox">35% or More
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="containerhny-checkbox">55% or More
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="containerhny-checkbox">65% or More
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="containerhny-checkbox">75% or More
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>

                                </div>

                                <div class="single-gd left-side mb-5">
                                    <h4>Customer Ratings</h4>
                                    <ul class="ratingshyny">
                                        <li>
                                            <a href="#">
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span>5.0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span>4.0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-o" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span>3.5</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span>3.0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span>2.5</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                               
                            </div>
                        </aside>
                        <!--//ecommerce-left-hny-->
                    </div>
                    <!-- /row-->
                    <div class="ecommerce-right-hny col-lg-8">
                        <div class="row ecomhny-topbar">
                            <div class="col-6 ecomhny-result">
                                <h4 class="ecomhny-result-count"> Showing all 9 Results</h4>
                            </div>
                            <div class="col-6 ecomhny-topbar-ordering">

                                <div class="ecom-ordering-select d-flex">
                                    <span class="fa fa-angle-down" aria-hidden="true"></span>
                                    <select>
                                        <option value="menu_order" selected="selected">Default Sorting</option>
                                        <option value="popularity">Sort by Popularity</option>
                                        <option value="rating">Sort by Average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by Price: low to high</option>
                                        <option value="price-desc">Sort by Price: high to low</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <section>
                        <div class="ecom-products-grids row">
                           
                                    
                          <?php 
                          get_all_products();
                          get_unique_categories();
                          get_unique_brands();
                                ?>
           
                                </div>
                     
                        <div class="pagination">
                            <ul>
                                <li class="prev"><a href="#page-number"><span class="fa fa-angle-double-left"></span></a></li>
                                <li><a href="#page-number" class="active">1</a></li>
                                <li><a href="#page-number">2</a></li>
                                <li><a href="#page-number">3</a></li>

                                <li class="next"><a href="#page-number"><span class="fa fa-angle-double-right"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>













  <!-- New Navigation close -->

  <!-- old nav open -->
 <!-- <div class="col-md-2 bg-secondary p-0">
    brands to be displayed-->
    <!-- <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Delivery Brands</h4>
            </a>
        </li> -->
    <?php
  //  getbrands();
     ?>
    <!-- </ul>
    categories to be displayed-->
    <!-- <ul class="navbar-nav me-auto text-center"> -->
        <!-- <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Categories
                </h4> -->
            <!-- </a>
        </li> -->
    <?php
    // getcategories();
    ?>    
    <!-- </ul>
    side nav-->
   <!-- </div>  -->
   <!-- old nav close -->

<!-- </div> -->



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