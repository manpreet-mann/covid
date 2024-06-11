<?php
require('header.php');
?>
<div class=" py-5">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage mx-auto mb-3">
                        <h2>Tasks</h2>
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
                                <th scope="col">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require "../config.php";
                            $q = "select appointment.*, customer.name, employee.name as e_name from `appointment` join `customer` on `appointment`.user_id=`customer`.id left join employee on appointment.employee_id=`employee`.id";
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
                                    <td><?php echo $data['createdat']; ?></td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.php');
?>