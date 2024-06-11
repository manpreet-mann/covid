<?php
    include '../config.php';
    $id = $_GET['id'];
    //echo $id;
    $q = "delete from `employee` where id='$id'";
    $result = mysqli_query($conn,$q);
    if($result > 0){
        echo "<script>window.location.assign('select_employee.php?msg=Record Deleted');</script>";
    }else{
        echo "<script>window.location.assign('select_employee.php?msg=Try Again.');</script>";
    }
?>