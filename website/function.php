<?php

include_once 'db.php';

$conn = openconn();

// ========== BLOG PROCEDURES=======//

//function to get blog from database and submit  to website
function getBlog(){

    global $conn;
    $get_blog = "SELECT * FROM blog order by RAND() LIMIT 0,8";
    $run_blog = mysqli_query($conn, $get_blog);

    while ($row_pro = mysqli_fetch_array($run_blog)) {
        $blogid  = $row_pro['blogid'];
        $blogmessage  = $row_pro['blogmessage'];
        $image  = $row_pro['image'];
        $dated = $row_pro['dated'];
        $postedby = $row_pro['postedby'];
        $shortdes = $row_pro['shortdes'];
        $posttitle = $row_pro['posttitle'];

        echo "
        
        <div class='blog-list blog-grid-single-item blog-color--golden' data-aos='fade-up' data-aos-delay='0'>
            <div class='image-box'>
                <a href='blog-single-sidebar-left.php' class='image-link'>
                    <img class='img-fluid' src='assets/images/blog/$image' alt=''>
                </a>
            </div>
            <div class='content'>
                <ul class='post-meta'>
                    <li>POSTED BY : <a href='#' class='author'>$postedby</a></li>
                    <li>ON : <a href='#' class='date'>$dated</a></li>
                </ul>
                <h6 class='title'><a href='blogdetails.php'> $posttitle</a></h6>
                <p>$shortdes</p>

            
                <a href='blogdetails.php?blog_id=$blogid' class='read-more-btn icon-space-left'>Read More <span class='icon'><i class='ion-ios-arrow-thin-right'></i></span></a>
            </div>
        </div>
        
        ";

    }
}

//blog details from database
function blogdetails(){
    global $conn;
    if(isset($_GET['blog_id'])){
        $blog_id = $_GET['blog_id'];
    $get_blog = "SELECT * FROM blog where blogid = $blog_id";
    $run_blog = mysqli_query($conn, $get_blog);
                    
    while ($row_pro = mysqli_fetch_array($run_blog)) {
        $blogid  = $row_pro['blogid'];
        $blogmessage  = $row_pro['blogmessage'];
        $image  = $row_pro['image'];
        $dated = $row_pro['dated'];
        $postedby = $row_pro['postedby'];
        $shortdes = $row_pro['shortdes'];
        $posttitle = $row_pro['posttitle'];
                    
        echo "

            <div class='blog-single-wrapper'>
                        <div class='blog-single-img' data-aos='fade-up' data-aos-delay='0'>
                            <img class='img-fluid' src='../admin_area/images/blog_images/$image' alt=''>
                        </div>
                        <ul class='post-meta' data-aos='fade-up' data-aos-delay='200'>
                            <li>POSTED BY : <a href='#' class='author'>$postedby</a></li>
                            <li>ON : <a href='#' class='date'>$dated</a></li>
                        </ul>
                        <h4 class='post-title' data-aos='fade-up' data-aos-delay='400'>$posttitle</h4>
                        <div class=para-content' data-aos='fade-up' data-aos-delay='600'>
                            <p>$blogmessage</p>
                        </div>
                    </div> <!-- End Blog Single Content Area -->";
                        }
}
}

// ========== PRODUCT PROCEDURES=======//

//function to get product from database and submit  to website
function getPro(){

    global $conn;
    $get_pro = "SELECT * FROM product order by RAND() LIMIT 0,8";
    $run_pro = mysqli_query($conn, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $pro_id  = $row_pro['prodid'];
        $pro_name  = $row_pro['prodname'];
        $pro_image  = $row_pro['image1'];
        $pro_price = $row_pro['price'];

        echo "
        <div class='product-default-single-item product-color--golden'
        data-aos='fade-up' data-aos-delay='0' style='width:250px; margin-left:20px'>
        <div class='image-box'>
            <a href='productdetails.php?prod_id=$pro_id' class='image-link px-auto'>
                <img src='../admin_area/images/product_images/$pro_image'
                    alt='Wrong path' style='width:250px; height:150px;'>
            </a>
            <div class='action-link'>
                <div class='action-link-left'>
                    <a href='index-2.php?add_to_cart=$pro_id' >Add to Cart</a>
                </div>
                <div class='action-link-right'>
                    <a href='#' data-bs-toggle='modal'
                        data-bs-target='#modalQuickview'><i
                            class='icon-magnifier'></i></a>
                    <a href='wishlist.php'><i
                            class='icon-heart'></i></a>
                    <a href='compare.php'><i
                            class='icon-shuffle'></i></a>
                </div>
            </div>
        </div>
        <div class='content'>
            <div class='content-left'>
                <h6 class='title'><a
                        href='productdetails.php?prod_id=$pro_id'>$pro_name</a></h6>
                <ul class='review-star'>
                    <li class='fill'><i class='ion-android-star'></i>
                    </li>
                    <li class='fill'><i class='ion-android-star'></i>
                    </li>
                    <li class='fill'><i class='ion-android-star'></i>
                    </li>
                    <li class='fill'><i class='ion-android-star'></i>
                    </li>
                    <li class='empty'><i class='ion-android-star'></i>
                    </li>
                </ul>
            </div>
            <div class='content-right'>
                <span class='price'>Price: $ $pro_price</span>
            </div>

        </div>
    </div>
        
        ";
     };
};


