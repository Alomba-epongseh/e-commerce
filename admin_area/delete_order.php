
<?php
    if (isset($_GET['delete_order'])) {
        $order_id=$_GET['delete_order'];
        $delete_order="DELETE FROM `user_order` WHERE order_id=$order_id";
        $result=mysqli_query($conn,$delete_order);
        if($result){
            echo "<script>alert('Order Deleted')</script>";
            echo "<script>window.open('index.php?list_order','_self')</script>";
        }
    }
?>