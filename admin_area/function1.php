<?php
include_once 'db_connect.php';

$conn = openconn();
function admin_registration(){
    global $conn;
    if (isset($_POST['admin_registration'])) {
        $username = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hash_password = password_hash($password,PASSWORD_DEFAULT);
        $comfirmpassword = $_POST['confirmpassword'];

        //select query used(checking if username already exiist in system)
        $select_query = "SELECT * FROM `admin_table` WHERE admin_name='$username' OR admin_email='$email' ";
        $result = mysqli_query($conn, $select_query);
        $row_count = mysqli_num_rows($result);
        if ($row_count>0) {
            echo "<script>alert('Username or email already exist')</script>";
        }else {
            //checking if passwords match
        if ($password!=$comfirmpassword) {
            echo "<script>alert('Passwords do not match')</script>";
        }else{

        //insert query
        $user_query= "INSERT INTO `admin_table` (admin_name,admin_email,admin_password) VALUES('$username','$email','$hash_password')";
        //echo $user_query;
        //$result_query = mysqli_query($conn, $user_query);
        $user_result=mysqli_query($conn,$user_query);
        if ($user_result) {
           echo "<script>alert('Admin registered')</script>";
           echo "<script>window.open('admin_login.php','_self')</script>";
        }
        }
        }
    }
}
function admin_login(){
    global $conn;
    if (isset($_POST['admin_login'])) {
        $username=$_POST['user_name'];
        $password=$_POST['password'];
        session_start();
        $_SESSION['username'] = $username;

        $select_admin="SELECT * FROM `admin_table` WHERE admin_name='$username'";
        //echo $select_admin;
        $result_admin=mysqli_query($conn,$select_admin);

        $row_count = mysqli_num_rows($result_admin);
        $row_data=mysqli_fetch_assoc($result_admin); //fetching data from the database for the inputted username

        if ($row_count>0) {
            // checking if the inputted password matches the encryted password in the database.
            if (password_verify($password,$row_data['admin_password'])) {
                    echo "<script>alert('Successful Login')</script>";
                    echo "<script>window.open('index.php','_self')</script>";
            }
            else {
            echo "<script>alert('Invalid Credentials')</script>";
            }
        }
    }
}