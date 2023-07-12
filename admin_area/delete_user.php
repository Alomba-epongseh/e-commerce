
<?php
    if (isset($_GET['delete_user'])) {
        $user_id=$_GET['delete_user'];
        $delete_user="DELETE FROM `user_table` WHERE user_id=$user_id";
        $result=mysqli_query($conn,$delete_user);
        if($result){
            echo "<script>alert('User Deleted')</script>";
            echo "<script>window.open('index.php?list_users','_self')</script>";
        }
    }
?>
