<?php
date_default_timezone_set('Asia/Jakarta');
$jam=date("G");
if($jam>=0&&$jam<=11)
$sapa=" Good Morning";
else if($jam>=12&&$jam<=15)
$sapa=" Good Afternoon";
else if($jam>=16&&$jam<=18)
$sapa=" Good Evening";
else if($jam>=19&&$jam<=23)
$sapa=" Good Night";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolioku</title>
<!-- botstrap css file -->
<link rel="stylesheet" href="./css/bootstrap.min.css">
<!-- font awesome -->
<link rel="stylesheet" href="./css/all.min.css">

<!-- magnificpopup css file -->
<link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">

<!-- owl carousel css file -->
<link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
<!-- custom css file -->
    <link rel="stylesheet" href="./css/style.css">
<!-- REsponsive css file -->
<link rel="stylesheet" href="./css/responsive.css">
</head>
<body>
<!-- <h4><?php
echo date("d-m-Y h:i:sa") . "<br>";
?></h4>  -->
<!-- ----------------------start header area----------------------- -->
<header class="header_area">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">about</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#services">service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#portopolio">portofolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://github.com/fhrlkhdz">github</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://quljayid.blogspot.com/">blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#footer">contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

    </div>
</header>



<!-- ---------------------end of header area------------------------ -->

<!-- ---------------------start main area------------------------ -->
<main class="site-main">
  <!-- ---------------------start banner area------------------------ -->
  <section class="site-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 site-title">
          <h3 class="title-text">Assalamualaikum,<?php echo $sapa; ?> </h3>
          <h1 class="title-text text-uppercase">I'm Fachrul</h1>
          <h4 class="title-text text-uppercase">Mobile and Web Developer</h4>
          <div class="site-button">
            <div class="d-flex flex-row flex-wrap">
              <button type="button" class="btn button primary-button mr-4 text-uppercase" onclick="window.location.href='#portopolio'">here me</button>
              <button type="button" class="btn button secondary-button text-uppercase" onclick="window.location.href='https://drive.google.com/file/d/1t26Y3457W2fnkFg2bekbhBAoWlO1tdLB/view?usp=sharing'">Get CV</button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 banner-image">
          <img src="./img/banner/banner-image.png" alt="banner-img" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!-- ---------------------end banner area------------------------ -->
   <!-- ---------------------about area ------------>
<section class="about-area" id ="portopolio">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="about-image">
          <img src="./img/about-us.png" alt="About us" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6 col-md-12 about-title">
        <h2 class="text-uppercase pt-5">
          <span>About me</span>
          <!-- <span>introduce</span>
          <span>myself</span> -->
        </h2>
        <div class="paragraph py-4 w-75">
          <p class="para">
          <?php echo $sapa; ?>, visitors.
          My name is Fahrul Khoirul Khadziq. I am a junior web developer and focus in front end dev. I was born in Wonosobo, April 30th 1995. Currently, I live in Jalan Palagan Tentara Pelajar no.84, Sleman, Yogyakarta.
          </p>
          <!-- <p class="para">
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here
          </p> -->
        </div>
        <button type="button" class="btn button primary-button text-uppercase" onclick="window.location.href='https://drive.google.com/file/d/1t26Y3457W2fnkFg2bekbhBAoWlO1tdLB/view?usp=sharing'">Download CV</button>
      </div>
    </div>
  </div>
</section>
  <!-- ---------------------end of about area ------------>
   <!-- ---------------------brand area ------------>
<secton class="brand-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-12 col-md-12">
        <div class="first-row row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-brand">
              <img src="./img/brands/logo1.png" alt="Brand-1">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-brand">
              <img src="./img/brands/logo2.png" alt="Brand-2">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-brand">
              <img src="./img/brands/logo3.png" alt="Brand-3">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-brand">
              <img src="./img/brands/logo4.png" alt="Brand-4">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-brand">
              <img src="./img/brands/logo5.png" alt="Brand-5">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-brand">
              <img src="./img/brands/logo6.png" alt="Brand-6">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-brand">
              <img src="./img/brands/logo7.png" alt="Brand-7">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-brand">
              <img src="./img/brands/logo8.png" alt="Brand-8">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-brand">
              <img src="./img/brands/logo9.png" alt="Brand-9">
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-12 col-md-12">
        <div class="experience-area">
          <div class="d-flex flex-row years-area">
            <h2 class="p-3 years">1</h2>
            <h2>
              <span>Years</span>
              <span>Experience</span>
              <span>Working</span>
            </h2>
          </div>
          <div class="d-flex flex-wrap call-area">
            <span><i class="fas fa-phone-alt fa-3x px-3"></i></span>
            <div class="call-now">
              <a href="#" class="text-uppercase h4 font-roboto">Call Now</a>
              <span class="font-roboto py-2">(+62)856-4239-0712</span>
            </div>
          </div>
          <div class="bg-panel">
          </div>
        </div>
      </div>
    </div>
  </div>
