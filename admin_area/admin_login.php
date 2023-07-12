<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <!---Bootstrap css link---->
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">
      <!------font-awesome link------>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            overflow: vertical;
            margin: 5%;
        }
    </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5 text-info">Admin Login</h2>
        <div class="d-flex justify-content-space-around ">
            <div class="col-lg-6 ">
                <img src="../assets/images/product/default/home-2/default-14.jpg" alt="no" style="width:100%; height:70%; object-fit:contain;" >
            </div>
            <div class="col-lg-6 align-item-center justify-content-center">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="user_name" class="form-label">Username</label>
                        <input type="text" name="user_name" id="username" placeholder="Enter your username" class="form-control" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" required>
                    </div>
                    <div>
                        <input type="submit" value="Login" class="bg-info rounded px-3 py-2 border-0"  name="admin_login">
                        <p class="small fw-bold pt-1">Do not have an account?? <a href="admin_registration.php" class="text-danger">Register</a> </p>
                    </div>
                </form>
                <!--php for user registration-->
                <?php
                    include_once "function1.php"; 
                    admin_login();   
                ?>
            </div>
        </div>
    </div>
</body>
</html>