<?php
// $studenId= $_GET['studentId'];
// $name=$_GET['name'];
// $email=$_GET['email'];
// $phoneNumber=$_GET['phone'];
// $amount=$_GET['amount'];


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
         <header>Training Fee Payment</header>
         <p style="color:red"><b>Altclick ICT World Accept two methods of Payment.</b></p>
         <div class="progress-bar">
            <div class="step">
               <p>
                  Pay Here Online
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Pay Cash At The Office
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            
         </div>
         <div class="form-outer">
        <center>
            <form method="POST" id="paymentForm" action="https://checkout.flutterwave.com/v3/hosted/pay">
               <div class="page slide-page">
                  <div class="field">
<!-- here -->
<input type="hidden" name="public_key" value="FLWPUBK-ea911ad04be9e1019db650231994ec1c-X" />
  <input type="hidden" name="customer[email]" value="ikpeugbe@gmail.com" />
  <input type="hidden" name="customer[name]" value="Godwin Ugbe" />
  <input type="hidden" name="tx_ref" value="bitethtx-019203" />
  <input type="hidden" name="amount" value="50000" />
  <input type="hidden" name="currency" value="NGN" />
  <input type="hidden" name="meta[token]" value="54" />
  <input type="hidden" name="redirect_url" value="https://google.com" />
                  <!-- here -->
                  <!-- <input type="hidden" id="studentName" name="studentName" value='<?php echo $name; ?>'>
                    <input type="hidden" id="email" name="email" value='<?php echo $email; ?>'>
                    <input type="hidden" id="phone" name="phoneNumber" value='<?php echo $phoneNumber; ?>'>
                    <input type="hidden" id="amount" name="amount" value='<?php echo $amount; ?>'>
                    <input type="hidden" id="studentId" name="studentId" value='<?php echo $studentId; ?>'> -->
                    <div class="field btns" style="align-content: center;">
                     <button type="submit" class="btn btn-primary" id="start-payment-button">Pay Here Online</button>
                     <button class="btn btn-primary">Cash At the Office</button>
                    </div>
                </div>
            </div>
        </form>
        
    </center>
         </div>
      </div>
<!-- paystack inline script -->
      <!-- <script src="https://js.paystack.co/v1/inline.js"></script> -->

      <!-- flutterwave inline script -->
      
      <script src="../assets/js/payfees.js"></script>
      <!-- <script src="../assets/js/script.js"></script> -->
       <!-- Scripts -->
       <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/owl-carousel.js"></script>
        <script src="../assets/js/animation.js"></script>
        <script src="../assets/js/imagesloaded.js"></script>
        <script src="../assets/js/custom.js"></script>

 
        
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
     <script src="https://checkout.flutterwave.com/v3.js"></script>
    </body>
</html>