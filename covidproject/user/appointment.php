<?php
require('header.php');
?>
<!-- appointment -->
<div class=" py-5">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage mx-auto">
                        <h2>Appointment</h2>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_POST['button'])) {
                //print_r($_FILES);
                require "../config.php";
                $address = $_POST['address'];
                $book_date = $_POST['book_date'];
                $book_time = $_POST['book_time'];
                $description = $_POST['description'];
                $user_id = $_SESSION['user_id'];
                $q = "Insert into `appointment`(`address`, `book_date`, `book_time`,`description`,`user_id`) values ('$address', '$book_date', '$book_time', '$description','$user_id')";
                $result = mysqli_query($conn, $q);
                if ($result > 0) {
            ?>
                    <div class='alert alert-success text-center col-md-12'>Data Inserted.</div>
            <?php
                } else {
                    echo "<div class='alert alert-danger text-center col-md-12'>Try Again.</div>";
                }
            }
            ?>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="" method="post" id="request" class="main_form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="contactus pt-2" placeholder="Address" type="textarea" name="address">
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <div class="col-12 px-0">
                                        <legend class="textarea pt-2">Choose Appointment Date
                                            <br>
                                            <input class="mt-3" type="date" name="book_date" id="">
                                        </legend>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <div class="col-12 px-0">
                                        <legend class="textarea pt-2">Choose Appointment Time
                                            <br>
                                            <input class="mt-3" type="time" name="book_time" id="">
                                        </legend>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Description" type="textarea" name="description"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn" name="button">Send Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 ">
                    <img src="../appointment1.webp" alt="#">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end appointment -->
<?php
require('footer.php');
?>