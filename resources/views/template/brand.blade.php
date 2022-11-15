<style>

.clients .swiper-slide img {
    opacity: 1;
    transition: 0.3s;
    filter: grayscale(0);
}

.tibrand h2::after {
    content: "";
    position: absolute;
    display: block;
    width: 200px;
    height: 3px;
    background: #e03a3c;
    bottom: 0;
    left: calc(50% - 100px);
}
    </style>
<section id="clients" class="clients">
    <div class="section-title tibrand">
        @php
        $bra = \App\CoreFunction\Cutstr::brand();


        $localex = session()->get('locale');
    $st = 'B2';
    $loca = \App\CoreFunction\Cutstr::typelan($st);

    @endphp
        <h2>

            @if($localex == 'th')
            {{$loca->name_th}}
            @elseif($localex == 'en')
            {{$loca->name_en}}
            @else
            {{$loca->name_ch}}
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
      <div class="container" data-aos="zoom-in">
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @foreach($bra as $bras)
            <div class="swiper-slide">
                <img src="/public/product/{{$bras->slide_path}}" class="img-fluid" alt="">
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->
