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
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
</head>
<style>
   .margin {
      margin: 100px 0px 100px 0px;
   }
   body{
      overflow-x: hidden;
   }
</style>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <!-- <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div> -->
   <!-- end loader -->
   <!-- top -->
   <!-- header -->
   <header class="header-area">
      <div class="left">
         <!-- <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a> -->
      </div>
      <div class="right">
         <?php
            if(isset($_SESSION['admin_name'])){
               ?>
               <a href="logout.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a>
               <?php
            }
         ?>
      </div>
      <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="col-sm-3 logo_sm">
               <div class="logo">
                  <a href="index.php"></a>
               </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-9">
               <div class="navbar-area">
                  <nav class="site-navbar">
                     <ul>
                        <?php
                        if (isset($_SESSION['admin_name'])) {
                        ?>
                           <!-- <li><a href="adminfunc.php">Home</a></li>
                        <li><a href="index.php">AssignProject</a></li>
                        <li><a href="news.php">ViewStatus</a></li> -->
                           <li><a href="index.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">Home</a></li>
                           <li><a href="user_data.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">User</a></li>
                           <li><a href="appointment_data.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">Appointment</a></li>
                           <li><a href="contactmsg_data.php" style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light">Contact Message</a></li>
                           <a style="background-color: rgb(237, 36, 46); font-size:20px" class="btn text-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              EMPLOYEE
                           </a>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="add_employee.php">Add</a>
                              <a class="dropdown-item" href="select_employee.php">View</a>
                           </div>
                           <li><a href="#" class="logo_midle"></a></li>
                        <?php
                        } else {
                        ?>
                           <li><a href="#" class="logo_midle"></a></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li><a href="logout.php" style="background-color: rgb(237, 36, 46); font-size:20px; " class="btn text-light">Login</a></li>
                        <?php
                        }
                        ?>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      </div>
   </header>
   <!-- <li><a class="active" href="add_employee.php">Add_Employee</a></li> -->
   <!-- <li><a href="select_employee.php">ViewEmployee</a></li> -->
   <!-- <div class="dropdown">
      </ul> -->
   <!-- <button class="nav-toggler">
         <span></span>
      </button> -->
   <!-- end header -->