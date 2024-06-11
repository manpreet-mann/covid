<?php
require('header.php');
?>
<!-- contact -->
<div class="py-5">
   <div class="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="titlepage mx-auto">
                  <h2>Contact Us</h2>
               </div>
            </div>
         </div>
         <?php
         if (isset($_POST['button'])) {
            require "../config.php";
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $q = "Insert into `contact`(`name`, `email`, `phone`, `subject`, `message`) values ('$name', '$email', '$phone', '$subject', '$message')";
            $result = mysqli_query($conn, $q);
            if ($result > 0) {
         ?>
               <div class='alert alert-success text-center col-md-12'>Data Inserted.</div>
         <?php
            } else {
               echo "<div class='alert alert-danger text-center col-md-12'>Try Again.</div>";
            }
         }
         ?>
         <div class="row">
            <div class="col-md-6 mx-auto">
               <form action="" method="post" id="request" class="main_form">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Full Name" type="text" name="name">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Email" type="email" name="email">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Phone" type="tel" name="phone">
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Subject" type="textarea" name="subject"></textarea>
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Message" type="textarea" name="message"></textarea>
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn" name="button">Send Now</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-6">
               <div class="map-responsive pt-5">
                  <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="540" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
<!-- end contact -->
<?php
require('footer.php');
?>