<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Covido</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style>
        .margin {
            margin: 30px 0px 0px 0px;
        }
    </style>
</head>
<!-- body -->

<body class="main-layout inner_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- top -->
    <!-- header -->
    <header class="header-area">
        <div class="left">
            <!-- <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a> -->
        </div>
        <div class="right">
            <?php
            if (isset($_SESSION['user_name'])) {
            ?>
                <a href="logout.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a>
            <?php
            }
            ?>
        </div>
        <div class="container">
            <div class="row d_flex">
                <div class="col-sm-3 logo_sm">
                    <div class="logo">
                        <a href="index.php"></a>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                    <div class="navbar-area">
                        <nav class="site-navbar">
                            <ul>
                                <?php
                                if (isset($_SESSION['user_name'])) {
                                ?>
                                    <li><a href="index.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">Home</a></li>
                                    <li><a href="about.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">About</a></li>
                                    <li><a href="symptoms.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">Symptoms</a></li>
                                    <li><a href="prevention.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">Prevention</a></li>
                                    <li><a href="appointment.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">Testing</a></li>
                                    <li><a href="contact.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">Contact</a></li>
                                    <li><a href="#" class="logo_midle"></a></li>
                                <?php
                                } else {
                                ?>
                                    <li><a href="#" class="logo_midle"></a></li>
                                    <li></li>
                                    <li><a href="index.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">Home</a></li>
                                    <li><a href="about.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">About</a></li>
                                    <li><a href="symptoms.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">Symptoms</a></li>
                                    <li><a href="prevention.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">Prevention</a></li>
                                    <li><a href="customer.php" style="background-color: rgb(237, 36, 46); font-size:20px; " class="btn text-light">Register</a></li>
                                <?php
                                }
                                ?>
                            </ul>
                            <button class="nav-toggler">
                                <span></span>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->