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
        <!-- User Quick Action Form -->
        <div class="col-lg-8 col-md-8" style="padding:50px; background-color: lightgray">
            <div>
                <h3 class="col-lg-8 col-md-8" style="text-align: center; color: white; ">LOGIN DETAILS</h3>
                <div id="checkout_login" >
                            <div class="checkout_info">
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="col-12">
                                        <div class="default-form-box">
                                            <label>Username <span>*</span></label>
                                            <input type="text" name="user_email" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="default-form-box">
                                            <label> Password <span>*</span></label>
                                            <input type="password" name="user_password" required>
                                        </div>
                                    </div>
                                    <div class="form_group group_3 default-form-box">
                                        <label class="checkbox-default">
                                            <input type="checkbox">
                                            <span>Remember me</span><br>
                                        </label><br>
                                    </div>
                                    <div class="form_group group_3 default-form-box">
                                        <button class="btn btn-md btn-black-default-hover" type="submit" name="user_login" >Login</button>
                                        <a href="#">Lost your password?</a>
                                    </div>
                                    <div class="form_group group_3 default-form-box">
                                        <p>Don't have an account??  <a href="registration.php" style="color:red">Register Here</a> </p>
                                    </div>
                                </form>
                                <!--php for user registration-->
                                <?php
                                    include_once "function.php"; 
                                    login();   
                                ?>
                            </div>
                        </div>
                <!-- User Quick Action Form -->
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