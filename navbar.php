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
