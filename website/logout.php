<?php

session_start();
session_unset();
session_destroy();

header("Location: index-2.php"); //used to redirect user to a particular page

exit();

?>
