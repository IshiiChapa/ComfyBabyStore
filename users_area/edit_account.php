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
    .rounded-circle{
        width:80px;
        height:80px;
        
    }
     </style>   
    <h4 class=mb-4>Edit Account</h4>
    <form action="" methods="post" enctype="multipart/form-data">

  <div class="form-group">
    <small> <label for="exampleInputUsername">Username</label>
        <input type="text" class="form-control mt-2 mb-2" name="user_username">
    </small>
    </div>

  <div class="form-group">
    <small> <label for="exampleInputEmail">Email</label>
        <input type="email" class="form-control mt-2 mb-2" name="user_email">
    </small>
   </div>

   <div class="form-group">
    <small> 
        <label for="exampleInputFile">Profile Image</label>
           <div class="d-flex mt-2 mb-2 m-auto">
             <input type="file" class="form-control m-auto" name="user_image">
             <img src="./user_images/<?php echo $user_image?>" alt="" class="rounded-circle">
           </div>
    </small>
    </div>

   <div class="form-group">
    <small> <label for="exampleInputAddress">Address</label>
        <input type="text" class="form-control mt-2 mb-2" name="user_address">
    </small>
    </div>

   <div class="form-group">
    <small> <label for="exampleInputContact">Contact Number</label>
        <input type="text" class="form-control mt-2 mb-2" name="user_mobile">
    </small>
    </div>

  <button type="submit" value="Update" class="btn btn-primary mt-4" name="user_update">Update</button>
</form>

</body>
</html>