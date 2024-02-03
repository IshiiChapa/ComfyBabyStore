<?php

// //include connect file
// include('./includes/connect.php');

//getting products
function getproducts(){
    global $con; //making as a global variable
    //condition to check is set or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    $select_query="Select * from `products` order by rand() LIMIT 0,9";
$result_query=mysqli_query($con,$select_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='col-md-4 mb-2'>
  <div class='card'>
    <img src='./admin_area/product_images/$product_image1' 
    class='card-img-top' alt='$product_title'>
    <div class='card-body'>
      <h5 class='card-title'>$product_title</h5>
      <p class='card-text'>$product_description</p>
      <p class='card-text'>LKR $product_price</p>
      <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart </a>
      <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more </a>
    </div>
 </div>
</div>";
}
}
}
}

// getting all products to product page
function get_all_products(){
    global $con; //making as a global variable
    //condition to check is set or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    $select_query="Select * from `products` order by rand()";
$result_query=mysqli_query($con,$select_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
echo " <div class='col-lg-3 col-md-3 col-6 product-incfhny mt-4'>
<div class='product-grid2'>
<div class='product-image2'>
<a href='product_details.php?product_id=$product_id'>
    <img class='pic-1 img-fluid radius-image' src='./admin_area/product_images/$product_image1'>
    <img class='pic-2 img-fluid radius-image' src='./admin_area/product_images/$product_image1'>
</a>
<ul class='social'>
    <li><a href='product_details.php?product_id=$product_id' data-tip='Quick View'><span class='fa fa-eye'></span></a></li>

    <li><a href='index.php?add_to_cart=$product_id' data-tip='Add to Cart'><span class='fa fa-shopping-bag'></span></a>
    </li>
</ul>
<div class='shopv single-item'>
    <form action='#' method='post'>
        <input type='hidden' name='cmd' value='_cart'>
        <input type='hidden' name='add' value='1'>
        <input type='hidden' name='shopv_item' value='$product_title'>
        <input type='hidden' name='amount' value='899.99'>
        <a href='index.php?add_to_cart=$product_id' class='shopv-cart pshopv-cart add-to-cart'>
            Add to Cart</a>
    </form>
</div>
</div>

<div class='product-content'>
<h3 class='title'><a href='product_details.php?product_id=$product_id'>$product_title</a></h3>
<span class='price'>LKR $product_price</span>
</div>
</div>
</div>";





// echo "<div class='col-md-4 mb-2'>
// <div class='card'>
//   <img src='./admin_area/product_images/$product_image1' 
//   class='card-img-top' alt='$product_title'>
//   <div class='card-body'>
//     <h5 class='card-title'>$product_title</h5>
//     <p class='card-text'>$product_description</p>
//     <p class='card-text'>LKR $product_price</p>
//     <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart </a>
//     <a href='product_details.php?product_id=$product_id' 
//     class='btn btn-secondary'>View more </a>
//   </div>
// </div>
// </div>";

}
}
}
}






// getting all products to home page
function get_all_home_products($limit = null) {
  global $con;

  // Condition to check if category and brand are not set
  if (!isset($_GET['category']) && !isset($_GET['brand'])) {
      // Use the $limit parameter if provided, otherwise fetch all
      $limitClause = $limit ? "LIMIT $limit" : "";

      $select_query = "SELECT * FROM `products` ORDER BY RAND() $limitClause";
      $result_query = mysqli_query($con, $select_query);

      while ($row = mysqli_fetch_assoc($result_query)) {
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_price=$row['product_price'];
$category_id=$row['category_id'];
$brand_id=$row['brand_id'];
echo " <div class='col-lg-2 col-4 product-incfhny mt-4'>
<div class='product-grid2'>
<div class='product-image2'>
<a href='product_details.php?product_id=$product_id'>
  <img class='pic-1 img-fluid radius-image' src='./admin_area/product_images/$product_image1'>
  <img class='pic-2 img-fluid radius-image' src='./admin_area/product_images/$product_image1'>
</a>
<ul class='social'>
  <li><a href='product_details.php?product_id=$product_id' data-tip='Quick View'><span class='fa fa-eye'></span></a></li>

  <li><a href='index.php?add_to_cart=$product_id' data-tip='Add to Cart'><span class='fa fa-shopping-bag'></span></a>
  </li>
</ul>
<div class='shopv single-item'>
  <form action='#' method='post'>
      <input type='hidden' name='cmd' value='_cart'>
      <input type='hidden' name='add' value='1'>
      <input type='hidden' name='shopv_item' value='$product_title'>
      <input type='hidden' name='amount' value='899.99'>
      <a href='index.php?add_to_cart=$product_id' class='shopv-cart pshopv-cart add-to-cart'>
          Add to Cart</a>
  </form>
</div>
</div>

<div class='product-content'>
<h3 class='title'><a href='product_details.php?product_id=$product_id'>$product_title</a></h3>
<span class='price'>LKR $product_price</span>
</div>
</div>
</div>";


}
}
}







