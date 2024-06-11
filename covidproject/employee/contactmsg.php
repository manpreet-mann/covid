<?php
require('header.php');
?>
<p class="margin"></p>

<div class="row">
    <div class="col-md-12">
        <div class="titlepage mx-auto">
            <h2>Contact Data</h2>
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
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require "../config.php";
            $q = "select * from `contact`";
            $result = mysqli_query($conn, $q);
            $i = 1;
            foreach ($result as $data) {
            ?>
                <tr>
                    <th scope="row"><?php echo $data['id']; ?></th>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td><?php echo $data['subject']; ?></td>
                    <td><?php echo $data['message']; ?></td>
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