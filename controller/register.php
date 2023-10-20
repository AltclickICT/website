<?php
require 'db.php';
$err_msg="";
if(isset($_POST["Register"])){
   
    $err_flag = false;
    if (!empty($_POST['EmailAddress'])) {
        $email = $_POST['EmailAddress'];
        
    } else {
       return $err_msg = "An email address is necessary";
    }

    if (!empty($_POST['FirstName'])) {
        $fname = $_POST['FirstName'];
        
    } else {
       return $err_msg = "First name is required. What is your first name?";
    }

    if (!empty($_POST['LastName'])) {
        $lname = $_POST['LastName'];
        
    } else {
       return $err_msg = "Last name is required. What is your last name?";
    }

    if (!empty($_POST['PhoneNumber'])) {
        $phoneNumber = $_POST['PhoneNumber'];
        
    } else {
     return $err_msg = "Phone number is required";
    }

    if (!empty($_POST['Course'])) {
        $course = $_POST['Course'];
        
    } else {
     return $err_msg = "Please select a course you want to enroll.";
    }

    if (!empty($_POST['Duration'])) {
     $duration = $_POST['Duration'];
     
    } else {
         $duration = "4 Weeks";

    }
    if (!empty($_POST['Amount'])) {
     $amount = $_POST['Amount'];
     
     } else {
        $amount = 50000;//$_POST['Amount'];
        //   return $err_msg = "Amount can not be empty!";
     }
     if (!empty($_POST['Mode'])) {
          $modeOfTraining = $_POST['Mode'];
          
     } else {
        // return $err_msg = "Mode of training is required.";
        $modeOfTraining = "Onsite";
     }
    //  echo "Here ooooooo";
    //     exit();
    // if ($err_msg=="") {
        
        $studentId = rand(5, 1000000000);
        $key = md5($email);

        $query = "INSERT INTO course_registration (studentId, firstName, lastName, email, phoneNumber, course, modeOfTraining, duration, amount) 
                    VALUES ('$studentId', '$fname', '$lname', '$email', '$phoneNumber', '$course', '$modeOfTraining', '$duration', '$amount')";

        $ent = mysqli_query($link, $query) or die(mysqli_error($link));
        if ($ent) {
            $nam=$fname.' '.$lname;
            header('location: payment.php');
        } else {
            header(`location: payment.php?studentId=$studentId&name=$nam&email=$email&phone=$phoneNumber&amount=$amount`);
        }
        if ($ent) {
            
            $message = `<p><h3>Hello $fname, </h3><p>
                            <h5>Thank you for a successful registration of $course training with <b>Altclick ICT World </b></h5>
                            <div>
                            <h6>Your information is highly confidential with us.</h6> 
                            <p>Welcome Aboard!</p> \n
                            <p>Name: $fname .' '. $lname</p>
                            <p>Phone Number: $phoneNumber</p>
                            <p>Email: $email</p>
                            <p>Registered Course: $course</p>
                            <p>Training Fee: $amount</p>
                            <p>Your training duration is <b>$duration</b> and you are expectedt to commence as soon as posible after payment is initiated.</p>
                            <p>Proceed for Fee payment either in the office or via the website.</p>
                            <br>
                            <p>For more information and enquiry, contact us as follows:</p>
                            <p>Our help line: +2348127087575</p>
                            <p>Our help lines: +2348127087575</p>
                            <p>Office Location: Suite S9, Amada Plaza, Jiwkoyi, Abuja</p>
                            <p>King Regards!</p>
                            <h4>James Nnege</h4>
                            <h4>Head of Training Team,</h4>
                            <h3>Altclick ICT World.</h3>
                            </div>`;
            $to = "$email";
            $from = "auto-reply@altclickict.tech";
            $subject = "Altclick Training Registration.";
            $headers = "From: " . $from;
            // $headers = "Content-type:text/html;charset=UTF-8";
            // ini_set(mail($to, $subject, $message, $headers), false);
            $send =true;// mail($to, $subject, $message, $headers);
        
            if ($send /*== true*/) {
                header(`location: payment.php?studentId=$studentId&name=$fname''.$lname&email=$email&phone=$phoneNumber&amount=$amount`);
            } else {
                header(`location: payment.php?studentId=$studentId&name=$fname''.$lname&email=$email&phone=$phoneNumber&amount=$amount`);
            }
        }else {
        return $err_msg= "Oop! Something went wrong!";
    }

}

?>