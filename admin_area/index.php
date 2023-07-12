<?php 
include "../website/db.php";
$conn = openconn();
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                        <li class="nav-item">
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
                        </li>
                    </ul>
                     
                </nav>
                      
            
            </div>
        </nav>
        <!---Second child---->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--Third child--->
        <div class="row">
            <div class="col-md-12 bg-primary p-1 d-flex align-items-center" >
                <div class="px-5">
                    <h3 class="text-light text-center fw-bold"><?php echo $_SESSION['username'] ?></h3>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="index.php?insert_product" class="nav-link text-light bg-secondary my-1">Insert products</a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light bg-secondary my-1">View Products</a></button>
                    <button><a href="index.php?insert_blog" class="nav-link text-light bg-secondary my-1">Insert Blog</a></button>
                    <button><a href="index.php?view_blog" class="nav-link text-light bg-secondary my-1">View Blog</a></button>
                    <button><a href="index.php?list_orders" class="nav-link text-light bg-secondary my-1">All orders</a></button>
                    <button><a href="index.php?all_payments" class="nav-link text-light bg-secondary my-1">All payments</a></button>
                    <button><a href="index.php?list_users" class="nav-link text-light bg-secondary my-1">List Users</a></button>
                    <button><a href="admin_logout.php" class="nav-link text-light bg-secondary my-1">Logout</a></button>
                </div>
            </div>
        </div>

        <!-----Fourth child---->
        <div class="container my-5">
            <?php
            if(isset($_GET['insert_product'])){
                include('insert_product.php');
            }
            if(isset($_GET['insert_blog'])){
                include('insert_blog.php');
            }
            if(isset($_GET['view_products'])){
                include('view_products.php');
            }
            if(isset($_GET['edit_product'])){
                include('edit_product.php');
            }
            if(isset($_GET['delete_product'])){
                include('delete_product.php');
            }
            if(isset($_GET['view_blog'])){
                include('view_blog.php');
            }
            if(isset($_GET['edit_blog'])){
                include('edit_blog.php');
            }
            if(isset($_GET['delete_blog'])){
                include('delete_blog.php');
            }
            if(isset($_GET['list_orders'])){
                include('list_orders.php');
            }
            if(isset($_GET['delete_order'])){
                include('delete_order.php');
            }
            if(isset($_GET['all_payments'])){
                include('all_payments.php');
            }
            if(isset($_GET['delete_payment'])){
                include('delete_payment.php');
            }
            if(isset($_GET['list_users'])){
                include('list_users.php');
            }
            if(isset($_GET['delete_user'])){
                include('delete_user.php');
            }
            ?>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>