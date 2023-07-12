<?php
    if (isset($_GET['delete_product'])) {
        $product_id=$_GET['delete_product'];
        $delete_product="DELETE FROM `product` WHERE prodid=$product_id";
        $result=mysqli_query($conn,$delete_product);
        if($result){
            echo "<script>alert('Product Deleted')</script>";
            echo "<script>window.open('index.php?view_products','_self')</script>";
        }
    }
?>