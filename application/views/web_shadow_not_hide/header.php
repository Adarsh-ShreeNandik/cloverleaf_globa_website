<style>
.navbar .nav-pd-left {
   
    padding-left: 50px !important;
}

.header .logo h1 {
  position: relative;
    font-size: 24px !important;
    /* border:1px solid red !important; */
}
.header .logo h1 span {
  position: absolute;
    left: 3px !important;
    top: 25px !important;
    font-size:9px !important;
    color: fff !important;
    top: 0;
    padding: 0;
    margin: 0;
    bottom: unset !important;
    letter-spacing: 1px !important;
   
}
.header .logo h1 span + span {
    letter-spacing: 1.2px !important;
    position: relative !important;
    top: 12px !important;
    font-size: 10px !important;
    display: block !important;
}

.header .logo img {
    /* max-height: 40px !important; */
    max-height: 50px !important;
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cloverleaf</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url("assets/img/logo.png"); ?>" rel="icon">
  <link href="<?=base_url("assets/img/logo.png"); ?>" rel="icon">
  <link href="<?=base_url("assets/img/apple-touch-icon.png");?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="<?=base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css"); ?>" rel="stylesheet">
  <link href="<?=base_url("assets/vendor/fontawesome-free/css/all.min.css"); ?>" rel="stylesheet">
  <link href="<?=base_url("assets/vendor/glightbox/css/glightbox.min.css"); ?>" rel="stylesheet">
  <link href="<?=base_url("assets/vendor/swiper/swiper-bundle.min.css"); ?>" rel="stylesheet">
	<link href="<?=base_url("assets/vendor/aos/aos.css"); ?>" rel="stylesheet">
	<link href="<?=base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url("assets/css/main.css"); ?>" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?=base_url(); ?>" class="logo d-flex ">
        <img src="<?=base_url("assets/img/newLogo.png"); ?>" class="img-fluid mb-3 mb-lg-0" alt="">
        <h1>CLOVERLEAF<span> GLOBAL SOLUTION PVT LTD. </span> <span>An Industry 4.0 Initiative</span></h1>
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul class="nav-pd-left">
        <li><a href="<?=base_url(); ?>" <?php if($page == "home")echo 'class="active"'; ?>>Home</a></li>
            <!-- <li><a href="<?=base_url("about/"); ?>" <?php if($page == "about")echo 'class="active"'; ?>>About Us</a></li> -->
            <li class="dropdown">
              <a href="#" <?php if($page == "about")echo 'class="active"'; ?>>
                <span>About Us</span> 
                <i class="bi bi-chevron-down dropdown-indicator"></i>
              </a>
              <ul>
                <li><a href="<?=base_url('about/#overview'); ?>">INDUSTRY OVERVIEW </a></li>
                <li><a href="<?=base_url('about/#characteristics'); ?>">INDUSTRY CHARACTERISTICS </a></li>
                <li><a href="<?=base_url('about/#industry-significance'); ?>">INDUSTRY SIGNIFICANCE</a></li>
                <li><a href="<?=base_url('about/#servicecycle'); ?>">OUR SERVICE CYCLE</a></li>
                <li><a href="<?=base_url('about/#ourstory'); ?>">OUR STORY</a></li>
                <li><a href="<?=base_url('about/#vision'); ?>">VISION & MISSION</a></li>
                <!-- <li><a href="<?=base_url('about/#mission'); ?>">MISSION</a></li> -->
                <li><a href="<?=base_url('about/#what'); ?>">WHAT ARE WE SOLVING FOR</a></li>
                <li><a href="<?=base_url('about/#how'); ?>">HOW ARE WE SOLVING It</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" <?php if($page == "service")echo 'class="active"'; ?>>
                <span>Services</span> 
                <i class="bi bi-chevron-down dropdown-indicator"></i>
              </a>
              <ul>
                <li><a href="<?=base_url('service#trucare'); ?>">TruCare </a></li>
                <li><a href="<?=base_url('service#truehaul'); ?>">TruHaul</a></li>
                <li><a href="<?=base_url('service#oem'); ?>">TruAssure</a></li>
                <li><a href="<?=base_url('service#truesense'); ?>">TruSense</a></li>
                
              </ul>
            </li>
           <li><a href="<?=base_url('support/'); ?>" <?php if($page == "support")echo 'class="active"'; ?>>Support & Foundation</a></li>
          <!-- <li><a href="<?=base_url('gallery/'); ?>"<?php if($page == "gallery")echo 'class="active"'; ?>>Gallery</a></li> -->
          <li><a href="<?=base_url('blog/'); ?>">Blog</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Industry</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Packaging Industry</a></li>
              <li><a href="#">Food Industry</a></li>
              <li><a href="#">PEB Industry</a></li>
              <li><a href="#">Steel Industry</a></li>
              <li><a href="#">Textile Industry</a></li>
              <li><a href="#">Dairy Plants Industry</a></li>
            </ul>
          </li> -->
          <li><a href="#">Latest Trends /News</a></li>
          <li><a href="<?=base_url('join-us/'); ?>"<?php if($page == "join-us")echo 'class="active"'; ?>>Join Us</a></li>

          <!-- <li class="dropdown"><a href="#"><span>Join Us</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Full Time</a></li>
              <li><a href="#">Part Time</a></li>
              <li><a href="#">Remote Assistance</a></li>
            </ul>
          </li> -->
        </ul>
        </li>
    </div>
  </header>
	<!-- End Header -->
  <!-- End Header -->
