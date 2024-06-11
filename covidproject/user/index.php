<?php
require('header.php');
// if (!isset($_SESSION['user_name'])) {
//    echo "<script>window.location.assign('customer.php?err');</script>";
// }
?>
<div class="full_bg">
   <!-- header inner -->
   <div class="section">
      <!-- carousel code -->
      <div id="banner1" class="carousel slide slider_main">
         <ol class="carousel-indicators ">
            <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
            <li data-target="#banner1" data-slide-to="1" class="">02</li>
            <li data-target="#banner1" data-slide-to="2" class="active">03</li>
         </ol>
         <div class="carousel-inner">
            <!-- first slide -->
            <div class="carousel-item active">
               <div class="carousel-caption cuplle">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8">
                           <div class="photog">
                              <h1>Care early<br>Coronavirus</h1>
                              <!-- <a class="read_more" href="javascript:void(0)">Read More</a> -->
                              <!-- <a class="read_more" href="about.php">About Us</a> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- second slide -->
            <div class="carousel-item">
               <div class="carousel-caption cuplle">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8">
                           <div class="photog">
                              <h1>Health is <br>Wealth</h1>
                              <!-- <a class="read_more" href="javascript:void(0)">Read More</a> -->
                              <!-- <a class="read_more" href="about.php">About Us</a> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- third slide -->
            <div class="carousel-item">
               <div class="carousel-caption cuplle">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8">
                           <div class="photog">
                              <h1>Move it or<br>lose it!</h1>
                              <!-- <a class="read_more" href="javascript:void(0)">Read More</a> -->
                              <!-- <a class="read_more" href="about.php">About Us</a> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- controls -->
         <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
         </a>
      </div>
   </div>
</div>
<!-- end banner -->
<!-- about -->
<div class="about">
   <div class="container_width">
      <div class="row d_flex">
         <div class="col-md-7">
            <div class="titlepage text_align_left">
               <h2>About Corona Virus </h2>
               <p>Coronaviruses are a family of viruses that can cause illnesses such as the common cold, severe
                  acute respiratory syndrome (SARS) and Middle East respiratory syndrome (MERS). In 2019, a new
                  coronavirus was identified as the cause of a disease outbreak that originated in
                  China.Coronaviruses are a family of viruses that can cause illnesses such as the common cold,
                  severe acute respiratory syndrome (SARS) and Middle East respiratory syndrome (MERS). In 2019, a
                  new coronavirus was identified as the cause of a disease outbreak that originated in China.
               </p>
               <a class="read_more" href="about.php">About More</a>
            </div>
         </div>
         <div class="col-md-5">
            <div class="about_img text_align_center">
               <figure><img src="images/about.png" alt="#" /></figure>
            </div>
         </div>

      </div>
   </div>
</div>
<!-- end about -->
<!-- coronata -->
<div class="coronata">
   <div class="container">
      <div class="row d_flex grid">
         <div class="col-md-7">
            <div class="coronata_img text_align_center">
               <figure><img src="images/corona.png" alt="#" /></figure>
            </div>
         </div>
         <div class="col-md-5 oder1">
            <div class="titlepage text_align_left">
               <h2>Coronavirus what it is?</h2>
               <p>Coronaviruses are named for their appearance: “corona” means “crown.” The virus’s outer layers are covered with spike proteins that surround them like a crown.
               </p>
               <a class="read_more" href="about.php">About More</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end coronata -->

