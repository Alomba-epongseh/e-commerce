<?php //require_once("functions.php") ?>
<?php
// require("constants.php");

// Database Constants
	define("DB_SERVER", 'localhost');
	define("DB_USER", 'nadal');
	define("DB_PASS", 'winifred@123');
	define("DB_NAME", 'nadal123');

$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	if (mysqli_connect_errno()) {
		die("Connect failed:");
	}
?>