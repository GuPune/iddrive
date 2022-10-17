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


