<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>QRSurvey - Dynamic Form Builder</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/jpg" sizes="32x32" href="img/qlogo.jpg">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- QR Survey Styles -->
    <style>
        .qr-feature-box {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            transition: 0.5s;
        }
        .qr-feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }
        .qr-feature-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #06BBCC;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .qr-feature-icon i {
            font-size: 24px;
            color: #fff;
        }
        .qr-btn {
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 50px;
            transition: 0.5s;
        }
        .qr-btn-primary {
            background: #06BBCC;
            color: #fff;
        }
        .qr-btn-primary:hover {
            background: #05a3b3;
            color: #fff;
        }
        .qr-btn-outline {
            border: 2px solid #06BBCC;
            color: #06BBCC;
        }
        .qr-btn-outline:hover {
            background: #06BBCC;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php
                $current_page = basename($_SERVER['PHP_SELF']);
            ?>
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <img src="img/logoqr.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link <?php if($current_page == 'index.php'){echo 'active';} ?>">Home</a>
                        <a href="about.php" class="nav-item nav-link <?php if($current_page == 'about.php'){echo 'active';} ?>">About</a>
                        <a href="service.php" class="nav-item nav-link <?php if($current_page == 'service.php'){echo 'active';} ?>">Service</a>
                        <a href="industries.php" class="nav-item nav-link <?php if($current_page == 'industries.php'){echo 'active';} ?>">Industries</a>
                        <a href="project.php" class="nav-item nav-link <?php if($current_page == 'project.php'){echo 'active';} ?>">Project</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?php if(in_array($current_page, ['team.php', 'testimonial.php', '404.php'])){echo 'active';} ?>" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.php" class="dropdown-item <?php if($current_page == 'team.php'){echo 'active';} ?>">Our Team</a>
                                <a href="testimonial.php" class="dropdown-item <?php if($current_page == 'testimonial.php'){echo 'active';} ?>">Testimonial</a>
                                <a href="404.php" class="dropdown-item <?php if($current_page == '404.php'){echo 'active';} ?>">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link <?php if($current_page == 'contact.php'){echo 'active';} ?>">Contact</a>
                    </div>
                    <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Build Dynamic Surveys with QRSurvey</h1>
                            <p class="text-white pb-3 animated zoomIn">Create custom forms with various field types, collect responses, and analyze data - all with our easy-to-use static solution.</p>
                            <a href="builder.php" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Create a Form</a>
                            <a href="dashboard.php" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">View Dashboard</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- Features Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Features</h6>
                    <h2 class="mt-2">Why Choose QRSurvey</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="qr-feature-box">
                            <div class="qr-feature-icon">
                                <i class="fas fa-edit"></i>
                            </div>
                            <h5>Dynamic Form Builder</h5>
                            <p class="mb-0">Create forms with various field types including text, dropdowns, radio buttons, and more.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="qr-feature-box">
                            <div class="qr-feature-icon">
                                <i class="fas fa-camera"></i>
                            </div>
                            <h5>Camera Capture</h5>
                            <p class="mb-0">Capture images directly from front or back camera for your survey responses.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="qr-feature-box">
                            <div class="qr-feature-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h5>Geo Location</h5>
                            <p class="mb-0">Capture respondent locations automatically with our geo-location feature.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="qr-feature-box">
                            <div class="qr-feature-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h5>Mobile Friendly</h5>
                            <p class="mb-0">Perfectly responsive forms that work on any device - desktop, tablet or mobile.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="qr-feature-box">
                            <div class="qr-feature-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <h5>Response Collection</h5>
                            <p class="mb-0">All responses are saved in browser storage for easy access and analysis.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="qr-feature-box">
                            <div class="qr-feature-icon">
                                <i class="fas fa-file-csv"></i>
                            </div>
                            <h5>CSV Export</h5>
                            <p class="mb-0">Export all your response data to CSV for further analysis in Excel or other tools.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- How It Works Start -->
        <div class="container-xxl bg-light py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Process</h6>
                    <h2 class="mt-2">How It Works</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-plus"></i>
                            </div>
                            <h5>1. Create Form</h5>
                            <p>Use our intuitive form builder to create your survey with various field types.</p>
                            <a href="builder.php" class="qr-btn qr-btn-primary">Try Builder</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-share"></i>
                            </div>
                            <h5>2. Share Link</h5>
                            <p>Copy the unique link to your form and share it with respondents.</p>
                            <a href="dashboard.php" class="qr-btn qr-btn-outline">View Forms</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <h5>3. Analyze Data</h5>
                            <p>View responses in real-time and export data to CSV for further analysis.</p>
                            <a href="responses.php" class="qr-btn qr-btn-primary">View Responses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- How It Works End -->


        <!-- Field Types Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Field Types</h6>
                    <h2 class="mt-2">Supported Form Fields</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-font"></i>
                            </div>
                            <h5>Short Answer</h5>
                            <p>Single line text input for brief responses.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-align-left"></i>
                            </div>
                            <h5>Long Answer</h5>
                            <p>Multi-line text area for detailed responses.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-caret-down"></i>
                            </div>
                            <h5>Dropdown</h5>
                            <p>Select one option from a dropdown list.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="far fa-dot-circle"></i>
                            </div>
                            <h5>Radio Buttons</h5>
                            <p>Select one option from multiple choices.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h5>Geo Location</h5>
                            <p>Capture respondent's current location.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h5>Mobile Number</h5>
                            <p>Input field optimized for mobile numbers.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h5>Email</h5>
                            <p>Input field with email validation.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-camera"></i>
                            </div>
                            <h5>Camera Capture</h5>
                            <p>Capture images from front or back camera.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Field Types End -->


        <!-- CTA Start -->
        <div class="container-xxl bg-primary py-5">
            <div class="container px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h3 class="text-white mb-3">Ready to create your first survey?</h3>
                        <p class="text-white mb-4">Start collecting valuable data today with our easy-to-use form builder.</p>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <a href="builder.php" class="btn btn-light py-3 px-5">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link" href="index.php">Home</a>
                        <a class="btn btn-link" href="about.php">About</a>
                        <a class="btn btn-link" href="service.php">Service</a>
                        <a class="btn btn-link" href="contact.php">Contact</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Features</h5>
                        <a class="btn btn-link" href="builder.php">Form Builder</a>
                        <a class="btn btn-link" href="#">Field Types</a>
                        <a class="btn btn-link" href="responses.php">Response Collection</a>
                        <a class="btn btn-link" href="#">Data Export</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Subscribe to get updates about new features and improvements.</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">QRSurvey</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Privacy Policy</a>
                                <a href="">Terms & Conditions</a>
                                <a href="">Help</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>