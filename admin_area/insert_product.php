<?php
//include "../website/db.php";
//$conn = openconn();

if(isset($_POST['insert_product'])){

    //$product_id=$_POST['product_id'];
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_price=$_POST['product_price'];


    ///$Image = $_FILES['image']['name'];
    //$Image_temporal = $_FILES['image']['temporal_name'];

    //move_uploaded_file($Image_temporal,"staff_images/$Image");

    //accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    $product_image4=$_FILES['product_image4']['name'];


    //accessing image tmp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];
    $temp_image4=$_FILES['product_image4']['tmp_name'];

    //checking empty condition
    if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_image1==''or 
     $product_image2=='' or  $product_image3=='' or  $product_image4=='' or $product_price==''){
        echo"<script>alert('Please fill all the available fields')</script>";
        exit();

     }else{
        //moving uploade files to new location
        move_uploaded_file($temp_image1, "images\product_images/$product_image1");
        move_uploaded_file($temp_image2, "images\product_images/$product_image2");
        move_uploaded_file($temp_image3, "images\product_images/$product_image3");
        move_uploaded_file($temp_image4, "images\product_images/$product_image4");

 
        //insert query
        $insert_product="INSERT INTO `product` (proddesc, image1, keywords, prodname, price, image2, image3,image4) VALUES ('$product_description','$product_image1','$product_keywords','$product_title','$product_price','$product_image2','$product_image3','$product_image4')";
        $result_product=mysqli_query($conn,$insert_product);
        if ($result_product) {
          echo "<script>alert('Products inserted successfully')</script>";
          echo "<script>window.open('index.php','_self')</script>";
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
        <h1 class="text-center">Insert products</h1>
        <!--form---->
        <form action="" method="post" enctype="multipart/form-data">
            <!---id------>
            <!--<div class="form-outline mb-4">
                <label for="product_id" class="form-label">Product description</label>
                <input type="text" name="product_id" id="product_id"class="form-control"
                 placeholder="Enter product id" autocomplete="off" required="required">
            </div>-->

            <!---title------>
            <div class="form-outline mb-4">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title"class="form-control"
                 placeholder="Enter product title" autocomplete="off" required="required">
            </div>

            <!---description------>
            <div class="form-outline mb-4">
                <label for="product_description" class="form-label">Product description</label>
                <input type="text" name="product_description" id="product_description"class="form-control"
                 placeholder="Enter product description" autocomplete="off" required="required">
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
                <input type="file" name="product_image3" id="product_image3"class="form-control"
                  required="required">
            </div>

            <!---Image 4------>
            <div class="form-outline mb-4">
                <label for="product_image3" class="form-label">Product image4</label>
                <input type="file" name="product_image4" id="product_image4"class="form-control"
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
                <input type="submit" name="insert_product" class="btn btn-info mb-3" value="Insert Products">
            </div>
        </form>
    </div>
  </body>
</html>