<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>¿Quiénes somos? </title>
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
              ¿Quiénes somos?
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
    <<!-- ======= Hero Section ======= -->
    <section id="hero">
      <div id="heroCarousel" data-bs-interval="1600" class="carousel slide carousel-fade" data-bs-ride="carousel">

          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">

              <!-- Slide 1 -->
              <div class="carousel-item active" style="background-image: url(assets2/img/slide/slide-7.jpg)">
                  <div class="">
                      <div class="container">
                          <h2 class="animate__animated animate__fadeInDown">
                               <span></span></h2>

                      </div>
                  </div>
              </div>
             

        

      </div>
  </section><!-- End Hero -->

<!-- Service Section -->
<section id="service" class="section pt-0">
  <div class="container">
    <h6 class="section-title text-center"></h6>

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 mb-md-0">
          <div class="card-body">
            <h5 class="card-title mt-3"> Observatorio Regional Chorotega<h5>
              <h6>Los Observatorios Regionales surgen como respuesta a la Política Institucional de Desarrollo Regional
                  (2018) como una instancia estratégica enfocada en las acciones de monitoreo, generación, análisis y comunicación
                  de información pertinente y oportuna del estado.
              </h6>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 mb-md-0">
          <div class="card-body">

            <h5 class="card-title mt-3">Misión <h5>
              <h6>Unidad estratégica que monitorea, genera, analiza y comunica información pertinente y oportuna del estado de las regiones
                  y el desarrollo integral, para la orientación de las
                  acciones sustantivas universitarias e interuniversitarias.</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 mb-md-0">
          <div class="card-body">
            <h5 class="card-title mt-3">Visión <h5>
              <h6>Ser un observatorio referente en el estudio y análisis de la realidad regional,
                  que incide en la toma de decisiones institucional e interinstitucional para el desarrollo integral e inclusivo.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End OF Service Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h3>Objetivo General</h3>
            <p>Analizar el estado de las regiones, para el acceso oportuno y pertinente de la información que oriente la toma
              de decisiones de las acciones sustantivas universitarias e interuniversitarias
              y procesos del desarrollo integral e inclusivo. </p>

            <img src="assets/images/foto (1).jpg" alt="" class="w-100 mt-3 shadow-sm">
            </div>
            <h6 class="section-title text-center"></h6>
            <h3>Objetivos específicos</h3>
            
            <ul>
              <li><i class="ri-check-double-line"></i> 1. Explicar las dinámicas y tendencias del desarrollo de los territorios y el quehacer de las poblaciones interlocutoras, para la orientación de Planes, Programas, Proyectos, Actividades Académicas y otras formas de acción sustantiva con pertinencia social y los procesos de toma de decisiones universitarias e interinstitucionales.</li>
              <li><i class="ri-check-double-line"></i> 2. Monitorear las necesidades de formación profesional de grado, posgrado y de educación continua de las regiones, para el desarrollo de una oferta académica desconcentrada pertinente e innovadora.</li>
              <li><i class="ri-check-double-line"></i> 3. Generar una línea editorial regional para la sistematización de experiencias y resultados de la acción sustantiva, mediante productos académicos y en formatos accesibles para los actores y agentes del desarrollo regional y la comunidad nacional e internacional.</li>
              <li><i class="ri-check-double-line"></i>4. Implementar un sistema de información regional mediante una plataforma digital, para la comunicación y facilitación de información pertinente y oportuna del estado de las regiones.</li>
            </ul>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Involucrados</h2>

    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Todos</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">
      @foreach($invo as $inv)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app" >
        <div class="portfolio-wrap">
          <img src="/fotoOrganizaciones/{{$inv->cantonorganizacion->organizacion->fotoOrganizacion}}" class="img-fluid"alt="" style="width:100%; height:210px " >
          <div class="portfolio-info">
            <p class="title">{{$inv->cantonorganizacion->organizacion->nombreOrganizacion}}</p>
            <p class="subtitle">{{$inv->descripcionInvolucrado}}</p>
            <div class="portfolio-links">
              <a href=href="/fotoOrganizaciones/{{$inv->cantonorganizacion->organizacion->fotoOrganizacion}}"></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center"> 
      {{
        $invo->links()
      }}
    </div>
  </div>
</section><!-- End Portfolio Section -->

</main><!-- End #main -->
      <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title">
        <h2>EQUIPO</h2>
        <p>Conoce a nuestro equipo Observatorio</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets2/img/team/William.jpeg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>William Gomez Solís</h4>
            <span>Product Owner</span>
            <p>Ingeniero en Ciencias Forestales</p>
            <div class="social">
              <a href="https://www.facebook.com/wgomezsolis"><i class="ri-facebook-fill"></i></a>
              <a href="https://instagram.com/willgs88?igshid=YmMyMTA2M2Y="><i class="ri-instagram-fill"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets2/img/team/Jose.jpeg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Jose Montiel Hernandez</h4>
            <span>Asistente</span>
            <p>Estudiante de ingenería en Sistemas de Información</p>
            <div class="social">
              <a href="https://www.facebook.com/JoseDaniel.MontielHernandez4"><i class="ri-facebook-fill"></i></a>
              <a href="https://instagram.com/monti.04?igshid=YmMyMTA2M2Y="><i class="ri-instagram-fill"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Team Section -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Desarrolladores</h2>
          
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">
            <div class="testimonial-item">
              <img src="assets2/img/team/Ivan.jpeg" class="testimonial-img" alt="">
              <h3>Joseph Alvarado</h3>
              <h4>Backend</h4>
            
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial-item">
              <img src="assets2/img/team/Ethan.jpeg" class="testimonial-img" alt="">
              <h3>Ethan Madrigal</h3>
              <h4>Backend</h4>
            
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial-item">
              <img src="assets2/img/team/Grettel.jpeg" class="testimonial-img" alt="">
              <h3>Grettel Rodríguez</h3>
              <h4>Frontend</h4>
            
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial-item">
              <img src="assets2/img/team/Gerald.jpeg" class="testimonial-img" alt="">
              <h3>Gerald Gonzalez</h3>
              <h4>Full stack</h4>
            
            </div>
          </div>

          

          
         
        </div>

      </div>
    </section><!-- End Testimonials Section -->
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