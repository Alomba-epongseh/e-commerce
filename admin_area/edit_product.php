    <div class="container mt-3 w-50 ">
        <h1 class="text-center">Edit product</h1>
        <!--form---->
        <form action="" method="post" enctype="multipart/form-data">
            <!---title------>
            <div class="form-outline mb-4">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title"class="form-control"
                 placeholder="Enter product title" autocomplete="off" required="required" >
            </div>

            <!---description------>
            <div class="form-outline mb-4">
                <label for="product_description" class="form-label">Product description</label>
                <input type="text" name="product_description" id="product_description"class="form-control"
                 placeholder="Enter product description" autocomplete="off" required="required" >
            </div>
            
              <!---keywords------>
            <div class="form-outline mb-4">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords"class="form-control"
                 placeholder="Enter product keywords" autocomplete="off" required="required">
            </div> 
            
              <!---Image 1------>
            <div class="form-outline mb-4">
                <label for="product_image1" class="form-label">Product image</label>
                <input type="file" name="product_image1" id="product_image1"class="form-control"
                    required="required">
            </div>

              <!---Image 2------>
            <div class="form-outline mb-4">
                <label for="product_image2" class="form-label">Product image2</label>
                <input type="file" name="product_image2" id="product_image2"class="form-control"
                    required="required">
            </div>

              <!---Image 3------>
            <div class="form-outline mb-4">
                <label for="product_image3" class="form-label">Product image3</label>
                <input type="file" name="product_image3" id="product_image3 "class="form-control"
                    required="required">
            </div>

            <!---Price------>
            <div class="form-outline mb-4">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price"class="form-control"
                 placeholder="Enter product price" autocomplete="off" required="required">
            </div>

            <!---Submit------>
            <div class="form-outline mb-4">
                <input type="submit" name="update_product" class="btn btn-info mb-3" value="Update Product">
            </div>
        </form>
    </div>

<?php
//include_once "db_connect.php";

if (isset($_GET['edit_product'])) {
    $product_id=$_GET['edit_product'];
    $select_query="SELECT * FROM `product` where prodid='$product_id'";
    $run_query=mysqli_query($conn,$select_query);

    //collecting data from the database and displaying on form
    $row_fetch=mysqli_fetch_assoc($run_query);
    //$prod_id=$row_fetch['prodid'];
    $prodname=$row_fetch['prodname']; echo $prodname;
    $proddesc=$row_fetch['proddesc'];
    $keywords=$row_fetch['keywords'];
    $image1=$row_fetch['image1'];
    $image2=$row_fetch['image2'];
    $image3=$row_fetch['image3'];
    $price=$row_fetch['price'];
    
}
    //collecting inputted data from form

    if (isset($_POST['update_product'])) {
        //$user_id=$_POST['user_id'];
        $product_name=$_POST['product_title'];
        $product_desc=$_POST['product_description'];
        $product_keywords=$_POST['product_keywords'];
        $product_price=$_POST['product_price'];

        $product_image1=$_FILES['product_image1']['name'];
        $product_image2=$_FILES['product_image2']['name'];
        $product_image3=$_FILES['product_image3']['name'];

        $tmp_image1=$_FILES['product_image1']['tmpname'];
        $tmp_image2=$_FILES['product_image2']['tmpname'];
        $tmp_image3=$_FILES['product_image3']['tmpname'];

        move_uploaded_file($tmp_image1,"images/product_images/$product_image1");
        move_uploaded_file($tmp_image2,"images/product_images/$product_image2");
        move_uploaded_file($tmp_image3,"images/product_images/$product_image3");


        //updating data in `user_table` database
        $update_query="UPDATE `product` SET prodname='$product_name',proddesc='$product_desc',keywords='$product_keywords',image1='$product_image1',image2='$product_image2',image3='$product_image3',price='$product_price' WHERE prodid=$product_id" ;
        $result_query=mysqli_query($conn,$update_query);
        if ($result_query) {
            echo "<script>alert(Information updatted successfully)</script>";
            echo "<script>window.open('index.php','_self')</script>";

        }
    }

?>