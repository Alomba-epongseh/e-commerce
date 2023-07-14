<?php include "function.php";
error_reporting(E_ALL);

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
}

//getting total items and total price of all items
$get_ip_add = getIp();
$total_price = 0;
$cart_query_price="SELECT * FROM `cartdetails` WHERE ip_address='$get_ip_add'";
$cart_result_price = mysqli_query($conn,$cart_query_price);
$invoice_number=mt_rand();
$status='pending';

$count_products=mysqli_num_rows($cart_result_price);
while ($row_price=mysqli_num_rows($cart_result_price)) {
    $product_id=$row_price['prodid'];
    echo gettype($product_id);
    echo var_dump($product_id);
    $select_product="SELECT * FROM `product` WHERE prodid='$product_id'";
    $result_product = mysqli_query($conn,$select_product);
    while ($row_product_price=mysqli_num_rows($result_product)) {
        $product_price=array($row_product_price['price']);
        $product_values=array_sum($product_price);
        $total_price=$total_price+$product_values;
    }
}

 //getting quantity from cart
 $get_cart="SELECT * FROM `cartdetails`";
 $run_cart=mysqli_query($conn, $get_cart);
 $get_item_quantity=mysqli_fetch_array($run_cart);
 $quantity=$get_item_quantity['quantity'];
 if ($quantity==0) {
    $quantity=1;
    $subtotal=$total_price;
 }else {
    $quantity=$quantity;
    $subtotal=$total_price*$quantity;
 }

 //inserting data into the user order table in the database
 $insert_orders="INSERT INTO `user_orders` (user_id,amount_due, invoice_number, total_products, order_date, order_status) VALUES ('$user_id','$subtotal','$invoice_number','$count_products',NOW(),'$status')";
 $result_query=mysqli_query($conn,$insert_orders);
 if ($result_query) {
    echo "<script>alert('order successfully submitted')</script>";
    echo "<script>window.open('my-account.php','_self')</script>";
 }

 //inserting data into the orders pending table in the database
 $insert_pending_orders="INSERT INTO `orders_pending` (user_id, invoice_number, prodid, quantity, order_status) VALUES ('$user_id','$invoice_number','$product_id','$quantity','$status')";
 $pending_result_orders=mysqli_query($conn, $insert_pending_orders);


 //deleting data from cart once it is submitted to the order table
 $empty_cart="DELETE FROM `cartdetails`` WHERE ip_address='$get_ip_add'";
 $results_empty_cart=mysqli_query($conn, $empty_cart);

?> 