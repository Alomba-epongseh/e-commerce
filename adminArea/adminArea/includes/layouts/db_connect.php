<?php //require_once("functions.php") ?>
<?php
// require("constants.php");

// Database Constants
	define("DB_SERVER", 'localhost');
	define("DB_USER", 'root');
	define("DB_PASS", 'templenoir@yahoo1');
	define("DB_NAME", 'rxanabolics');

$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	if (mysqli_connect_errno()) {
		die("Connect failed:");
	}
?>