</secton>

   <!-- ---------------------end ofbrand area ------------>
    <!-- ---------------------services area ------------>
<section class="services-area" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center services-title">
        <h1 class="text-uppercase title-text">Services Offers</h1>
        <p class="para">
        To ask more about the service offer, please visit the footer section. There is a telegram link etc.
        </p>
      </div>
    </div>
    <div class="container services-list">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="services">
            <div class="services-img text-center py-4">
              <img src="./img/services/s1.png" alt="Services-1">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title text-uppercase font-roboto">Web Developer</h5>
              <p class="card-text text-secondary">
                
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="services">
            <div class="services-img text-center py-4">
              <img src="./img/services/s2.png" alt="Services-2">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title text-uppercase font-roboto">UI/UX Design</h5>
              <p class="card-text text-secondary">
                
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="services">
            <div class="services-img text-center py-4">
              <img src="./img/services/s3.png" alt="Services-3">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title text-uppercase font-roboto">Web Design</h5>
              <p class="card-text text-secondary">
                
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="services">
            <div class="services-img text-center py-4">
              <img src="./img/services/s4.png" alt="Services-4">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title text-uppercase font-roboto">Poster Design</h5>
              <p class="card-text text-secondary">
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
     <!-- ---------------------end of services area ------------>
     <!-- ---------------------project area ------------>
<section class="project-area">
  <div class="container">
    <div class="project-title pb-5">
      <h1 class="text-uppercase title h1">Recently Done Project</h1>
      <h1 class="text-uppercase title h1">Quality Work</h1>
    </div>

    <div class="button-group">
      <button type="button" class="active" id="btn1" data-filter="*">All</button>
      <button type="button" data-filter=".popular">Popular</button>
      <button type="button" data-filter=".latest">Latest</button>
      <button type="button" data-filter=".following">Following</button>
      <button type="button" data-filter=".upcoming">Upcoming</button>
    </div>

    <div class="row grid">
      <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
        <div class="our-project">
          <div class="img">
            <a class="test-popup-link" href="./img/portfolio/p1.jpg">
              <img src="./img/portfolio/p1.jpg" alt="portofolio-1">
            </a>
          </div>
          <div class="title py-4">
            <h4 class="text-uppercase">Minimals Design</h4>
            <span class="text-secondary">Latest, Portofolio</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
        <div class="our-project">
          <div class="img">
            <a class="test-popup-link" href="./img/portfolio/p2.jpg">
              <img src="./img/portfolio/p2.jpg" alt="portofolio-2">
            </a>
          </div>
          <div class="title py-4">
            <h4 class="text-uppercase">Paint Wall</h4>
            <span class="text-secondary">Latest, Portofolio</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
        <div class="our-project">
          <div class="img">
            <a class="test-popup-link" href="./img/portfolio/p3.jpg">
              <img src="./img/portfolio/p3.jpg" alt="portofolio-3">
            </a>
          </div>
          <div class="title py-4">
            <h4 class="text-uppercase">Female Light</h4>
            <span class="text-secondary">Latest, Portofolio</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
        <div class="our-project">
          <div class="img">
            <a class="test-popup-link" href="./img/portfolio/p4.jpg">
              <img src="./img/portfolio/p4.jpg" alt="portofolio-4">
            </a>
          </div>
          <div class="title py-4">
            <h4 class="text-uppercase">Fourth Air</h4>
            <span class="text-secondary">Upcoming, Portofolio</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
        <div class="our-project">
          <div class="img">
            <a class="test-popup-link" href="./img/portfolio/p5.jpg">
              <img src="./img/portfolio/p5.jpg" alt="portofolio-5">
            </a>
          </div>
          <div class="title py-4">
            <h4 class="text-uppercase">Multiple Form</h4>
            <span class="text-secondary">Upcoming, Portofolio</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
        <div class="our-project">
          <div class="img">
            <a class="test-popup-link" href="./img/portfolio/p6.jpg">
              <img src="./img/portfolio/p6.jpg" alt="portofolio-6">
            </a>
          </div>
          <div class="title py-4">
            <h4 class="text-uppercase">Together Sign</h4>
            <span class="text-secondary">Following, Portofolio</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
        <div class="our-project">
          <div class="img">
            <a class="test-popup-link" href="./img/portfolio/p7.jpg">
              <img src="./img/portfolio/p7.jpg" alt="portofolio-7">
            </a>
          </div>
          <div class="title py-4">
            <h4 class="text-uppercase">Green Heaven</h4>
            <span class="text-secondary">Following, Portofolio</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
        <div class="our-project">
          <div class="img">
            <a class="test-popup-link" href="./img/portfolio/p8.jpg">
              <img src="./img/portfolio/p8.jpg" alt="portofolio-8">
            </a>
          </div>
          <div class="title py-4">
            <h4 class="text-uppercase">Fly</h4>
            <span class="text-secondary">Following, Portofolio</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
        <div class="our-project">
          <div class="img">
            <a class="test-popup-link" href="./img/portfolio/p9.jpg">
              <img src="./img/portfolio/p9.jpg" alt="portofolio-9">
            </a>
          </div>
          <div class="title py-4">
            <h4 class="text-uppercase">Camera Lens</h4>
            <span class="text-secondary">Upcoming, Portofolio</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
     <!-- ---------------------end of project area ------------>
