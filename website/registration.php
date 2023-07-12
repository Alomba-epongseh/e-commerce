<html lang="en">
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
    <!-- ...:::: Start Checkout Section:::... -->
    <div class="container-fluid">
        <div class="checkout_form">
            <div class="col-lg-8 col-md-8" style="padding:50px; background-color: lightgray">
                <form action="registration.php" method="post" enctype="multipart/form-data">
                    <h3>User Account Details</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="default-form-box">
                                <label>First Name <span>*</span></label>
                                <input type="text" name="firstname" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="default-form-box">
                                <label>Last Name <span>*</span></label>
                                <input type="text" name="lastname" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="default-form-box">
                                <label>User Name <span>*</span></label>
                                <input type="text" name="user_name" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="default-form-box">
                                <label> Account password <span>*</span></label>
                                <input placeholder="password" type="password" name="userpassword" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="default-form-box">
                                <label> Confirm password <span>*</span></label>
                                <input placeholder="Confirm password" type="password" name="comfirmpassword" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="default-form-box">
                                <label>Company Name</label>
                                <input type="text" name="companyname" >
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="default-form-box">
                                <label for="country">country <span>*</span></label>
                                <input type="text"name="country" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="default-form-box">
                                <label>Street address <span>*</span></label>
                                <input placeholder="House number and street name" type="text" name="streetaddress" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="default-form-box">
                                <label>Town / City <span>*</span></label>
                                <input type="text" name="town" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="default-form-box">
                                <label>Phone<span>*</span></label>
                                <input type="text" name="phonenumber" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="default-form-box">
                                <label> Email Address <span>*</span></label>
                                <input type="text" name="useremail" required>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="order-notes">
                                <label for="order_note">Order Notes</label>
                                <textarea id="order_note" placeholder="Notes about your order, e.g. special notes for delivery." name="note"></textarea>
                            </div>
                        </div>
                        <div class="order_button pt-3">
                            <button class="btn btn-md btn-black-default-hover" type="submit" name="insert-post" >Submit</button>
                        </div>
                    </div>
                </form>
                <!--php for user registration-->
                <?php 
                    session_start(); 
                    include_once "function.php";
                    user_registration();  
                    
                   
                ?>
            </div>                
        </div>
    </div><!-- ...:::: End Checkout Section:::... --> 
    
    

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>