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
         <header>Registration Form</header>
         <p style="color:red"><b>Altclick ICT World Course/Training Registration.</b></p>
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
            <form action="https://getform.io/f/d03b8bd9-6365-46af-9a9e-283be59f1ca2" method="POST">
               <div class="page slide-page">
                  <div class="title">
                     Basic Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        First Name
                     </div>
                     <input type="text"  name="FirstName" required>
                  </div>
                  <div class="field">
                     <div class="label">
                        Last Name
                     </div>
                     <input type="text" name="LastName" required>
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
                     <input type="email" name="EmailAddress" required>
                  </div>
                  <div class="field">
                     <div class="label">
                        Phone Number
                     </div>
                     <input type="Number" name="PhoneNumber" required>
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
                     <select name="Course" required id="course">
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
                     <select name="mode" required id="mode" onchange="courseAmount();">
                     <option selected disabled value="">Choose...</option>
                     <option value="Onsite">Onsite</option>
                     <option value="Virtual">Virtual</option>
                     <option value="Private">Private</option>
                     </select>
                  </div>
                  <div class="field">Amount: <input type="text" id="amount" disabled class="amount"><strike>N</strike></input></div>
                  <div class="field">Duration: <input type="text" id="duration" disabled class="amount"></input></div>
                  <div class="field btns">
                    <button class="prev-3 prev">Previous</button>
                    <button class="submit" type="submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <script src="../assets/js/script.js"></script>
       <!-- Scripts -->
       <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/owl-carousel.js"></script>
        <script src="../assets/js/animation.js"></script>
        <script src="../assets/js/imagesloaded.js"></script>
        <script src="../assets/js/custom.js"></script>

 
        <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields

  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const course = document.getElementById('course');
  course.addEventListener("change", courseAmount);
  function courseAmount(){
     const amount = document.getElementById('amount');
     const mode = document.getElementById('mode');
     const duration = document.getElementById('duration');
   //   If training course if Frontend
     if(course.value=="Frontend Dev" && mode.value=="Onsite"){
      amount.value="150000";
      duration.value="24 Weeks";
     }
     if(course.value=="Frontend Dev" && mode.value=="Virtual"){
      amount.value="90000";
      duration.value="24 Weeks";
     }
     if(course.value=="Frontend Dev" && mode.value=="Private"){
      amount.value="230000";
      duration.value="24 Weeks";
     }
   //   if training course is backend
     else if(course.value=="Backend Dev" && mode.value=="Onsite"){
      amount.value="200000";
      duration.value="24 Weeks";
     }
     else if(course.value=="Backend Dev" && mode.value=="Virtual"){
      amount.value="180000";
      duration.value="24 Weeks";
     }
     else if(course.value=="Backend Dev" && mode.value=="Private"){
      amount.value="300000";
      duration.value="24 Weeks";
     }
     //   if training course is Mobile Apps Developent
     else if(course.value=="Mobile Apps Dev" && mode.value=="Onsite"){
      amount.value="250000";
      duration.value="24 Weeks";
     }
     else if(course.value=="Mobile Apps Dev" && mode.value=="Virtual"){
      amount.value="230000";
      duration.value="24 Weeks";
     }
     else if(course.value=="Mobile Apps Dev" && mode.value=="Private"){
      amount.value="350000"
      duration.value="24 Weeks";
     }
   //   if training course is MERN
     else if(course.value=="MERN Stack Dev" && mode.value=="Onsite"){
      amount.value="250000";
      duration.value="24 Weeks";
     }
     else if(course.value=="MERN Stack Dev" && mode.value=="Virtual"){
      amount.value="230000";
      duration.value="24 Weeks";
     }
     else if(course.value=="MERN Stack Dev" && mode.value=="Private"){
      amount.value="350000"
      duration.value="24 Weeks";
     }
   //   if training course is full-stall
     else if(course.value=="Full-stack Web Dev" && mode.value=="Onsite"){
      amount.value="250000";
      duration.value="24 Weeks";
     }
     else if(course.value=="Full-stack Web Dev" && mode.value=="Virtual"){
      amount.value="230000"
      duration.value="24 Weeks";
     }
     else if(course.value=="Full-stack Web Dev" && mode.value=="Private"){
      amount.value="350000"
     }
   //   if training course is PHP full-stack
     else if(course.value=="PHP Stack Dev" && mode.value=="Onsite"){
      amount.value="250000";
      duration.value="24 Weeks";
     }
     else if(course.value=="PHP Stack Dev" && mode.value=="Virtual"){
      amount.value="230000";
      duration.value="24 Weeks";
     }
     else if(course.value=="PHP Stack Dev" && mode.value=="Private"){
      amount.value="350000";
      duration.value="24 Weeks";
     }
   //   if training course is data analysis
     else if(course.value=="Data Analysis" && mode.value=="Onsite"){
      amount.value="150000";
      duration.value="16 Weeks";
     }
     else if(course.value=="Data Analysis" && mode.value=="Virtual"){
      amount.value="900000";
      duration.value="16 Weeks";
     }
     else if(course.value=="Data Analysis" && mode.value=="Private"){
      amount.value="230000";
      duration.value="16 Weeks";
     }
   //   if training course is cyber security
     else if(course.value=="Cyber-Security" && mode.value=="Onsite"){
      amount.value="300000";
      duration.value="20 Weeks";
     }
     else if(course.value=="Cyber-Security" && mode.value=="Virtual"){
      amount.value="230000";
      duration.value="20 Weeks";
     }
     else if(course.value=="Cyber-Security" && mode.value=="Private"){
      amount.value="350000";
      duration.value="20 Weeks";
     }
   //   if training course is UI-UX
     else if(course.value=="Graphic Design UI-UX" && mode.value=="Onsite"){
      amount.value="150000";
      duration.value="16 Weeks";
     }
     else if(course.value=="Graphic Design UI-UX" && mode.value=="Virtual"){
      amount.value="180000";
      duration.value="16 Weeks";
     }
     else if(course.value=="Graphic Design UI-UX" && mode.value=="Private"){
      amount.value="230000";
      duration.value="16 Weeks";
     }
   //   if training course is business and entrepreneurship in IT
     else if(course.value=="Business and Entrepreneurship" && mode.value=="Onsite"){
      amount.value="50000";
      duration.value="16 Weeks";
     }
     else if(course.value=="Business and Entrepreneurship" && mode.value=="Virtual"){
      return alert("This programme is currently not slided for virtual. It only takes place in our office location");
     }
     else if(course.value=="Business and Entrepreneurship" && mode.value=="Private"){
      return alert("This programme is currently not slided for private. It only takes place in our office location");
     }
   //   if training course is certificate in computer
     else if(course.value=="Certificate in Computer" && mode.value=="Onsite"){
      amount.value="50000";
      duration.value="8 Weeks";
     }
     else if(course.value=="Certificate in Computer" && mode.value=="Virtual"){
      amount.value="45000";
      duration.value="8 Weeks";
     }
     else if(course.value=="Certificate in Computer" && mode.value=="Private"){
      amount.value="90000";
      duration.value="8 Weeks";
     }

   //    if training course is diploma in data processing
     else if(course.value=="Diploma in Data Processing" && mode.value=="Onsite"){
      amount.value="55000";
      duration.value="12 Weeks";
     }
     else if(course.value=="Diploma in Data Processing" && mode.value=="Virtual"){
      amount.value="50000";
      duration.value="12 Weeks";
     }
     else if(course.value=="Diploma in Data Processing" && mode.value=="Private"){
      amount.value="95000";
      duration.value="12 Weeks";
     }
     //    if training course is diploma in sec studies
     else if(course.value=="Diploma in Sec Studies" && mode.value=="Onsite"){
      amount.value="45000";
      duration.value="12 Weeks";
     }
     else if(course.value=="Diploma in Sec Studies" && mode.value=="Virtual"){
      amount.value="40000";
      duration.value="12 Weeks";
     }
     else if(course.value=="Diploma in Sec Studies" && mode.value=="Private"){
      amount.value="90000";
      duration.value="12 Weeks";
     }
   //   if training course is video editing
     else if(course.value=="Video Editing" && mode.value=="Onsite"){
      amount.value="60000";
      duration.value="4 Weeks";
     }
     else if(course.value=="Video Editing" && mode.value=="Virtual"){
      amount.value="50000";
      duration.value="4 Weeks";
     }
     else if(course.value=="Video Editing" && mode.value=="Private"){
      amount.value="100000";
      duration.value="4 Weeks";
     }
   //   if training course is networking
     else if(course.value=="Networking" && mode.value=="Onsite"){
      amount.value="75000";
      duration.value="12 Weeks";
     }
     else if(course.value=="Networking" && mode.value=="Virtual"){
      return alert("This programme is currently not slided for virtual. It only takes place onsite (in our office location)");
     }
     else if(course.value=="Networking" && mode.value=="Private"){
      return alert("This programme is currently not slided for private. It only takes place onsite (in our office location)");
     }
   //   if training course is computer engineering
     else if(course.value=="Computer Engineering" && mode.value=="Onsite"){
      amount.value="100000";
      duration.value="16 Weeks";
     }
     else if(course.value=="Computer Engineering" && mode.value=="Virtual"){
      return alert("This programme is currently not slided for virtual. It only takes place onsite (in our office location)")
     }
     else if(course.value=="Computer Engineering" && mode.value=="Private"){
      return alert("This programme is currently not slided for private. It only takes place onsite (in our office location)")
     }
     else{
      amount.value="0.00"
     }


  }

  
        </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>