<!-- about me are -->
<section class="about-area" id="about">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <div class="about-title">
          <h1 class="text-uppercase title-h1"></h1>
          <p class="para">
          
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container carousel py-lg-5">
    <div class="owl-carousel owl-theme">
      <div class="client row">
        <div class="col-lg-4 col-md-12 client-img">
          <img src="./img/services/s1.png" alt="img1" class="img-fluid">
        </div>
        <div class="col-lg-8 col-md-12 about-client">
          <h4 class="text-uppercase">Web Developer</h4>
          <p class="para"></p>
        </div>
      </div>
      <div class="client row">
        <div class="col-lg-4 col-md-12 client-img">
          <img src="./img/services/s3.png" alt="img2" class="img-fluid">
        </div>
        <div class="col-lg-8 col-md-12 about-client">
          <h4 class="text-uppercase">Web Design</h4>
          <p class="para"></p>
        </div>
      </div>
      <div class="client row">
        <div class="col-lg-4 col-md-12 client-img">
          <img src="./img/services/s2.png" alt="img3" class="img-fluid">
        </div>
        <div class="col-lg-8 col-md-12 about-client">
          <h4 class="text-uppercase">UI/UX Design</h4>
          <p class="para"></p>
        </div>
      </div>
      <div class="client row">
        <div class="col-lg-4 col-md-12 client-img">
          <img src="./img/services/s4.png" alt="img4" class="img-fluid">
        </div>
        <div class="col-lg-8 col-md-12 about-client">
          <h4 class="text-uppercase">Poster Design</h4>
          <p class="para"></p>
        </div>
      </div>
      <div class="client row">
        <div class="col-lg-4 col-md-12 client-img">
          <img src="./img/services/s3.png" alt="img5" class="img-fluid">
        </div>
        <div class="col-lg-8 col-md-12 about-client">
          <h4 class="text-uppercase">Web Design</h4>
          <p class="para"></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end of about me are -->
<!-- subscribe main area -->

<section class="subscribe-us-area">
  <div class="container subscribe">
    <div class="row">
      <div class="col-lg-12 text-center subscribe-title">
        <h4 class="text-uppercase">Get Update From Anywhere</h4>
        <p class="para">To ask Question.</p>
      </div>
    </div>
    <div class="d-sm-flex justify-content-center">
      <form class="w-50">
        <div class="row d-flex flex-row flex-wrap">
          <div class="col input-textbox">
            <input type="text" id="txtemail" class="form-control" placeholder="Email">
          </div>
          <div class="col">
            <div class="btn-submit">
              <button type="submit" class="btn btn-success float-right">Subscribe</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- end subscripe -->
</main>
<!-- ---------------------end main area------------------------ -->
<footer class="footer-area" id="footer">
  <div class="container">
    <div class="">
      <div class="site-logo text-center py-4">
        <a href="#"><img src="./img/logo.png" alt="logo"></a>
      </div>
      <div class="social text-center">
        <h5 class="text-uppercase">Follow me</h5>
        <a href="https://www.facebook.com/gojek.gojek.96558"><i class="fab fa-facebook"></i></a>
        <a href="https://instagram.com/khoirulkahf"><i class="fab fa-instagram"></i></a>
        <a href="https://t.me/khoirulkahf"><i class="fab fa-telegram"></i></a>
        <a href="https://twitter.com/khoirulkahf"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="copyrights text-center">
        <p class="para">
          Copyright ©2021 All rights reserved
          <a href="#"><span style="color:var(--primary-color);">By Fachrul Khadziq</div>
    </div>
  </div>
</footer>

<!-- jquery file -->
<script src="./js/jquery.3.5.1.min.js"></script>
    <!-- bootstrap js file -->
<script src="./js/bootstrap.min.js"></script>
<!-- isotope js library -->
<script src="./vendor/isotope/isotope.min.js"></script>

<!-- magnific popup js file -->
<script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

<!-- owl caraouseljs file -->
<script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>
<!-- custom js file -->
<script src="./js/main.js"></script>
</body>
</html>