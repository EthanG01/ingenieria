<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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


                        <a class="nav-link" href="{{ route('cliinvolucrado.index') }}" class="underline text-gray-900 dark:text-white">
                            ¿Quiénes somos?
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cligaleria.index') }}" class="underline text-gray-900 dark:text-white">
                            Imágenes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cliproyecto.index') }}" class="underline text-gray-900 dark:text-white">
                            Proyectos
                        </a>
                    </li>
                    <li class="dropdown"><a href="{{ route('clirepo.index') }}"><span>Repositorio</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('cliarticulo.index') }}">Artículos</a></li>
                            <li><a href="{{ route('clitesi.index') }}">Tesis</a></li>
                            <li><a href="{{ route('clilibrorevis.index') }}">Libros/Revistas</a></li>
                            <li><a href="{{ route('clirepo.index') }}">Repositorio</a></li>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="1600" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets2/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Bienvenidos al Observatorio Regional
                                Chorotega <span></span></h2>

                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets2/img/slide/slide-1.jpeg)">
                    <div class="carousel-container">
                        <div class="container">
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets2/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Te invitamos a conocer más sobre nosotros
                            </h2>
                        </div>
                    </div>
                </div>
                 <!-- Slide 4 -->
                 <div class="carousel-item" style="background-image: url(assets2/img/slide/slide-4.JPG)">
                    <div class="carousel-container">
                        <div class="container">
                        </div>
                    </div>
                </div>
                 <!-- Slide 5-->
                 <div class="carousel-item" style="background-image: url(assets2/img/slide/slide-5.JPG)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Gracias por visitar nuestra página
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
          

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->

        <!-- End About Section -->

        <!-- ======= Clients Section ======= -->

        <!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="row">
                   
                    <div class="col-md-6 mt-auto mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-eye"></i>
                            <h4><a href="{{ route('cliinvolucrado.index') }}">¿Quiénes somos?</a></h4>
                            <p>Somos un programa conformado como una unidad estratégica, para análisis y estudio de la realidad regional.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mt-auto mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-images"></i>
                            <h4><a href="{{ route('cligaleria.index') }}">Galería</a></h4>
                            <p>Espacio para compartir imágenes y videos de las diferentes acciones desarrolladas por los PPAA.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-auto mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-briefcase"></i>
                            <h4><a href="{{ route('cliproyecto.index') }}">Proyectos</a></h4>
                            <p>Programas, proyectos y actividades académicas (PPAA) desarrollados como parte de la acción sustantiva en la Sede Regional Chorotega de la Universidad Nacional de Costa Rica. </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-auto mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-text"></i>
                            <h4><a href="{{ route('clirepo.index') }}">Repositorio</a></h4>
                            <p>Ideado para almacenamiento, organización, difusión y vinculación de información generada en los procesos de investigación, extensión y docencia, a través de PPAA.</p>
                        </div>
                    </div>
                    
                </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                 <div class="Ubicacion">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.569008649516!2d-85.4495335890019!3d10.134320289936223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fb0adec037b37%3A0xcb661d6342193de4!2sCentro%20Mesoamericano%20de%20Desarrollo%20Sostenible%20del%20Tropico%20Seco%20(CEMEDE-UNA)!5e0!3m2!1ses!2scr!4v1669393608471!5m2!1ses!2scr" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>
            </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Ubicación:</h4>
                                <p>Nicoya</p>
                            </div>

                            <div class="email">

                                <i class="bi bi-envelope"></i>
                                <h4>Correo:</h4>
                                <a href="https://mail.google.com/mail/u/0/?hl=es#inbox/FFNDWNNwNqDHRfpqZKlbDkkhBlfpxkTm?compose=GTvVlcSMTDznpcKDtXBMfVWRTlgwSXfkzWhldhKfVcMSQqPSdGNxJmxBrbXdgSmRxVRghJhbxfTdD">
                                    <p>observatorioregional.chorotega@una.cr</p>
                                </a>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Teléfono:</h4>
                                <p>2562-6232</p>
                            </div>
                            <div>


                            </div>

                        </div>



                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
        <!-- End Portfolio Section -->

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