//function to get product details for a particular product from database and submit to website on click 
function proDetails(){

    global $conn;
    
    if (isset($_GET['prod_id'])) {
        $prod_id = $_GET['prod_id'];
    $get_pro = "SELECT * FROM product where prodid = $prod_id";
    $run_pro = mysqli_query($conn, $get_pro);
    
    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $pro_id  = $row_pro['prodid'];
        $pro_name  = $row_pro['prodname'];
        $pro_image  = $row_pro['image1'];
        $pro_price = $row_pro['price'];
        $pro_desc = $row_pro['proddesc'];
    
        echo "
        <div class='row'>
            <div class='col-xl-5 col-lg-6'>
                <div class='product-details-gallery-area' data-aos='fade-up' data-aos-delay='0'>
                    <!-- Start Large Image -->
                    <div class='product-large-image product-large-image-horaizontal swiper-container'>
                        <div class='swiper-wrapper'>
                            <div class='product-image-large-image swiper-slide zoom-image-hover img-responsive'>
                                <img src='../admin_area/images/product_images/$pro_image'
                                alt='Wrong path'>
                            </div>
                        </div>
                    </div>
                    <!-- End Large Image -->
                </div>
            </div>
            
            <div class='col-xl-7 col-lg-6'>
                <div class='product-details-content-area product-details--golden' >
                <!-- Start  Product Details Text Area-->
                <div class='product-details-text'>
                    <h4 class='title'>$pro_name</h4>
                    <div class='d-flex align-items-center'>
                        <ul class='review-star'>
                            <li class='fill'><i class='ion-android-star'></i></li>
                            <li class='fill'><i class='ion-android-star'></i></li>
                            <li class='fill'><i class='ion-android-star'></i></li>
                            <li class='fill'><i class='ion-android-star'></i></li>
                            <li class='empty'><i class='ion-android-star'></i></li>
                        </ul>
                        <a href='#' class='customer-review ml-2'>(customer review )</a>
                    </div>
                    <div class='price'>$ $pro_price</div>
                    <p>$pro_desc</p>
                </div> <!-- End  Product Details Text Area-->
                <div class='product-details-variable'>
                    <h4 class='title'>Available Options</h4>
                    <!-- Product Variable Single Item -->
                    <div class='variable-single-item'>
                        <div class='product-stock'> <span class='product-stock-in'><i class='ion-checkmark-circled'></i></span> 200 IN STOCK</div>
                    </div>
                    <!-- Product Variable Single Item -->
                    <div class='d-flex align-items-center '>
                        <div class='variable-single-item '>
                            <span>Quantity</span>
                            <div class='product-variable-quantity'>
                                <input min='1' max='100' value='1' type='number'>
                            </div>
                        </div>
    
                        <div class='product-add-to-cart-btn'>
                            <a href='index-2.php?add_to_cart=$pro_id' class='btn btn-block btn-lg btn-black-default-hover'>+ Add To Cart</a>
                        </div>
                    </div>
                    <!-- Start  Product Details Meta Area-->
                    <div class='product-details-meta mb-20'>
                        <a href='wishlist.php' class='icon-space-right'><i class='icon-heart'></i>Add to Wishlist</a>
                        <a href='compare.php' class='icon-space-right'><i class='icon-refresh'></i>Compare</a>
                    </div> <!-- End  Product Details Meta Area-->
                </div> <!-- End Product Variable Area -->
                <!-- Start  Product Details Social Area-->
                <div class='product-details-social'>
                    <span class='title'>SHARE THIS PRODUCT:</span>
                    <ul>
                        <li><a href='#'><i class='fa fa-facebook'></i></a></li>
                        <li><a href='#'><i class='fa fa-twitter'></i></a></li>
                        <li><a href='#'><i class='fa fa-pinterest'></i></a></li>
                        <li><a href='#'><i class='fa fa-google-plus'></i></a></li>
                        <li><a href='#'><i class='fa fa-linkedin'></i></a></li>
                    </ul>
                </div> <!-- End  Product Details Social Area-->
            </div>
        </div>
    
        ";
     };
    };
    }


// ========== SEARCH PROCEDURES=======//

//function to search item or product

