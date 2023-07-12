<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
</head>
<body>
    <h2 class="text-danger text-center">Deleting Account</h2>
    <form action="" method="post" class="mt-5">
        <div class="form-outline">
            <input type="submit" class="form-control w-50 m-auto mb-3 " name="delete" value="Delete Account">
        </div>
        <div class="form-outline">
            <input type="submit" class="form-control w-50 m-auto mb-3" name="dont_delete" value="Do Not Delete Account">
        </div>
    </form>
</body>
</html>

<?php 
    $username=$_SESSION['username'];
    if (isset($_POST['delete'])) {
       $delete_query="DELETE FROM `user_table` WHERE username='$username'";
       $delete_results=mysqli_query($conn,$delete_query);
       if ($delete_results) {
        echo "<script>alert('Account Deleted');</script>";

        echo "<script>window.open('logout.php','_self');</script>";
       }
    }
    if (isset($_POST['dont_delete'])) {
        //$delete_query="DELETE FROM `user_table` WHERE username='$username'";
        //$delete_results=mysqli_query($conn,$delete_query);
        echo "<script>window.open('profile.php','_self');</script>";
    }
?>