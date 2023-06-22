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
    <nav class="navbar navbar-expand-lg navbar-light  bg-info">
            <div class="container-fluid">
                <img src="../images/favicon.png" alt="" class="logo">

                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
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
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center" >
                <div class="px-5">
                    <a href="#"><img src="../images/spaghetti.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>

        <!-----Fourth child---->
        <div class="container my-5">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            ?>
        </div>
        <!----Fifth child-------->
        <div class="container">
            <?php
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            ?>
        </div>

        <!---last child---->
  <div class="bg-info p-3 text-center">
    <p>
        All rights reserved -Designed by Bro_Clinton-2023
    </p>

</div>

    </div>
    
<!---bootstrap js link--->
<script src="bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>

</body>
</html>