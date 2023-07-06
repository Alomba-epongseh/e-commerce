<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Vanilla's Shop</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/ionicons.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css"> -->

    <!-- Plugin CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css"> -->

    <!-- Main CSS -->
    <!-- <link rel="stylesheet" href="assets/sass/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- Start Header Area -->
    <header class=" header-section d-none d-xl-block breadcrumb-bg-color--golden">
        <div class="header-wrapper ">
            <div class="header-bottom section-fluid sticky-header sticky-color--golden">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-between">
                            <!-- Start Header Logo -->
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="index-2.php"><img src="assets/images/vanillalogo.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- End Header Logo -->

                            <!-- Start Header Main Menu -->
                            <div class="main-menu menu-color--black menu-hover-color--golden">
                                <nav>
                                    <ul>
                                        <li class="has-dropdown">
                                            <a class="active main-menu-link" href="index-2.php">Home </a>
                                        </li>
                                        <li class="dropdown has-dropdown has-megaitem">
                                            <a href="#">Shop <i
                                                class="fa fa-angle-down"></i></a>
                                            <!-- Sub Menu -->
                                                <ul class="sub-menu">
                                                    <li><a href="shop-full-width.php" >Product</a></li>
                                                    <li><a href="product-details-default.php" >Product Details</a></li>
                                                </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                            <!-- Sub Menu -->
                                            <ul class="sub-menu">
                                                <li><a href="my-account.php">My Account</a></li>
                                                <li><a href="faq.php">Frequently Questions</a></li>
                                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-full-width.php">Blog</a></li>
                                        <li>
                                            <a href="about-us.php">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact-us.php">Contact Us</a>
                                        </li>
                                        <!-- Displaying login if the user isn-t logged in and logout if the userr is already logged-in -->
                        <?php
                            if (!isset($_SESSION['username'])) {
                                echo "<li><a href='login.php'>Login</a></li>";
                            }else{
                                echo "<li><a href='logout.php'>Logout</a></li>";
                            }
                        ?>

                                    </ul>
                                </nav>
                            </div>
                            <!-- End Header Main Menu Start -->

                            <!-- Start Header Action Link -->
                            <ul class="header-action-link action-color--black action-hover-color--golden">
                                <li>
                                    <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                        <i class="icon-heart"></i>
                                        <span class="item-count">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                        <i class="icon-bag"></i>
                                        <span class="item-count">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#search">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                        <i class="icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Header Action Link -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="headerr breadcrumb-section ">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Cart</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index-2.php">Home</a></li>
                                    <li><a href="#">Side Bar</a></li>
                                    <li class="active" aria-current="page">cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->
    </header>
    <!-- Start Header Area -->

    <!-- Start Mobile Header -->
    <div class="mobile-header breadcrumb-bg-color--golden section-fluid d-lg-block d-xl-none">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <!-- Start Mobile Left Side -->
                    <div class="mobile-header-left">
                        <ul class="mobile-menu-logo">
                            <li>
                                <a href="index-2.php">
                                    <div class="logo">
                                        <img src="assets/images/vanillalogo.jpg" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Left Side -->

                    <!-- Start Mobile Right Side -->
                    <div class="mobile-right-side">
                        <ul class="header-action-link action-color--black action-hover-color--golden">
                            <li>
                                <a href="#search">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                    <i class="icon-bag"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Right Side -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Header -->

    <!--  Start Offcanvas Mobile Menu Section -->
    <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu  -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="index-2.php"><span>Home</span></a>
                        </li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="shop-full-width.php">Products</a></li>
                                <li><a href="product-details-default.php" >Product Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="my-account.php">My Account</a></li>
                                <li><a href="faq.php">Frequently Questions</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li><a href="blog-full-width.php">Blog</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                        <!-- Displaying login if the user isn-t logged in and logout if the userr is already logged-in -->
                        <?php
                            if (!isset($_SESSION['username'])) {
                                echo "<li><a href='login.php'>Login</a></li>";
                            }else{
                                echo "<li><a href='logout.php'>Logout</a></li>";
                            }
                        ?>

                    </ul>
                </div> <!-- End Mobile Menu Nav -->
            </div> <!-- End Mobile Menu -->

            <!-- Start Mobile contact Info -->
            <div class="mobile-contact-info">
                <div class="logo">
                    <a href="index-2.php"><img src="assets/images/vanillalogo.jpg" alt=""></a>
                </div>

                <address class="address">
                    <span>Address: Bamenda, Cameroon.</span>
                    <span>Call Us: +237676723201, +237681718702</span>
                    <span>Email: alombangwingche@gmail.com</span>
                </address>

                <ul class="social-link">
                    <li><a href="https://github.com/Alomba-epongseh"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://twitter.com/alomba_vanilla"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/alombaepong?igshid=MjEwN2IyYWYwYw=="><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://linkedin.com/Epongseh Alomba"><i class="fa fa-linkedin"></i></a></li>
                </ul>

                <ul class="user-link">
                    <li><a href="wishlist.php">Wishlist</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                </ul>
            </div>
            <!-- End Mobile contact Info -->

        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <!-- Start Mobile contact Info -->
        <div class="mobile-contact-info">
            <div class="logo">
                <a href="index-2.php"><img src="assets/images/vanillalogo.jpg" alt=""></a>
            </div>

            <address class="address">
                <span>Address: Bamenda, Cameroon.</span>
                <span>Call Us: +237676723201, +237681718702</span>
                <span>Email: alombangwingche@gmail.com</span>
            </address>

            <ul class="social-link">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <ul class="user-link">
                <li><a href="wishlist.php">Wishlist</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="checkout.php">Checkout</a></li>
            </ul>
        </div>
        <!-- End Mobile contact Info -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Addcart Section -->
    <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->

        <!-- Start  Offcanvas Addcart Wrapper -->
        <div class="offcanvas-add-cart-wrapper">
            <h4 class="offcanvas-title">Shopping Cart</h4>
            <ul class="offcanvas-cart">
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="assets/images/product/default/home-1/default-1.jpg" alt=""
                                class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Car Wheel</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                <span class="offcanvas-cart-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-right">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="assets/images/product/default/home-2/default-1.jpg" alt=""
                                class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Car Vails</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">3 x </span>
                                <span class="offcanvas-cart-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-right">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="assets/images/product/default/home-3/default-1.jpg" alt=""
                                class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Shock Absorber</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                <span class="offcanvas-cart-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-right">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <div class="offcanvas-cart-total-price">
                <span class="offcanvas-cart-total-price-text">Subtotal:</span>
                <span class="offcanvas-cart-total-price-value">$170.00</span>
            </div>
            <ul class="offcanvas-cart-action-button">
                <li><a href="cart.php" class="btn btn-block btn-golden">View Cart</a></li>
                <li><a href="compare.php" class=" btn btn-block btn-golden mt-5">Checkout</a></li>
            </ul>
        </div> <!-- End  Offcanvas Addcart Wrapper -->

    </div> <!-- End  Offcanvas Addcart Section -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- ENd Offcanvas Header -->

        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-wishlist-wrapper">
            <h4 class="offcanvas-title">Wishlist</h4>
            <ul class="offcanvas-wishlist">
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-1/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Wheel</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-2/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Vails</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">3 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-3/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="offcanvas-wishlist-action-button">
                <li><a href="#" class="btn btn-block btn-golden">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->

    </div> <!-- End Offcanvas Mobile Menu Section -->

    <!-- Start Offcanvas Search Bar Section -->
    <div id="search" class="search-modal">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-lg btn-golden">Search</button>
        </form>
    </div>
    <!-- End Offcanvas Search Bar Section -->

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>
    <!-- tracking map -->
    <section class="checkout-page section-padding bg-light-theme">
        <div class="container">
            <!-- recipt -->
            <div class="recipt-sec padding-30 mb-xl-30">
                
                <div class="table-responsive">
                    <form action="#" method="post" enctype="multipart/form-data" >
                    
                        
                        <!--display dynamic data for cart-->
                            <?php
                            include "function.php";

							global $conn;
                            $ip_address = getIp();
                            $total_price = 0;
                            $cart_query = "SELECT * FROM cartdetails WHERE ip_address='$ip_address'";
                            $result_query = mysqli_query($conn, $cart_query);
                            $result_count = mysqli_num_rows($result_query);
                            if($result_count>0){
                                echo "
                                <h3>Your Order</h3>
                                <table>
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Delete</th> 
                                    <th colspan='2'>Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                            while($row=mysqli_fetch_array($result_query)){
                                $product_id = $row['prodid'];
                                $select_product = "SELECT * FROM product WHERE prodid='$product_id'";
                                $result_product = mysqli_query($conn, $select_product);
                                while($row_product_price=mysqli_fetch_array($result_product)){
                                    $product_price = array($row_product_price['price']);
                                    $price_table = $row_product_price['price'];
                                    $product_title = $row_product_price['prodname'];
                                    $product_image = $row_product_price['image1'];
                                    $product_values = array_sum($product_price);
                                    $total_price=$total_price+$product_values;
                                    
                                
                        ?>
                            <tr>
                            
                                <td class='product_thumb'><a href='product-details-default.html'>
                                    <img src='assets/images/product/default/home-1/$product_image' alt='no image' style='width: 100px; height: 100px;'></a>
                                </td>
                                <td class='product_name'><a href='productdetails.php'><?php echo $product_title?></a></td>
                                <td class='product-price'><?php echo '$' .$price_table ?></td>
                                <td class='product_quantity'><input min="1" max="100" value="1" type="number" name='quantity'></td>
                                <?php
                                    //updating the quantity on the cart 
                                    $ip_address = getIp();
                                    if (isset($_POST['update_cart'])) {
                                        $quantity = $_POST['quantity'];
                                        $update_cart = "UPDATE `cartdetails` SET quantity=$quantity WHERE ip_address='$ip_address'";
                                        $result_product_quantity = mysqli_query($conn, $update_cart);
                                        $total_price = $total_price*$quantity;
                                    };
                                ?>
                                <td class='product-check'><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></input></td>
                                <td class='product_update'><i class='fa fa-trash-o'></i><input type='submit' value='Remove' name='remove_cart'> </td>
                                <td><a class='product_remove' ><input type='submit' value='Update' name='update_cart' ></a></td>
                                
                                <!--removing data from cart-->
                                <?php remove_cart_data(); ?>
                            </tr>
                            <?php
                            }
                        }
                    }else {
                        echo "<h2 style='text-align: center; color: red; font-size: 50px; padding: 10px; margin: 20px;'>CART IS EMPTY</h2>";
                    }

                        
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="recipt-sec padding-30 mb-0">
                        <?php
                            $ip_address = getIp();
                            $total_price = 0;
                            $cart_query = "SELECT * FROM cartdetails WHERE ip_address='$ip_address'";
                            $result_query = mysqli_query($conn, $cart_query);
                            $result_count = mysqli_num_rows($result_query);
                            if($result_count>0){
                        echo "
                        <div style='display: flex; justify-content: space-around;'>
                        <a href='index-2.php' ><input value='Continue Shopping' style='text-align: center; font-size: 20px; padding: 8px; margin: 10px; background-color: lightgray;'> </a>
                        
                        </div>
                        
                        <h3>Cart Total</h3>
                        <div class='table-responsive'>
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>$total_price</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>Will be given after your order has been approved </td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td> <b>5800</b> </td>
                                    </tr>

                                </tbody>
                            </table>

                            <div class='card-footer padding-15'> 
                                <a href='checkout.php' class='btn-first green-btn text-custom-white full-width fw-500'>Proceed to Checkout
                                </a>
                            </div>


                        </div>
                        ";
                            }else {
                                echo "<a href='index-2.php' style='text-align: right; background-color: gray; color: pink; font-size: 20px; padding: 10px;'>Continue Shopping
                                </a>";
                            }
                        ?>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
    <!-- tracking map -->
    <!-- Footer Start -->
	<footer class="footer-section footer-bg section-top-gap-100">
        <div class="footer-wrapper">
            <!-- Start Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row mb-n6">
                        <div class="col-lg-4 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--green" data-aos="fade-up"
                                data-aos-delay="0">
                                <h5 class="title">INFORMATION</h5>
                                <ul class="footer-nav">
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="contact-us.php">Contact</a></li>
                                    <li><a href="#">Returns</a></li>
                                </ul>
                            </div>
                            <!-- End Footer Single Item -->
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--green" data-aos="fade-up"
                                data-aos-delay="200">
                                <h5 class="title">MY ACCOUNT</h5>
                                <ul class="footer-nav">
                                    <li><a href="my-account.php">My account</a></li>
                                    <li><a href="wishlist.php">Wishlist</a></li>
                                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                    <li><a href="faq.php">Frequently Questions</a></li>
                                    <!--<li><a href="#">Order History</a></li>-->
                                </ul>
                            </div>
                            <!-- End Footer Single Item -->
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--green" data-aos="fade-up"
                                data-aos-delay="600">
                                <h5 class="title">ABOUT US</h5>
                                <div class="footer-about">
                                    <p>We are a team of designers and developers that create high quality Magento,
                                        Prestashop, Opencart.</p>

                                    <address>
                                        <span>Address: Bamenba, Cameroon.</span>
                                        <span>Email: alombangwingche@gmail.com</span>
                                    </address>
                                </div>
                            </div>
                            <!-- End Footer Single Item -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Top -->

            <!-- Start Footer Center -->
            <div class="footer-center">
                <div class="container">
                    <div class="row mb-n6">
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-6">
                            <div class="footer-social" data-aos="fade-up" data-aos-delay="0">
                                <h4 class="title">FOLLOW US</h4>
                                <ul class="footer-social-link">
                                    <li><a href="https://github.com/Alomba-epongseh"><i class="fa fa-github"></i></a></li>
                                    <li><a href="https://twitter.com/alomba_vanilla"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://instagram.com/alombaepong?igshid=MjEwN2IyYWYwYw=="><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://linkedin.com/Epongseh Alomba"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6 mb-6">
                            <div class="footer-newsletter" data-aos="fade-up" data-aos-delay="200">
                                <h4 class="title">DON'T MISS OUT ON THE LATEST</h4>
                                <div class="form-newsletter">
                                    <form action="#" method="post">
                                        <div class="form-fild-newsletter-single-item input-color--green">
                                            <input type="email" placeholder="Your email address..." required>
                                            <button type="submit">SUBSCRIBE!</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Center -->

            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div
                        class="row justify-content-between align-items-center align-items-center flex-column flex-md-row mb-n6">
                        <div class="col-auto mb-6">
                            <div class="footer-copyright">
                                <p class="copyright-text">&copy; 2023 <a href="index-2.php">vanilla</a>. Made with <i
                                        class="fa fa-heart text-danger"></i> by <a href="https://github.com/Alomba-epongseh/e-commerce"
                                        target="_blank">vanilla</a> </p>

                            </div>
                        </div>
                        <div class="col-auto mb-6">
                            <div class="footer-payment">
                                <div class="payment image">
                                    <img src="assets/images/company-logo/pay1.png" alt="">
                                    <img src="assets/images/company-logo/pay2.jpeg" alt="">
                                    <img src="assets/images/company-logo/pay3.png" alt="">
                                    <img src="assets/images/company-logo/pay4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
        </div>
    </footer>
    <!-- Footer End -->
   
    
    <!-- Footer End -->
    <!--<div id="notifications"></div>-->
