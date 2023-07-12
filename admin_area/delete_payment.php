
<?php
    if (isset($_GET['delete_payment'])) {
        $payment_id=$_GET['delete_payment'];
        $delete_payment="DELETE FROM `user_payment` WHERE payment_id=$payment_id";
        $result=mysqli_query($conn,$delete_payment);
        if($result){
            echo "<script>alert('Payment Deleted')</script>";
            echo "<script>window.open('index.php?all_payments','_self')</script>";
        }
    }
?>