// getting unique categories
function get_unique_categories(){
    global $con; 

    //condition to check is set or not
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
    $select_query="Select * from `products` where category_id=$category_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'> No stock for this category</h2>";
}
//$row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo " <div class='col-lg-3 col-md-3 col-6 product-incfhny mt-4'>
<div class='product-grid2'>
<div class='product-image2'>
<a href='product_details.php?product_id=$product_id'>
    <img class='pic-1 img-fluid radius-image' src='./admin_area/product_images/$product_image1'>
    <img class='pic-2 img-fluid radius-image' src='./admin_area/product_images/$product_image1'>
</a>
<ul class='social'>
    <li><a href='product_details.php?product_id=$product_id' data-tip='Quick View'><span class='fa fa-eye'></span></a></li>

    <li><a href='index.php?add_to_cart=$product_id' data-tip='Add to Cart'><span class='fa fa-shopping-bag'></span></a>
    </li>
</ul>
<div class='shopv single-item'>
    <form action='#' method='post'>
        <input type='hidden' name='cmd' value='_cart'>
        <input type='hidden' name='add' value='1'>
        <input type='hidden' name='shopv_item' value='$product_title'>
        <input type='hidden' name='amount' value='899.99'>
        <a href='index.php?add_to_cart=$product_id' class='shopv-cart pshopv-cart add-to-cart'>
            Add to Cart</a>
    </form>
</div>
</div>

<div class='product-content'>
<h3 class='title'><a href='product_details.php?product_id=$product_id'>$product_title</a></h3>
<span class='price'>LKR $product_price</span>
</div>
</div>
</div>";
}
}
}


// getting unique brands
function get_unique_brands(){
    global $con; 

    //condition to check is set or not
    if(isset($_GET['brand'])){
        $brand_id=$_GET['brand'];
    $select_query="Select * from `products` where brand_id=$brand_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>This brand is not available for service</h2>";
}
//$row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo " 
  <div class='col-lg-3 col-md-3 col-6 product-incfhny mt-4'>
<div class='product-grid2'>
<div class='product-image2'>
<a href='product_details.php?product_id=$product_id'>
    <img class='pic-1 img-fluid radius-image' src='./admin_area/product_images/$product_image1'>
    <img class='pic-2 img-fluid radius-image' src='./admin_area/product_images/$product_image1'>
</a>
<ul class='social'>
    <li><a href='product_details.php?product_id=$product_id' data-tip='Quick View'><span class='fa fa-eye'></span></a></li>

    <li><a href='index.php?add_to_cart=$product_id' data-tip='Add to Cart'><span class='fa fa-shopping-bag'></span></a>
    </li>
</ul>
<div class='shopv single-item'>
    <form action='#' method='post'>
        <input type='hidden' name='cmd' value='_cart'>
        <input type='hidden' name='add' value='1'>
        <input type='hidden' name='shopv_item' value='$product_title'>
        <input type='hidden' name='amount' value='899.99'>
        <a href='index.php?add_to_cart=$product_id' class='shopv-cart pshopv-cart add-to-cart'>
            Add to Cart</a>
    </form>
</div>
</div>

<div class='product-content'>
<h3 class='title'><a href='product_details.php?product_id=$product_id'>$product_title</a></h3>
<span class='price'>LKR $product_price</span>
</div>
</div>
</div>";
}
}
}


//displaying brands inside Nav
function getbrands(){
    global $con;
    $select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
  <a href='display_all.php?brand=$brand_id' class='text-secondary'>$brand_title</a>
  
</li>";

}
}


//displaying categories inside Nav
function getcategories(){
    global $con;
    $select_categories="Select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
  <a href='display_all.php?category=$category_id' class='text-secondary'>$category_title</a>
</li>";
}
}

