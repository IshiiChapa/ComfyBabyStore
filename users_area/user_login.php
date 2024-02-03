<?php include('../includes/connect.php');
include('../functions/common_fucntion.php');
@session_start();
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
    font-weight; 400;
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
    top: 32px;
    right: 14px;
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
            <form action="" method="post">
                <section class="copy">
                    <h2>User Sign In</h2>
                    <div class="login-container">
                        <p> Don't have an account? <a href="user_registration.php">
                         <strong>Register</strong></a></p>
                    </div>
                </section>
                <div class="input-container name"> 
                    <lable for="user_username">Username</lable>
                    <input id="user_username" name="user_username" type="text"
                    placeholder="Enter your username" required="required">
                </div>
                <div class="input-container password"> 
                    <lable for="user_password">Password </lable>
                    <input id="user_password" name="user_password"
                    placeholder="Enter your password" type="password" required="required">
                    
                </div>
                <button class="signup-btn" type="submit" name="user_login">Login</button>
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


<?php
if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
    $select_query="Select * from `user_table` where username='$user_username'";

    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    $user_ip=getIPAddress();

    //cart items
    $select_query_cart="Select * from `cart_details` where ip_address='$user_ip'";
    $select_cart=mysqli_query($con,$select_query_cart);
    $row_count_cart=mysqli_num_rows($select_cart);
    if($row_count>0){
        $_SESSION['username']=$user_username;
        if(password_verify($user_password,$row_data['user_password'])){
            if($row_count==1 and $row_count_cart==0){
                $_SESSION['username']=$user_username;
                echo "<script>alert('Loginn Successful')</script>";
                echo "<script>window.open('profile.php','_self')</script>";
            }else{
                $_SESSION['username']=$user_username;
                echo "<script>alert('Loginn Successful')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }

        }else{
            echo "<script>alert('Invalid Credentials')</script>";
        }

    }else{
        echo "<script>alert('Invalid Credentials')</script>";
    }
}

?>