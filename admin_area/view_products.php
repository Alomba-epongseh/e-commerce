<?
//include "db_connect.php";
include "..\website\db.php";
$conn = openconn();
include_once "function1.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin- View Products</title>
    <!---Bootstrap css link---->
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">
      <!------font-awesome link------>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h3 class="text-center text-success">All Products</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Total Sold</th>
                <!--<th>Status</th>-->
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light" >
            <?php
            $get_products="SELECT * FROM `product`";
            $result=mysqli_query($conn,$get_products);
            while ($row_data=mysqli_fetch_assoc($result)) {
                $product_id=$row_data['prodid'];
                $product_name=$row_data['prodname'];
                $product_price=$row_data['price'];
                $product_image=$row_data['image1'];
            ?>
                <tr class='text-center' >
                    <td><?php echo $product_id?></td>
                    <td><?php echo $product_name?></td>
                    <td><img src='images/product_images/<?php echo $product_image?>' alt='wrong path' style='width:50px; height:50px;'/></td>
                    <td><?php echo $product_price?> fcfa</td>
                    <td>
                        <!--displaying number of times a product is ordered-->
                        <?php
                            $get_count="SELECT * FROM `orders_pending` WHERE prodid=$product_id";
                            $result_count=mysqli_query($conn,$get_count);
                            $row_count=mysqli_num_rows($result_count);
                            echo $row_count;
                        ?>
                    </td>            
                    <td><a href='index.php?edit_product=<?php echo $product_id ?>' class='text-primary'>Edit</i></a></td>
                    <td><a href='index.php?delete_product=<?php echo $product_id ?>' class='text-danger' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a></td>
                    
                </tr>
            <?php }?>
            
            
        </tbody>
    </table>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="index.php?view_products" class='text-decoration-none text-light'>No</a></button>
        <button type="button" class="btn btn-danger"><a href='index.php?delete_product=<?php echo $product_id ?>' class='text-decoration-none text-light'>Yes</a></button>
      </div>
    </div>
  </div>
</div>
</body>
</html>