//searching products function
function search_product(){
    global $con; //making as a global variable
    if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
    $search_query="Select * from `products` where product_keywords like 
    '%$search_data_value%'";
    $result_query=mysqli_query($con,$search_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['product_title'];
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No results match. No products found on this category!</h2>";
}
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo " 
  <div class='col-lg-2 col-4 product-incfhny mt-4'>
<div class='product-grid2'>
<div class='product-image2'>
<a href='product_details.php?product_id=$product_id'>
    <img class='pic-1 img-fluid radius-image' src='./admin_area/product_images/$product_image1'>
    <img class='pic-2 img-fluid radius-image' src='./admin_area/product_images/$product_image1'>
</a>
<ul class='social'>
    <li><a href='product_details.php?product_id=$product_id' data-tip='Quick View'><span class='fa fa-eye'></span></a></li>

    <li><a href='index.php?add_to_cart=$product_id' data-tip='Add to Cart'><span class='fa fa-shopping-bag'></span></a>
    </li>
</ul>
<div class='shopv single-item'>
    <form action='#' method='post'>
        <input type='hidden' name='cmd' value='_cart'>
        <input type='hidden' name='add' value='1'>
        <input type='hidden' name='shopv_item' value='$product_title'>
        <input type='hidden' name='amount' value='899.99'>
        <a href='index.php?add_to_cart=$product_id' class='shopv-cart pshopv-cart add-to-cart'>
            Add to Cart</a>
    </form>
</div>
</div>

<div class='product-content'>
<h3 class='title'><a href='product_details.php?product_id=$product_id'>$product_title</a></h3>
<span class='price'>LKR $product_price</span>
</div>
</div>
</div>";



//   echo "<div class='col-md-4 mb-2'>
//   <div class='card'>
//     <img src='./admin_area/product_images/$product_image1' 
//     class='card-img-top' alt='$product_title'>
//     <div class='card-body'>
//       <h5 class='card-title'>$product_title</h5>
//       <p class='card-text'>$product_description</p>
//       <p class='card-text'>LKR $product_price</p>
//       <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart </a>
//       <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more </a>
//     </div>
//  </div>
// </div>";
}
}
}

