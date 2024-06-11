<?php
require('header.php');
?>
<div class=" py-5">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage mx-auto mb-3">
                        <h2>User Data</h2>
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
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Age</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">Address Proof</th>
                                <th scope="col">ID Proof</th>
                                <th scope="col">Block</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require "../config.php";
                            $q = "select * from `customer`";
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
                                    <?php
                                    // Check if 'status' key exists in $data array
                                    if(isset($data['status'])){
                                        if($data['status']=='Active'){
                                    ?>
                                            <td><a href="block_user.php?id=<?php echo $data['id'];?>" class="btn btn-danger text-light">Block</a></td>
                                    <?php
                                        } else {
                                    ?>
                                            <td><a href="unblock_user.php?id=<?php echo $data['id'];?>" class="btn btn-success text-light">Unblock</a></td> 
                                    <?php
                                        }
                                    } else {
                                        // Handle case where 'status' key is not set
                                        ?>
                                            <td><span class="text-muted">Not Available</span></td>
                                    <?php
                                    }
                                    ?>
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