<!-- cases -->
<div class="cases">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_center ">
               <h2>Coronavirus Symptoms</h2>
               <p>People with COVID-19 have had a wide range of symptoms reported – ranging from mild symptoms to severe illness. Symptoms may appear 2-14 days after exposure to the virus. Anyone can have mild to severe symptoms. People with these symptoms may have COVID-19:</p>
            </div>
         </div>
      </div>
      <div class="row d_flex">
         <div class=" col-md-4">
            <div class="latest text_align_center">
               <figure><img src="../symptom12.jpg" alt="#" /></figure>
               <!-- <a class="read_more" href="cases.php">Read More</a> -->
               <div class="nostrud">
                  <!-- <h3>Cases 01</h3> -->
                  <p>
                  <ul class="text-justify font-weight-bold">
                     <li>Fever or chills</li>
                     <li>Cough</li>
                     <li>Shortness of breath</li>
                     <li>Difficulty breathing</li>
                     <li>Fatigue</li>
                  </ul>
                  </p>
               </div>
            </div>
         </div>
         <div class=" col-md-4">
            <div class="latest text_align_center">
               <figure><img src="../symptom21.jpg" alt="#" /></figure>
               <!-- <a class="read_more" href="cases.php">Read More</a> -->
               <div class="nostrud">
                  <!-- <h3>Cases 02</h3> -->
                  <p>
                     <ul class="text-justify font-weight-bold">
                     <li>Muscle or body aches</li>
                     <li>Headache</li>
                     <li>New loss of taste or smell</li>
                     <li>Sore throat</li>
                     <li>Congestion</li>
                  </ul>
               </p>
            </div>
         </div>
      </div>
      <div class=" col-md-4">
         <div class="latest text_align_center">
            <figure><img src="../symptom31.jpg" alt="#" /></figure>
            <!-- <a class="read_more" href="cases.php">Read More</a> -->
            <div class="nostrud">
               <!-- <h3>Cases 03</h3> -->
                  <p>
                  <ul class="text-justify font-weight-bold">
                     <li>Runny nose</li>
                     <li>Nausea or vomiting</li>
                     <li>Diarrhea</li>
                     <li>Difficulty breathing</li>
                     <li>Fatigue</li>
                  </ul>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end cases -->
<!-- protect -->
<div class="protect">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_center">
               <h2>How to Protect Yourself</h2>
               <p>The symptoms that are currently being seen with COVID-19 are fever and respiratory symptoms such as cough and shortness of breath. To help prevent the spread of germs, you should:
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="protect_bg">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <!--  Demos -->
               <div class="owl-carousel owl-theme">
                  <div class="item">
                     <div class="protect_box text_align_center">
                        <div class="desktop">
                           <i><img src="images/pro1.png" alt="#" /></i>
                           <h3> Wear Mask</h3>
                           <span> Masks should be used as part of a comprehensive strategy of measures to suppress transmission and save lives; the use of a mask alone is not sufficient to provide an adequate level of protection against COVID-19.</span>
                        </div>
                        <a class="read_more" href="prevention.php">Read More</a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="protect_box text_align_center">
                        <div class="desktop">
                           <i><img src="images/pro2.png" alt="#" /></i>
                           <h3> Wash Your Hands</h3>
                           <span>In the context of COVID-19 prevention, you should make sure to wash your hands before and after eating, after blowing your nose, coughing or sneezing and
                              after touching surfaces outside of the home, including money</span>
                        </div>
                        <a class="read_more" href="prevention.php">Read More</a>
                     </div>
                  </div>
                  <div class="item">
                     <div class="protect_box text_align_center">
                        <div class="desktop">
                           <i><img src="images/pro3.png" alt="#" /></i>
                           <h3> Stay at Home</h3>
                           <span> Most people who become sick with COVID-19 will only have mild illness and can get better at home.Stay-at-home directives are issued to protect you, your family, and the public at large</span>
                        </div>
                        <a class="read_more" href="prevention.php">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- end protect -->
<!-- doctors -->
<div class="doctors">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_center ">
               <h2>What doctors say..</h2>
            </div>
         </div>
      </div>
      <div class="row d_flex">
         <div class=" col-md-6">
            <div id="ho_efcet" class="reader text_align_center">
               <i><img src="images/doctor1.png" alt="#" /></i>
               <h3>Dr.Golap den</h3>
               <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                  looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                  distribution of letters, as opposed to using 'Content here, content here', making it look</p>
               <span><img src="images/do.png" alt="#" /></span>
            </div>
         </div>
         <div class=" col-md-6">
            <div id="ho_efcet" class="reader text_align_center">
               <i><img src="images/doctor2.png" alt="#" /></i>
               <h3>Dr.Golap den</h3>
               <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                  looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                  distribution of letters, as opposed to using 'Content here, content here', making it look</p>
               <span><img src="images/do.png" alt="#" /></span>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end cases -->
<!-- update -->
<div class="update">
   <div class="cevery_white">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Get Every Update.... </h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="cevery_bg">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <form id="colof" class="form_subscri">
                  <input class="newsl" placeholder="Your Email" type="text" name="Email">
                  <button class="subsci_btn">Subscribe Now</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- update -->
<?php
require('footer.php');
?>