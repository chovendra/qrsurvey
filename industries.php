<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SEO Master - SEO Agency Website Template</title>
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
        <?php include 'navbar.php'; ?>

        <div class="container-xxl py-5 bg-primary hero-header mb-5">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated zoomIn">Industries We Serve</h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Industries</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Industries Content Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Specialized Solutions</h6>
                <h2 class="mt-2">Industry-Specific Survey Platforms</h2>
                <p class="mb-0 w-75 mx-auto">Tailored QR survey solutions designed to meet the unique needs of your industry</p>
            </div>

            <div class="row g-4">
                <!-- Healthcare -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="industry-item bg-light rounded p-4 text-center">
                        <div class="industry-icon mb-4">
                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&fit=crop" alt="Healthcare Surveys" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                            <div class="icon bg-primary rounded-circle p-3 d-inline-flex">
                                <i class="fas fa-hospital fa-2x text-white"></i>
                            </div>
                        </div>
                        <h4 class="mb-3">Healthcare</h4>
                        <p class="mb-4">Patient satisfaction surveys, clinical trial feedback, and healthcare provider assessments with HIPAA-compliant security.</p>
                        <a class="btn btn-primary px-3" href="healthcare-surveys.php">Explore Solutions</a>
                    </div>
                </div>

                  <!-- Technology -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="industry-item bg-light rounded p-4 text-center">
                        <div class="industry-icon mb-4">
                            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&fit=crop" alt="Technology Surveys" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                            <div class="icon bg-primary rounded-circle p-3 d-inline-flex">
                                <i class="fas fa-laptop-code fa-2x text-white"></i>
                            </div>
                        </div>
                        <h4 class="mb-3">QR Staff</h4>
                        <p class="mb-4">Effortless Staff Attendance and Payroll Management on the Go. Streamline Your Workforce Management with QR Staff.</p>
                        <a class="btn btn-primary px-3" href="technology-surveys.php">Explore Solutions</a>
                    </div>
                </div>

                <!-- Education -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="industry-item bg-light rounded p-4 text-center">
                        <div class="industry-icon mb-4">
                            <img src="https://cdn.pixabay.com/photo/2016/06/01/06/26/open-book-1428428_1280.jpg" alt="Education Surveys" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                            <div class="icon bg-primary rounded-circle p-3 d-inline-flex">
                                <i class="fas fa-graduation-cap fa-2x text-white"></i>
                            </div>
                        </div>
                        <h4 class="mb-3">Education</h4>
                        <p class="mb-4">Student feedback systems, course evaluations, and institutional research with advanced analytics for educators.</p>
                        <a class="btn btn-primary px-3" href="education-surveys.php">Explore Solutions</a>
                    </div>
                </div>

                <!-- Retail -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="industry-item bg-light rounded p-4 text-center">
                        <div class="industry-icon mb-4">
                            <img src="https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&fit=crop" alt="Retail Surveys" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                            <div class="icon bg-primary rounded-circle p-3 d-inline-flex">
                                <i class="fas fa-shopping-bag fa-2x text-white"></i>
                            </div>
                        </div>
                        <h4 class="mb-3">Retail</h4>
                        <p class="mb-4">Customer experience surveys, product feedback, and market research tools with real-time POS integration.</p>
                        <a class="btn btn-primary px-3" href="retail-surveys.php">Explore Solutions</a>
                    </div>
                </div>

              

                <!-- Hospitality -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="industry-item bg-light rounded p-4 text-center">
                        <div class="industry-icon mb-4">
                            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&fit=crop" alt="Hospitality Surveys" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                            <div class="icon bg-primary rounded-circle p-3 d-inline-flex">
                                <i class="fas fa-utensils fa-2x text-white"></i>
                            </div>
                        </div>
                        <h4 class="mb-3">Hospitality</h4>
                        <p class="mb-4">Guest satisfaction surveys, service quality assessments, and event feedback with multilingual support.</p>
                        <a class="btn btn-primary px-3" href="hospitality-surveys.php">Explore Solutions</a>
                    </div>
                </div>

                <!-- Finance -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="industry-item bg-light rounded p-4 text-center">
                        <div class="industry-icon mb-4">
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400&fit=crop" alt="Finance Surveys" class="img-fluid rounded mb-3" style="height: 200px; width: 100%; object-fit: cover;">
                            <div class="icon bg-primary rounded-circle p-3 d-inline-flex">
                                <i class="fas fa-chart-line fa-2x text-white"></i>
                            </div>
                        </div>
                        <h4 class="mb-3">Finance</h4>
                        <p class="mb-4">Customer satisfaction surveys, financial product feedback, and compliance assessments with bank-level security.</p>
                        <a class="btn btn-primary px-3" href="finance-surveys.php">Explore Solutions</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded p-5">
                    <h3 class="mb-4">Don't See Your Industry?</h3>
                    <p class="mb-4">We customize survey solutions for any sector. Our team will work with you to develop the perfect QR survey system for your specific needs.</p>
                    <a class="btn btn-primary px-4 py-2" href="contact.php">Request Custom Solution</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Industries Content End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Client Success</h6>
                <h2 class="mt-2">Trusted By Industry Leaders</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item border rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonials/healthcare-testimonial.jpg" style="width: 60px; height: 60px;">
                        <div class="ms-3">
                            <h6 class="mb-1">Dr. Priya Sharma</h6>
                            <small>Medical Director, City Hospital</small>
                        </div>
                    </div>
                    <p class="mb-0">"QRSurvey's healthcare solution reduced our patient feedback collection time by 70% while improving response rates significantly."</p>
                </div>
                <div class="testimonial-item border rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonials/education-testimonial.jpg" style="width: 60px; height: 60px;">
                        <div class="ms-3">
                            <h6 class="mb-1">Prof. Rajesh Kumar</h6>
                            <small>Dean, National University</small>
                        </div>
                    </div>
                    <p class="mb-0">"The education-specific survey templates have transformed how we collect and analyze student feedback across our campuses."</p>
                </div>
                <div class="testimonial-item border rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonials/retail-testimonial.jpg" style="width: 60px; height: 60px;">
                        <div class="ms-3">
                            <h6 class="mb-1">Amit Patel</h6>
                            <small>CEO, Urban Retail Chain</small>
                        </div>
                    </div>
                    <p class="mb-0">"Our customer satisfaction scores improved by 35% after implementing QRSurvey's retail feedback system at all checkout counters."</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <?php include 'footer.php'; ?>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>