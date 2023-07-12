<?php

session_start();
session_unset();
session_destroy();

header("Location: admin_login.php"); //used to redirect user to a particular page

exit();

?>
