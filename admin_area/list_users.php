<div>
    <h3 class="text-center text-success">All Users </h3>
    <table class="table table-bordered mt-5">
        <thead class="text-center bg-info">
            <tr>
                <th>User Id</th>    
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Company</th>
                <th>Country</th>
                <th>Town</th>
                <th>Street Address</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $get_users="SELECT * FROM `user_table`";
            $result=mysqli_query($conn,$get_users);
            while ($row_data=mysqli_fetch_assoc($result)) {
                $user_id=$row_data['user_id'];
                $first_name=$row_data['first_name'];
                $last_name=$row_data['last_name'];
                $username=$row_data['username'];
                $phone_number=$row_data['phone_number'];
                $email=$row_data['email'];
                $company=$row_data['company'];
                $country=$row_data['country'];
                $town=$row_data['town'];
                $street_address=$row_data['street_address'];
                //$phone_number=$row_data['phone_number'];
            ?>

            <tr class="bg-secondary text-center text-light">
                <td><?php echo $user_id?></td>
                <td><?php echo $first_name?></td>
                <td><?php echo $last_name?></td>
                <td><?php echo $username?></td>
                <td><?php echo $phone_number?></td>
                <td><?php echo $email?></td>
                <td><?php echo $company?></td>
                <td><?php echo $country?></td>
                <td><?php echo $town?></td>
                <td><?php echo $street_address?></td>
                <td><a href="index.php?delete_user=<?php echo $user_id?>" class="text-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a></td>
                
            </tr>

            <?php } ?>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="index.php?list_users" class='text-decoration-none text-light'>No</a></button>
        <button type="button" class="btn btn-danger"><a href='index.php?delete_user=<?php echo $user_id ?>' class='text-decoration-none text-light'>Yes</a></button>
      </div>
    </div>
  </div>
</div>
</div>