function search(){

    if(isset($_GET['search'])){
    
    global $conn;
    
    $search_query = $_GET['user_query'];
    $get_pro = "SELECT * FROM product where keywords like '%$search_query%'";
    $run_pro = mysqli_query($conn, $get_pro);
    
    while ($row_pro = mysqli_fetch_array($run_pro)) {
        $pro_id  = $row_pro['prodid'];
        $pro_name  = $row_pro['prodname'];
        $pro_image  = $row_pro['image1'];
        $pro_price = $row_pro['price'];
    
        echo "
        <div class='product-default-single-item product-color--golden'
        data-aos='fade-up' data-aos-delay='0'>
        <div class='image-box'>
            <a href='productdetails.php' class='image-link'>
                <img src='admin_area/product_images/$pro_image'
                    alt='no image'>
            </a>
            <div class='action-link'>
                <div class='action-link-left'>
                    <a href='index-2.php?add_to_cart=$pro_id'>Add to Cart</a>
                </div>
                <div class='action-link-right'>
                    <a href='#' data-bs-toggle='modal'
                        data-bs-target='#modalQuickview'><i
                            class='icon-magnifier'></i></a>
                    <a href='wishlist.php'><i
                            class='icon-heart'></i></a>
                    <a href='compare.php'><i
                            class='icon-shuffle'></i></a>
                </div>
            </div>
        </div>
        <div class='content'>
            <div class='content-left'>
                <h6 class='title'><a
                        href='productdetails.php?pro_id = $pro_id'>$pro_name</a></h6>
                <ul class='review-star'>
                    <li class='fill'><i class='ion-android-star'></i>
                    </li>
                    <li class='fill'><i class='ion-android-star'></i>
                    </li>
                    <li class='fill'><i class='ion-android-star'></i>
                    </li>
                    <li class='fill'><i class='ion-android-star'></i>
                    </li>
                    <li class='empty'><i class='ion-android-star'></i>
                    </li>
                </ul>
            </div>
            <div class='content-right'>
                <span class='price'>Price: $ $pro_price</span>
            </div>
    
        </div>
    </div>
        
        ";
     };
    };
    };



// ========== CART PROCEDURES=======//

//getting visitors ip address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}


