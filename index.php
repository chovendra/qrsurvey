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
            background: #2124b1;
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
        
        /* New styles for demo and platforms section */
        .demo-platforms-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 80px 0;
        }
        
        .demo-form-container {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        
        .platform-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        
        .platform-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .platform-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f1f8ff;
            border-radius: 50%;
            margin: 0 auto 20px;
            font-size: 30px;
            color: #2124b1;
        }
        
        .form-control:focus {
            border-color: #06BBCC;
            box-shadow: 0 0 0 0.25rem rgba(6, 187, 204, 0.25);
        }
        
        .section-title h2 {
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #06BBCC;
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
           <?php include 'navbar.php'; ?>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Build Dynamic Surveys with QRSurvey</h1>
                            <p class="text-white pb-3 animated zoomIn">Easily create fully customizable forms with multiple field types, collect and manage responses in real-time, and gain powerful insights through data analysis — all within our simple, secure, and easy-to-use static solution. Plus, enjoy a Dedicated App designed exclusively for Staff and Employees to streamline their workflow</p>
                            <!-- <a href="builder.php" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Create a Form</a>
                            <a href="dashboard.php" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">View Dashboard</a> -->
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
                            <!-- <a href="builder.php" class="qr-btn qr-btn-primary">Try Builder</a> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-share"></i>
                            </div>
                            <h5>2. Share Link</h5>
                            <p>Copy the unique link to your form and share it with respondents.</p>
                            <!-- <a href="dashboard.php" class="qr-btn qr-btn-outline">View Forms</a> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="qr-feature-box text-center">
                            <div class="qr-feature-icon mx-auto">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <h5>3. Analyze Data</h5>
                            <p>View responses in real-time and export data to CSV for further analysis.</p>
                            <!-- <a href="responses.php" class="qr-btn qr-btn-primary">View Responses</a> -->
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

        <!-- Schedule Demo & Platforms Section Start -->
        <div class="container-xxl demo-platforms-section py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Get Started</h6>
                    <h2 class="mt-2">Schedule a Demo & See Our Platforms</h2>
                </div>
                
                <div class="row g-5">
                    <!-- Schedule Demo Form -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="demo-form-container">
                            <h3 class="mb-4">Schedule a Personalized Demo</h3>
                            <p class="mb-4">See how QRSurvey can transform your data collection process with a personalized 1-on-1 demo.</p>
                            
                            <form>
    <div class="row g-3">

        <!-- Name -->
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="Your Name">
                <label for="name">Your Name</label>
            </div>
        </div>

        <!-- Email -->
        <div class="col-12">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Your Email">
                <label for="email">Your Email</label>
            </div>
        </div>

        <!-- Company Name -->
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="company" placeholder="Company Name">
                <label for="company">Company Name</label>
            </div>
        </div>

        <!-- Your Platform -->
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="platform" placeholder="Your Platform">
                <label for="platform">Your Platform</label>
            </div>
        </div>

        <!-- Phone -->
        <div class="col-12">
            <div class="form-floating">
                <input type="tel" class="form-control" id="phone" placeholder="Your Phone">
                <label for="phone">Your Phone</label>
            </div>
        </div>

        <!-- Industry -->
        <div class="col-12">
            <div class="form-floating">
                <select class="form-select" id="industry">
                    <option selected>Select Industry</option>
                    <option value="1">Healthcare</option>
                    <option value="2">Education</option>
                    <option value="3">Retail</option>
                    <option value="4">Manufacturing</option>
                    <option value="5">Real Estate</option>
                    <option value="6">Other</option>
                </select>
                <label for="industry">Industry</label>
            </div>
        </div>

        <!-- Requirements -->
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave specific requirements here" id="requirements" style="height: 100px"></textarea>
                <label for="requirements">Specific Requirements</label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">Schedule Demo Now</button>
        </div>
    </div>
</form>

                        </div>
                    </div>
                    
                    <!-- Platforms We Support -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="row h-100">
                            <div class="col-12 mb-4">
                                <div class="platform-card">
                                    <div class="platform-icon">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <h4>Web Platform</h4>
                                    <p>Access QRSurvey from any modern web browser with our responsive web application.</p>
                                    <div class="mt-4">
                                        <span class="badge bg-primary me-2">Chrome</span>
                                        <span class="badge bg-primary me-2">Firefox</span>
                                        <span class="badge bg-primary me-2">Safari</span>
                                        <span class="badge bg-primary">Edge</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="platform-card">
                                    <div class="platform-icon">
                                        <i class="fab fa-android"></i>
                                    </div>
                                    <h4>Android App</h4>
                                    <p>Download our dedicated Android application for seamless mobile data collection.</p>
                                    <div class="mt-3">
                                        <span class="badge bg-success">Google Play</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <div class="platform-card">
                                    <div class="platform-icon">
                                        <i class="fab fa-apple"></i>
                                    </div>
                                    <h4>iOS App</h4>
                                    <p>Get our iOS app from the App Store for Apple device compatibility.</p>
                                    <div class="mt-3">
                                        <span class="badge bg-dark">App Store</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="platform-card">
                                    <div class="platform-icon">
                                        <i class="fas fa-tablet-alt"></i>
                                    </div>
                                    <h4>Tablet Optimized</h4>
                                    <p>Perfect experience on iPad and Android tablets with our touch-optimized interface.</p>
                                    <div class="mt-3">
                                        <span class="badge bg-info me-2">iPadOS</span>
                                        <span class="badge bg-info">Android Tablet</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Schedule Demo & Platforms Section End -->

        <!-- CTA Start -->
        <div class="container bg-primary py-5";>
    <div class="container px-lg-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <h3 class="text-white mb-3">
                    Ready to create your first survey?
                </h3>
                <p class="text-white mb-4">
                    Easily create fully customizable forms with multiple field types, collect and manage responses in real-time, and gain powerful insights through data analysis — all within our simple, secure, and easy-to-use static solution. <br>
                    Plus, enjoy a <b>Dedicated App for Staff and Employees</b> to streamline their workflow.
                </p>
                <!-- <a href="builder.php" class="btn btn-light py-3 px-5">Get Started Now</a> -->
            </div>
        </div>
    </div>
</div>
<br><br>

        <!-- CTA End -->


        <?php include 'footer.php'; ?>


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