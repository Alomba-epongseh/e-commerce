<?php

    include 'db.php';

    $conn = openconn();

    //echo "Connected successfully";

    
?>

<?php 

session_start(); 

//include "db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: loginfunction.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: loginfunction.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM register WHERE username ='$uname' AND pasword ='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['pasword'] === $pass) {

                $_SESSION['username'] = $row['username'];

                $_SESSION['email'] = $row['email'];

                $_SESSION['Id'] = $row['Id'];

                header("Location: cart.php");

                exit();

            }
            else{

                header("Location: login.php?error=Incorect User name or password");
        
                exit();
        
            }

        }
        else{

            header("Location: login.php?error=Incorect User name or password");
    
            exit();
    
        }
    

    }

}else{

    header("Location: login.php");

    exit();

}