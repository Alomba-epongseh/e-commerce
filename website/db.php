<?php
function openconn(){
    $dbhost = "localhost";
    $dbuser = "Vanilla";
    $dbpass = "Vanibelle";
    $db = "vanilla's shop";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

    if (mysqli_connect_errno()) {
        die("connection Failed");
    }

    return $conn;
}

function closeconn($conn){
    $conn -> close();
}

?>