<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Altclick ICT World</title>
    <meta content="Official Website of AltClick ICT World, Abuja" name="description">
    <meta content="AltClick ICT World" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/firstsection.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/variables-blue.css" rel="stylesheet">
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/contact_form_style.css">

    <!--New Style-->
    <link href="assets/css/new.css" rel="stylesheet">


       <!-- Custom CSS for the hamburger menu -->
       <!-- Custom CSS for the hamburger menu -->
       <style>
        .mobile-menu-toggle {
            /* display: none; */
        }

        .btnwrap {
            display: block;
        }

        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
                position: absolute;
                top: 10px;
                right: 10px;
            }

            .btnwrap {
                display: none;
            }
        }

       







        .p-menu1 {
            height: 100%;
        }

        .hamburger1 {
            height: 45px;
            margin: 10px;
            display: grid;
            grid-template-rows: repeat(3, 1fr);
            justify-items: center;
            z-index: 120;
            cursor: pointer;
        }

        .hamburger1 div {
            background-color: rgb(61, 61, 61);
            position: relative;
            width: 40px;
            height: 5px;
            margin-top: 7px;
            transition: all 0.2s ease-in-out;
        }

        #toggle1 {
            display: none;
        }

        #toggle1:checked + .hamburger1 .top {
            transform: rotate(-45deg);
            margin-top: 22.5px;
        }

        #toggle1:checked + .hamburger1 .meat {
            opacity: 0;
        }

        #toggle1:checked + .hamburger1 .bottom {
            transform: rotate(-135deg);
            margin-top: -18px;
        }

        #toggle1:checked ~ .menu1 {
            height: auto;
            /* overflow: visible; */
        }

        .menu1:focus-within {
        height: 0;
        overflow: hidden;
        }

        .menu1 {
            width: 100%;
            background-color: #02173F;
            margin: 0;
            display: grid;
            grid-template-rows: repeat(5, 1fr);
            padding: 0;
            list-style: none;
            clear: both;
            text-align: center;
            height: 0;
            overflow: hidden;
            transition: height .4s ease;
            z-index: 120;
            cursor: pointer;
        }

        .menu1 a {
            width: 100%;
            margin: 0;
            padding: 10px 0;
            font: 700 20px 'Oswald', sans-serif;
            color: #fff;
            text-decoration: none;
            display: block;
        }

        .menu1 a:first-child {
            margin-top: 10px;
        }

        .menu1 a:last-child {
            margin-bottom: 10px;
        }

        .link1:hover {
            background-color: #fff;
            color: rgb(61, 61, 61);
            transition: all 0.3s ease;
        }

    </style>

</head>

