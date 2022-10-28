<style>


    .bga{
        opacity: 1!important;
        filter: none!important;
        background: #f47e2b!important;

    }
    </style>
<header id="header" class="fixed-top d-flex align-items-center bga">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto">
        @php
$imga = \App\CoreFunction\Cutstr::getconfig();
@endphp
        <img src="/public/product/{{$imga->image_logo}}" alt="logo"/>
    </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/">หน้าหลัก</a></li>
          <li><a class="nav-link scrollto" href="#testproduct">สินค้าและบริการ</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">ข่าวสารและกิจกรรม</a></li>
          <li><a class="nav-link scrollto" href="#bussines">ธุรกิจของเรา</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">เกี่ยวกับเรา</a></li>
          <li><a class="nav-link scrollto" href="#contact">ติดต่อเรา</a></li>

          <li><a class="nav-link scrollto" href="#contact">
            </a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="pull-right">
        <a style="padding-left: 5px;padding-right:5px;" href="#">
            <img src="assets/img/en.jpg" title="English">
        </a>
        <a href="#">
        <img src="assets/img/thai.jpg" title="English">
        </a>
        </div>
    </div>
  </header><!-- End Header -->
