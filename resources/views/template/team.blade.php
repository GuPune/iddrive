@php
    $data = \App\CoreFunction\Cutstr::getbussines();

    $imga = \App\CoreFunction\Cutstr::getconfig();
    $locale = \App\CoreFunction\Cutstr::language();
    $localex = session()->get('locale');
    $st = 'B10';
    $loca = \App\CoreFunction\Cutstr::typelan($st);



@endphp

<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>
            @if($localex == 'th')
            {{$loca->name_th}}
            @elseif($localex == 'en')
            {{$loca->name_en}}
            @else
            {{$loca->name_cn}}
            @endif
        </h2>
        <p>
            @if($localex == 'th')
            {{$loca->title_th}}
            @elseif($localex == 'en')
            {{$loca->title_en}}
            @else
            {{$loca->title_cn}}
            @endif
        </p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              {{-- <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div> --}}
            </div>
            {{-- <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              {{-- <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div> --}}
            </div>
            {{-- <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              {{-- <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div> --}}
            </div>
            {{-- <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              {{-- <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div> --}}
            </div>
            {{-- <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
            </div> --}}
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->
