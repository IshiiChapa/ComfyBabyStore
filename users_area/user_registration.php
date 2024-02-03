<?php include('../includes/connect.php');
include('../functions/common_fucntion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <style>
  :root {
    font-size: 100%;
    font-size: 16px;
    line-height: 1.5;
    --primary-blue: #233975;
  }
  body{
    padding: 0;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
  }
  h1{
    font-size: 2.25rem;
    font-weight: 700;
  }
  h2{
    font-size: 1.5rem;
    font-weight: 700;
  }
  a{
    text-decoration: none;
    color: var(--primary-blue);
  }
  a:hover{
    text-decoration: underline;
  }
  .small{
    font-size: 80%;
    text-align: center;
  }
  .split-screen{
    display: flex;
    flex-direction: column;
  }
  .left{
    height: 200px;
  }
  .left, .right{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .left{
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url('../admin_area/product_images/NewBornAccessories.jpg');
    background-size: cover;
  }
  .left .copy{
    color: white;
    text-align: center;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  .left p{
    font-weight; 400;  /* Change to font-weight: 400; */
}
  .right .copy{
    color: black;
    text-align: center;
  }
  .right .copy p{
    margin: 1.1em 0;
    font-size: 0.875rem;
  }
  .right form{
    width: 328px;
  }
  form input[type="text"],
  form input[type="email"],
  form input[type="file"],
  form input[type="password"] {
      display: block;
      width: 100%;
      box-sizing: border-box;
      border-radius: 8px;
      border: 1px solid #c4c4c4;
      padding: 0.5em;
      margin-bottom: 0.9rem;
      font-size: 0.75rem;
  }
  lable{
    display: block;
    margin-bottom: 0.3rem;
    font-size: 0.75rem;
  }
  .input-container.password{
    position: relative;
  }
  .input-container.password i {
    position: absolute;
    top: 42px;
    right: 16px;
  }
  .checkbox-container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
  }
  .checkbox-container {
    display: block;
    position: relative;
    padding-left: 2rem;
    cursor: pointer;
    user-select: none;
    margin: 0 0 1.25rem 0;
  }
  .checkbox-container input:checked~.checkmark {
    background-color: var(--primary-blue);
    border: 1px solid var(--primary-blue);
  }
  .checkmark {
    position: absolute;
    width: 24px;
    height: 24px;
    background: white;
    border: 1px solid #c4c4c4;
    border-radius: 2px;
    top: -4px;
    left: 0;
  }
  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }
  .checkbox-container input:checked~.checkmark:after {
    display: block;
  }
  .checkbox-container .checkmark:after {
    border: solid white;
    border-width: 0 3px 3px 0;
    width: 5px;
    height: 10px;
    left: 8px;
    top: 4px;
    transform: rotate(45deg);
  }
  .signup-btn {
    display: block;
    width: 100%;
    background: var(--primary-blue);
    color: white;
    font-weight: 700;
    border: none;
    padding: 1rem;
    border-radius: 8px;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  .signup-btn:hover {
    background: #2c4893;
    cursor: pointer;
  }
  @media screen and (min-width: 900px) {
    .split-screen {
        flex-direction: row;
        height: 100vh;
    }
    .left,
    .right {
        display: flex;
        width: 50%;
        height: auto;
    }
  }
    </style>
    <div class="split-screen">
        <div class="left">
            <section class="copy">
                <h1>Lets Start Shopping</h1>
            </section>

        </div>
        <div class="right">
        <form action="" method="post" enctype="multipart/form-data">
                <section class="copy">
                    <h2>Sign Up</h2>
                    <div class="login-container">
                        <p> Already have an account? <a href="user_login.php">
                         <strong>Log In</strong></a></p>
                    </div>
                </section>
                <div class="input-container name"> 
                    <lable for="user_username">Username</lable>
                    <input id="user_username" name="user_username" type="text"
                    placeholder="Enter your username" autocomplete="off" required="required">
                </div>
                <div class="input-container email"> 
                    <lable for="user_email">Email</lable>
                    <input id="user_email" name="user_email" type="email"
                    placeholder="Enter your email" autocomplete="off" required="required">
                </div>
                <div class="input-container image"> 
                    <lable for="user_image">User Image</lable>
                    <input id="user_image" name="user_image" type="file" required="required">
                </div>
                <div class="input-container password"> 
                    <lable for="user_password">Password </lable>
                    <input id="user_password" name="user_password"
                    placeholder="Enter your password" type="password" required="required">
                    <i class="far fa-eye-slash"></i>
                </div>
                <div class="input-container confirm password"> 
                    <lable for="conf_user_password">Confirm Password </lable>
                    <input id="conf_user_password" name="conf_user_password"
                    placeholder="Confirm Password" type="password" required="required">
                    <i class="far fa-eye-slash"></i>
                </div>
                <div class="input-container address"> 
                    <lable for="user_address">Address</lable>
                    <input id="user_address" name="user_address" type="text"
                    placeholder="Enter your address" required="required">
                </div>
                <div class="input-container contact"> 
                    <lable for="user_contact">Contact Number</lable>
                    <input id="user_contact" name="user_contact" type="text"
                    placeholder="Enter your contact number" required="required">
                </div>
                <!-- <div class="input-container cta">
                    <lable class="checkbox-container">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Sign up for email updates
                    </lable>
                </div> -->
                <button class="signup-btn" type="submit" name="user_register">Sign Up</button>
                <section class="copy legal">
                    <p><span class="small">By continuing, you agree to accept
                        our <br> <a href="">Privacy Policy</a> &amp; 
                        <a href="">Terms of Services</a>. </span></p>
                </section>
            </form>
        </div>
    </div>
</body>
</html>

<!-- php code -->
<?php



if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_password=$_POST['conf_user_password'];
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];

    //accessing image
    $user_image=$_FILES['user_image']['name'];

    //accessing image temp name
    $user_image_tmp=$_FILES['user_image']['tmp_name'];

    $user_ip=getIPAddress();

    // //checking empty condition
    // if($user_username=='' or $user_email=='' or $user_password=='' or $user_address=='' or $user_contact=='' or $user_image=='' ){
    //     echo "<script>alert('Please Fill Fileds')</script>";
    //     exit();
    // }else{

     //select query
     $select_query="Select * from `user_table` where username='$user_username' or user_email='$user_email'" ; 
     $results=mysqli_query($con,$select_query);
     $rows_count=mysqli_num_rows($results);
     if($rows_count>0){
        echo "<script>alert('Username or Email already exsits')</script>";
     }else if($user_password!=$conf_user_password){
        echo "<script>alert('Passsword do not matched')</script>";
     }
     
     
     else{
         //inser_query
    move_uploaded_file($user_image_tmp,"./user_images/$user_image");
    $insert_query="insert into `user_table` (username,user_email,user_password,user_image,user_ip,
    user_address,user_mobile) values ('$user_username','$user_email','$hash_password',
    '$user_image','$user_ip','$user_address','$user_contact')";

    $sql_execute=mysqli_query($con,$insert_query);

     }

     //selecting cart items
     $select_cart_items="Select * from `cart_details` where ip_address='$user_ip'";
     $result_cart=mysqli_query($con,$select_cart_items);
     $rows_count=mysqli_num_rows($result_cart);
     if($rows_count>0){
        $_SESSION['username']=$user_username;
        echo "<script>alert('You have items in your cart')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
     }else{
        echo "<script>window.open('../index.php','_self')</script>";
     }



}


?>