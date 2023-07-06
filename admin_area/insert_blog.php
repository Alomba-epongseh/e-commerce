<?php
include "../website/db.php";
$conn = openconn();

if(isset($_POST['insert_blog'])){


    $blog_title=$_POST['blog_title'];
    $blog_description=$_POST['blog_description'];
    $blog_date=$_POST['blog_date'];
    $posted_by=$_POST['posted_by'];
    $blog_message=$_POST['blog_message'];
    //$blog_status='true';

    //accessing images
    $blog_image=$_FILES['blog_image']['name'];

    //accessing image tmp name
    $temp_image=$_FILES['blog_image']['tmp_name'];

    //checking empty condition
    if($blog_title=='' or $blog_description=='' or $blog_date=='' or
     $posted_by=='' or $blog_image=='' or $blog_message==''){
        echo"<script>alert('Please fill all the available fields')</script>";
        exit();

     }else{
    
     move_uploaded_file($temp_image, "images\blog_images/$blog_image");


 
        //insert query
        $insert_blogs="INSERT INTO `blog` (blogmessage, dated, image, postedby, posttitle, shortdes) VALUES ('$blog_message',NOW(),'$blog_image', '$posted_by','$blog_title','$blog_description')"; //  , NOW(),'$blog_status'
        $run_blog = mysqli_query($conn, $insert_blogs);
       if($run_blog){
        echo"<script>alert('Successfully inserted the blogs')</script>";
        echo "<script>window.open('insert_blog.php','_self')</script>";
       }

     }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
     <!---Bootstrap css link---->
     <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">

      <!------font-awesome link------>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!---css file---->

    <link rel="stylesheet" href="../style.css">
  </head>
<body class="bg-light">
    <div class="container mt-3 w-50 ">
        <h1 class="text-center">Insert Blog Content</h1>
        <!--form---->
        <form action="" method="post" enctype="multipart/form-data">
                <div class="form-outline mb-4">
                        <label for="blog_title" class="form-label">Blog title</label>
                        <input type="text" name="blog_title" id="blog_title"class="form-control"
                         placeholder="Enter blog title" autocomplete="off" required="required">
                </div>

                <!---description------>
                <div class="form-outline mb-4">
                        <label for="blog_description" class="form-label">Blog description</label>
                        <input type="text" name="blog_description" id="blog_description"class="form-control"
                        placeholder="Enter blog description" autocomplete="off" required="required">
                </div>

                <!---date------>
                <div class="form-outline mb-4">
                        <label for="blog_date" class="form-label">Blog Date</label>
                        <input type="text" name="blog_date" id="blog_date"class="form-control"
                        placeholder="Enter blog date" autocomplete="off" required="required">
                </div>
                
                <!---Posted By------>
                <div class="form-outline mb-4">
                        <label for="blog_postby" class="form-label">Posted By</label>
                        <input type="text" name="posted_by" id="blog_date"class="form-control"
                        placeholder="Posted By" autocomplete="off" required="required">
                </div>

                <!---Image ------>
                <div class="form-outline mb-4">
                        <label for="blog_image1" class="form-label">Blog image</label>
                        <input type="file" name="blog_image" id="blog_image"class="form-control"
                        required="required">
                </div>

                <!---Message------>
                <div class="form-outline mb-4">
                        <label for="blog_message" class="form-label">Blog Message</label>
                        <textarea type="text" name="blog_message" id="blog_message"class="form-control"
                        placeholder="Enter blog message" autocomplete="off" required="required"></textarea>
                </div>

                <!---submit------>
                <div class="form-outline mb-4">
                    <input type="submit" name="insert_blog" class="btn btn-info mb-3" value="Insert blog">
                </div>



        </form>
    </div>
    
</body>
</html>