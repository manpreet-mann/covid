<?php
require('header.php');
?>
<!-- edit employee -->
<div class=" py-5">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage mx-auto">
                        <h2>Edit Appointment</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                require '../config.php';
                if(isset($_REQUEST['id'])){
                    $id = $_GET['id'];
                   $q2="select appointment.*,customer.name,customer.email,customer.phone,customer.address,customer.age from `appointment` inner join `customer` on appointment.user_id=customer.id   where appointment.id='$id'";
                    $result2= mysqli_query($conn, $q2);
                    $data = mysqli_fetch_array($result2);
                }
                
                ?> 
                <div class="col-md-12">
                    <form  method="post" id="request" class="main_form" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <input class="contactus" placeholder="Full Name" type="text" name="name" value="<?php echo $data['name'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Phone" type="tel" name="phone" value="<?php echo $data['phone'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Email" type="email" name="email" value="<?php echo $data['email'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Age" type="tel" name="age" value="<?php echo $data['age'] ?>">
                                </div>
                              
                                <div class="col-md-6">
                                    <input class="contactus pt-2" placeholder="Address" type="textarea" name="address" value="<?php echo $data['address'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="contactus pt-2" name="book_date" value="<?php echo $data['book_date']?>">
                                </div>
                                <div class="col-md-6">
                                    <input type="time" class="contactus pt-2" name="book_time" value="<?php echo $data['book_time']?>">
                                </div>
                                <!-- <div class="col-md-6">
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
                                </div> -->
                                <!-- <div class="col-md-6">
                                    <fieldset>
                                        <legend class="textarea pt-2">Id Proof
                                            <div>
                                                <input name="id_proof" class="form-control form-control-lg" id="formFileLg" type="file" value="<?php echo $data['id_proof'] ?>">
                                                <input name="hid_proof" class="form-control form-control-lg" id="formFileLg" type="hidden">
                                            </div>
                                        </legend>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="textarea pt-2">Address Proof
                                            <div>
                                            <input name="addressproof" class="form-control form-control-lg" id="formFileLg" type="file" >
                                                <input name="haddressproof" class="form-control form-control-lg" id="formFileLg" type="hidden" value="<?php echo $data['addressproof'] ?>">
                                            </div>
                                        </legend>
                                    </fieldset>
                                </div> -->
                                <!-- <div class="col-md-6">
                                    <fieldset>
                                        <legend class="contactus pt-2 mx-auto">Select Gender
                                            <div>
                                                <input type="radio" name="gender" id="tellgender" value="m" name="gender" <?php if ($data['gender'] == 'm') {
                                                                                                                                echo "checked";
                                                                                                                            } ?>> Male
                                                <input type="radio" name="gender" id="tellgender" value="f" name="gender" <?php if ($data['gender'] == 'f') {
                                                                                                                                echo "checked";
                                                                                                                            } ?>> Female
                                                <input type="radio" name="gender" id="tellgender" value="o" name="gender" <?php if ($data['gender'] == 'o') {
                                                                                                                                echo "checked";
                                                                                                                            } ?>> Other
                                            </div>
                                        </legend>
                                    </fieldset>
                                </div> -->
                                <div class="col-md-6">
                                    <select name="status" class="form-control contactus pt-2">
                                        <option value="" disabled>Select one</option>
                                        <?php
                                        if($data['status']=='PENDING' ||$data['status']=='Pending')
                                        {
                                            echo "
                                            <option selected>PENDING</option>
                                            <option>Employee Visited</option>
                                            <option>Sample reached</option>
                                            <option>Test in Progress</option>
                                            <option>Report Updated</option>";
                                        }
                                        else if($data['emplpyee_id']!=""){
                                            echo "
                                            <option disabled>PENDING</option>
                                            <option selected>Employee Assigned</option>
                                            <option>Employee Visited</option>
                                            <option>Sample reached</option>
                                            <option>Test in Progress</option>
                                            <option>Report Updated</option>";
                                        }
                                        else if($data['status']=='Employee visited'){
                                            echo "
                                            <option disabled>PENDING</option>
                                            <option selected>Employee Visited</option>
                                            <option>Sample reached</option>
                                            <option>Test in Progress</option>
                                            <option>Report Updated</option>";
                                        }
                                        else if($data['status']=='Sample reached'){
                                            echo "
                                            <option disabled>PENDING</option>
                                            <option >Employee Visited</option>
                                            <option selected>Sample reached</option>
                                            <option>Test in Progress</option>
                                            <option>Report Updated</option>";
                                        }
                                        else if($data['status']=='Test in Progress'){
                                            echo "
                                            <option disabled>PENDING</option>
                                            <option disabled>Employee Visited</option>
                                            <option>Sample reached</option>
                                            <option selected>Test in Progress</option>
                                            <option>Report Updated</option>";
                                        }
                                        else if($data['status']=='Result Updated'){
                                            echo "
                                            <option disabled>PENDING</option>
                                            <option disabled>Employee Visited</option>
                                            <option>Sample reached</option>
                                            <option disabled >Test in Progress</option>
                                            <option selected>Report Updated</option>";
                                        }
                                        else{
                                            echo "
                                            <option selected>PENDING</option>
                                            <option>Employee Assigned</option>
                                            <option >Employee Visited</option>
                                            <option>Sample reached</option>
                                            <option  >Test in Progress</option>
                                            <option >Report Updated</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="file" name="report" class="contactus pt-2" <?php if($data['status']=='Report Updated'){ ?>
                                        readonly <?php } ?> >
                                    <?php
                                     if($data['status']=='Report Updated'){

                                        echo "<br><span>You can not update or change already updated report!</span>";
                                     }
                                    
                                    ?>
                                    <br>
                                    <span></span>
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
</div>
<!-- end edit employee -->
<?php
require('footer.php');
if (isset($_POST['button'])) {
    // $employee_id = $_POST['employee_id'];
    $address = $_POST['address'];
    $book_date = $_POST['book_date'];
    $book_time = $_POST['book_time'];
    $status = $_POST['status'];
   
        $f_name=$_FILES['report']['name'];
        $newname = rand() . $f_name;
        $location = $_FILES['report']['tmp_name'];

    $q = "Update `appointment` set `address` = '$address',`book_date` = '$book_date',`book_time` = '$book_time',`status` = '$status', `report` = '$newname' where id = '$id'";
    $result1 = mysqli_query($conn, $q);
    if ($result1 > 0) {
        move_uploaded_file($location, '../upload/' . $newname);
        echo "<script>window.location.assign('appointment_data.php?msg=Record Updated');</script>";
    } else {
        echo "<script>window.location.assign('appointment_data.php?msg=Try Again.');</script>";
    }
}
?>