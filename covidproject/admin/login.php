<?php
require('header.php');
?>
<!-- admin login -->
<div class=" py-5">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage mx-auto">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if (isset($_GET['err'])) {
                    echo "<div class='col-12 alert alert-danger'>Please Login First</div>";
                }
                if (isset($_POST['button'])) {
                    require "../config.php";
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);
                    $q = "select * from `admin` where `email`='$email' and `password`='$password'";
                    $result = mysqli_query($conn, $q);
                    if (mysqli_num_rows($result) > 0) {
                        //login
                        $data = mysqli_fetch_assoc($result);
                        $_SESSION['admin_id'] = $data['id'];
                        $_SESSION['admin_name'] = $data['name'];
                        echo "<script>window.location.assign('index.php');</script>";
                    } else {
                        // invalid credentials
                        echo "<div class='col-12 alert alert-danger'>Invalid Email/Password.</div>";
                    }
                }
                ?>
                <div class="col-md-6 mx-auto">
                    <form action="" method="post" id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="email" name="email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Password" type="password" name="password"></input>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn" name="button">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end admin login -->
<!-- <script>
    function validate(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        if(email == '' || password == ''){
            alert ('Please fill the form')
            return false;
        }
    }
</script> -->
<?php
require('footer.php');
?>