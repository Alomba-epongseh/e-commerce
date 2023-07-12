<div>
    <h3 class="text-center text-success">All Orders</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr class="text-center">
                <th>SI No</th>
                <th>Amount Due</th>
                <th>Invoice Number</th>
                <th>Total Products</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light" >
            <?php
            $get_order="SELECT * FROM `user_order`";
            $result=mysqli_query($conn,$get_order);
            while ($row_data=mysqli_fetch_assoc($result)) {
                $order_id=$row_data['order_id'];
                $amount_due=$row_data['amount_due'];
                $invoice_number=$row_data['invoice_number'];
                $total_products=$row_data['total_products'];
                $order_date=$row_data['order_date'];
                $order_status=$row_data['order_status'];
            ?>
                <tr class='text-center' >
                    <td><?php echo $order_id?></td>
                    <td><?php echo $amount_due?></td>
                    <td><?php echo $invoice_number?></td>
                    <td><?php echo $total_products?></td>
                    <td><?php echo $order_date?></td>
                    <td><?php echo $order_status?></td>
                    <!--<td><a href="index.php?delete_order=<?//php echo $order_id?>">del</a></td>-->
                    <td><a href='index.php?delete_order=<?php echo $order_id ?>' class='text-danger' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a></td>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="index.php?list_orders" class='text-decoration-none text-light'>No</a></button>
        <button type="button" class="btn btn-danger"><a href='index.php?delete_order=<?php echo $order_id ?>' class='text-decoration-none text-light'>Yes</a></button>
      </div>
    </div>
  </div>
</div>

</div>