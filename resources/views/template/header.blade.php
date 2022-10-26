<header id="header" class="fixed-top d-flex align-items-center">
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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
