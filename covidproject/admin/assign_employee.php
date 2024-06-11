<?php
require('header.php');
?>
<div class=" py-5">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage mx-auto mb-3">
                        <h2>Appointment</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mx-auto">
                    <?php
                    if (isset($_GET['msg'])) {
                        echo "<div class='col-12 alert alert-info'>" . $_GET['msg'] . "</div>";
                    }
                    require '../config.php';
                    if(isset($_REQUEST['id'])){
                        $id = $_GET['id'];
                    $q2="select appointment.*,customer.name,customer.email,customer.phone,customer.address,customer.age from `appointment` inner join `customer` on appointment.user_id=customer.id   where appointment.id='$id'";
                        $result2= mysqli_query($conn, $q2);
                        $data = mysqli_fetch_array($result2);
                    }
                    ?>
                      <form  method="post" id="request" class="main_form" >
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <input class="contactus" placeholder="Full Name" type="text" name="name" value="<?php echo $data['name'] ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Phone" type="tel" name="phone" value="<?php echo $data['phone'] ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Email" type="email" name="email" value="<?php echo $data['email'] ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Age" type="tel" name="age" value="<?php echo $data['age'] ?>" readonly>
                                </div>
                              
                                <div class="col-md-6">
                                    <input class="contactus pt-2" placeholder="Address" type="textarea" name="address" value="<?php echo $data['address'] ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="contactus pt-2" name="book_date" value="<?php echo $data['book_date']?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <input type="time" class="contactus pt-2" name="book_time" value="<?php echo $data['book_time']?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <select name="employee" class="form-control contactus pt-2">
                                        <option selected disabled>Select Employee</option>
                                        <?php
                                        $eq="Select * from `employee`";
                                        $res1=mysqli_query($conn,$eq);
                                        while($d1=mysqli_fetch_array($res1)){
                                            ?>
                                            <option value="<?php echo $d1['id']?>"><?php echo $d1['name']?></option>
                                            <?php
                                        }
                                        
                                        ?>
                                    </select>
                                </div> 
                               
                               
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <button class="send_btn" name="button">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.php');

if(isset($_REQUEST['button'])){
    $emp_id=$_REQUEST['employee'];
    echo $uq="Update `appointment` set `employee_id`=$emp_id, `status`='Employee Assigned' where `id`='$id'";
    $res=mysqli_query($conn,$uq);
    if($res>0){
        echo "<Script>window.location.assign('appointment_data.php?msg=Employee Assigned')</script>";
    }
    else{
        echo "<Script>window.location.assign('appointment_data.php?msg=Error!! Try again later.')</script>";
    }
}
?>