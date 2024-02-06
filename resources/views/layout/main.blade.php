<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TEBANK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Template')}}/img/favicon.png" rel="icon">
  <link href="{{asset('Template')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Template')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('Template')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('Template')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('Template')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('Template')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('Template')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('Template')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Regna
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <a href="index.html"><img src="{{asset('Template')}}/img/logo.png" alt=""></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="index.html">Regna</a></h1>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Kegiatan</a></li>
          <li><a class="nav-link scrollto" href="#team">Tim Kami</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to TEBANK</h1>
      <h2>Kami adalah tim bank sampah kampung</h2>
      <div class="btn-group">
      <a href="/login"class="btn-get-started">Kader</a>
      <a href="/login/warga" class="btn-get-started">Warga</a>
      </div>
    </div>
  </section><!-- End Hero Section -->
  
  @yield('content')
  <!-- End Team Section -->
  
  <!-- ======= Contact Section ======= -->
  <section id="contact">
    <div class="container">
      <div class="section-header">
        <h3 class="section-title">Contact</h3>
        <p class="section-description">Hubungi nomer dibawah ini</p>
      </div>
    </div>
  
    <!-- Uncomment below if you wan to use dynamic maps -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8191965463075!2d112.7038436735498!3d-7.261407371339018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7feaef97633c9%3A0xe76268b4b052fc23!2sJl.%20Simo%20Pomahan%20Baru%20Gg.%207%2C%20Simomulyo%2C%20Kec.%20Sukomanunggal%2C%20Surabaya%2C%20Jawa%20Timur%2060281!5e0!3m2!1sid!2sid!4v1704271347550!5m2!1sid!2sid"width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  
    <div class="container mt-4">
      <div class="row justify-content-center">
       <div class="col-lg-3 col-md-4 footer-contact">
                <h3>TEBANK</h3>
                <p>
                    Simo Pomahan Baru VII<br>
                    Surabaya, Indonesia<br>
                    <strong>Phone:</strong> 083853426728<br>
                    <strong>Email:</strong> Admin@gmail.com<br>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Tentang Kami</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Kegiatan</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Tim Kami</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Layanan</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Bank Sampah</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Pengecekan saldo</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Media Sosial</h4>
                <p>salah satu wadah untuk saling mengenal</p>
                <div class="social-links mt-3">
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
      </div>
      </div>
  
    </div>
  </section><!-- End Contact Section -->
  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
     
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>TEBANK</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
        Designed by TEBANK 2024<a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('Template')}}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('Template')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('Template')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('Template')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('Template')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('Template')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('Template')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Template')}}/js/main.js"></script>

</body>

</html>