//View details function
function view_details(){
  global $con; //making as a global variable
    //condition to check is set or not
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
          $product_id=$_GET['product_id'];
    $select_query="Select * from `products` where product_id=$product_id";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_image2=$row['product_image2'];
  $product_image3=$row['product_image3'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];

  echo "<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>
<link rel='stylesheet' href='./assets/css/style-liberty.css'>  

<div style='margin: 8px auto; display: block; text-align:center;'>

<!---728x90--->

 
</div>
  <section class='w3l-ecommerce-main'>
  
  <div class='ecom-contenthny w3l-ecommerce-main-inn py-5'>
      <div class='container py-lg-5'>
          <!--/row1-->
          <div class='sp-store-single-page row'>
              <div class='col-lg-5 single-right-left'>
                  <div class='flexslider1'>

                      <ul class='slides'>
                          <li data-thumb='./admin_area/product_images/$product_image1'>
                              <div class='thumb-image'> <img src='./admin_area/product_images/$product_image1' data-imagezoom='true' class='img-fluid radius-image' alt=' '> </div>
                          </li>
                          <li data-thumb='./admin_area/product_images/$product_image2'>
                          <div class='thumb-image'> <img src='./admin_area/product_images/$product_image2' data-imagezoom='true' class='img-fluid radius-image' alt=' '> </div>
                          </li>
                      <li data-thumb='./admin_area/product_images/$product_image3'>
                      <div class='thumb-image'> <img src='./admin_area/product_images/$product_image3' data-imagezoom='true' class='img-fluid radius-image' alt=' '> </div>
                  </li>
                          
                      </ul>
                      <div class='clearfix'></div>
                  </div>
                  <div class='eco-buttons mt-5 d-flex'>

                      <div class='shopv single-item'>
                          <form action='#' method='post'>
                              <input type='hidden' name='cmd' value='_cart'>
                              <input type='hidden' name='add' value='1'>
                              <input type='hidden' name='shopv_item' value='Cotton Flared Kurta'>
                              <input type='hidden' name='amount' value='599.99'>
                              <a href='index.php?add_to_cart=$product_id' class='btn btn-style btn-primary'>Add to Cart </a>
                              
                          </form>
                      </div>
                      <div class='buyhny-now'> <a href='./users_area/payment.php' class='btn btn-style btn-primary'>Buy Now </a></div>

                  </div>
              </div>
              <div class='col-lg-7 single-right-left ps-lg-5'>
                  <h3>$product_title
                  </h3>
                  <div class='caption'>

                      <ul class='rating-single'>
                          <li>
                              <a href='#'>
                                  <span class='fa fa-star yellow-star' aria-hidden='true'></span>
                              </a>
                          </li>
                          <li>
                              <a href='#'>
                                  <span class='fa fa-star yellow-star' aria-hidden='true'></span>
                              </a>
                          </li>
                          <li>
                              <a href='#'>
                                  <span class='fa fa-star yellow-star' aria-hidden='true'></span>
                              </a>
                          </li>
                          <li>
                              <a href='#'>
                                  <span class='fa fa-star-half-o yellow-star' aria-hidden='true'></span>
                              </a>
                          </li>
                          <li>
                              <a href='#'>
                                  <span class='fa fa-star-half yellow-star' aria-hidden='true'></span>
                              </a>
                          </li>
                      </ul>

                      <h6>
                          <span class='item_price'>LKR $product_price</span>
                          <!-- <del>$775</del> Free Delivery -->
                      </h6>
                  </div>
                  <div class='desc_single my-4'>
                      <ul class='emi-views'>
                          <li><span>Special Price</span> Get extra 5% off (price inclusive of discount)</li>
                          <li><span>Bank Offer</span> 5% Unlimited Cashback on Flipkart Axis Bank Credit Card</li>
                          <li><span>Bank Offer</span> 5% Cashback* on HDFC Bank Debit Cards</li>
                          <li><span>Bank Offer</span> Extra 5% off* with Axis Bank Buzz Credit Card</li>
                      </ul>
                  </div>
                  <div class='desc_single mb-4'>
                      <h5 class='sp_title mb-3'>Product Details:</h5>
        <div>
            <ul>
            $product_description
            </ul>
        </div>
                  </div>
                  <div class='description-apt d-grid mb-4'>
                      <div class='occasional'>
                          <h5 class='sp_title mb-3'>Highlights:</h5>
                          <ul class='single_specific'>
                              <li>Neck : Collar Neck</li>
                              <li>Fit : Slim</li>
                              <li>Sleeve : Full Sleeve</li>
                              <li>Material : Pure Cutton</li>

                          </ul>

                      </div>

                      <div class='color-quality'>
                          <h5 class='sp_title'>Services:</h5>
                          <ul class='single_serv'>
                              <li>
                                  <a href='#'>30 Day Return Policy</a>
                              </li>
                              <li class='gap'>
                                  <a href='#'>Cash on Delivery available</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class='description mb-4'>
                      <h5>Check delivery, payment options and charges at your location</h5>
                      <form action='#' class='d-flex' method='post'>
                          <input type='text' placeholder='Enter pincode' required>
                          <button class='submit btn btn-style btn-primary ms-3' type='submit'>Check</button>
                      </form>
                  </div>

              </div>
          </div>
      </div>
      <!--//row1-->

  </div>
</section>


<!-- Template JavaScript -->
    <script src='./assets/js/jquery-3.3.1.min.js'></script>
    <script src='./assets/js/theme-change.js'></script>
    <!-- FlexSlider -->
    <!-- price range (top products) -->
    <script src='./assets/js/jquery-1.11.1.min.js'></script>
    <script src='./assets/js/jquery-ui.js'></script>
    <script>
        //<![CDATA[ 
        $(window).load(function() {
            $('#slider-range').slider({
                range: true,
                min: 0,
                max: 9000,
                values: [50, 6000],
                slide: function(event, ui) {
                    $('#amount').val('$' + ui.values[0] + ' - $' + ui.values[1]);
                }
            });
            $('#amount').val('$' + $('#slider-range').slider('values', 0) + ' - $' + $('#slider-range').slider('values', 1));

        }); //]]>

    </script>
    <!-- //price range (top products) -->
    <script src='./assets/js/jquery.flexslider.js'></script>
    <!-- single -->
    <script src='./assets/js/imagezoom.js'></script>
    <!-- single -->
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider1').flexslider({
                animation: 'slide',
                controlNav: 'thumbnails'
            });
        });

    </script>
    <!-- cart-js -->
    <script src='./assets/js/minicart.js'></script>
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
        $(window).on('scroll', function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $('#site-header').addClass('nav-fixed');
            } else {
                $('#site-header').removeClass('nav-fixed');
            }
        });

        //Main navigation Active Class Add Remove
        $('.navbar-toggler').on('click', function() {
            $('header').toggleClass('active');
        });
        $(document).on('ready', function() {
            if ($(window).width() > 991) {
                $('header').removeClass('active');
            }
            $(window).on('resize', function() {
                if ($(window).width() > 991) {
                    $('header').removeClass('active');
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
    <script src='./assets/js/bootstrap.min.js'></script>";






//   echo "<div class='col-md-4 mb-2'>
//   <div class='card'>
//     <img src='./admin_area/product_images/$product_image1' 
//     class='card-img-top' alt='$product_title'>
//     <div class='card-body'>
//       <h5 class='card-title'>$product_title</h5>
//       <p class='card-text'>$product_description</p>
//       <p class='card-text'>LKR $product_price</p>
//       <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart </a>
//       <a href='index.php' class='btn btn-secondary'>Go Home </a>
//     </div>
//  </div>
// </div>

// <div class='col-md-8'>
//                          <!-- related cards -->
//                         <div class='row'>
//                             <div class='col-md-12'>
//                                   <h4 class='text-center'>Related prdoduct</h4>
//                             </div>
//                             <div class='col-md-6'>
//                                    <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt=''>
//                             </div>
//                             <div class='col-md-6'>
//                             <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='$product_title'>
//                             </div>
//                        </div>
//                     </div>";
}
}
}
    }
}

