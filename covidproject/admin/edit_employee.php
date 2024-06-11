<?php
require('header.php');
?>
<!-- edit employee -->
<div class=" py-5">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage mx-auto">
                        <h2>Edit Employee</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                require '../config.php';
                $id = $_GET['id'];
                $q = "select * from `employee` where id = '$id'";
                $result = mysqli_query($conn, $q);
                $data = mysqli_fetch_assoc($result);
                if (isset($_POST['button'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $age = $_POST['age'];
                    $gender = $_POST['gender'];
                    $address = $_POST['address'];
                    if ($_FILES['addressproof']['error'] > 0) {
                        //file not uploaded
                        $addressproof = $data['addressproof'];
                    } else {
                        //file uploaded
                        $addressproof = rand() . $_FILES['addressproof']['name'];
                        $location = $_FILES['addressproof']['tmp_name'];
                    }
                    if ($_FILES['id_proof']['error'] > 0) {
                        //file not uploaded
                        $id_proof = $data['id_proof'];
                    } else {
                        //file uploaded
                        $id_proof = rand() . $_FILES['id_proof']['name'];
                        $location2 = $_FILES['id_proof']['tmp_name'];
                    }
                    $q = "update `employee` set `name` = '$name', `email` = '$email', `phone` = '$phone',`age` = '$age',`gender` = '$gender',`address` = '$address', `addressproof` = '$addressproof', `id_proof` = '$id_proof' where id = '$id'";
                    $result = mysqli_query($conn, $q);
                    if ($result > 0) {
                        if ($_FILES['id_proof']['error'] == 0) {
                            move_uploaded_file($location2, '../upload/' . $id_proof);
                        }
                        if ($_FILES['addressproof']['error'] == 0) {
                            move_uploaded_file($location, '../upload/' . $addressproof);
                        }
                        echo "<script>window.location.assign('select_employee.php?msg=Record Updated');</script>";
                    } else {
                        echo "<script>window.location.assign('select_employee.php?msg=Try Again.');</script>";
                    }
                }
                ?> <div class="col-md-12">
                    <form action="" method="post" id="request" class="main_form" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <input class="contactus" placeholder="Full Name" type="text" name="name" value="<?php echo $data['name'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Phone" type="tel" name="phone" value="<?php echo $data['phone'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Email" type="email" name="email" value="<?php echo $data['email'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Age" type="tel" name="age" value="<?php echo $data['age'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Password" type="password" name="password" value="<?php echo $data['password'] ?>"></input>
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus pt-2" placeholder="Address" type="textarea" name="address" value="<?php echo $data['address'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="textarea pt-2">Id Proof
                                            <div>
                                                <input name="id_proof" class="form-control form-control-lg" id="formFileLg" type="file" value="<?php echo $data['id_proof'] ?>">
                                            </div>
                                        </legend>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="textarea pt-2">Address Proof
                                            <div>
                                                <input name="addressproof" class="form-control form-control-lg" id="formFileLg" type="file" value="<?php echo $data['addressproof'] ?>">
                                            </div>
                                        </legend>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="contactus pt-2 mx-auto">Select Gender
                                            <div>
                                            <input type="radio" name="gender" id="tellgender" value="m" name="gender" <?php if($data['gender'] == 'm'){ echo "checked";}?>> Male
                                                <input type="radio" name="gender" id="tellgender" value="f" name="gender" <?php if($data['gender'] == 'f'){ echo "checked";}?>> Female
                                                <input type="radio" name="gender" id="tellgender" value="o" name="gender" <?php if($data['gender'] == 'o'){ echo "checked";}?>> Other
                                            </div>
                                        </legend>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <button class="send_btn" name="button">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end edit employee -->
<?php
require('footer.php');
?>