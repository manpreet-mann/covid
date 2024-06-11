<?php
require('header.php');
$uid = null; // Initialize $uid variable
if(isset($_SESSION['user_id'])){
    $uid=$_SESSION['user_id'];
}
?>
<div class=" py-5">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage mx-auto mb-3">
                        <h2>Appointment</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mx-auto">
                    <?php
                    if (isset($_GET['msg'])) {
                        echo "<div class='col-12 alert alert-info'>" . $_GET['msg'] . "</div>";
                    }
                    ?>
                    <table class="table table-bordered">
                        <thead class="table-danger">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Address</th>
                                <th scope="col">Appointment Date</th>
                                <th scope="col">Appointment Time</th>
                                <th scope="col">Description</th>
                                <th scope="col">Report</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Employee</th>
                                <th scope="col">Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require "../config.php";
                            $q = "select appointment.*, customer.name, employee.name as e_name from `appointment` left join `customer` on `appointment`.user_id=`customer`.id left join employee on appointment.employee_id=`employee`.id where appointment.user_id='$uid'";
                            $result = mysqli_query($conn, $q);
                            $i = 1;
                            foreach ($result as $data) {
                            ?>
                                <tr>
                                    <td scope="row"><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['name']; ?></td>
                                    <td><?php echo $data['address']; ?></td>
                                    <td><?php echo $data['book_date']; ?></td>
                                    <td><?php echo $data['book_time']; ?></td>
                                    <td><?php echo $data['description']; ?></td>
                                    <td><?php if ($data['report']) {
                                        echo "<a href='../upload/" . $data['report'] . "'>View Report</a>";
                                    } ?></td>
                                    <td><?php echo $data['createdat']; ?></td>
                                    <td><?php if ($data['e_name']) {
                                            echo $data['e_name'];
                                        } else {
                                            echo "Pending";
                                        } ?></td>
                                    <td><?php echo $data['status']?></td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.php');
?>
