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
                            <h1 class="text-white animated zoomIn">Contact Us</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
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


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="position-relative d-inline text-primary ps-4">Contact Us</h6>
                            <h2 class="mt-2">Contact For Any Query</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form style="max-width:750px; margin:40px auto; padding:35px; background:linear-gradient(135deg,#ffffff,#f4f8fb); border-radius:15px; box-shadow:0 10px 25px rgba(0,0,0,0.12); font-family:'Segoe UI', Tahoma, sans-serif;">

  <!-- Name + Email -->
  <div style="display:flex; gap:20px; margin-bottom:20px;">
    <div style="flex:1; display:flex; flex-direction:column;">
      <label for="name" style="font-weight:600; margin-bottom:6px; color:#2124B1;">Full Name</label>
      <input type="text" id="name" placeholder="Enter your name"
             style="padding:12px; border:1px solid #ccc; border-radius:8px; font-size:15px; outline:none; transition:0.3s;">
    </div>
    <div style="flex:1; display:flex; flex-direction:column;">
      <label for="email" style="font-weight:600; margin-bottom:6px; color:#2124B1;">Email Address</label>
      <input type="email" id="email" placeholder="Enter your email"
             style="padding:12px; border:1px solid #ccc; border-radius:8px; font-size:15px; outline:none; transition:0.3s;">
    </div>
  </div>

  <!-- Phone + Company -->
  <div style="display:flex; gap:20px; margin-bottom:20px;">
    <div style="flex:1; display:flex; flex-direction:column;">
      <label for="phone" style="font-weight:600; margin-bottom:6px; color:#2124B1;">Phone Number</label>
      <input type="tel" id="phone" placeholder="e.g. +91 9876543210"
             style="padding:12px; border:1px solid #ccc; border-radius:8px; font-size:15px; outline:none; transition:0.3s;">
    </div>
    <div style="flex:1; display:flex; flex-direction:column;">
      <label for="company" style="font-weight:600; margin-bottom:6px; color:#2124B1;">Company Name</label>
      <input type="text" id="company" placeholder="Your company name"
             style="padding:12px; border:1px solid #ccc; border-radius:8px; font-size:15px; outline:none; transition:0.3s;">
    </div>
  </div>

  <!-- Industry -->
  <div style="margin-bottom:20px; display:flex; flex-direction:column;">
    <label for="industry" style="font-weight:600; margin-bottom:6px; color:#2124B1;">Industry</label>
    <select id="industry" 
            style="padding:12px; border:1px solid #ccc; border-radius:8px; font-size:15px; background:#fff; outline:none; transition:0.3s;">
      <option selected disabled>Select your industry</option>
      <option>Healthcare</option>
      <option>Education</option>
      <option>Retail</option>
      <option>Manufacturing</option>
      <option>Real Estate</option>
      <option>Other</option>
    </select>
  </div>

  <!-- Message -->
  <div style="margin-bottom:25px; display:flex; flex-direction:column;">
    <label for="message" style="font-weight:600; margin-bottom:6px; color:#2124B1;">Specific Requirements</label>
    <textarea id="message" placeholder="Tell us what you need..." 
              style="padding:12px; border:1px solid #ccc; border-radius:8px; font-size:15px; min-height:150px; resize:none; outline:none; transition:0.3s;"></textarea>
  </div>

  <!-- Submit -->
  <button type="submit" 
          style="width:100%; background:linear-gradient(135deg,#2124B1,#1c7ac7); color:#fff; font-size:17px; font-weight:bold; padding:15px; border:none; border-radius:10px; cursor:pointer; transition:0.3s;">
    🚀 Schedule Demo Now
  </button>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

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