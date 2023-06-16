<?php

include 'db.php';

$conn = openconn();


// ========== LOGIN PROCEDURES=======

function password_check($c_pass, $existing_hash){
	// existing hash contains format and salt at start
	$hash = crypt($c_pass, $existing_hash);
	if ($hash === $existing_hash) {
		return true;
	} else{
		return false;
	}
}

function find_customer_by_email($s_email){
	global $conn;

	$safe_c_email = mysqli_real_escape_string($conn, $s_email);

	$query  = "SELECT * FROM ";
	$query .= "c_reg ";
	$query .= "WHERE c_email = '{$safe_c_email}' ";
	$query .= "LIMIT 1";
	$customer_set = mysqli_query($conn, $query); 
	confirm_query($customer_set);
	if($customer = mysqli_fetch_assoc($customer_set)){
		return $customer;
	}else{
		return null;
	}
}

function attempt_login($s_email, $s_pass){
	$customer = find_customer_by_email($s_email);
	if ($customer) {
		// Found customer, now check password
		if (password_check($s_pass, $customer["c_pwd"])) {
			return $customer;
		} else {
			// Password does not match
			return false;
		}
	} else {
		// customer not found
		return false;
	}
}
	
function logged_in(){
	if(isset($_SESSION["c_email"])){
		return $_SESSION["c_email"];	
	}else{
		return "Guest";
	}
	
}

function confirm_logged_in(){
	if (logged_in()=="Guest") {
		echo "<script>alert('Sorry! You have to Log In to gain access.')</script>";
		$_SESSION['message'] = "Sorry! You have to Log In to gain access.";
		echo "<script>window.open('login.php', '_self')</script>";
	}
}

// ========== END LOGIN PROCEDURES=======


//  Checking if a query is correct.
function confirm_query($result_set){
	if (!$result_set) {
		die("connection failed");
	}
}



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
	global $conn;
	if (isset($_GET['add_cart'])) {
		$ip = getIp();
		$clientEmail = logged_in();
		$pro_id = $_GET['add_cart'];
		$check_pro = "SELECT * from cart where (ip_add='$ip' OR clientEmail='$clientEmail') AND p_id='$pro_id'";
		$run_check = mysqli_query($conn, $check_pro);
		if (mysqli_num_rows($run_check)>0) {
			echo " Sorry!!! the item you selected already exists in your Cart." . "</br>" . "<a href='/' style='background-color:#9000ff; line-height:100px; color:#fff;'>Please go back and add another item. Thanks </a>";
		} else{
			$insert_pro = "insert into cart (p_id,ip_add) values ('$pro_id', '$ip')";
			$run_pro = mysqli_query($conn, $insert_pro);
			echo "<script> window.open('/','_self')</script>";
		}
	}
}

// Total item in the cart
function total_items_in_cart() {
	if (isset($_GET['add_cart'])) {
		global $conn;
		$ip = getIp();
		$clientEmail = logged_in();
		$get_items = "select * from cart where (ip_add='$ip' OR clientEmail='$clientEmail')";
		$run_items = mysqli_query($conn, $get_items);
		$count_items = mysqli_num_rows($run_items);
	} else {
		global $conn;
		$ip = getIp();
		$clientEmail = logged_in();
		$get_items = "select * from cart where (ip_add='$ip' OR clientEmail='$clientEmail')";
		$run_items = mysqli_query($conn, $get_items);
		$count_items = mysqli_num_rows($run_items);
	}
	echo $count_items;
}

// Getting the total price
function total_price_items_cart(){
	$total = 0;
	global $conn;
	$ip = getIp();
	$clientEmail = logged_in();
	$get_client_cart_items = "select * from cart where (ip_add='$ip' OR clientEmail='$clientEmail')";
	$run_client_cart_get_items = mysqli_query($conn, $get_client_cart_items);

	while ($p_price = mysqli_fetch_array($run_client_cart_get_items)) {
		
		$product_price = array($p_price['new_price']);
		$values = array_sum($product_price);
		$total += $values;
	}
	echo "$ ". $total;
}

// Getting the total price
function total_min_price(){
	$total = 0;
	global $conn;
	$ip = getIp();
	$clientEmail = logged_in();
	$get_client_cart_items = "select * from cart where (ip_add='$ip' OR clientEmail='$clientEmail')";
	$run_client_cart_get_items = mysqli_query($conn, $get_client_cart_items);

	while ($p_price = mysqli_fetch_array($run_client_cart_get_items)) {
		
		$product_price = array($p_price['new_price']);
		$values = array_sum($product_price);
		$total += $values;
	}
	return $total;
}





function details_of_items_in_cart(){
	global $conn;
	// Get Client's IP Address and Email
	$ip = getIp();
	$clientEmail = logged_in();
	//Select items from cart base on client's IP OR Email
	$cus_cart = "SELECT * FROM cart WHERE (ip_add='$ip' OR clientEmail='$clientEmail')";
	$run_cus_cart = mysqli_query($conn, $cus_cart);
	confirm_query($run_cus_cart);
	//Loop through cart seen results and collect respective product ID's
	while ($rowcart = mysqli_fetch_assoc($run_cus_cart)) {
	  // Assign product ID's from client's CART to a variable ($prod_id)
	  $prod_id = $rowcart['p_id'];
	  // Select items from products table base on $prod_id 
	  $pro_details = "SELECT * FROM product WHERE prod_id='$prod_id'";
	  $run_pro_details = mysqli_query($conn, $pro_details);
	  confirm_query($run_pro_details);
	  // Loop to give product's name and photo from products table
	  	while ($rowprod = mysqli_fetch_assoc($run_pro_details)) {
				//Edit the HTML in this section based on the template you are working with
			echo '<div class="cat-product-box">
					    <div class="cat-product">
					        <div class="cat-name">
					            <a href="#">
					                <p class="text-light-green"><span class="text-dark-white"></span> '.$rowprod['name'].'</p> <span class="text-light-white">'. $rowcart['qty'].'</span>
					            </a>
					        </div>
					        <div class="price">
					            <a href="#" class="text-dark-white fw-500">
					                $'.$rowcart['unitPrice'].'
					            </a>
					        </div>
					        <div class="delete-btn">
					            <a href="/delete/'.$rowprod['id'].'" class="text-dark-white"> <i class="far fa-trash-alt"></i> </a>
					        </div>
					    </div>
					</div>';
			
	  	} //end While loop 2
	} //end While loop 1 
}