<?php
    if (isset($_GET['delete_blog'])) {
        $blog_id=$_GET['delete_blog'];
        $delete_blog="DELETE FROM `blog` WHERE blogid=$blog_id";
        $result=mysqli_query($conn,$delete_blog);
        if($result){
            echo "<script>alert('Blog Deleted')</script>";
            echo "<script>window.open('index.php?view_blogs','_self')</script>";
        }
    }
?>