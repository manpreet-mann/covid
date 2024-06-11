<?php
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    include('../config.php');
    $q="Update `appointment` set `status`='Accepted by Employee' where `id`='$id'";
    $res=mysqli_query($conn,$q);
    if($res>0){
        echo "<Script>window.location.assign('view_appoint_em.php?msg=Accepted Successfully')</script>";
    }
    else{
        echo "<Script>window.location.assign('view_appoint_em.php?msg=Try again Later!!')</script>";
    }
}

?>