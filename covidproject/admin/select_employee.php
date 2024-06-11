<?php
require('header.php');
?>
<p class="margin"></p>

<div class="row">
    <div class="col-md-12">
        <div class="titlepage mx-auto">
            <h2>Employee Data</h2>
        </div>
    </div>
</div>
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
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">Address Proof</th>
                <th scope="col">ID Proof</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require "../config.php";
            $q = "select * from `employee`";
            $result = mysqli_query($conn, $q);
            $i = 1;
            foreach ($result as $data) {
            ?>
                <tr>
                    <th scope="row"><?php echo $data['id']; ?></th>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td><?php echo $data['age']; ?></td>
                    <td><?php echo $data['gender']; ?></td>
                    <td><?php echo $data['address']; ?></td>
                    <td><img class="img img-fluid" style="height:50px; width:60px" src="../upload/<?php echo $data['addressproof']; ?>" alt=""></td>
                    <td><img class="img img-fluid" style="height:50px; width:60px" src="../upload/<?php echo $data['id_proof']; ?>" alt=""></td>
                    <td><a href="edit_employee.php ?id=<?php echo $data['id']; ?>" <i class="fa fa-pencil-square-o text-danger" aria-hidden="true" style="font-size:30px"></i></a></td>
                    <td><a href="delete_employee.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="text-danger"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:30px"></i>
                        </a></td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>
<p class="margin"></p>
<?php
require('footer.php');
?>