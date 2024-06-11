<?php
require('header.php');
?>
<!-- employee login -->
<div class=" py-5">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage mx-auto">
                        <h2>Employee Login</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                    <form action="" method="post" id="request" class="main_form" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <input class="contactus" placeholder="Full Name" type="text" name="name">
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Phone" type="tel" name="phone">
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Email" type="email" name="email">
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Age" type="tel" name="age">
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Password" type="password" name="password"></input>
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus pt-2" placeholder="Address" type="textarea" name="address">
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="textarea pt-2">Id Proof
                                            <div>
                                                <input name="id_proof" class="form-control form-control-lg" id="formFileLg" type="file">
                                            </div>
                                        </legend>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="textarea pt-2">Address Proof
                                            <div>
                                                <input name="addressproof" class="form-control form-control-lg" id="formFileLg" type="file">
                                            </div>
                                        </legend>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend class="contactus pt-2 mx-auto">Select Gender
                                            <div>
                                                <input type="radio" name="gender" id="tellgender" value="m" name="gender"> Male
                                                <input type="radio" name="gender" id="tellgender" value="f" name="gender"> Female
                                                <input type="radio" name="gender" id="tellgender" value="f" name="gender"> Other
                                            </div>
                                        </legend>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <button class="send_btn" name="button">Send Now</button>
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
<!-- end employee login -->
<?php
require('footer.php');
?>