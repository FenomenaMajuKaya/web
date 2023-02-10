<?php 
$url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if($url =="https://fenomenamajukaya.com/fmk-telco" OR $url =="https://fenomenamajukaya.com/fmk-telco/index.php"){ $urlActive1 ="active";}

if($url =="https://fenomenamajukaya.com/fmk-telco/about.php"){ $urlActive2 ="active";$titlePage ="Who We Are";}
if($url =="https://fenomenamajukaya.com/fmk-telco/license.php"){ $urlActive3 ="active";$titlePage ="Licence";}
if($url =="https://fenomenamajukaya.com/fmk-telco/vendor.php"){ $urlActive4 ="active";$titlePage ="Vendor";}
if($url =="https://fenomenamajukaya.com/fmk-telco/partner.php"){ $urlActive5 ="active";$titlePage ="Partner";}
if($url =="https://fenomenamajukaya.com/fmk-telco/store.php"){ $urlActive6 ="active";$titlePage ="Network Store";}
if($url =="https://fenomenamajukaya.com/fmk-telco/contact.php"){ $urlActive7 ="active";$titlePage ="Contact Us";}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Title -->
<title>FMK - Fenomena Majukaya Sdn Bhd (FMK) is a company which carries out the business of providing technology solutions </title>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="keywords" content="fmk,fenomena maju kaya,offshore catering,sabah offshore" />
<meta name="description" content="Fenomena Majukaya Sdn Bhd (FMK) is a company which carries out the business of providing technology solutions for various Telecommunication projects. We are recognised by the Malaysian Communication and Multimedia Commission (MCMC) and have been awarded the Network Facilities Provider (NFP) and Network Service Provider (NSP) licenses" />
<meta name="author" content="www.syeratech.com" />
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- inject css start -->

<!--== bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--== animate -->
<link href="css/animate.css" rel="stylesheet" type="text/css" />

<!--== fontawesome -->
<link href="css/fontawesome-all.css" rel="stylesheet" type="text/css" />

<!--== themify-icons -->
<link href="css/themify-icons.css" rel="stylesheet" type="text/css" />

<!--== magnific-popup -->
<link href="css/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

<!--== owl-carousel -->
<link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

<!--== spacing -->
<link href="css/spacing.css" rel="stylesheet" type="text/css" />

<!--== base -->
<link href="css/base.css" rel="stylesheet" type="text/css" />

<!--== shortcodes -->
<link href="css/shortcodes.css" rel="stylesheet" type="text/css" />

<!--== default-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--== responsive -->
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!-- inject css end -->

</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader"><img src="images/loader.gif" alt=""></div>
</div>

<!-- preloader end -->


<!--header start-->

<header id="site-header" class="header">
  <div class="top-bar d-sm-block d-none">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <div class="topbar-link d-md-block d-none">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="mailto:project@fenomenamaju.com"><i class="far fa-envelope-open"></i>project@fenomenamaju.com</a>
              </li>
              <li class="list-inline-item">
                <a href="tel:+088734320"> <i class="fas fa-mobile-alt"></i>088 - 734 320</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 text-center">
 
        </div>
        <div class="col-md-4 col-sm-6 text-end">
          <div class="social-icons social-hover top-social-list">
            <ul class="list-inline">
              <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
              </li>
              <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="header-wrap">
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="javascript:;">
              <img id="logo-img" class="img-fluid" src="images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <!-- Left nav -->
              <ul class="nav navbar-nav ms-auto">
                <li class="nav-item"> <a class="nav-link <?=$urlActive1?>" href="https://fenomenamajukaya.com/fmk-telco/">Home</a></li> 
                <li class="nav-item"> <a class="nav-link <?=$urlActive2?>" href="about.php">Who We Are</a></li>
				<li class="nav-item"> <a class="nav-link <?=$urlActive3?>" href="license.php">License</a></li>	
				<li class="nav-item"> <a class="nav-link <?=$urlActive4?>" href="vendor.php">Corporate Vendor</a></li>				
				<li class="nav-item"> <a class="nav-link <?=$urlActive5?>" href="partner.php">Partners</a></li>
				<li class="nav-item"> <a class="nav-link <?=$urlActive6?>" href="store.php">Network Store</a></li>
				<li class="nav-item"> <a class="nav-link <?=$urlActive7?>" href="contact.php">Contact Us</a></li>	
				<li class="nav-item" style="background: #ff0000; padding-left: 8px; padding-right: 8px;"> <a class="nav-link" href="https://fenomenamajukaya.com/">FMK Center</a></li>				
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<!--header end-->