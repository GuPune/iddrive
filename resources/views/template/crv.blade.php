
<style>
    .inone{
        opacity: 1!important;
        filter: none!important;

    }
    </style>
<section id="clients" class="clients">
    <div class="section-title">
        <h2>การรับรอง</h2>
      </div>
      @php
        $crs = \App\CoreFunction\Cutstr::cr();
    @endphp

      <div class="container" data-aos="zoom-in">


        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">

            @foreach($crs as $crss)
            <div class="swiper-slide">
                <img src="/public/product/{{$crss->slide_path}}" class="img-fluid inone" alt="">
            </div>
            @endforeach

          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->
