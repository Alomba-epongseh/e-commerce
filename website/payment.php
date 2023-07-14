<?php

//include 'db.php';
include 'function.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanilla's Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!-- php code to access user id -->
    <?php
        $user_ip = getIp();
        $get_user = "SELECT * FROM `user_table` WHERE user_ipaddress='$user_ip'";
        $result=mysqli_query($conn,$get_user);
        $run_query = mysqli_fetch_array($result);
        $user_id = $run_query['user_id'];
    ?>
    <div class="container">
        <h2 class="text-center text-info"> Payment Options</h2>
        <div class="row d-flex justify-content-center align-items-center m-5 bg-light">
            <div class="col-md-6 p-5 ">
                <a href="https://www.paypal.com" target="_blank" ><img class="image-fluid" src="assets\images\company-logo\pay1.png"  alt=""></a>
            </div>
            <div class="col-md-6 text-align-center ">
                <a href="order.php?user_id=<?php echo $user_id?>" > <h2>Pay Offline </h2></a>
            </div>
        </div>
    </div>

</body>
</html>