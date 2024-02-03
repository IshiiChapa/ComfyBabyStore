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
.btn1{
    width: 30px;
    height: 30px;
    border-radius: 3px;
    border: 1px solid #E8E8E8;
    background-color: #FFFFFF;
    color: black;
    cursor: pointer;
    font-weight: bold;
    font-size: 15px;
}
.btn-decrement:hover{
    background-color: #edebe4;
}
.btn-increment:hover{
    background-color: #edebe4;
}
.btn-input{
    width: 30px;
    height: 30px;
    border-radius: 3px;
    border: 1px solid #E8E8E8;
    background-color: #edebe4;
    font-weight: 600;
    text-align: center;
}
    </style>

<script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <!--nav-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
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
              
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
  <div class="col-auto mt-3">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
  </div>
  <div class="col-auto mt-3"> <!-- col-auto will take the minimum required space -->
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
       <a class='nav-link' href='logout.php'>Logout</a>
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

<!-- third child -->

<section class="w3free-ship text-center py-md-4 py-3">
  <h2>"Free Shipping For You Till Midnight"
    <i class="fas fa-shipping-fast ms-lg-3">
</i>
  </h2>
</section>

</div>

<!-- fourth child table -->
<div style="margin: 8px auto; display: block; text-align:center;">
</div>
<section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-1">
            <div class="container py-lg-1">
                <!-- about -->
                <div class="ecom-contenthny-w3lcheckout privacy">
                    <!-- <h3>Chec<span>kout</span></h3>
                    <div class="checkout-right">
                        <p class="mb-5">Your shopping cart contains: <span><?php echo $result_count?> Products</span></p> -->
                        <form action="" method="post">
                        <table class="timetable_sub">
                           
                                <!-- php code to display dynamic data -->
                                <?php
                                global $con;
                                $get_ip_add = getIPAddress();  
                                $total_price=0;
                                $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                                $result=mysqli_query($con,$cart_query);
                                $result_count=mysqli_num_rows($result);
                                if($result_count>0){
                                    echo " 
                                    <h3>Chec<span>kout</span></h3>
                                    <div class='checkout-right'>
                                    <p class='mb-5'>Your shopping cart contains: <span>$result_count Products</span></p>
                                    <thead>
                                    <tr>
                                        <th>SL No.</th>
                                        <th>Product Name</th>
                                        <th>Product</th>
                                        <th>Qty</th>
                                        <th>Price (LKR) </th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>";   
                                while($row=mysqli_fetch_array($result)){
                                  $product_id=$row['product_id'];
                                  $select_products="Select * from `products` where product_id='$product_id'";
                                  $result_products=mysqli_query($con,$select_products);
                                  while($row_product_price=mysqli_fetch_array($result_products)){
                                    $product_price=array($row_product_price['product_price']);
                                    $price_table=$row_product_price['product_price'];
                                    $product_title=$row_product_price['product_title'];
                                    $product_image1=$row_product_price['product_image1'];
                                    $product_values=array_sum($product_price);
                                    $total_price+=$product_values;
                                
                                ?>
                                
                                
                                <tr class="rem1">
                                    <td class="invert">1</td>
                                    <td class="invert"><?php echo $product_title ?></td>
                                    <td class="invert-image"><a href="product-single.html">
                                            <img src="./admin_area/product_images/<?php echo $product_image1 ?>" 
											class="img-fluid radius-image" alt=""></a></td>
                                    <td class="invert">
                                      <div class="product-container">               
                                           <div class="btn">
                                               <!-- <div><button class="btn1 btn-decrement mb-2">-</button></div> -->
                                                <input type="text" name="qty" class="btn-input">
                                                <!-- <div><button class="btn1 btn-increment mt-2 ">+</button> &nbsp;</div> -->
                                                <button type="submit" value="Update Cart" class="btn" name="update_cart"><i class="fa fa-check-circle" style="color:green"></i></button>
                                              
                                            </div>
                                           
                                       </div> 
                                    </td>
                                    <?php
                                     $get_ip_add = getIPAddress();  
                                     if(isset($_POST['update_cart'])){
                                        $quantities=$_POST['qty'];
                                        $update_cart="update `cart_details` set quantity=$quantities where 
                                        ip_address='$get_ip_add'";
                                        $result_products_quantity=mysqli_query($con,$update_cart);
                                        $total_price=$total_price*$quantities;
                                     }
                                    ?>
                                   <td class="invert"> LKR <?php echo $price_table ?>
                                   </td>
                                   
                                    <td class="invert">
                                        <div class="rem">
                                        <input class="form-check-input" type="checkbox" name="removeitem[]" value="<?php echo 
                                        $product_id ?>" >
                                            <button type="submit" class="btn" value="" name="remove_cart"><i class="far fa-window-close" style="font-size:30px;color:red"></i></button>
                                        </div>

                                    </td>
                                </tr>
                                
<?php }}}
else{
    echo "
    <h2 class='text-center text-danger'> Your Comfy Baby Cart is empty </h2>
    <img src='./admin_area/product_images/cart-emty.gif' class='rounded mx-auto d-block'  alt='gif'>";
   
}
?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row checkout-left mt-5">
                    <?php
                                global $con;
                                $get_ip_add = getIPAddress();  
                                $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                                $result=mysqli_query($con,$cart_query);
                                $result_count=mysqli_num_rows($result);
                                if($result_count>0){
                                    echo "<div class='col-md-4 checkout-left-basket'>
                                    <a class='btn btn-style btn-primary' href='index.php'>Continue To Basket </a>
                                    <ul>
                                        <li>Product1 <i>-</i> <span>$599.00 </span></li>
                                        <li>Product2 <i>-</i> <span>$899.00 </span></li>
                                        <li>Product3 <i>-</i> <span>$799.00 </span></li>
                                        <li>Total Service Charges <i>-</i> <span>$10.00</span></li>
                                        <li>Sub Total <i>-</i> <span>LKR $total_price </span></li>
                                    </ul>
                                </div>

                                <div class='col-md-8 address_form_agile ps-lg-5'>
                                <h4>Add a new Details</h4>
                                <form action='payment.html' method='post' class='creditly-card-form agileinfo_form mt-4'>
                                    <section class='creditly-wrapper wthree, w3_agileits_wrapper'>
                                        <div class='information-wrapper'>
                                            <div class='first-row form-group'>
                                                <div class='controls'>
    
                                                    <input class='billing-address-name form-control' type='text' name='name' placeholder='Full name'>
                                                </div>
                                                <div class='w3_agileits_card_number_grids'>
                                                    <div class='w3_agileits_card_number_grid_left'>
                                                        <div class='controls'>
    
                                                            <input class='form-control' type='text' placeholder='Mobile number'>
                                                        </div>
                                                    </div>
                                                    <div class='w3_agileits_card_number_grid_right'>
                                                        <div class='controls'>
    
                                                            <input class='form-control' type='text' placeholder='Landmark'>
                                                        </div>
                                                    </div>
                                                    <div class='clear'> </div>
                                                </div>
                                                <div class='controls'>
    
                                                    <input class='form-control' type='text' placeholder='Town/City'>
                                                </div>
                                                <div class='controls'>
    
                                                    <select class='form-control option-w3ls'>
                                                        <option>Office</option>
                                                        <option>Home</option>
                                                        <option>Commercial</option>
    
                                                    </select>
                                                </div>
                                            </div>
                                            <button class='submit check_out btn btn-style btn-primary'>Delivery to this Address</button>
                                        </div>
                                    </section>
                                </form>
                                <div class='checkout-right-basket'>
                                    <a class='btn btn-style btn-primary' href='./users_area/checkout.php'>Make a Payment <i class='fas fa-arrow-right ms-lg-3 ms-2'></i></a>
                                </div>
                            </div>";
                                }else{
                                    echo "
                                    <div class='col-md-4 checkout-left-basket'>
                                    <a class='btn btn-style btn-primary' href='index.php'>Continue To Basket </a>
                                    </div>";
                                }
                    ?>
                        
                    </form>