<!-- DND -->

<!-- jQuery -->
<script src="/assets/js/jquery.min.js"></script>
    <!-- Jquery 2 -->
    <script src="/assets/js/jquery-1.12.4.min.js"></script>
    <!-- Popper -->
    <script src="/assets/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Range Slider -->
    <script src="/assets/js/ion.rangeSlider.min.js"></script>
    <!-- Swiper Slider -->
    <script src="/assets/js/swiper.min.js"></script>
    <!-- Pogo Slider -->
    <script src="/assets/js/jquery.pogo-slider.js"></script>
    <!-- Nice Select -->
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <!-- magnific popup -->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    
    <!-- Wow js -->
    <script src="/assets/js/wow.min.js"></script>
    <!-- sticky sidebar -->
    <script src="/assets/js/sticksy.js"></script>
    <!-- Slick Slider -->
    <script src="/assets/js/slick.min.js"></script>
    <!--====== inview js ======-->
    <script src="/assets/js/jquery.inview.min.js"></script>
    <!--====== counterup js ======-->
    <script src="/assets/js/jquery.countTo.js"></script>
    <!--====== easypiechart js ======-->
    <script src="/assets/js/jquery.easypiechart.js"></script>
    <!-- organza Js -->
    <script src="/assets/js/Weedo.js"></script>
    <!-- Notifications JS -->
    <script src="/assets/js/notifications.js"></script>
    <!-- /Place all Scripts Here -->
    <!-- Notifications JS -->
    <script src="/assets/js/notifications.js"></script>


<!-- GetButton.io widget -->
<!-- GetButton.io widget -->
<!-- GetButton.io widget -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    (function () {
        var options = {
            email: "exitworldwide8@gmail.com", // Email
            whatsapp: "+1(805) 380-5594", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,email", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

<script src="//code.tidio.co/17v4mwmctlmetrifjgpndshnm2vrmykd.js" async></script>



    <!-- Place all Scripts Here -->
    <!-- jQuery -->
   
</body>

</html>

<?php
    if (isset($_GET['delfcart'])) {
        $delfcart = $_GET['delfcart'];
        global $conn;
        $ip = getIp();
        
        $querycart = "DELETE from cart where p_id = '$delfcart' and ip_add = '$ip' limit 1";
        $run_querycart = mysqli_query($conn, $querycart);
        confirm_query($run_querycart);

        $_SESSION['cart_item'] = "Item Removed";

        $currentPage = basename($_SERVER['PHP_SELF']);

        echo "<script> window.open('/cart','_self')</script>";

    }
?>