//cart function
function cart(){
    if(isset($_GET['add_to_cart'])){
        global $conn;
        $ip_address = getIp();
        $get_product_ip = $_GET['add_to_cart'];
        $select_query = "SELECT * FROM cartdetails WHERE ip_address='$ip_address' AND prodid='$get_product_ip'";
        $result_query = mysqli_query($conn, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if($num_of_rows>0){
            echo "<script>alert('Data already found in cart');</script>";
            echo "<script>window.open('index-2.php','_self');</script>";
        }
        else{
            $insert_query = "INSERT INTO cartdetails (prodid, ip_address, quantity) VALUES ($get_product_ip, '$ip_address', 0)";
            $result_query = mysqli_query($conn, $insert_query);
            //echo "$insert_query";
            echo "<script>alert(' Data inserted successfully');</script>";
            echo "<script>window.open('index-2.php','_self');</script>";
        };
    };
}


//function to get cart item number
function cart_item(){
    if(isset($_GET['add_to_cart'])){
        global $conn;
        $ip_address = getIp();
        $select_query = "SELECT * FROM cartdetails WHERE ip_address='$ip_address'";
        $result_query = mysqli_query($conn, $select_query);
        $num_of_items = mysqli_num_rows($result_query);
    }else{
        global $conn;
        $ip_address = getIp();
        $select_query = "SELECT * FROM cartdetails WHERE ip_address='$ip_address'";
        $result_query = mysqli_query($conn, $select_query);
        $num_of_items = mysqli_num_rows($result_query);
        };
    echo $num_of_items;
    };

    //function to get total price
    function total_cart_price(){
        global $conn;
        $ip_address = getIp();
        $total_price = 0;
        $cart_query = "SELECT * FROM cartdetails WHERE ip_address='$ip_address'";
        $result_query = mysqli_query($conn, $cart_query);

        while($row=mysqli_fetch_array($result_query)){
            $product_id = $row['prodid'];
            $select_product = "SELECT * FROM product WHERE prodid='$product_id'";
            $result_product = mysqli_query($conn, $select_product);
            while($row_product_price=mysqli_fetch_array($result_product)){
                $product_price = array($row_product_price['price']);
                $product_values = array_sum($product_price);
                $total_price=$total_price+$product_values;
            }
        }
        echo $total_price;
    }

    //function to remove data from cart
    function remove_cart_data(){
        global $conn;
        if (isset($_POST['remove_cart'])) {
            foreach($_POST['removeitem'] as $removed_id){
                echo $removed_id;
                $delete_query = "DELETE FROM cartdetails WHERE prodid=$removed_id";
                $result_delete = mysqli_query($conn, $delete_query);
                if ($result_delete) {
                    echo "<script>window.open('cart.php','_self');</script>";
                }
            }
        }
    }
    
    // ========== CHECKOUT PROCEDURES=======//

    //registering new user function

function user_registration(){
    global $conn;
    if (isset($_POST['insert-post'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['user_name'];
        $userpassword = $_POST['userpassword'];
        $hash_password = password_hash($userpassword,PASSWORD_DEFAULT);
        $comfirmpassword = $_POST['comfirmpassword'];
        //$hash_comfirm_password=password_hash($comfirmpassword,PASSWORD_DEFAULT);
        $companyname = $_POST['companyname'];
        $country = $_POST['country'];
        $streetaddress = $_POST['streetaddress'];
        $town = $_POST['town'];
        $phonenumber = $_POST['phonenumber'];
        $useremail = $_POST['useremail'];
        $note = $_POST['note'];
        $useripaddress = getIp();
        //select query used(checking if username already exiist in system)
        $select_query = "SELECT * FROM user_table WHERE username='$username' OR email='$useremail' ";
        $result = mysqli_query($conn, $select_query);
        $row_count = mysqli_num_rows($result);
        if ($row_count>0) {
            echo "<script>alert('Username or email already exist')</script>";
        }else {
            //checking if passwords match
        if ($userpassword!=$comfirmpassword) {
            echo "<script>alert('Passwords do not match')</script>";
        }else{

        //insert query
        $user_query= "INSERT INTO `user_table` (first_name,last_name,username,user_password,confirm_password,company,country,street_address,town,phone_number,email,order_notes,user_ipaddress) VALUES('$firstname','$lastname','$username','$hash_password','$comfirmpassword','$companyname','$country','$streetaddress','$town',$phonenumber,'$useremail','$note','$useripaddress')";
        echo $user_query;
        //$result_query = mysqli_query($conn, $user_query);
        $user_result=mysqli_query($conn,$user_query);
        if ($user_result) {
           echo "<script>alert('User registered')</script>";
           echo "<script>window.open('login-user.php','_self')</script>";
        }
        }
        }

        
    }
}

//selecting cart items
function login(){
    global $conn;
    if (isset($_POST['user_login'])) {
        $user_email=$_POST['user_email'];
        $user_password=$_POST['user_password'];
        session_start();
        $_SESSION['username'] = $user_email;

        $select_query = "SELECT * FROM `user_table` WHERE username='$user_email' ";
        $result_query = mysqli_query($conn, $select_query);
        $row_count = mysqli_num_rows($result_query);
        $row_data=mysqli_fetch_assoc($result_query); //fetching data from the database for the inputted username
        $user_ip=getIp();

        //cart items
        $select_cart_query = "SELECT * FROM cartdetails WHERE ip_address='$user_ip' ";
        $result_cart_query = mysqli_query($conn, $select_cart_query);
        $row_count_cart = mysqli_num_rows($result_cart_query);

        if ($row_count>0) {
            // checking if the inputted password matches the encryted password in the database.
            if (password_verify($user_password,$row_data['user_password'])) {
                //checking if user has contain in cart
                if ($row_count==1 and $row_count_cart==0) {
                    echo "<script>alert('Successful Login')</script>";
                    echo "<script>window.open('profile.php','_self')</script>";
                }else{
                    echo "<script>alert('Successful Login')</script>";
                    echo "<script>window.open('payment.php','_self')</script>";
                }
                
            }else {
                echo "<script>alert('Invalid Credentials')</script>";
            }
            
        }else {
            echo "<script>alert('Invalid Credentials')</script>";
        }
    }
}



//getting user order details
function get_user_order_details(){
    global $conn;
    $username=$_SESSION['username'];
    $get_details="SELECT * FROM `user_table` where username='$username'";
    $result_query = mysqli_query($conn, $get_details);
    while ($row_query=mysqli_fetch_array($result_query)) {
       $user_id=$row_query['user_id'];
       if (!isset($_GET['edit_account'])) {
            if (!isset($_GET['my_orders'])) {
                if (!isset($_GET['delete_account'])) {
                    //selecting from table user
                    $get_order="SELECT * FROM `user_order` where user_id=$user_id and order_status='pending'";
                    $result_get_order=mysqli_query($conn,$get_order);
                    $row_count=mysqli_num_rows($result_get_order);
                    if ($row_count>0) {
                         echo "<h2 class='text-center mt-2'> You have <span class='text-danger'>$row_count</span> orders</h2>;
                                <p><a href='profile.php?my_orders' class='text-dark'>Order Details</a></p>";
                    }else{
                        echo "<h2 class='text-center'> You have zero pending orders</h2>
                                <p><a href='index-2.php' class='text-dark'>Explores Site</a></p>";
                    }
                   
                }
            }
        }
    }

}