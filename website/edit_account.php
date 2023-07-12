<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">
      <!------font-awesome link------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <h3 class="text-center text-success md-4">Edit Account</h3>
    <form action="" method="post" enctype="multipart/form-data" class="text-center" >
        <div class="form-outline mb-4" >
            <input type="text" class="form-control w-50 m-auto" name="user_firstname" placeholder="First Name" >
        </div>
        <div class="form-outline mb-4" >
            <input type="text" class="form-control w-50 m-auto" name="user_lastname" placeholder="Last Name" >
        </div>
        <div class="form-outline mb-4" >
            <input type="text" class="form-control w-50 m-auto" name="user_username" placeholder="Username" >
        </div>
        <div class="form-outline mb-4" >
            <input type="text" class="form-control w-50 m-auto" name="user_company" placeholder="Company" >
        </div>
        <div class="form-outline mb-4" >
            <input type="text" class="form-control w-50 m-auto" name="user_country" placeholder="Country" >
        </div>
        <div class="form-outline mb-4 " >
            <input type="text" class="form-control w-50 m-auto" name="user_address" placeholder="Street Address" >
        </div>
        <div class="form-outline mb-4" >
            <input type="text" class="form-control w-50 m-auto" name="user_town" placeholder="Town" >
        </div>
        <div class="form-outline mb-4" >
            <input type="text" class="form-control w-50 m-auto" name="user_mobile" placeholder="Phone Number" >
        </div>
        <div class="form-outline mb-4" >
            <input type="email" class="form-control w-50 m-auto" name="user_email" placeholder="Email"  >
        </div>
        <input type="submit" class="bg-info border-0 px-3 py-2" value="Submit" name="user_udate" >
    </form>
</body>
</html>



<!--php to update user details-->
<?php
include_once "db.php";

if (isset($_GET['edit_account'])) {
    $user_session_name=$_SESSION['username'];
    $select_query="SELECT * FROM `user_table` where username='$user_session_name'";
    $run_query=mysqli_query($conn,$select_query);

    //collecting data from the database and displaying on form
    $row_fetch=mysqli_fetch_assoc($run_query);
    $user_id=$row_fetch['user_id'];
    $user_firstname=$row_fetch['first_name'];
    $user_lastname=$row_fetch['last_name'];
    $user_name=$row_fetch['username'];
    $user_company=$row_fetch['company'];
    $user_country=$row_fetch['country'];
    $user_address=$row_fetch['street_address'];
    $user_town=$row_fetch['town'];
    $user_number=$row_fetch['phone_number'];
    $email=$row_fetch['email'];
}
    //collecting inputted data from form

    if (isset($_POST['user_udate'])) {
        //$user_id=$_POST['user_id'];
        $user_firstname=$_POST['user_firstname'];
        $user_lastname=$_POST['user_lastname'];
        $user_name=$_POST['user_username'];
        $user_company=$_POST['user_company'];
        $user_country=$_POST['user_country'];
        $user_address=$_POST['user_address'];
        $user_town=$_POST['user_town'];
        $user_number=$_POST['user_mobile'];
        $email=$_POST['user_email'];

        //updating data in `user_table` database
        $update_query="UPDATE `user_table` SET first_name='$user_firstname',last_name='$user_lastname',username='$user_name',company='$user_company',country='$user_country',street_address='$user_address',town='$user_town',phone_number='$user_number',email='$email'";
        $result_query=mysqli_query($conn,$update_query);
        if ($result_query) {
            echo "<script>alert(Information updatted successfully)</script>";
            echo "<script>window.open('logout.php','_self')</script>";

        }
    }

?>