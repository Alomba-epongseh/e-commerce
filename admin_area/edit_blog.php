<div class="container mt-3 w-50 ">
        <h1 class="text-center mb-5">View Blog Content</h1>
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
                        <input type="text" name="posted_by" id="posted_by"class="form-control"
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
                    <input type="submit" name="update_blog" class="btn btn-info mb-3" value="Update blog">
                </div>



        </form>
    </div>


    <?php
//include_once "db_connect.php";

if (isset($_GET['edit_blog'])) {
    $blog_id=$_GET['edit_blog'];
    $select_query="SELECT * FROM `blog` where blogid='$blog_id'";
    $run_query=mysqli_query($conn,$select_query);

    //collecting data from the database and displaying on form
    $row_fetch=mysqli_fetch_assoc($run_query);
    //$blog_id=$row_fetch['blogid'];
    $blogtitle=$row_fetch['posttitle']; 
    $blogdesc=$row_fetch['shortdes'];
    $image=$row_fetch['image'];
    $postedby=$row_fetch['postedby'];
    $date=$row_fetch['dated'];
    $blogmessage=$row_fetch['blogmessage'];
    
}
    //collecting inputted data from form

    if (isset($_POST['update_blog'])) {
        //$blog_id=$_POST['blog_id'];
        $blog_title=$_POST['blog_title'];
        $blog_desc=$_POST['blog_description'];
        $posted_by=$_POST['posted_by'];
        $dated=$_POST['blog_date'];
        $blog_message=$_POST['blog_message'];

        $blog_image=$_FILES['blog_image']['name'];
    
        $tmp_image1=$_FILES['blog_image']['tmp_name'];

        move_uploaded_file($tmp_image1,"images/blog_images/$blog_image");


        //updating data in `blog` database
        $update_blog="UPDATE `blog` SET blogmessage='$blog_message',dated='$dated',image='$blog_image=',postedby='$posted_by',posttitle='$blog_title',shortdes='$blog_desc' WHERE blogid=$blog_id";
        $result_blog=mysqli_query($conn,$update_blog);
        //$update_query="UPDATE `blog` SET posttitle='$blog_title',shortdes='$blog_desc',image='$blog_image',postedby='$posted_by','dated='$dated',blogmessage='$blog_message' WHERE blogid=$blog_id" ;
        //$result_query=mysqli_query($conn,$update_query);
        if ($result_blog) {
            echo "<script>alert(Information updatted successfully)</script>";
            echo "<script>window.open('index.php','_self')</script>";

        }
    }

?>