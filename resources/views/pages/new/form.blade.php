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
          <h4 class="card-title">แบบฟอร์ม ข่าวสารและกิจกรรม</h4>
            <div class="form-group">
              <label for="exampleInputUsername1">หัวข้อ / ชื่อเรื่อง  </label><label  style="color:red;"> * </label>
              <input type="text" class="form-control" id="title">
            </div>

            <div class="form-group">
                <textarea name="details"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">URL  </label>
                <input type="text" class="form-control" id="title">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Keywords ใส่เครื่องหมาย (,) เพื่อคั่นประโยค  </label>
                <input type="text" class="form-control" id="title">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">สถาน </label>
                <select class="form-control" id="exampleSelectGender">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
              </div>


            <button type="button" class="btn btn-info btn-lg btn-block">Save
                <i class="typcn typcn-th-menu float-right"></i>
              </button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
  <script type="text/javascript">

    CKEDITOR.replace('details', {
            filebrowserUploadUrl: "{{route('uploadx', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',

        });
</script>





@endsection


