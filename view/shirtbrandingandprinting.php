<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Custom Shirts</title>
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

            <a class="btn-getstarted scrollto btn-primary" href="./../assets/images/hoolopolo.png">Get Started</a>

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
                <label for="shirtType" style="color: #5670A0;">Shirt Type:</label>
    <select id="shirtType" style="color: #3279FC; border: 1px solid #5670A0;" name="shirtType">
        <option></option>
        <option value="tshirt" style="color: #3279FC;">T-shirt</option>
        <option value="polo" style="color: #3279FC;">Polo Shirt</option>
        <option value="hoodie" style="color: #3279FC;">Hoodie</option>
        <option value="longsleeve" style="color: #3279FC;">Long Sleeve Shirt</option>
    </select>
    <br><br>

    <!-- Displayed Image -->
    <div class="shirt-container">
    <img id="shirtImage" src="" alt="Shirt Image" style="max-width: 200px;">
    <div class="uploaded-image-container">
        <!-- User-uploaded images will be placed here -->
    </div>
</div>
<br><br>
        
                <!-- T-shirt Size -->
                <label for="shirtSize" style="color: #5670A0;">T-shirt Size:</label>
                <select id="shirtSize" style="color: #3279FC; border: 1px solid #5670A0;" name="shirtSize">
                    <option></option>
                    <option value="small" style="color: #3279FC;">Small</option>
                    <option value="medium" style="color: #3279FC;">Medium</option>
                    <option value="large" style="color: #3279FC;">Large</option>
                    <option value="xl" style="color: #3279FC;">XL</option>
                </select>
                <br><br>
        
                <!-- T-shirt Color -->
                <label for="shirtColor" style="color: #5670A0;">T-shirt Color:</label>
    <!--<input type="color" id="shirtColorInput" name="shirtColor" style="border: 1px solid #5670A0;">-->
    <input type="color" id="colorPicker" value="#FF0000">
    <br><br>
        
                
        
                <!-- Description -->
                <label for="description" style="color: #5670A0;">Design Description (Include Position Of the Design To Be Printed On The Shirt):</label><br>
                <textarea id="description" name="description" rows="4" cols="50" style="color: #3279FC; border: 1px solid #5670A0;"></textarea>
                <br><br>
        
                <!-- Upload File -->
                <div id="fileUploadDropArea">
                    <label for="fileUpload" style="color: #5670A0;">Drag & Drop or Click to Upload Design:</label>
                    <input type="file" id="fileUpload" name="fileUpload" style="display: none;">
                </div>
                <p id="selectedFileName"></p>
                <br><br>


                <label for="noOfShirts" style="color: #5670A0;">No. of Copies</label>
                        <input type="number" id="noOfShirts" name="noOfShirts" placeholder=" " style="color: #3279FC; border: 1px solid #3279FC;" value="1">
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



    // Get references to the select element, shirt image, and color input
const shirtTypeSelect = document.getElementById('shirtType');
const shirtImage = document.getElementById('shirtImage');
const shirtColorInput = document.getElementById('shirtColorInput');


// Define the image URLs for each shirt type
const imageUrls = {
    'tshirt': './../assets/images/svg/plainT.svg',
    'polo': './../assets/images/svg/polo.svg',
    'hoodie': './../assets/images/svg/hoodien.svg',
    'longsleeve': './../assets/images/svg/LongT.svg'
};

// Add an event listener to the select element
shirtTypeSelect.addEventListener('change', function () {
    const selectedShirtType = this.value;
    const imageUrl = imageUrls[selectedShirtType] || ''; // Get the corresponding image URL

    // Update the image source
    shirtImage.src = imageUrl;
});


const colorPicker = document.getElementById('colorPicker');

// Add an event listener to the color input
colorPicker.addEventListener('input', function () {
    const selectedColor = this.value;

    // Create an SVG filter element to change the color
    const svgFilter = `
        <svg xmlns="http://www.w3.org/2000/svg">
            <filter id="colorFilter">
                <feColorMatrix type="matrix" values="
                    ${hexToRgb(selectedColor).r / 255} 0 0 0 0
                    0 ${hexToRgb(selectedColor).g / 255} 0 0 0
                    0 0 ${hexToRgb(selectedColor).b / 255} 0 0
                    0 0 0 1 0" />
            </filter>
        </svg>
    `;

    // Set the filter for the shirtImage
    shirtImage.style.filter = `url("data:image/svg+xml;utf8,${encodeURIComponent(svgFilter)}#colorFilter")`;
});

// Function to convert hex color to RGB
function hexToRgb(hex) {
    const bigint = parseInt(hex.slice(1), 16);
    const r = (bigint >> 16) & 255;
    const g = (bigint >> 8) & 255;
    const b = bigint & 255;
    return { r, g, b };
}




//price function
function updateTotalPrice() {
    const shirtTypeSelect = document.getElementById("shirtType"); // Corrected ID
    const noOfShirtsInput = document.getElementById("noOfShirts");

    const prices = {
        shirtType: {
           tshirt: 4000,
           hoodie: 10000,
           polo: 5000,
           longsleeve: 7000
        }
    };

    const selectedShirtType = shirtTypeSelect.value;
    const noOfShirts = parseFloat(noOfShirtsInput.value) || 0;

    // Validate if noOfShirts is less than 1 and set it to 1 if less than 1
    if (noOfShirts < 1) {
        noOfShirtsInput.value = "1";
    }

    const shirtTypePrice = prices.shirtType[selectedShirtType] || 0;

    const totalPrice = shirtTypePrice * noOfShirts;

    document.getElementById("totalPrice").textContent = `₦${totalPrice.toFixed(2)}`;
}

window.addEventListener("DOMContentLoaded", () => {
    const formElements = [
        "shirtType",
        "noOfShirts"
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