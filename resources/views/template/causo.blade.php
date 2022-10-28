


<section id="bussines" class="testimonials section section-diff section-bg-1">


    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/a1.png" alt="Los Angeles" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="assets/img/a2.png" alt="Chicago" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="assets/img/a3.png" alt="New York" width="1100" height="500">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>


  </section><!-- End Testimonials Section -->



  <style type="text/css">
    .help-block-name,.help-block-email,.help-block-tel,.help-block-message,.help-block-captcha,.help-block-tel,.help-block-email,.help-block-name-under,.help-block-gende,.help-block-name-en,.help-block-name-th,.help-block-stock,.help-block-price,.help-block-sku,.help-block-barcode,.help-block-image_thump,.help-block-image_zoom,.help-block-image{
        display: none;
        color: red;
        text-align: center;
    }

    .carousel-inner img {
    width: 100%;
    height: 100%;
  }


</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