<!-- function to remove item -->
<?php
function remove_cart_item(){
    global $con;
    if(isset($_POST['remove_cart'])){
        foreach($_POST['removeitem'] as $remove_id){
            echo $remove_id;
            $delete_query="Delete from `cart_details` where product_id=$remove_id";
            $run_delete=mysqli_query($con,$delete_query);
            if($run_delete){
                echo "<script>window.open('cart.php','_self')</script>";
            }
        }
    }

}
echo $remove_item=remove_cart_item();
?>



                       <!-- make a payment  -->
                    </div>
                </div>
                <!-- //about -->
            </div>
        </div>
    </section>

<!-- last child -->
<!-- include footer-->
<?php   include("./includes/footer.php")   ?>
    </div>



  <!--bootstarp js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  crossorigin="anonymous"></script>
 <!-- Template JavaScript -->
 <script src="./js/quantity.js"></script>
 <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/theme-change.js"></script>
    <!-- js -->
    <script src="./js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!--quantity-->
    <script>
        $('.value-plus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) + 1;
            divUpd.text(newVal);
        });

        $('.value-minus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) - 1;
            if (newVal >= 1) divUpd.text(newVal);
        });

    </script>
    <!--quantity-->

    <!-- //js -->
    <!-- cart-js -->
    <script src="./js/minicart.js"></script>
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
    <script src="./js/bootstrap.min.js"></script>



</body>
</html>