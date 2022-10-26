@php
    $data = \App\CoreFunction\Cutstr::getbussines();
@endphp


<section id="bussines" class="testimonials section section-diff section-bg-1">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>ธุรกิจของเรา</h2>
        <p>ผลิตผลงานจากความต้องการเป็นหลัก เพื่อประโยชน์ที่คุ้มค่า.</p>
      </div>

      <div class="row bottom-gap">
        @foreach($data as $datas)
        <div class="col-sm-3">
                   <!-- Latest work ITEM -->
                   <div class="service fadeLeft" style="opacity: 1; left: 0px;">
                     <div class="service-icon m-t-n">
                        @php
                        $link = env('APP_URL');
      $fineUrlImg = $link . "/export/new/" . $datas->n_code;
    $imga = \App\CoreFunction\Cutstr::findimgInhtml($fineUrlImg) != NULL  ? \App\CoreFunction\Cutstr::findimgInhtml($fineUrlImg) : $link . "/img/no_photo.jpg";

@endphp
                       <a href="{{$datas->url}}"  target="_blank">
                        <img data-original="{{$imga}}" alt="ภาพข่าวกิจกรรม" class="lazy" src="{{$imga}}" style="display: inline;width: 100%; height:250px;">
                    </a>
                     </div>
                     <div class="service-header">
                        <h5 class="card-title">{{$datas->title_th}}</h5>
                     </div>
                     <div class="service-desc">
                        {{$datas->name_th}}
                             <br><font size="2px;" class="pull-right">{{$datas->create_at}}</font>
                     </div>
                   </div>
                   <!-- Latest work ITEM End -->
                </div>
                @endforeach

         </div>



    </div>


  </section><!-- End Testimonials Section -->
