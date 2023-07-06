<?php 
include "function.php";
//$conn = openconn();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_SESSION['username'] ?></title>
    <!---Bootstrap css link---->
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">
      <!------font-awesome link------>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!---css file---->

    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image{
    width: 100px;
    object-fit: contain;
    
}
    </style>

</head>
<body>
    <!--navbar---->
    <div class="container-fluid p-0">
        <!----First child---->
        <nav class="navbar navbar-expand-lg navbar-light  bg-secondary">
            <div class="container-fluid">
                <img src="../images/favicon.png" alt="" class="logo">

                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <!--displaying username---->
                        <?php
                            if (!isset($_SESSION['username'])) {
                                echo "<li class='nav-item'>
                                <a href='' class='nav-link'>Welcome Guest</a>
                            </li>";
                            }else {
                                echo "<li class='nav-item'>
                                <a href='' class='nav-link'>Welcome ".$_SESSION['username']."</a></li>";
                            }
                        ?>
                        
                    </ul>
                     
                </nav>
                      
            
            </div>
        </nav>
        <!---Second child---->
        <div class="bg-light">
            <h3 class="text-center p-2 text-uppercase">Profile Details</h3>
        </div>
        <!--Third child--->
        <div  class="my-0">
            <div class="col-md-2 bg-primary p-1 align-items-center" >
                <div class="px-5">
                    <a href="#"><img src="../images/spaghetti.jpg" alt="" class="admin_image"></a>
                    <p class="text-dark text-center fw-bolder fs-4">PROFILE</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 d-flex bg-primary p-1 align-items-left">
                <div>
                    <div>
                        <a href="profile.php" class="nav-link text-center text-light my-3 mx-5 fw-bold">Pending Orders</a>
                    </div>
                    <div>
                        <a href="profile.php?edit_account" class="nav-link text-light text-center my-3 mx-5 fw-bold">Edit Account</a>
                    </div>
                    <div>
                        <a href="profile.php?my_orders" class="nav-link text-light text-center my-3 mx-5 fw-bold">My Orders</a>
                    </div>
                    <div>
                        <a href="profile.php?delete_account" class="nav-link text-light text-center my-3 mx-5 fw-bold">Delete Account</a>
                    </div>
                    <div>
                        <a href="logout.php" class="nav-link text-light text-center my-3 mx-5 fw-bold">Logout</a>
                    </div>
                </div>
            </div>
            <div class="col-md-10 bg-primary p-1 align-items-center text-center justify-content-center">
                <?php
                    get_user_order_details();
                    if (isset($_GET['edit_account'])) {
                        include_once "edit_account.php";
                    }
                    if (isset($_GET['my_orders'])) {
                        include_once "my_orders.php";
                    }elseif (isset($_GET['delete_account'])) {
                        include_once "delete_account.php";
                    }
                ?>
            </div>
        </div>


        <!---last child---->
  <div class="bg-secondary p-3 text-center">
    <p>
        All rights reserved -Designed by VANILLA-2023
    </p>

</div>

    </div>
    
<!---bootstrap js link--->
<script src="bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>

</body>
</html>