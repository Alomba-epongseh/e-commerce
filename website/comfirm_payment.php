<?php

include_once "db.php";
$conn=openconn();

session_start();

if (isset($_GET['order_id'])) {
    $order_id=$_GET['order_id'];
    echo $order_id;

    $select_query="SELECT * FROM `user_order` where order_id=$order_id";
    $result_query=mysqli_query($conn,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $invoice_number=$row_fetch['invoice_number'];
    $amount_due=$row_fetch['amount_due'];
    
};
if (isset($_POST['comfirm_payment'])) {
    $invoice_number=$_POST['invoice_number'];
    $amount_due=$_POST['amount'];
    $payment_mode=$_POST['payment_mode'];
    $insert_query="INSERT INTO `user_payment` (order_id,invoice_number,amount,payment_mode) VALUES ($order_id,$invoice_number,$amount_due,'$payment_mode')";
    $result=mysqli_query($conn,$insert_query);
    if ($result) {
        echo "<script>alert(Successful Payment)</script>";
        echo "<script>window.open('profile.php?my_orders', '_self')</script>";
    }else {
        echo "<script>alert(Payment Failed)</script>";
    }
    $update_orders="UPDATE `user_order` SET order_status='complete' where order_id=$order_id";
    $result_order=mysqli_query($conn,$update_orders);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <!---Bootstrap css link---->
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">
      <!------font-awesome link------>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-secondary" >
    <div class="container my-5">
        <h1 class="text-center text-light">Confirm Payment</h1>
        <form action="" method="post">
            <div class="form-outline my-4 text-center">
                <input type="text" class="form-control w-50 m-auto" name="invoice_number" value="<?php echo $invoice_number ?>">
            </div>
            <div class="form-outline my-4 text-center">
                <label for="text" class="text-align-left"><h5>Amount</h5></label>
                <input type="text" class="form-control w-50 m-auto" name="amount" value="<?php echo $amount_due ?>">
            </div>
            <div class="form-outline my-4 text-center">
                <select name="payment_mode" class="form-select w-50 m-auto">
                    <option value="">Select Payment Mode</option>
                    <option value="Paypal">Paypal</option>
                    <option value="MTN Momo">MTN Momo</option>
                    <option value="Cash on delivery">Cash on delivery</option>
                    <option value="Pay offline">Pay offline</option>
                </select>
            </div>
            <div class="form-outline my-4 text-center">
                <input type="submit" class="bg-info py-2 px-3 border-0" name="comfirm_payment" value="Confirm">
            </div>
        </form>
    </div>
    
</body>
</html>