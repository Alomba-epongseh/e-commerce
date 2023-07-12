
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!---Bootstrap css link---->
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">
      <!------font-awesome link------>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
        $username=$_SESSION['username'];
        $select_query="SELECT * FROM `user_table` where username='$username'";
        $run_query=mysqli_query($conn,$select_query);
    
        //collecting data from the database and displaying on form
        $row_fetch=mysqli_fetch_assoc($run_query);
        $user_id=$row_fetch['user_id'];
    ?>
    <h3 class="text-success text-center" > All Orders</h3>
    <table class="table table-bordered mt-5 w-75 mx-auto">
        <thead class="bg-secondary">
            <tr>
                <th>SI no</th>
                <th>Amount due</th>
                <th>Total Product</th>
                <th>Invoice Number</th>
                <th>Date</th>
                <th>Complete/Incomplete</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody class="bg-light text-center">
            <?php
               $get_order_details="SELECT * FROM `user_order` where user_id='$user_id'";
               $run_order=mysqli_query($conn,$get_order_details);
               $number=1; 
               while ($row_order=mysqli_fetch_assoc($run_order)) {
                $order_id=$row_order['order_id'];
                $amount_due=$row_order['amount_due'];
                $total_products=$row_order['total_products'];
                $invoice_number=$row_order['invoice_number'];
                $order_status=$row_order['order_status'];

                if ($order_status=='pending') {
                    $order_status='Incomplete';
                }else {
                    $order_status='Complete';
                }

                $order_date=$row_order['order_date'];

                echo "
                <tr>
                    <td>$number</td>
                    <td>$amount_due</td>
                    <td>$total_products</td>
                    <td>$invoice_number</td>
                    <td>$order_date</td>
                    <td>$order_status</td>"
            ?>
            <? 
                if ($order_status=='complete') {
                    echo "<td>Paid</td>
                    </tr>";
                }else{
                    echo "<td><a href='comfirm_payment.php?order_id=$order_id' class='text-danger'>Confirm</a></td>
                    </tr>";
                }
                $number++;
               }
            ?>
            
        </tbody>
    </table>
</body>
</html>