<?php
require('../controller/register.php')
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
      <title>Altclick ICT World | Register</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
    
      <!-- Favicons -->
      <link href="../assets/img/favicon.png" rel="icon">
      <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body style="overflow: scroll;">
      <div class="container">
         <!-- <center> -->
         <header>Registration Form</header>
         <p style="color:red"><b>Altclick ICT World Course/Training Registration.</b></p>
         <?php if ($err_msg!="") : ?>
            <div class="container">
                  <div class="alert alert-danger" style="color:white; background:red; height:25px; padding:10px"><?php echo $err_msg . '<br>' ?></div>
            </div>
         <?php endif; ?>
         <div class="progress-bar">
            <div class="step">
               <p>
                  Name
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Contact
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
            <form action="" method="post">
            <!-- https://getform.io/f/d03b8bd9-6365-46af-9a9e-283be59f1ca2 -->
            <!-- <form action="" method="POST"> -->
               <div class="page slide-page">
                  <div class="title">
                     Basic Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        First Name
                     </div>
                     <input type="text"  name="FirstName">
                  </div>
                  <div class="field">
                     <div class="label">
                        Last Name
                     </div>
                     <input type="text" name="LastName">
                  </div>
                  <div class="field">
                     <button class="firstNext next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Contact Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        Email Address
                     </div>
                     <input type="email" name="EmailAddress">
                  </div>
                  <div class="field">
                     <div class="label">
                        Phone Number
                     </div>
                     <input type="Number" name="PhoneNumber">
                  </div>
                  <div class="field btns">
                     <button class="prev-1 prev">Previous</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Course Details:
                  </div>
                  
                  <div class="field">
                     <div class="label">
                        Course
                     </div>
                     <select name="Course"  id="course">
                     <option selected disabled value="">Choose...</option>
                     <option value="Frontend Dev">Frontend Development</option>
                     <option value="Backend Dev">Backend Development</option>
                     <option value="Full-stack Web Dev">Full-stack Web Developemnt</option>
                     <option value="MERN Stack Dev">MERN Stack Development</option>
                     <option value="PHP Stack Dev">PHP Stack Development</option>
                     <option value="Mobile Apps Dev">Mobile Apps Developent</option>
                     <option value="Data Analysis">Data Analysis</option>
                     <option value="Cyber-Security">Cyber Security</option>
                     <option value="Graphic Design UI-UX">Graphic Design/UI-UX</option>
                     <option value="Business and Entrepreneurship">Business and Entrepreneurship in IT</option>
                     <option value="Certificate in Computer">Certificate in Computer</option>
                     <option value="Diploma in Data Processing">Diploma in Data Processing</option>
                     <option value="Diploma in Sec Studies">Diploma in Sec. Studies</option>
                     <option value="Video Editing">Video Editing</option>
                     <option value="Networking">Networking</option>
                     <option value="Computer Engineering">Computer Engineering</option>
                     </select>
                  </div>
                  <div class="field">
                     <div class="label">
                        Mode of Training
                     </div>
                     <!-- <div>
                        <p>*Onsite (The onsite training takes place in our office location)</p>
                        <p>*Virtual (The virtual training is a distance training that happens virtually)</p>
                        <p>*Private (The private training warrant us comming to your suitable place.)</p>
                     </div> -->
                     <select name="Mode" id="mode" onchange="courseAmount();">
                     <option selected disabled value="">Choose...</option>
                     <option value="Onsite">Onsite</option>
                     <option value="Virtual">Virtual</option>
                     <option value="Private">Private</option>
                     </select>
                  </div>
                  <div class="field">Amount: <input type="text" id="amount" disabled class="amount" name="Amount"><strike>N</strike></input></div>
                  <div class="field">Duration: <input type="text" id="duration" disabled class="amount" name="Duration"></input></div>
                  <div class="field btns">
                    <button class="prev-3 prev">Previous</button>
                    <button type="submit" name="Register">Submit</button>
                  </div>
               </div>
            </form>
         </div>
         <!-- </center> -->
      </div>
      <script src="../assets/js/script.js"></script>
       <!-- Scripts -->
       <!-- <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/owl-carousel.js"></script>
        <script src="../assets/js/animation.js"></script>
        <script src="../assets/js/imagesloaded.js"></script>
        <script src="../assets/js/custom.js"></script> -->

 
      <script src="../assets/js/control.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>