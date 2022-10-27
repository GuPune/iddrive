<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>ติดต่อเรา</h2>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <div class="contact-image">
                    <img src="https://iddrives.co.th/web/src/images/web/map_iddrives.png" class="img-responsive" style="width: 100%;" alt="Smiling Two Girls">
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="#" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="ชื่อ-นามสกุล" required>
                <div class="help-block-des help-block-name">กรุณากรอกรายละเอียด</div>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="อีเมล" required>
                <div class="help-block-des help-block-email">กรุณากรอกรายละเอียด</div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="tel" id="tel" placeholder="เบอร์โทร" required>
              <div class="help-block-des help-block-tel">กรุณากรอกรายละเอียด</div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="5" placeholder="ข้อความ" required></textarea>
              <div class="help-block-des help-block-message">กรุณากรอกรายละเอียด</div>
            </div>
            <div class="form-group mt-4 mb-4">
                <div class="captcha">
                    @php
                    $rand = \App\CoreFunction\Cutstr::ask();
                 @endphp
                    <span class="btn btn-primary">{{$rand->ask}}

                    </span>
                    <input id="answer" type="hidden" class="form-control" placeholder="Enter Captcha" name="answer" id="answer" value="{{$rand->answer}}">
                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                        &#x21bb;
                    </button>
                </div>
            </div>
            <div class="form-group mb-4">
                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                <div class="help-block-des help-block-captcha">กรุณากรอกรายละเอียด</div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-danger btn-save"  >ส่งข้อความ</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  <style type="text/css">
    .help-block-name,.help-block-email,.help-block-tel,.help-block-message,.help-block-captcha,.help-block-tel,.help-block-email,.help-block-name-under,.help-block-gende,.help-block-name-en,.help-block-name-th,.help-block-stock,.help-block-price,.help-block-sku,.help-block-barcode,.help-block-image_thump,.help-block-image_zoom,.help-block-image{
        display: none;
        color: red;
        text-align: center;
    }


</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script>


$('body').on('click', '.btn-save', function () {


let valform = validateForm();
    var name = $('#name').val();
    var email = $('#email').val();
    var tel = $('#tel').val();
    var message = $('#message').val();
    var captcha = $('#captcha').val();


if(valform === true){


   $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
               });

           $.ajax({
               dataType: 'json',
               type:'POST',
               data:{
                   '_token': "{{ csrf_token() }}",
                   name:name,email:email,tel:tel,message:message,captcha:captcha},
               url: '/captcha-validation',
               success: function(datas){
                swal("บันทึกสำเร็จ!", "บันทึกสำเร็จ!", "success");
               }
           })

}else {
    swal("ส่งข้อมูลไม่สำเร็จ!", "ส่งข้อมูลไม่สำเร็จ!", "error");

}

   });

   function validateForm(){
    var name = $('#name').val();
    var email = $('#email').val();
    var tel = $('#tel').val();
    var message = $('#message').val();
    var captcha = $('#captcha').val();
    var answer = $('#answer').val();


    if(name == ''){
$('.help-block-name').show();
}else {
$('.help-block-name').hide();
}

if(email == ''){
$('.help-block-email').show();
}else {
$('.help-block-email').hide();
}

if(tel == ''){
$('.help-block-tel').show();
}else {
$('.help-block-tel').hide();
}

if(message == ''){
$('.help-block-message').show();
}else {
$('.help-block-message').hide();
}

if(captcha == ''){
$('.help-block-captcha').show();
}else {
$('.help-block-captcha').hide();
}


if(captcha == '' || email == '' || tel == '' || message == '' || name == ''){
return false;
}else{


if(parseInt(answer) == parseInt(captcha)){
    return true;
}else {
    return false;
}

}





}

function save(){


    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });

                $.ajax({
                    dataType: 'json',
                    type:'POST',

                    data:{
                        '_token': "{{ csrf_token() }}",
                        title_th:title_th,title_en:title_en,title_ch:title_ch,detail_th:detail_th,detail_en:detail_en,detail_ch:detail_ch,url:url,keyword:keyword,status:status,name_ch:name_ch,name_th:name_th,name_en:name_en},
                    url: '/admin/bussines',
                    success: function(datas){

                      swal("บันทึกสำเร็จ!", "บันทึกสำเร็จ!", "success");



                    }
                })

}


$('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
console.log(data)

var answer = $('#answer').val(data.answer);
            $(".captcha span").html(data.ask);
            }
        });
    });

    </script>
