<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .margin {
            margin: 150px 60px 100px 60px;
            border-radius: 20px;
        }

        body {
            background-color: rgb(237, 36, 46);
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <div class="bg-light margin">
            <div class="container">
                <div class="row">
                    <?php
                    if (isset($_POST['button'])) {
                        require "config.php";
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $q = "Insert into `form` (`email`, `password`) values ($email, $password)";
                        $result = mysqli_query($conn, $q);
                        if (mysqli_num_rows($result) > 0) {
                            $data = mysqli_fetch_assoc($result);
                            $_SESSION['user_id'] = $data['id'];
                            $_SESSION['user_name'] = $data['name'];
                            echo "<script>window.location.assign('index.php');</script>";
                        } else {
                            echo "<div class='col-12 alert alert-danger'>Invalid Email/Password.</div>";
                        }
                    }
                    ?>
                    <div class="col-6">
                        <img src="./images/about.png" alt="error">
                    </div>
                    <div class="col-6 py-5">
                        <h1 class="titlepage text-center pt-5 col-md-12 text-danger">LOGIN</h1>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="row">
                            <button class="btn btn-outline-danger mt-4" name="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>