 <!---Categories------>
 <div class="form-outline mb-4">
                        <select name="product_categories" id="" class="form-select">
                            <option value="">Select a category</option>
                            <?php
                            $select_query="Select * from `categories`";
                            $result_query=mysqli_query($con, $select_query);
                            while($row=mysqli_fetch_assoc($result_query)){
                                $category_title=$row['category_title'];
                                $category_id=$row['category_id'];
                                echo"<option value='$category_id'>$category_title</option>";

                            }
                            ?>
                            
                           <!----- <option value="">Category 1</option>
                            <option value="">Category 2</option>
                            <option value="">Category 3</option>
                            <option value="">Category 4</option>----->
                           
         </select>  
            </div>
               <!---Brands------>
               <div class="form-outline mb-4">
                        <select name="product_brands" id="" class="form-select">
                            <option value="">Select a Brand</option>
                            <?php
                            $select_query="Select * from `brands`";
                            $result_query=mysqli_query($con, $select_query);
                            while($row=mysqli_fetch_assoc($result_query)){
                                $brand_title=$row['brand_title'];
                                $brand_id=$row['brand_id'];
                                echo"<option value='$brand_id'>$brand_title</option>";

                            }
                            ?>
                            <!-------
                            <option value="">Brand 1</option>
                            <option value="">Brand 2</option>
                            <option value="">Brand 3</option>
                            <option value="">Brand 4</option>------>
                           
         </select>  
            </div>