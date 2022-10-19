@extends('layouts.admin')

@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>



  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">แก้ไขแบบฟอร์ม ข่าวสารและกิจกรรม</h4>
            <div class="form-group">
              <label for="exampleInputUsername1">หัวข้อ / ชื่อเรื่อง  </label><label  style="color:red;"> * </label>
              <input type="hidden" class="form-control" id="id" value="{{$data->id}}">
              <input type="text" class="form-control" id="title" placeholder="Title"  value="{{$data->title}}">
              <div class="help-block-name help-block">กรุณากรอกชื่อเรื่อง</div>
            </div>

            <div class="form-group">
                <textarea name="details"  id="details">{{$data->des}} </textarea>
                <div class="help-block-des help-block">กรุณากรอกรายละเอียด</div>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">URL  </label>
                <input type="text" class="form-control" id="url" placeholder="Url"  value="{{$data->url}}">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Keywords ใส่เครื่องหมาย (,) เพื่อคั่นประโยค  </label>
                <input type="text" class="form-control" id="keyword" placeholder="Keyword" value="{{$data->keywords}}">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">สถานะ </label>
                <select class="form-control" id="status">
                    <option value="Y" @if($data->status == 'Y'){{'selected'}}@endif>Active</option>
                    <option value="N" @if($data->status == 'N'){{'selected'}}@endif>Isactive</option>
                  </select>
              </div>


            <button type="button" class="btn btn-info btn-lg btn-block btn-save">Save
                <i class="typcn typcn-th-menu float-right"></i>
              </button>
        </div>
      </div>
    </div>
  </div>

  <style type="text/css">
    .help-block-name,.help-block-des,.help-block-tel,.help-block-email,.help-block-surname,.help-block-gende,.help-block-name-en,.help-block-name-th,.help-block-stock,.help-block-price,.help-block-sku,.help-block-barcode,.help-block-image_thump,.help-block-image_zoom,.help-block-image{
        display: none;
        color: red;
        text-align: center;
    }
</style>
  <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script type="text/javascript">



    CKEDITOR.replace('details', {
            filebrowserUploadUrl: "{{route('uploadx', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
        });


        $('body').on('click', '.btn-save', function () {


     let valform = validateForm();

     if(valform === true){

        var title = $('#title').val();
        var detail = CKEDITOR.instances.details.getData();
        var url = $('#url').val();
        var keyword = $('#keyword').val();
        var status = $('#status').val();





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
                        title:title,detail:detail,url:url,keyword:keyword,status:status},
                    url: '/admin/new',
                    success: function(datas){

                      swal("บันทึกสำเร็จ!", "บันทึกสำเร็จ!", "success");


                      var title = $('#title').val('');
                      var url = $('#url').val('');
                      var keyword = $('#keyword').val('');
                      var status = $('#status').val('');
                      var detail = CKEDITOR.instances.details.setData('');


                    }
                })

     }else {


     }

        });

        function validateForm(){
var title = $('#title').val();
var detail = CKEDITOR.instances.details.getData();




if(title == ''){
    $('.help-block-name').show();
}else {
    $('.help-block-name').hide();
}
if(detail == ''){
    $('.help-block-des').show();
}else {
    $('.help-block-des').hide();
}




if(title == '' || detail == ''){
    return false;
}else{
    return true;
}

}

</script>





@endsection


