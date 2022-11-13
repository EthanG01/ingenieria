<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Observatorio SRCH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Favicons -->
  <link href="assets2/img/favicon.png" rel="icon">
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v4.9.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand" href="/">
        <img src="assets/images/ojo.png" width="55" class="my-200">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a href="/" class="active">Inicio</a>
          </li>

          <li class="nav-item active">


            <a class="nav-link" href="{{route('cliinvolucrado.index') }}" class="underline text-gray-900 dark:text-white">
              ¿Quienes somos?
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('cligaleria.index') }}" class="underline text-gray-900 dark:text-white">
              Imágenes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cliproyecto.index') }}" class="underline text-gray-900 dark:text-white">
              Proyectos
            </a>
          </li>
          <li class="dropdown"><a href="{{route('clirepo.index') }}"><span>Repositorio</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('cliarticulo.index') }}">Artículos</a></li>
              <li><a href="{{route('clitesi.index') }}">Tesis</a></li>
              <li><a href="{{route('clilibrorevis.index') }}">Libros/Revistas</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">
              Login
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">
              Register
            </a>
          </li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->

    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Repositorio</h2>

        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <!-- End Clients Section -->
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Artículos</h3>
              <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, cum nisi quos corporis temporibus quia velit excepturi quisquam soluta sapiente, nihil odit. Error earum quidem quia, adipisci nisi maiores rem?</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{route('cliarticulo.index') }}" class="btn-buy">Ver más</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Tesis</h3>
              <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, cum nisi quos corporis temporibus quia velit excepturi quisquam soluta sapiente, nihil odit. Error earum quidem quia, adipisci nisi maiores rem?</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{route('clitesi.index') }}" class="btn-buy">Ver más</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Libros/Revistas</h3>
              <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, cum nisi quos corporis temporibus quia velit excepturi quisquam soluta sapiente, nihil odit. Error earum quidem quia, adipisci nisi maiores rem?</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{route('clilibrorevis.index') }}" class="btn-buy">Ver más</a>
              </div>
              
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Pricing Section -->


   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-3">
            <div class="footer-info">
              <h3>Redes sociales</h3>

              <div class="social-links mt-3">
                <a href="https://twitter.com/CemedeUna?s=20&t=03tQ0cHRwWTHpsUReMxIvQ" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/unacemede" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://instagram.com/unacemede?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://youtube.com/channel/UCEm2F4ZxRBORG3IztQAqnyQ" class="youtube"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>


        </div>

      </div>
    </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Observatorio, UNA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets2/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>

</body>

</html>