<body>



















  <!-- ======= Hamburger Menu ======= -->
  <!-- <div class="mobile-menu-toggle" id="mobileNavToggle">
        <div class="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div> -->

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">




       <!-- Hamburger Menu (visible on small screens) -->
       <div class="mobile-menu-toggle" id="mobileNavToggle">
        <label class="hamburger1" for="toggle1">
            <div class="top"></div>
            <div class="meat"></div>
            <div class="bottom"></div>
        </label>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <input id="toggle1" type="checkbox" />
    <nav class="menu1">
    <li><a class="nav-link scrollto" href="index.php">Home</a></li>
    <li><a class="nav-link scrollto" href="index.php#about" id="aboutLink">About</a></li>
    <li><a class="nav-link scrollto" href="index.php#services" id="servicesLink">Services</a></li>
    <li><a class="nav-link scrollto" href="index.php#team" id="teamLink">Team</a></li>
    <li><a class="nav-link scrollto" href="index.php#contact" id="contactLink">Contact</a></li>
    <li><a href="view/form.php"><button class="btn-getstarted" style="border-width: 0px; margin-left: 10%" id="getStartedButton">Get Started</button></a></li>
    <li> <a href="./view/order.php"> <button class="btn-getstarted" style="border-width: 0px; background-color: green; margin-left: 5px; margin-left: 10%" id="placeOrderButton"  style="background-color: green">Place Order</button> </a></li> 
    </nav>



        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <h1>Altclick<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.html">Home</a></li>
                    <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
                    <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="index.html#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
                    <li><a href="view/form.php"><button class="btn-getstarted" style="border-width: 0px;" id="getStartedButton">Get Started</button></a></li>
               
               <li> <a href="./view/order.php"> <button class="btn-getstarted" style="border-width: 0px; background-color: green; margin-left: 5px" id="placeOrderButton"  style="background-color: green">Place Order</button> </a></li>
            
                </ul>
            </nav>
        </div>
    </header>
    <!-- End Header -->
    <!-- First Section Starts Here........ -->
    <center>
        <div class="image-slideshow container">
            <div class="image fade">
                <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
                <div class="center">
                    <h2>We are <span>Altclick</span></h2>
                    <p>
                        We are Altclick ICT World Limited <br> ...Making the Difference
                    </p>
                    <div class="d-flex">
                        <a href="view/form.php" class="btn-get-started scrollto">Get Started</a>
                        <!-- <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                    </div>
                </div>
            </div>
            <div class="image fade">
                <img src="assets/img/hero-carousel/hero-carousel-2.svg" class="img-fluid animated">
                <div class="center">
                    <h2>We Build Cutting Edge Tech <span>Solutions For Business Processes</span></h2>
                    <p>
                        With technology, we aim at solving complex business <br> problems with innovation, creativity, and strategy.
                    </p>
                    <div class="d-flex">
                        <a href="view/form.php" class="btn-get-started scrollto">Get Started</a>
                        <!-- <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                    </div>
                </div>
            </div>
            <div class="image fade">
                <img src="assets/img/hero-carousel/hero-carousel-1.svg" class="img-fluid animated">
                <div class="center">
                    <h2>Enterprise<span>Software Development</span></h2>
                    <p>
                        Enterprise-wide integration, security and scalability.
                        <br> We follow a step-by-step software development procedures alongside with security in mind.
                    </p>
                    <div class="d-flex">
                        <a href="view/form.php" class="btn-get-started scrollto">Get Started</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </center>
   

    <!-- End Here... -->
    <main id="main">
        <!-- ======= Featured courses Section ======= -->
        <section id="featured-courses" class="featured-courses" style="text-align:justify">
            <div class="container">
                <h5><b>We Follow <i>A-Step-By-Step</i> Approach To Achieve Projects</b></h5>

                <div class="row gy-6">

                    <div class="col-xl-2 col-md-4 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <center>
                                    <h1><strong>1</strong></h1>
                                    <h4><a href="" class="stretched-link">Discovery</a></h4>
                                </center>
                            </div>
                            <We>We provide the best software services to actualize your ideas, concepts or goals regardless of complexities. Do you need to build bespoke software or hire developers? We discuss your requirements with you and visualize helpful
                                custom software solutions to meet your needs. We enable andd maintain flexibilty from when you hire us to where your products are deployed.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-2 col-md-4 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <center>
                                    <h1><strong>2</strong></h1>
                                    <h4><a href="" class="stretched-link">Design</a></h4>
                                </center>
                            </div>
                            <p>With a viable project scope, we assemble exceptional designers and developers who execute our solutions perfectly. As an agency, we pride ourselves on customer satisfaction, so we maitain unhindered communication with you throughout
                                our planning and execution process to ensure our developers implement all your requirements into the project architecture.
                            </p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-2 col-md-4 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <center>
                                    <h1><strong>3</strong></h1>
                                    <h4><a href="" class="stretched-link">Development</a></h4>
                                </center>
                            </div>
                            <p>It's time to bring your project to life now that we have your design. Using agile methodology, our developers break down your product into manageable and measurable chunks called sprints and work on them in a time and priority-based
                                order to deliver measurable and quality results. By utilising CI/CD practices, we will ensure your applications are always updated without downtime.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-xl-2 col-md-4 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <center>
                                    <h1><strong>4</strong></h1>
                                    <h4><a href="" class="stretched-link">Testing</a></h4>
                                </center>
                            </div>
                            <p>We test during project development to verify the functionality and performance of your product before release. We typically approach this with two methods: Unit Testing, where we test individual units of source code, such as
                                functions, classes and procedures, to determine if they perform as intended by developers. Acceptance Testing, where we verify that a product meets the requirements specified in the acceptance criteria. We collaborate with
                                the customer or an independent test team to do this. It determines if the system is suitable for use.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="col-xl-2 col-md-4 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <center>
                                    <h1><strong>5</strong></h1>
                                    <h4><a href="" class="stretched-link">Deployment</a></h4>
                                </center>
                            </div>
                            <p>Deployment is automated, which means that new features of your product are readily available. After each feature passes the testing phase and meets all sprint goals, the developers integrate it for final testing. The outcome
                                is then fully deployed and made available to customers. It kickstarts the developer's software maintenance phase.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <div class="col-xl-2 col-md-4 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <center>
                                    <h1><strong>6</strong></h1>
                                    <h4><a href="" class="stretched-link">Maintenance</a></h4>
                                </center>
                            </div>
                            <p>Part of our services to you is the maintenance and management of your database, data warehouses and applications. Our developers ensure the maintenance of your product's functionality by dealing with bugs and faults and implementing
                                new features or ideas. Other maintenance tasks include project rescue and modernisation.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->


                </div>

            </div>
        </section>
      

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>AltClick ICT World is a software development company based in Abuja, Nigeria. We provide a range of software solutions and services such as web and mobile application development, software testing, IT consulting, product design and
                        development, hardware systems installation, and software development training.</p>
                    <!-- <p> We do Software Development, Installation, And Maintenance, Hardware Development Network Installation Computer Information And Internet courses, Communication Technology (ICT) courses</p> -->
                    <button class="btn btn-primary">Read More..</button>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">




                    <!-- ======= Courses Section ======= -->

                    <!-- End Services Section -->


                    <!-- ======= Services Section ======= -->
                    <div id="services" class="services"></div>
                    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <section id="services" class="courses">
                            <div class="container" data-aos="fade-up">

                                <div class="section-header">
                                    <h2>Our Services</h2>
                                    <p>We provide tech Services in the following Areas.</p>
                                </div>



                                <ul class="list">
                                    <li class="list-item">
                                        <a class="active" href="./view/teachingServices.php">
                                            <h5><span class="list-text">Courses</span></h5>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="./view/multimedia.php">
                                            <h5 style=""><span class="list-text">Multimedia</span></h5>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="./view/printing.php">
                                            <h5 style="margin-left: 10px;"><span class="list-text">Printing</span> </h5>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="./view/hardware.php">
                                            <h5 style=""> <span class="list-text">Hardware</span> </h5>
                                        </a>
                                    </li>
                                    <li class="list-item">
                                        <a href="./view/consultation.php">
                                            <h5 style=""> <span class="list-text">Consultation</span> </h5>
                                        </a>
                                    </li>
                                </ul>

                                <div id="content-section"></div>
                            </div>
                        </section>
                    </div>


                </div>


                <!-- End Services Section -->


                <!-- ======= Testimonials Section ======= -->
                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200" id="team"></div>
                <section id="team" class="testimonials">
                    <div class="container" data-aos="fade-up">
                        <center>
                            <div class="testimonials-slider swiper">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <img src="assets/img/team/team-1.jpg" class="testimonial-img" alt="">
                                            <h3>James Nenge</h3>
                                            <h4>CEO/Chief Executive Owner</h4>
                                            <div class="stars">
                                                <!-- social media icons-->
                                                <div class="social-icons">
                                                    <a href="" class="social-icon"><i class="bi bi-facebook color-blue"></i></a>
                                                    <a href="" class="social-icon"><i class="bi bi-twitter color-blue"></i></a>
                                                    <a href="" class="social-icon"><i class="bi bi-github color-black"></i></a>
                                                    <a href="" class="social-icon"><i class="bi bi-linkdin color-blue"></i></a>
                                                    <a href="" class="social-icon"><i class="bi bi-instagram color-red"></i></a>
                                                    <!-- Add more social media icons as needed -->
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i> Technology is best when it brings people together.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Team item -->

                                    <!-- Start Team Item-->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <img src="assets/img/team/godwin.jpg" class="testimonial-img" alt="">
                                            <h3>Godwin Ikpe Ugbe</h3>
                                            <h4>Software Developer (Full-Stack)</h4>
                                            <div class="stars">
                                                <!-- social media icons-->
                                                <div class="social-icons">
                                                    <a href="https://www.facebook.com/godwin.ugbe.52?mibextid=ZbWKwL" class="social-icon"><i class="bi bi-facebook color-blue"></i></a>
                                                    <a href="https://www.tiktok.com/search?q=cidusface&t=1694182440594" class="social-icon"><i class="bi bi-tiktok color-blue"></i></a>
                                                    <a href="https://github.com/UgbeGodwinIkpe" class="social-icon"><i class="bi bi-github color-black"></i></a>
                                                    <a href="Instagram: https://instagram.com/cidusface?utm_source=qr&igshid=MzNlNGNkZWQ4Mg==" class="social-icon"><i class="bi bi-instagram color-red"></i></a>
                                                    <!-- Add more social media icons as needed -->
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i> A Result driven person who is committed to tech.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Team item -->

                                    <!-- Start Team Item-->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <img src="assets/img/team/vicky.jpg" class="testimonial-img" alt="">
                                            <h3>Agada Victoria</h3>
                                            <h4>Secretary</h4>
                                            <div class="stars">
                                                <!-- social media icons-->
                                                <div class="social-icons">
                                                    <a href="https://www.facebook.com/ojlee.ojlee" class="social-icon"><i class="bi bi-facebook color-blue"></i></a>

                                                    <!-- Add more social media icons as needed -->
                                                </div>
                                            </div>
                                            <p style="font-size: 2vw;">
                                                <i class="bi bi-quote quote-icon-left"></i> Dedicated to Driving Positive Change and Elevating Operational Excellence.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Team item -->




                                    <!-- Start Team Item-->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <img src="assets/img/team/david1.jpg" class="testimonial-img" alt="">
                                            <h3>David Ojimaojo Daniel </h3>
                                            <h4>Hardware Engineer</h4>
                                            <div class="stars">
                                                <!-- social media icons-->
                                                <div class="social-icons">
                                                    <a href="https://web.facebook.com/ojimaojo.tech.1" class="social-icon"><i class="bi bi-facebook color-blue"></i></a>

                                                    <!-- Add more social media icons as needed -->
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i> Transforming the world through science and technology.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- End Team item -->



                                    <!-- Start Team Item-->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <img src="assets/img/team/obi.jpg" class="testimonial-img" alt="">
                                            <h3> Joseph Micheal Obinna </h3>
                                            <h4>Marketer</h4>
                                            <div class="stars">
                                                <!-- social media icons-->
                                                <div class="social-icons">
                                                    <a href="https://web.facebook.com/profile.php?id=100006508860027" class="social-icon"><i class="bi bi-facebook color-blue"></i></a>

                                                    <!-- Add more social media icons as needed -->
                                                </div>
                                            </div>
                                            <p style="font-size: 2vw;">
                                                <i class="bi bi-quote quote-icon-left"></i> Connecting with individuals and transforming their dreams into reality.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- End Team item -->

                                    <!-- Start Team Item-->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <img src="assets/img/team/natty.png" class="testimonial-img" alt="">
                                            <h3> Isaac Dauda </h3>
                                            <h4>Software Developer (Front-End)</h4>
                                            <div class="stars">
                                                <!-- social media icons-->
                                                <div class="social-icons">
                                                    <a href="https://web.facebook.com/Nattie096" class="social-icon"><i class="bi bi-facebook color-blue"></i></a>
                                                    <a href="https://twitter.com/its_just_natty_?t=dfi2peQSN3cYC0EGIusDaQ&s=09" class="social-icon"><i class="bi bi-twitter color-blue"></i></a>
                                                    <a href="https://github.com/Bundot" class="social-icon"><i class="bi bi-github color-black"></i></a>
                                                    <a href="https://www.linkedin.com/in/isaac-dauda-bb307013b" class="social-icon"><i class="bi bi-linkdin color-blue"></i></a>
                                                    <a href="https://instagram.com/its_just_natty?utm_source=qr&igshid=MThlNWY1MzQwNA==" class="social-icon"><i class="bi bi-instagram color-red"></i></a>
                                                    <!-- Add more social media icons as needed -->
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i> Crafting digital experiences, one pixel at a time.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- End Team item -->

                                    <!-- End testimonial item -->

                                   
                                    <!-- End testimonial item -->

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </center>
                    </div>
                </section>
                <!-- End Testimonials Section -->


                <!-- ======= Team Section ======= -->

                <!-- End Team Section -->


                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact" style="background-image: url(assets/img/bg_1.jpg); margin-top: 20px;">
                    <div class="container">

                        <div class="section-header">
                            <h2 style="color: white">Contact Us</h2>
                            <p style="color: white">SUITE S9, AMADA PLAZA, JIKWOYI, ABUJA</p>
                        </div>

                    </div>

                    <div class="map">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=AMADA PLAZA, JIKWOYI, ABUJA&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                <a href="https://capcuttemplate.org/">Capcut Templates</a>
                            </div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 100%;
                                    height: 400px;
                                }
                                
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none!important;
                                    width: 100%;
                                    height: 400px;
                                }
                                
                                .gmap_iframe {
                                    height: 400px!important;
                                }
                            </style>
                        </div>
                    </div>
                    <!-- End Google Maps -->

                    <div class="container">

                        <div class="row gy-5 gx-lg-5">

                            <div class="col-lg-4">

                                <div class="info">
                                    <h3 style="color: white">Get in touch</h3>
                                    <p style="color: white">Visit us, mail us or call us at;</p>

                                    <div class="info-item d-flex">
                                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                                        <div>
                                            <h4 style="color: white">Location:</h4>
                                            <p style="color: white">SUITE S9, AMADA PLAZA, JIKWOYI, ABUJA</p>
                                        </div>
                                    </div>
                                    <!-- End Info Item -->

                                    <div class="info-item d-flex">
                                        <i class="bi bi-envelope flex-shrink-0"></i>
                                        <div>
                                            <h4 style="color: white">Email:</h4>
                                            <p style="color: white">altclickictworld@gmail.com</p>
                                        </div>
                                    </div>
                                    <!-- End Info Item -->

                                    <div class="info-item d-flex">
                                        <i class="bi bi-phone flex-shrink-0"></i>
                                        <div>
                                            <h4 style="color: white">Call:</h4>
                                            <p style="color: white">
                                                +234 903 7437 507 <br> +234 814 7711 064
                                            </p>
                                        </div>
                                    </div>
                                    <!-- End Info Item -->

                                </div>

                            </div>

                            <div class="col-lg-8">
                                <form action="https://formspree.io/f/mdovbwgj" method="POST" id="contactForm" name="contactForm">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">

                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

           
                            <!-- End Contact Form -->

                        </div>

                    </div>
                </section>
                <!-- End Contact Section -->


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
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/firstsection.js"></script>
    <script src="assets/js/main.js"></script>

    <!--New Script-->
    <script src="assets/js/new.js"></script>


      <!-- Custom JavaScript for the hamburger menu -->
      <!-- <script>
        document.getElementById("mobileNavToggle").addEventListener("click", function() {
        var toggle = document.getElementById("toggle1");
        toggle.checked = !toggle.checked;

        // Check if the toggle was successful and log a message
        if (toggle.checked) {
            console.log("Mobile menu is open.");
        } else {
            console.log("Mobile menu is closed.");
        }
    });
    </script> -->


    <script>
    // Get references to the menu items
    const aboutLink = document.getElementById("aboutLink");
    const servicesLink = document.getElementById("servicesLink");
    const teamLink = document.getElementById("teamLink");
    const contactLink = document.getElementById("contactLink");

    // Get a reference to the toggle checkbox
    const toggleCheckbox = document.getElementById("toggle1");

    // Add click event listeners to the menu items
    aboutLink.addEventListener("click", () => {
        // Uncheck the toggle checkbox to hide the menu
        toggleCheckbox.checked = false;
    });

    servicesLink.addEventListener("click", () => {
        toggleCheckbox.checked = false;
    });

    teamLink.addEventListener("click", () => {
        toggleCheckbox.checked = false;
    });

    contactLink.addEventListener("click", () => {
        toggleCheckbox.checked = false;
    });
</script>


   
      

</body>

</html>