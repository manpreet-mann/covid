<?php
session_start();
$_SESSION['employee_name']='employee';
$_SESSION['employee_email']='employee@m.com';
echo $_SESSION['employee_name']."". $_SESSION['employee_email'];
?>