<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>QRsurvey - About Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link rel="icon" type="image/jpg" sizes="32x32" href="img/qlogo.jpg">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Navbar Include -->
        <?php include 'navbar.php'; ?>

        <!-- Hero Section -->
        <div class="container-xxl py-5 bg-primary hero-header mb-5">
            <div class="container text-center my-5 py-5">
                <h1 class="text-white animated zoomIn">About QRsurvey</h1>
                <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                                </ol>
                            </nav>
            </div>
        </div>
        <!-- Hero End -->

        <!-- About Section -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.2s" src="img/about.jpg" alt="About QRsurvey">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="text-primary">Who We Are</h6>
                        <h2 class="mb-4">Making Feedback Simple with QRsurvey</h2>
                        <p class="mb-4">
                            QRsurvey is a modern platform that helps businesses, institutes, and individuals collect feedback instantly 
                            by using <strong>QR codes & online survey forms</strong>. Whether you want to measure customer satisfaction, 
                            employee engagement, or event feedback – QRsurvey makes it quick, simple, and effective.
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6><i class="fa fa-check text-primary me-2"></i>Instant QR Surveys</h6>
                                <h6><i class="fa fa-check text-primary me-2"></i>Customizable Forms</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6><i class="fa fa-check text-primary me-2"></i>Real-time Analytics</h6>
                                <h6><i class="fa fa-check text-primary me-2"></i>Secure & Reliable</h6>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill px-4 mt-4" href="contact.php">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Mission & Vision -->
        <div class="container-xxl bg-light py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="mb-3">Our Mission</h3>
                        <p>To simplify the way people give and receive feedback by using QR technology and making surveys accessible, 
                        fast, and insightful for everyone.</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h3 class="mb-3">Our Vision</h3>
                        <p>To be the most trusted feedback collection platform that bridges the gap between businesses and their audience 
                        through smart technology and user-friendly tools.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mission & Vision End -->

        <!-- Stats Section -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-4 text-center">
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="text-primary">10K+</h1>
                        <p>Surveys Completed</p>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                        <h1 class="text-primary">5K+</h1>
                        <p>Active Users</p>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                        <h1 class="text-primary">100+</h1>
                        <p>Trusted Clients</p>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                        <h1 class="text-primary">24/7</h1>
                        <p>Support Available</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stats End -->

        <!-- Team Section -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5 text-center">
                <h6 class="text-primary">Our Team</h6>
                <h2 class="mb-5">People Behind QRsurvey</h2>
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="team-item bg-light rounded p-3 wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid rounded mb-3" src="img/team-1.jpg" alt="">
                            <h5 class="fw-bold">Rahul Sharma</h5>
                            <small>Founder & CEO</small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-item bg-light rounded p-3 wow fadeInUp" data-wow-delay="0.3s">
                            <img class="img-fluid rounded mb-3" src="img/team-2.jpg" alt="">
                            <h5 class="fw-bold">Priya Mehta</h5>
                            <small>Product Manager</small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-item bg-light rounded p-3 wow fadeInUp" data-wow-delay="0.5s">
                            <img class="img-fluid rounded mb-3" src="img/team-3.jpg" alt="">
                            <h5 class="fw-bold">Aman Verma</h5>
                            <small>Lead Developer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Footer Include -->
        <?php include 'footer.php'; ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
