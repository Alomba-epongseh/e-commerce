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
                        <h3 class="breadcrumb-title">Privacy Policy</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index-2.php">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.php">Pages</a></li>
                                    <li class="active" aria-current="page">Privacy Policy</li>
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

    <!-- ...::::Start Privacy Policy  Section:::... -->
    <div class="privacy-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="privacy-policy-wrapper">
                        <!-- Start Privacy Policy Single Item -->
                        <div class="privacy-single-item" data-aos="fade-up" data-aos-delay="0">
                            <h3 class="title">What personal data we collect and why we collect it</h3>
                            <h4 class="sub-title">Comments</h4>
                            <p>When visitors leave comments on the site we collect the data shown in the comments form,
                                and also the visitor’s IP address and browser user agent string to help spam detection.
                            </p>
                            <p>An anonymized string created from your email address (also called a hash) may be provided
                                to the Gravatar service to see if you are using it. The Gravatar service privacy policy
                                is available here: https://automattic.com/privacy/. After approval of your comment, your
                                profile picture is visible to the public in the context of your comment.</p>
                        </div> <!-- Start Privacy Policy Single Item -->
                        <!-- Start Privacy Policy Single Item -->
                        <div class="privacy-single-item" data-aos="fade-up" data-aos-delay="0">
                            <h4 class="sub-title">Media</h4>
                            <p>If you upload images to the website, you should avoid uploading images with embedded
                                location data (EXIF GPS) included. Visitors to the website can download and extract any
                                location data from images on the website</p>
                        </div> <!-- Start Privacy Policy Single Item -->
                        <!-- Start Privacy Policy Single Item -->
                        <div class="privacy-single-item" data-aos="fade-up" data-aos-delay="0">
                            <h4 class="sub-title">Cookies</h4>
                            <p>If you leave a comment on our site you may opt-in to saving your name, email address and
                                website in cookies. These are for your convenience so that you do not have to fill in
                                your details again when you leave another comment. These cookies will last for one year
                            </p>
                            <p>If you have an account and you log in to this site, we will set a temporary cookie to
                                determine if your browser accepts cookies. This cookie contains no personal data and is
                                discarded when you close your browser.</p>
                            <p>When you log in, we will also set up several cookies to save your login information and
                                your screen display choices. Login cookies last for two days, and screen options cookies
                                last for a year. If you select “Remember Me”, your login will persist for two weeks. If
                                you log out of your account, the login cookies will be removed.</p>
                            <p>If you edit or publish an article, an additional cookie will be saved in your browser.
                                This cookie includes no personal data and simply indicates the post ID of the article
                                you just edited. It expires after 1 day.</p>
                        </div> <!-- Start Privacy Policy Single Item -->
                        <!-- Start Privacy Policy Single Item -->
                        <div class="privacy-single-item" data-aos="fade-up" data-aos-delay="0">
                            <h4 class="sub-title">Embedded content from other websites</h4>
                            <p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.).
                                Embedded content from other websites behaves in the exact same way as if the visitor has
                                visited the other website</p>
                            <p>These websites may collect data about you, use cookies, embed additional third-party
                                tracking, and monitor your interaction with that embedded content, including tracking
                                your interaction with the embedded content if you have an account and are logged in to
                                that website.</p>
                        </div> <!-- Start Privacy Policy Single Item -->
                        <!-- Start Privacy Policy Single Item -->
                        <div class="privacy-single-item" data-aos="fade-up" data-aos-delay="0">
                            <h4 class="sub-title">How long we retain your data</h4>
                            <p>If you leave a comment, the comment and its metadata are retained indefinitely. This is
                                so we can recognize and approve any follow-up comments automatically instead of holding
                                them in a moderation queue.</p>
                            <p>For users that register on our website (if any), we also store the personal information
                                they provide in their user profile. All users can see, edit, or delete their personal
                                information at any time (except they cannot change their username). Website
                                administrators can also see and edit that information.</p>
                        </div> <!-- Start Privacy Policy Single Item -->
                        <!-- Start Privacy Policy Single Item -->
                        <div class="privacy-single-item" data-aos="fade-up" data-aos-delay="0">
                            <h4 class="sub-title">What rights you have over your data</h4>
                            <p>If you have an account on this site, or have left comments, you can request to receive an
                                exported file of the personal data we hold about you, including any data you have
                                provided to us. You can also request that we erase any personal data we hold about you.
                                This does not include any data we are obliged to keep for administrative, legal, or
                                security purposes.</p>
                        </div> <!-- Start Privacy Policy Single Item -->
                        <!-- Start Privacy Policy Single Item -->
                        <div class="privacy-single-item" data-aos="fade-up" data-aos-delay="0">
                            <h4 class="sub-title">Where we send your data</h4>
                            <p>Visitor comments may be checked through an automated spam detection service.</p>
                        </div> <!-- Start Privacy Policy Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...::::End Privacy Policy Section:::... -->

    <!-- Start Footer Section -->
    <footer class="footer-section footer-bg section-top-gap-100">
        <div class="footer-wrapper">
            <!-- Start Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row mb-n6">
                        <div class="col-lg-4 col-sm-6 mb-6">
                            <!-- Start Footer Single Item -->
                            <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
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
                            <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
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
                            <div class="footer-widget-single-item footer-widget-color--golden" data-aos="fade-up"
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
                                        <div class="form-fild-newsletter-single-item input-color--golden">
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
    <!-- End Footer Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <!-- <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>  -->

    <!--Plugins JS-->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/jquery.lineProgressbar.js"></script>
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/jquery.instagramFeed.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>


</html>