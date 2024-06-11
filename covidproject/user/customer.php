<?php
require('header.php');
?>
<!-- customer login -->
<div class=" py-5">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage mx-auto">
                        <h2>Register</h2>
                    </div>
                </div>
            </div>
            <div class='col-12 alert alert-danger text-center'>If already registered, <a href="login.php">click here</a></div>
            <div class="row">
                <?php
                if (isset($_POST['button'])) {
                    require "../config.php";
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $phone = $_POST['phone'];
                    $gender = $_POST['gender'];
                    $age = $_POST['age'];
                    $address = $_POST['address'];
                    $addressproof = $_FILES['addressproof']['name'];
                    $newname = rand() . $addressproof;
                    $location = $_FILES['addressproof']['tmp_name'];
                    $id_proof = $_FILES['id_proof']['name'];
                    $newname2 = rand() . $id_proof;
                    $location2 = $_FILES['id_proof']['tmp_name'];
                    $q = "Insert into `customer`(`name`,`email`,`password`,`phone`,`gender`,`age`,`address`,`addressproof`,`id_proof`) values ('$name','$email','$password','$phone','$gender','$age','$address','$newname', '$newname2')";
                    $result = mysqli_query($conn, $q);
                    if ($result > 0) {
                        move_uploaded_file($location, '../upload/' . $newname);
                        move_uploaded_file($location2, '../upload/' . $newname2);
                ?>
                        echo "<script>window.location.assign('login.php');</script>";
                <?php
                    } else {
                        echo "<div class='alert alert-danger text-center col-md-12'>Try Again.</div>";
                    }
                }
                ?>
                <div class="col-md-12 mx-auto">
                    <form action="" method="post" id="request" class="main_form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Full Name" type="text" name="name">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Phone" type="tel" name="phone">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Email" type="email" name="email">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Age" type="tel" name="age">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Password" type="password" name="password"></input>
                            </div>
                            <div class="col-md-6">
                                <input class="contactus pt-2" placeholder="Address" type="textarea" name="address">
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <legend class="textarea pt-2">Address Proof
                                        <div>
                                            <input name="addressproof" class="form-control form-control-lg" id="formFileLg" type="file">
                                        </div>
                                    </legend>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <legend class="textarea pt-2">Id Proof
                                        <div>
                                            <input name="id_proof" class="form-control form-control-lg" id="formFileLg" type="file">
                                        </div>
                                    </legend>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <legend class="contactus pt-2 mx-auto">Select Gender
                                        <div>
                                            <input type="radio" name="gender" id="tellgender" value="m" name="gender"> Male
                                            <input type="radio" name="gender" id="tellgender" value="f" name="gender"> Female
                                            <input type="radio" name="gender" id="tellgender" value="o" name="gender"> Other
                                        </div>
                                    </legend>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <button class="send_btn" name="button">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end customer login -->
<?php
require('footer.php');
?>