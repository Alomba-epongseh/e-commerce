<?php include_once "assets\includes\head.php"; 
 session_start();
?>

<body>
    <?php include_once "assets\includes\header.php" ?>

    <!-- Start Mobile Header -->
    <div class="mobile-header mobile-header-bg-color--white section-fluid d-lg-block d-xl-none">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <!-- Start Mobile Left Side -->
                    <div class="mobile-header-left">
                        <ul class="mobile-menu-logo">
                            <li>
                                <a href="index.php">
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
                        <ul class="header-action-link action-color--black action-hover-color--green">
                            <li>
                                <a href="#search">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    <i class="icon-heart"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    <i class="icon-bag"></i>
                                    <span class="item-count"></span>
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
                                echo "<li><a href='login-user.php'>Login</a></li>";
                            }else{
                                echo "<li><a href='profile.php'>My Account</a></li>";
                            }
                        ?>

                    </ul>
                </div> <!-- End Mobile Menu Nav -->
            </div> <!-- End Mobile Menu -->

            <!-- Start Mobile contact Info -->
            <div class="mobile-contact-info">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/vanillalogo.jpg" alt=""></a>
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

    <!-- Start Offcanvas Search Bar Section -->
    <div id="search" class="search-modal">
        <button type="button" class="close">×</button>
        <form action="#">
            <input type="search" name="user_query" placeholder="type keyword(s) here" />
            <a href="#results" ><button type="submit" name="search" class="btn btn-lg btn-golden">Search</button></a>
        </form>
    </div>
    <!-- End Offcanvas Search Bar Section -->

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- Start Hero Slider Section-->
    <div class="hero-slider-section">
        <!-- Slider main container -->
        <div class="hero-slider-active swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg">
                        <img src="assets/images/hero-slider/home-2/hero-slider-1.jpg" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="subtitle">Premium Facial Skincare</h4>
                                        <h1 class="title">A Natural &<br> Organic Skincare</h1>
                                        <a href="product-details-default.php" class="btn btn-lg btn-outline-green">shop
                                            now </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
                <!-- Start Hero Single Slider Item -->
                <div class="hero-single-slider-item swiper-slide">
                    <!-- Hero Slider Image -->
                    <div class="hero-slider-bg" >
                        <img src="assets/images/makeup/lipstick1.jpg" alt="">
                    </div>
                    <!-- Hero Slider Content -->
                    <div class="hero-slider-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="hero-slider-content">
                                        <h4 class="subtitle">Made of Fresh Ingredients </h4>
                                        <h1 class="title"> A Natural & <br> Trusted Brand</h1>
                                        <a href="product-details-default.php" class="btn btn-lg btn-outline-green">shop
                                            now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Hero Single Slider Item -->
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination active-color-green"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev d-none d-lg-block"></div>
            <div class="swiper-button-next d-none d-lg-block"></div>
        </div>
    </div>
    <!-- End Hero Slider Section-->

    <!-- Start Company Logo Section -->
    <div class="company-logo-section section-top-gap-100 section-fluid">
        <div class="company-logo-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo-slider default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container company-logo-slider">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/brand6.jpeg" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/brand7.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/brand9.jpeg" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/brand1.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    <!-- Start Company Logo Single Item -->
                                    <div class="company-logo-single-item swiper-slide">
                                        <div class="image"><img class="img-fluid"
                                                src="assets/images/company-logo/brand2.png" alt=""></div>
                                    </div>
                                    <!-- End Company Logo Single Item -->
                                    </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev d-none d-md-block"></div>
                            <div class="swiper-button-next d-none d-md-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Company Logo Section -->

    <!-- Start Banner Section -->
    <div class="banner-section section-top-gap-100 section-fluid">
        <div class="banner-wrapper">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-md-4 col-12 mb-6">
                        <!-- Start Banner Single Item -->
                        <div class="banner-single-item banner-style-5 img-responsive" data-aos="fade-up"
                            data-aos-delay="0">
                            <a href="product-details-default.php" class="image banner-animation">
                                <img src="assets/images/banner/banner-style-5-img-1.jpg" alt="">
                            </a>
                        </div>
                        <!-- End Banner Single Item -->
                    </div>
                    <div class="col-md-4 col-12 mb-6">
                        <!-- Start Banner Single Item -->
                        <div class="banner-single-item banner-style-5 img-responsive" data-aos="fade-up"
                            data-aos-delay="200">
                            <a href="product-details-default.php" class="image banner-animation">
                                <img src="assets/images/banner/banner-style-5-img-2.jpg" alt="">
                            </a>
                        </div>
                        <!-- End Banner Single Item -->
                    </div>
                    <div class="col-md-4 col-12 mb-6">
                        <!-- Start Banner Single Item -->
                        <div class="banner-single-item banner-style-5 img-responsive" data-aos="fade-up"
                            data-aos-delay="400">
                            <a href="product-details-default.php" class="image banner-animation">
                                <img src="assets/images/banner/banner-style-5-img-3.jpg" alt="">
                            </a>
                        </div>
                        <!-- End Banner Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Section -->

    <!-- Start Product Default Slider Section -->
    <div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">the New arrivals</h3>
                                <p>Preorder now to receive exclusive deals & gifts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-1row default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-1row">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- End Product Default Single Item -->
                                    <!-- Start Product Default Single Item -->
                                    <?php
                                        include "function.php";
                                        getPro()
                                    ?>

                                    <!-- End Product Default Single Item -->
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Default Slider Section -->

    <!-- Start Banner Section -->
    <div class="banner-section section-top-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Start Banner Single Item -->
                    <div class="banner-single-item banner-style-6 banner-animation img-responsive" data-aos="fade-up"
                        data-aos-delay="0">
                        <div class="image">
                            <img src="assets/images/banner/banner-style-6-img-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h6 class="sub-title">JASMINE GREEN TEA</h6>
                            <h2 class="title">Herbivore Botanicals
                                Basic Collection</h2>
                            <p>On a mission to create all-natural skin care that delivers tangible results, Herbivore
                                ensures every ingredient within their formulas has a specific purpose, resulting in
                                highly active.</p>
                            <a href="product-details-default.php"
                                class="btn btn-lg btn-outline-green icon-space-left"><span
                                    class="d-flex align-items-center">Browse <i
                                        class="ion-ios-arrow-thin-right"></i></span></a>
                        </div>
                    </div>
                    <!-- End Banner Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Section -->

    <!-- Start Service Section -->
    <div class="service-promo-section section-top-gap-100">
        <div class="service-wrapper">
            <div class="container">
                <div class="row">
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                            <div class="image">
                                <img src="assets/images/icons/service-promo-5.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">FREE SHIPPING</h6>
                                <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="assets/images/icons/service-promo-6.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">30 DAYS MONEY BACK</h6>
                                <p>100% satisfaction guaranteed, or get your money back within 30 days!</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="image">
                                <img src="assets/images/icons/service-promo-7.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">SAFE PAYMENT</h6>
                                <p>Pay with the world’s most popular and secure payment methods.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                    <!-- Start Service Promo Single Item -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="image">
                                <img src="assets/images/icons/service-promo-8.png" alt="">
                            </div>
                            <div class="content">
                                <h6 class="title">LOYALTY CUSTOMER</h6>
                                <p>Card for the other 30% of their purchases at a rate of 1% cash back.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Promo Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Section -->

    <!-- Start Banner Section -->
    <div class="banner-section section-top-gap-100">
        <div class="banner-wrapper clearfix">
            <!-- Start Banner Single Item -->
            <div class="banner-single-item banner-style-4 banner-animation banner-color--green float-left"
                data-aos="fade-up" data-aos-delay="0">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-4-img-5.jpg" alt="">
                </div>
                <a href="product-details-default.php" class="content">
                    <div class="inner">
                        <h4 class="title">Foundations</h4>
                        
                    </div>
                    <span class="round-btn"><i class="ion-ios-arrow-thin-right"></i></span>
                </a>
            </div>
            <!-- End Banner Single Item -->
            <!-- Start Banner Single Item -->
            <div class="banner-single-item banner-style-4 banner-animation banner-color--green float-left"
                data-aos="fade-up" data-aos-delay="200">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-4-img-6.jpg" alt="">
                </div>
                <a href="product-details-default.php" class="content">
                    <div class="inner">
                        <h4 class="title">Lightening</h4>
                        
                    </div>
                    <span class="round-btn"><i class="ion-ios-arrow-thin-right"></i></span>
                </a>
            </div>
            <!-- End Banner Single Item -->
            <!-- Start Banner Single Item -->
            <div class="banner-single-item banner-style-4 banner-animation banner-color--green float-left"
                data-aos="fade-up" data-aos-delay="400">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-4-img-7.jpg" alt="">
                </div>
                <a href="product-details-default.php" class="content">
                    <div class="inner">
                        <h4 class="title">Conditioning</h4>
                        
                    </div>
                    <span class="round-btn"><i class="ion-ios-arrow-thin-right"></i></span>
                </a>
            </div>
            <!-- End Banner Single Item -->
            <!-- Start Banner Single Item -->
            <div class="banner-single-item banner-style-4 banner-animation banner-color--green float-left"
                data-aos="fade-up" data-aos-delay="600">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-4-img-8.jpg" alt="">
                </div>
                <a href="product-details-default.php" class="content">
                    <div class="inner">
                        <h4>Lipsticks</h4>
                        
                    </div>
                    <span class="round-btn"><i class="ion-ios-arrow-thin-right"></i></span>
                </a>
            </div>
            <!-- End Banner Single Item -->
        </div>
    </div>
    <!-- End Banner Section -->

    <!-- Start Product List View Slider Section -->
    <div class="product-list-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">Our Products</h3>
                                <p>Add our beauty products to your weekly lineup.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-list-slider-3rows default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-listview-slider-4grid-3rows">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Displaying Products from database -->
                                    <?php

                                        $get_pro = "SELECT * FROM product order by RAND() LIMIT 0,50";
                                        $run_pro = mysqli_query($conn, $get_pro);

                                        while ($row_pro = mysqli_fetch_array($run_pro)) {
                                            $pro_id  = $row_pro['prodid'];
                                            $pro_name  = $row_pro['prodname'];
                                            $pro_image  = $row_pro['image1'];
                                            $pro_price = $row_pro['price'];

                                            echo "
                                                <div class='product-listview-single-item product-color--green swiper-slide'>
                                                    <div class='image-box'>
                                                        <a href='product-details-default.php' class='image-link'>
                                                            <img img src='../admin_area/images/product_images/$pro_image'
                                                            alt='Wrong path' style='width:90px; height:90px;'>
                                                        </a>
                                                    </div>
                                                    <div class='content'>
                                                        <h6 class='title'><a href='product-details-default.php'>$pro_name</a></h6>
                                                        <ul class='review-star'>
                                                            <li class='fill'><i class='ion-android-star'></i></li>
                                                            <li class='fill'><i class='ion-android-star'></i></li>
                                                            <li class='fill'><i class='ion-android-star'></i></li>
                                                            <li class='fill'><i class='ion-android-star'></i></li>
                                                            <li class='empty'><i class='ion-android-star'></i></li>
                                                        </ul>
                                                        <span class='price'> $pro_price</span>
                                                    </div>
                                                </div>
    
                                            ";
                                        }

                                    ?>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev d-none d-md-block"></div>
                            <div class="swiper-button-next d-none d-md-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product List View Slider Section -->

    <!-- Start Banner Section -->
    <div class="banner-section section-top-gap-100">
        <div class="banner-wrapper clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Banner Single Item -->
                        <div class="banner-single-item banner-style-13 banner-color--green" data-aos="fade-up"
                            data-aos-delay="0">
                            <div class="image">
                                <img src="assets/images/banner/banner-style-13-img-1.jpg" alt="">
                                <div class="content">
                                    <div class="text">
                                        <h5 class="sub-title">SALE 15% OFF YOUR 1ST PURCHASE</h5>
                                        <h2 class="title">HONO ORGANIC SKIN CARE</h2>

                                        <a href="product-details-default.php"
                                            class="btn btn-lg btn-green icon-space-left"><span
                                                class="d-flex align-items-center">Shop Now <i
                                                    class="ion-ios-arrow-thin-right"></i></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Banner Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Section -->

    <!-- Start Footer Section -->
    <?php include_once "assets\includes\hooter.php" ?>
    <!-- End Footer Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    
    <!-- Start Modal Quickview cart -->
    <!-- End Modal Quickview cart -->

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <?php include "assets\includes\jslinks.php" ?>
</body>


</html>

<!--calling cart function-->
<?php

cart();

?>


 <?php cart_item() ?> 
 <?php total_cart_price() ?>