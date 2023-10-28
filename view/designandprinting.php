<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Print Order Form</title>
    <meta content="Official Website of AltClick ICT World, Abuja" name="description">
    <meta content="AltClick ICT World" name="keywords">

    <!-- Favicons -->
    <link href="./../assets/img/favicon.png" rel="icon">
    <link href="./../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="./../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="./../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="./../assets/css/firstsection.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="./../assets/css/variables.css" rel="stylesheet">
    <link href="./../assets/css/variables-blue.css" rel="stylesheet">
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="./../assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/contact_form_style.css">

  <!--New Style-->
  <link href="./../assets/css/new.css" rel="stylesheet">


  <style>
    /* Styling for the drag-and-drop area */
   #fileUploadDropArea {
        border: 2px dashed #5670A0;
        padding: 20px;
        text-align: center;
        color: #5670A0;
        cursor: pointer;
        /*background-color: red;*/
        margin-left: 30%;
        margin-right: 30%;
    }
</style>


</head>

<body style="background-color: #8cd2fa">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="./../index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/favicon.png" alt=""> -->
                <h1>Altclick<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    <!-- <i class="bi bi-chevron-down dropdown-indicator"></i> -->
                    <li><a class="nav-link scrollto" href="./../index.html">Home</a></li>
                    
                </ul>
                <!-- <i class="bi bi-list mobile-nav-toggle d-none"></i> -->
            </nav>
            <!-- .navbar -->

            <a class="btn-getstarted scrollto btn-primary" href="/AltClick/view/form.php">Get Started</a>

        </div>
    </header>
    <!-- End Header -->
    <!-- First Section Starts Here........ -->
    
    <!-- End Here... -->
    <main id="main">

        <!-- ======= Featured courses Section ======= -->
       
                </div>

            </div>
        </section>
        <!-- End Featured courses Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about" style="margin-top: 100px;">
            

                <div class="section-header">
                    
                    <h2>Tell Us What You Want</h2>
                    <form action="payment.html" method="post" enctype="multipart/form-data">
                         <!-- Print Type -->
                         <label for="toPrint" style="color: #5670A0;">What Are You Printing:</label>
                         <select id="toPrint" style="color: #3279FC; border: 1px solid #5670A0;" name="toPrint">
                             <option></option>
                             <option value="file" style="color: #3279FC;">File</option>
                             <option value="flyer" style="color: #3279FC;">Flyer</option>
                             <option value="books" style="color: #3279FC;">Books</option>
                             <!-- <option value="magazine" style="color: #3279FC;">Magazine</option>
                             <option value="journal" style="color: #3279FC;">Journal</option> -->
                         </select>
                         <br><br>
                        <!-- Print Type -->
                        <label for="printType" style="color: #5670A0;">Print Type:</label>
                        <select id="printType" style="color: #3279FC; border: 1px solid #5670A0;;" name="printType">
                            <option></option>
                            <option value="colored" style="color: #3279FC;">Colored Printing</option>
                            <option value="blackWhite" style="color: #3279FC;">Black and White</option>
                        </select>
                        <br><br>
                
                        <!-- Paper Type -->
                        <label for="paperType" style="color: #5670A0;">Paper Size:</label>
                        <select id="paperType" style="color: #3279FC; border: 1px solid #5670A0;" name="paperType">
                            <option></option>
                            <option value="a2" style="color: #3279FC;">A2</option>
                            <option value="a3" style="color: #3279FC;">A3</option>
                            <option value="a4" style="color: #3279FC;">A4</option>
                            <option value="other" style="color: #3279FC;">Other</option>
                        </select>
                        <br><br>
                
                        <!-- Flyer Size -->
                        <label for="flyerSize" style="color: #5670A0;">Flyer Size:</label>
                        <select id="flyerSize" style="color: #3279FC; border: 1px solid #5670A0;" name="flyerSize">
                            <option></option>
                            <option value="small" style="color: #3279FC;">Small (A6)</option>
                            <option value="medium" style="color: #3279FC;">Medium (A5)</option>
                            <option value="large" style="color: #3279FC;">Large (A4)</option>
                            <option value="custom" style="color: #3279FC;">Custom</option>
                        </select>
                        <br><br>


                        <label for="noOfCopies" style="color: #5670A0;">No. of Copies</label>
                        <input type="number" id="noOfCopies" name="deliveryAddress" placeholder=" " style="color: #3279FC; border: 1px solid #3279FC;" value="1">
                        <br><br>
                
                        <!-- Description -->
                        <label for="description" style="color: #5670A0;">Description:</label><br>
                        <textarea id="description" name="description" rows="4" cols="50" style="color: #3279FC; border: 1px solid #5670A0;"></textarea>
                        <br><br>
                
                        <!-- Upload File -->
                        <div id="fileUploadDropArea">
                            <label for="fileUpload" style="color: #5670A0;">Drag & Drop or Click to Upload File:</label>
                            <input type="file" id="fileUpload" name="fileUpload" style="display: none;">
                        </div>
                        <p id="selectedFileName"></p>
                        <br><br>
                
                        <!-- Delivery Address -->
                        <label for="deliveryAddress" style="color: #5670A0;">Delivery Address:</label>
                        <input type="text" id="deliveryAddress" name="deliveryAddress" placeholder="Enter your address" style="color: #3279FC; border: 1px solid #3279FC;">
                        <br><br>


                         <!-- Total Price -->
                        <p>Total Price: <span id="totalPrice">₦0.00</span></p>
                
                        <!-- Payment Button -->
                        <input type="submit" value="Proceed to Payment" style="color: #fff; background-color: #5670A0; border: none;">
                    </form>
                
                    
                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">



                 
                    <!-- ======= Courses Section ======= -->
                    
                    <!-- End Services Section -->


                    <!-- ======= Services Section ======= -->
                   
                  <!-- End Services Section -->
      
      
          <!-- ======= Testimonials Section ======= -->
          <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200"></div>
          
          <!-- End Testimonials Section -->
      

                    <!-- ======= Team Section ======= -->
                  
                    <!-- End Team Section -->
