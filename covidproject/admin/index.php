<?php
require('header.php');
if (!isset($_SESSION['admin_name'])) {
   echo "<script>window.location.assign('login.php?err');</script>";
}
?>

<?php
require('footer.php');
?>