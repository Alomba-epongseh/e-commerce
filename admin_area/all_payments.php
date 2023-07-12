<div>
    <h3 class="text-center text-success">All Payments</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr class="text-center">
                <th>SI No</th>
                <th>Invoice Number</th>
                <th>Amount Due</th>
                <th>Payment Mode</th>
                <th>Order Date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light" >
            <?php
            $get_payment="SELECT * FROM `user_payment`";
            $result=mysqli_query($conn,$get_payment);
            while ($row_data=mysqli_fetch_assoc($result)) {
                $payment_id=$row_data['payment_id'];
                $invoice_number=$row_data['invoice_number'];
                $amount=$row_data['amount'];
                $payment_mode=$row_data['payment_mode'];
                $order_date=$row_data['dated'];
            ?>
                <tr class='text-center' >
                    <td><?php echo $payment_id?></td>
                    <td><?php echo $invoice_number?></td>
                    <td><?php echo $amount?></td>
                    <td><?php echo $payment_mode?></td>
                    <td><?php echo $order_date?></td>
                    <td><a href='index.php?delete_payment=<?php echo $payment_id ?>' class='text-danger' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a></td>
                </tr>
            <?php }?>
            
        </tbody>
    </table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete payment id <?php echo $payment_id ?></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="index.php?list_orders" class='text-decoration-none text-light'>No</a></button>
        <button type="button" class="btn btn-danger"><a href='index.php?delete_payment=<?php echo $payment_id?>' class='text-decoration-none text-light'>Yes</a></button>
      </div>
    </div>
  </div>
</div>

</div>