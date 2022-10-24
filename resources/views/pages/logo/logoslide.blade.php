@extends('layouts.admin')

@section('content')



    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">

            <div class="card">

                <div class="card-header py-3">
                    สไลด์หน้าเว็บ
                </div>
                <div class="py-2"  style="text-align:right;padding:3px;">
                    <a href="{{ route('logoslide.create') }}" class="btn btn-success">
                       เพิ่มสไลด์หน้าเว็บ
                    </a>
                </div>
              <div class="card-body">
                <div class="table-responsive pt-1">
                  <table id="myTable">
                    <thead>
                      <tr>

                        <th>
                          ลำดับ
                        </th>
                        <th>
                            รูป
                        </th>
                        <th>
                            เรื่อง / หัวข้อ
                        </th>
                        <th>
                            สถานะ
                        </th>
                        <th>
                            จัดการ
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $k => $items)
                      <tr>

                        <td>{{ ++$k }}</td>
                        <td>
{{$items->slide_path}}
                        </td>
                        <td>
                            {{$items->slide_topic}}
                        </td>
                        <td>
                            {{$items->status}}
                        </td>

                        <td>
                            <a href="{{ url('/admin/logoslide/' . $items->id . '/edit') }}" class="btnx editmdi btn-edit"><i class="mdi mdi-brush"></i></a>

                            <button type="button" class="btnx delmdi btn-delete" id="dele" onclick="del({{$items->id}});"><i class="mdi mdi-backspace"></i></button>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <script>

$(document).ready( function () {
      $('#myTable').DataTable();
  } );

    var $link = "<?php echo url('/public/product/'); ?>";



    $('body').on('click', '.save-fut', function () {

        var id = $('#id').val();
        var image_logo = $('#image_logo').val();
        var image_shotcut = $('#image_shotcut').val();
        var image_fut = $('#image_fut').val();


        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });

                $.ajax({
                    dataType: 'json',
                    type:'PUT',
                    data:{
                        '_token': "{{ csrf_token() }}",
                        images_logo:image_logo,images_shotcut:image_shotcut,images_fut:image_fut},
                    url: '/admin/logoweb/'+ id,

                    success: function(datas){

                        swal("บันทึกสำเร็จ!", "บันทึกสำเร็จ!", "success");

                    }
                })
});






    $("#images_logo").on('change', function(){
        if ($('input[name ="images_logo"]').val() != '') {
            var _URL = window.URL || window.webkitURL;
            var file, img;
            var file_data = $('input[name= "images_logo"]').prop('files')[0];

            var _token = $('input#_token').val();

            var form_data = new FormData();
            if ((file = this.files[0])) {
                img = new Image();
                img.onload = function() {
                    form_data.append('images_logo', file_data);
                    form_data.append("_token", _token);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/admin/product/uploadimage',
                        dataType: 'json',
                        type: 'POST',
                        data: form_data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function success(resp) {

;                               $('input[name=image_logo]').val(resp.data);
                                $('#showImagelogo').attr("src", $link +'/'+ resp.data);
swal("บันทึกสำเร็จ!", "บันทึกสำเร็จ!", "success");

                        },
                        error: function error(xhr, textStatus, errorThrown) {

                            console.log(errorThrown);
                        }
                    });
                };
                img.onerror = function() {
                    alert( "not a valid file: " + file.type);
                };
                img.src = _URL.createObjectURL(file);
            }
        }
    })


    $("#images_shotcut").on('change', function(){
        if ($('input[name ="images_shotcut"]').val() != '') {
            var _URL = window.URL || window.webkitURL;
            var file, img;
            var file_data = $('input[name= "images_shotcut"]').prop('files')[0];

            var _token = $('input#_token').val();

            var form_data = new FormData();
            if ((file = this.files[0])) {
                img = new Image();
                img.onload = function() {
                    form_data.append('images_shotcut', file_data);
                    form_data.append("_token", _token);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/admin/product/uploadimage',
                        dataType: 'json',
                        type: 'POST',
                        data: form_data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function success(resp) {
                             $('input[name=image_shotcut]').val(resp.data);
                            $('#showImageshotcut').attr("src", $link +'/'+ resp.data);
                        swal("บันทึกสำเร็จ!", "บันทึกสำเร็จ!", "success");

                        },
                        error: function error(xhr, textStatus, errorThrown) {

                            console.log(errorThrown);
                        }
                    });
                };
                img.onerror = function() {
                    alert( "not a valid file: " + file.type);
                };
                img.src = _URL.createObjectURL(file);
            }
        }
    })

    $("#images_fut").on('change', function(){
        if ($('input[name ="images_fut"]').val() != '') {
            var _URL = window.URL || window.webkitURL;
            var file, img;
            var file_data = $('input[name= "images_fut"]').prop('files')[0];

            var _token = $('input#_token').val();

            var form_data = new FormData();
            if ((file = this.files[0])) {
                img = new Image();
                img.onload = function() {
                    form_data.append('images_fut', file_data);
                    form_data.append("_token", _token);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/admin/product/uploadimage',
                        dataType: 'json',
                        type: 'POST',
                        data: form_data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function success(resp) {

;                               $('input[name=image_fut]').val(resp.data);
                                $('#showImagefut').attr("src", $link +'/'+ resp.data);
swal("บันทึกสำเร็จ!", "บันทึกสำเร็จ!", "success");

                        },
                        error: function error(xhr, textStatus, errorThrown) {

                            console.log(errorThrown);
                        }
                    });
                };
                img.onerror = function() {
                    alert( "not a valid file: " + file.type);
                };
                img.src = _URL.createObjectURL(file);
            }
        }
    })








</script>



@endsection


