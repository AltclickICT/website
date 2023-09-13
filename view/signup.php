<?php
// require "../functions/signup.php";
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <title>MALARIA DIAGNOSIS STSYEM</title>

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="../assets/css/fontawesome.css">
        <link rel="stylesheet" href="../assets/css/templatemo-seo-dream.css">
        <link rel="stylesheet" href="../assets/css/animated.css">
        <link rel="stylesheet" href="../assets/css/owl.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

    <body>

        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="../../" class="logo">
                                <h4>MEDS<img src="../../assets/images/logo-icon.jpeg" alt=""></h4>
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav navbar">
                                <li class="scroll-to-section"><a href="../../" class="active">Home</a></li>
                                <li class="scroll-to-section"><a href="../../index.php#[object%20Object]">About</a></li>
                                
                                <li class="scroll-to-section">
                                    <a href="signin.php?success=0">Patient</a>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="../consultant/apply.php">Consultant</a>
                                </li>
                                <li class="scroll-to-section">
                                    <div class="main-blue-button">
                                        <a href="signin.php?success=0">Start Diagnosis</a></div>
                                </li>
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->
     <div class="container" style="margin-top:120px;">
                <div class="container" style="text-align:center">
                    <h3>SIGN UP AS A PATIENT</h3>
                    <h4>Please Fill In Your Information Appropriately</h4>

                    <?php if (!empty($err_msg)) : ?>
                               <div class="container">
                                   <?php foreach ($err_msg as $err) : ?>
                                       <div class="alert alert-danger"><?php echo $err . '<br>' ?></div>
                                   <?php endforeach; ?>
                               </div>
                    <?php endif; ?>
               </div>
        <form class="row g-3 needs-validation" method="POST" action="" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="Enter your first name"required>
                <div class="invalid-feedback">
                    Please enter your first name.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" name="lname" placeholder="Enter your last name" required>
                <div class="invalid-feedback">
                    Please enter your last name.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="email" placeholder="Enter your email" required>
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Home Address</label>
                <input type="text" class="form-control" id="validationCustom03" name="home" placeholder="Specify where you live" required>
                <div class="invalid-feedback">
                Please provide address of where you live.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Sex</label>
                <select class="form-select" id="validationCustom04" name="sex" required>
                <option selected disabled value="">Choose...</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
                </select>
                <div class="invalid-feedback">
                Please select your gender.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Health Status</label>
                <select class="form-select" id="validationCustom05" name="mstatus" required>
                <option selected disabled value="">Choose...</option>
                <option value="pb">I am a PB patient</option>
                <option value="diabeti">I am a diabeti patient</option>
                <option value="pregnant">I am pregnant</option>
                <option value="none">None</option>
                </select>
                <div class="invalid-feedback">
                Please select your health condition.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom06" class="form-label">Age</label>
                <input type="number" class="form-control" id="validationCustom06" name="age" required>
                <div class="invalid-feedback">
                Please provide your age.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom07" class="form-label">Password</label>
                <input type="password" class="form-control" id="validationCustom07" name="password" min="6" required>
                <div class="invalid-feedback">
                Please create a password.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom08" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="validationCustom08" name="repeat_password" required>
                <div class="invalid-feedback">
                Please retype the password.
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
                </div>
            </div>  
            <div class="col-12">
                <button class="btn btn-info" name="signup" type="submit">Sign Up</button>
                <span>You have created account already? <a href="signin.php">Click here</a> to login</span>
            </div>
    </form>
     </div>

        <footer style="background-color: black; color: white; margin-top: 120px; position: bottom 0;">
            <div class="container-sm">
                <div class="row">
                    <div class="col-lg-12">
                        <p style="color: white;">Copyright © 2023 <em><strong>UGBE GODWIN IKPE</strong></em>. All Rights Reserved.

                            <br>
                            <strong>18/D/CSC/005</strong>
                            <a style="color: red;" rel="nofollow" href="https://ugbegodwinikpe.github.io/portfolio/" title="My Portfolio">
                                <strong>Class of 2021</strong>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets/js/owl-carousel.js"></script>
        <script src="../../assets/js/animation.js"></script>
        <script src="../../assets/js/imagesloaded.js"></script>
        <script src="../../assets/js/custom.js"></script>

 
        <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
        </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>