<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  @php
  $imga = \App\CoreFunction\Cutstr::getconfig();
  @endphp
  <title>{{$imga->cg_name}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->


  <link href="/public/product/{{$imga->image_shotcut}}" rel="icon">
  <link href="/public/product/{{$imga->image_shotcut}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v3.9.1
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>

    .section-diff .service {
    background: white;
}

.service .service-desc::before {
    content: "";
    position: absolute;
    top: 0px;
    border-bottom: 2px solid #d9d9d9;
    width: 100%;
    left: 0;
}
    .service .service-icon {
    font-size: 48px;
    color: #f4ad42;
    margin-top: 15px;
}
.service .service-header, .service-header {
    font: 18px "Prompt", sans-serif;
    color: #191919;
    text-transform: uppercase;
    padding: 25px 0 45px 0;
}

.service .service-desc {
    position: relative;
    padding: 25px 20px;
    margin: -15px;
    color: #666666;
    font-size: 12px;
    line-height: 18px;
    text-align: left;
    height: 170px;
}
.service-desc {
    text-indent: 25px;
    font-size: 16px!important;
}
    .service {
    cursor: pointer;
}

.service {
    text-align: center;
    background: #f2f2f2;
    padding: 15px;
    position: relative;
}
.fadeLeft {
    left: -80px;
    opacity: 0;
    position: relative;
}

.service .service-desc::after {
    font: 25px FontAwesome;
    content: "\f0d8";
    position: absolute;
    top: -16px;
    left: 48.1%;
    color: #d9d9d9;
}

.section-bg-1 {
    background: url(//www.workbythai.com/assets/images/coding.jpg);
    background-size: cover;
}

#hero1 {
    width: 100%;
    height: 100vh;
    background: url("https://i.imgur.com/3BgTF6X.jpg") top center no-repeat;
    background-size: cover;
    position: relative;
    padding-top: 82px;
}

/* #hero1:before {
    content: "";
    background: rgba(0, 0, 0, 0.6);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
} */

#hero1 h1 {
    margin: 0;
    font-size: 48px;
    font-weight: 700;
    color: #fff;
}

#hero1 h2 {
    color: #fff;
    margin: 10px 0 0 0;
    font-size: 24px;
}

#hero1 .btn-get-started {
    font-family: "Raleway", sans-serif;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 30px;
    border-radius: 4px;
    transition: 0.5s;
    margin-top: 30px;
    color: #fff;
    background: #e03a3c;
    border: 2px solid #e03a3c;
}

@media (max-height: 500px) {

    #hero1 {
    height: 120vh;
}
}

    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  @include('template.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero1" class="d-flex align-items-center" style="background-image: url('https://i.imgur.com/3BgTF6X.jpg') top center no-repeat">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          {{-- <h1>Bettter digital experience with Presento</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <a href="#about" class="btn-get-started scrollto">Get Started</a> --}}
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    @include('template.brand')


    <!-- ======= Clients Section ======= -->


    <!-- ======= About Section ======= -->
    {{-- @include('template.about') --}}
    <!-- ======= Counts Section ======= -->
    {{-- @include('template.count') --}}

    <!-- ======= Tabs Section ======= -->
    {{-- @include('template.tab') --}}

    <!-- ======= Services Section ======= -->
    {{-- @include('template.service') --}}

    <!-- ======= Portfolio Section ======= -->
    {{-- @include('template.portfolio') --}}



        <!-- ======= Product Section ======= -->
        @include('template.testproduct')


            <!-- ======= Testimonials Section ======= -->
    @include('template.testimonials')

 <!-- ======= Product Section ======= -->
      @include('template.bussines')

    <!-- ======= Pricing Section ======= -->
    {{-- @include('template.pricing') --}}

    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- @include('template.faq') --}}

        @include('template.portfolio')
    @include('template.crv')




    <!-- ======= Team Section ======= -->
    @include('template.team')

    <!-- ======= Contact Section ======= -->
    @include('template.contact')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('template.footer')




  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