<!-- ======= Contact Section ======= -->
                    
                    
                    <!-- End Contact Section -->

                    <!-- <div id="contact" class="contact">
      <img src="assets/img/idle-image.jpg" alt="Company Flier" class="pic001">
    </div> -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <center></center>

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Altclick <span>ICT World</span></h3>

                            <p>
                                SUITE S9, AMADA PLAZA, JIKWOYI, ABUJA, NIGERIA<br><br>
                                <strong>Phone:</strong> +234 903 7437 507<br>
                                <strong>Email:</strong> altclickict@gmail.com<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.html">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.html#about">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.html#courses">Courses</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.html#team">Team</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="index.html#contact">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="table.html">Training and Mentoring Techers</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="table.html">Website Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="table.html">Mobile Apps Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="table.html">Data Analysis</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="table.html">Cyber-Security</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="table.html">Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="table.html">Business Training</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="table.html">Graphic Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="table.html">System Maintenance and Repairs</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> -->

                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Altclick ICT</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <p>
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> || <i class="ti-heart text-success"></i><span class="text-success" title="">Software Developers</span></a>
                        </p>
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>
        </center>

    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="./../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./../assets/vendor/aos/aos.js"></script>
    <script src="./../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="./../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="./../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="./../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="./../assets/js/firstsection.js"></script>
    <script src="./../assets/js/main.js"></script>

      <!--New Script-->
  <script src="./../assets/js/new.js"></script>

  <script>
    // JavaScript for handling file drag and drop
    const fileUploadInput = document.getElementById('fileUpload');
    const fileUploadDropArea = document.getElementById('fileUploadDropArea');
    const selectedFileName = document.getElementById('selectedFileName'); // Added this line

    fileUploadDropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        fileUploadDropArea.style.backgroundColor = '#f0f0f0'; // Change the background color on dragover
    });

    fileUploadDropArea.addEventListener('dragleave', () => {
        fileUploadDropArea.style.backgroundColor = ''; // Reset background color on dragleave
    });

    fileUploadDropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        fileUploadDropArea.style.backgroundColor = ''; // Reset background color on drop

        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileUploadInput.files = files;
            updateSelectedFileName(); // Call the function to update the selected file name
        }
    });

    // Clicking the label will trigger the file input
    fileUploadDropArea.addEventListener('click', () => {
        fileUploadInput.click();
    });

    // Add an event listener for the file input change event
    fileUploadInput.addEventListener('change', () => {
        updateSelectedFileName();
    });

    // Function to update the selected file name
    function updateSelectedFileName() {
        const fileName = fileUploadInput.files[0] ? fileUploadInput.files[0].name : 'No file selected';
        selectedFileName.textContent = "Selected File: " + fileName;
    }

    // Initial update of the selected file name (if a file is pre-selected)
    updateSelectedFileName();




//total price calculation
function updateTotalPrice() {
    const printTypeSelect = document.getElementById("printType");
    const paperTypeSelect = document.getElementById("paperType");
    const flyerSizeSelect = document.getElementById("flyerSize");
    const toPrintSelect = document.getElementById("toPrint");
    const noOfCopiesInput = document.getElementById("noOfCopies");

    const prices = {
        printType: {
            colored: 120,         // Prices for different print types
            blackWhite: 70,
        },
        paperType: {
            a2: 100,              // Prices for different paper types
            a3: 50,
            a4: 30,
            other: 200
        },
        flyerSize: {
            small: 100,        // Prices for different flyer sizes
            medium: 150,
            large: 200,
            custom: 250
        },
        toPrint: {
            file: 0,
            flyer: 0,
            books: 0,
            magazine: 0,
            journal: 0,
        }
    };

    const selectedPrintType = printTypeSelect.value;
    const selectedPaperType = paperTypeSelect.value;
    const selectedFlyerSize = flyerSizeSelect.value;
    const selectedToPrint = toPrintSelect.value;
    const noOfCopies = parseFloat(noOfCopiesInput.value) || 0;

     // Validate if noOfCopies is negative and set it to 0 if negative
     if (noOfCopies < 1) {
        noOfCopiesInput.value = "1";
    }

    const printTypePrice = prices.printType[selectedPrintType] || 0;
    const paperTypePrice = prices.paperType[selectedPaperType] || 0;
    const flyerSizePrice = prices.flyerSize[selectedFlyerSize] || 0;
    const toPrintPrice = prices.toPrint[selectedToPrint] || 0;

    const totalPrice = (printTypePrice + paperTypePrice + flyerSizePrice + toPrintPrice) * noOfCopies;

    document.getElementById("totalPrice").textContent = `₦${totalPrice.toFixed(2)}`;
}

window.addEventListener("DOMContentLoaded", () => {
    const formElements = [
        "printType",
        "paperType",
        "flyerSize",
        "toPrint",
        "noOfCopies"
    ];

    formElements.forEach((elementId) => {
        const element = document.getElementById(elementId);
        element.addEventListener("change", updateTotalPrice);
    });

    // Initialize total price
    updateTotalPrice();
});




</script>

    


</body>

</html>