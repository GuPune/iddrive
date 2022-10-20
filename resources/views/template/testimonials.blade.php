<section id="testimonials" class="testimonials section section-diff">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>ข่าวสารและกิจกรรม</h2>
        <p>ผลิตผลงานจากความต้องการเป็นหลัก เพื่อประโยชน์ที่คุ้มค่า.</p>
      </div>

      <div class="testimonials-slider swiper">
        <div class="swiper-wrapper">
@php
    $data = \App\CoreFunction\Cutstr::getnew();
@endphp


@foreach($data as $datas)
<div class="swiper-slide">
    <div class="testimonial-wrap">
        <div class="card">
            @php
                        $link = env('APP_URL');
      $fineUrlImg = $link . "/export/new/" . $datas->n_code;
    $imga = \App\CoreFunction\Cutstr::findimgInhtml($fineUrlImg) != NULL  ? \App\CoreFunction\Cutstr::findimgInhtml($fineUrlImg) : $link . "/img/no_photo.jpg";

@endphp
            <img src="{{$imga}}"  class="img-responsive" alt="Images" style="width: 100%; height:250px">
            <div class="card-body">
              <h3 class="card-title">{{$datas->title}}</h3>
              <p class="card-text">{{$datas->title}}</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">{{$datas->created_at}}</small>
            </div>
          </div>
    </div>
  </div><!-- End testimonial item -->

@endforeach



        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div align="center" style="padding: 20px;color:white">
        <a href="#" class="btn btn-large btn-danger"> ข่าวสารทั้งหมด </a>
    </div>
    </div>


  </section><!-- End Testimonials Section -->
