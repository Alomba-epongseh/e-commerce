<?php

include 'db.php';

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
                            <img class='img-fluid' src='assets/images/blog/$image' alt=''>
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
        $pro_name  = $row_pro['name'];
        $pro_image  = $row_pro['image'];
        $pro_price = $row_pro['price'];

        echo "
        <div class='product-default-single-item product-color--golden'
        data-aos='fade-up' data-aos-delay='0'>
        <div class='image-box'>
            <a href='productdetails.php?prod_id=$pro_id' class='image-link'>
                <img src='admin_area/product_images/$pro_image'
                    alt=''>
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
        $pro_name  = $row_pro['name'];
        $pro_image  = $row_pro['image'];
        $pro_price = $row_pro['price'];
        $pro_desc = $row_pro['description'];
    
        echo "
        <div class='row'>
            <div class='col-xl-5 col-lg-6'>
                <div class='product-details-gallery-area' data-aos='fade-up' data-aos-delay='0'>
                    <!-- Start Large Image -->
                    <div class='product-large-image product-large-image-horaizontal swiper-container'>
                        <div class='swiper-wrapper'>
                            <div class='product-image-large-image swiper-slide zoom-image-hover img-responsive'>
                                <img src='assets/images/product/$pro_image' alt=' No Image'>
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
        $pro_id  = $row_pro['id'];
        $pro_name  = $row_pro['name'];
        $pro_image  = $row_pro['image'];
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
    