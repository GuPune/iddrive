<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>ลูกค้าของเรา</h2>
      </div>


      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @php
        $cus = \App\CoreFunction\Cutstr::customer();
    @endphp
      @foreach($cus as $cuss)
        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="/public/product/{{$cuss->slide_path}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$cuss->slide_topic}}</h4>
              <p>{{$cuss->slide_detail}}</p>
              <div class="portfolio-links">
                <a href="https://i.imgur.com/zt3g9gZ.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach


      </div>

    </div>
  </section><!-- End Portfolio Section -->