//get ip address function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  


// cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $con;
  $get_ip_add = getIPAddress();  
  $get_product_id=$_GET['add_to_cart'];
  $select_query="Select * from `cart_details` where ip_address='$get_ip_add' and 
  product_id=$get_product_id";
  $result_query=mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows>0){
    echo "<script>alert('This item is already present inside cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}else{
  $insert_query="insert into `cart_details` (product_id,ip_address,quantity) 
  values ($get_product_id, '$get_ip_add',0)";
  $result_query=mysqli_query($con,$insert_query);
  echo "<script>alert('Item is added to cart')</script>";
  echo "<script>window.open('index.php','_self')</script>";

}
}
}

//funjction to get cart item numbers 
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_add = getIPAddress();  
    $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  }else{
    global $con;
    $get_ip_add = getIPAddress();  
    $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  
  }
  echo $count_cart_items;
  }

  // total price fucntion
  function total_cart_price(){
    global $con;
    $get_ip_add = getIPAddress();  
    $total_price=0;
    $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result=mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_array($result)){
      $product_id=$row['product_id'];
      $select_products="Select * from `products` where product_id='$product_id'";
      $result_products=mysqli_query($con,$select_products);
      while($row_product_price=mysqli_fetch_array($result_products)){
        $product_price=array($row_product_price['product_price']);
        $product_values=array_sum($product_price);
        $total_price+=$product_values;
    }
  }
echo $total_price;
}


//get user order details
function get_user_order_details(){
    global $con;
    $username=$_SESSION['username'];
    $get_details="Select * from `user_table` where username='$username'";
    $result_query=mysqli_query($con,$get_details);
    while($row_query=mysqli_fetch_array($result_query)){
        $user_id=$row_query['user_id'];
        if(!isset($_GET['edit_account'])){
            if(!isset($_GET['my_orders'])){
                if(!isset($_GET['delete_account'])){
                    $get_orders="Select * from `user_orders` where user_id=$user_id and
                    order_status='pending'";
                    $result_orders_query=mysqli_query($con,$get_orders);
                    $row_count=mysqli_num_rows($result_orders_query);
                    if($row_count>0){
                        echo " <div style='background-color: rgba(232, 232, 232);'class=' text-center'>
                                <h4 class='text-center py-4'> You have $row_count pending orders</h4> 
                                    <a class='btn btn-outline-warning align-center mb-4' href='profile.php?my_orders' role='button'>Order Details</a>
                                </div>";
                    }else{
                        echo " <div style='background-color: rgba(232, 232, 232);'class=' text-center'>
                               <h4 class='text-center py-4'> You have 0 pending orders</h4> 
                                <a class='btn btn-success align-center mb-4' href='../index.php' role='button'>Explore Products</a>
                                </div>";
                    }
                }
            }

        }
    }

}


?>