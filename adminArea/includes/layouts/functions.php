<?php

function dirlocal(){
	// active on localhost
	$dirlocal=getcwd();
	$dirlocalseen =	explode("\\", $dirlocal);

	echo '/'.$dirlocalseen[3].'/adminArea/';

	// active on live server

	// echo "/";
}

function dirlocal2(){
	// active on localhost
	$dirlocal=getcwd();
	$dirlocalseen =	explode("\\", $dirlocal);

	return '/'.$dirlocalseen[3].'/adminArea/';

	// active on live server

	// return "/";
}

function redirect_to($new_location){
		header("Location: " . $new_location);
		exit;
	}

// Sanitize functions
// Make sanitizing easy and you will do it often

// Sanitize for HTML output 
function h($string) {
	return htmlspecialchars($string);
}

// Sanitize for JavaScript output
function j($string) {
	return json_encode($string);
}

// Sanitize for use in a URL
function u($string) {
	return urlencode($string);
}

// Getting the user IP address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

//  This file contains basic functions.
function confirm_query($result_set){
	if (!$result_set) {
		die("connection failed");
	}
}

function escapeString($string){
	global $connect;

	$escaped_string = mysqli_real_escape_string($connect, $string);
	return $escaped_string;
}

// Listing Countries
function Allcountries(){
	global $connect;

	$queryCountry = "SELECT * FROM country ORDER BY countryId ASC";
	$run_queryCountry = mysqli_query($connect, $queryCountry);

	while ($rowCountry = mysqli_fetch_array($run_queryCountry)) {
		
		echo '<option value="'.$rowCountry['countryname'].'">'.$rowCountry['countryname'].'</option>';

	}
}

// Get Company Details
function companyD($details){
	global $connect;

	$queryCompany = "SELECT * FROM companyd";
	$run_queryCompany = mysqli_query($connect, $queryCompany);
	confirm_query($run_queryCompany);

	$rowCompany = mysqli_fetch_array($run_queryCompany);
		
	$rowCompanyseen = $rowCompany["$details"];

	return $rowCompanyseen;

}


function password_encrypt($password){
		$hash_format = "$2y$10$"; // Tells PHP to use Blowfish with a "cost" of 10.
		$salt_length = 22; // Blowfish salts should be 22-characters or more.
		$salt = generate_salt($salt_length);
		$format_and_salt = $hash_format . $salt;
		$hash = crypt($password, $format_and_salt);
		return $hash;
	}

function generate_salt($length){
	// Not 100% unique, not 100% random, but good enough for a salt
	// MD5 returns 32 characters
	$unique_random_string = md5(uniqid(mt_rand(), true));

	// Valid characters for a salt are [a-zA-Z0-9./]
	$base64_string = base64_encode($unique_random_string);

	// But not '+' which is valid in base64 encoding
	$modified_base4_string = str_replace('+', '.' , $base64_string);

	// Truncate string to the correct length
	$salt = substr($modified_base4_string, 0, $length);

	return $salt;
}

function password_check($c_pass, $existing_hash){
	// existing hash contains format and salt at start
	$hash = crypt($c_pass, $existing_hash);
	if ($hash === $existing_hash) {
		return true;
	} else{
		return false;
	}
}

	function find_all_customers() {
		global $connect;

		$query =" SELECT * FROM ";
		$query .= " c_reg ";
		$query .= " ORDER BY c_name ASC ";
		$customer_set = mysqli_query($connect, $query); 
		confirm_query($customer_set);
		return $customer_set;
	}

	function find_customer_by_id($customer_id){
		global $connect;
		global $id;

		$safe_customer_id = mysqli_real_escape_string($connect, $customer_id);

		$query  = "SELECT * FROM ";
		$query .= "c_reg ";
		$query .= "WHERE id = {$safe_customer_id} ";
		$query .= "LIMIT 1";
		$customer_set = mysqli_query($connect, $query); 
		confirm_query($customer_set);
		if($customer = mysqli_fetch_assoc($customer_set)){
			return $customer;
		}else{
			return null;
		}
	}

	function find_customer_by_email($s_email){
		global $connect;

		$safe_c_email = mysqli_real_escape_string($connect, $s_email);

		$query  = "SELECT * FROM ";
		$query .= "c_reg ";
		$query .= "WHERE c_email = '{$safe_c_email}' ";
		$query .= "LIMIT 1";
		$customer_set = mysqli_query($connect, $query); 
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

function find_staff_by_name($s_name){
	global $connect;

	$safe_s_name = mysqli_real_escape_string($connect, $s_name);

	$query  = "SELECT * FROM ";
	$query .= "adminlog ";
	$query .= "WHERE adm_name = '{$safe_s_name}' ";
	$query .= " LIMIT 1";
	$staff_set = mysqli_query($connect, $query); 
	confirm_query($staff_set);
	if($staff = mysqli_fetch_assoc($staff_set)){
		return $staff;
	}else{
		return null;
	}
}
function attempt_login_staff($s_name, $s_pass){
		$staff = find_staff_by_name($s_name);
		if ($staff) {
			// Found customer, now check password
			if (password_check($s_pass, $staff["adm_pwd"])) {
				return $staff;
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
		return isset($_SESSION["c_email"]);
	}
	function confirm_logged_in(){
		if (!logged_in()) {
			echo "<script>alert('Sorry! You have to Log In to gain access.')</script>";
			$_SESSION['message'] = "Sorry! You have to Log In to gain access.";
			echo "<script>window.open('login.php', '_self')</script>";
			//redirect_to("customer_login.php");
		}
	}

function staff_logged_in(){
	return isset($_SESSION["username"]);
}

function confirm_staff_logged_in(){
	if (!staff_logged_in()) {
		echo "<script>alert('Sorry! You have to Log In to gain access.')</script>";
		echo "<script>window.open('index.php', '_self')</script>";
		//redirect_to("customer_login.php");
	}
}

// End categories on mobile


// Set timezone
  date_default_timezone_set("UTC");
 
  // Time format is UNIX timestamp or
  // PHP strtotime compatible strings
  function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }
 
    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }
 
    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();
 
    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Create temp time from time1 and interval
      $ttime = strtotime('+1 ' . $interval, $time1);
      // Set initial values
      $add = 1;
      $looped = 0;
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
        // Create new temp time from time1 and interval
        $add++;
        $ttime = strtotime("+" . $add . " " . $interval, $time1);
        $looped++;
      }
 
      $time1 = strtotime("+" . $looped . " " . $interval, $time1);
      $diffs[$interval] = $looped;
    }
    
    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
        break;
      }
      // Add value and interval 
      // if value is bigger than 0
      if ($value > 0) {
        // Add s if value is not 1
        if ($value != 1) {
          $interval .= "s";
        }
        // Add value and interval to times array
        $times[] = $value . " " . $interval;
        $count++;
      }
    }
 
    // Return string with times
    return implode(", ", $times);
  }

?>








