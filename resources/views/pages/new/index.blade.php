@extends('layouts.admin')

@section('content')





  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">ข้อมูลข่าว</div>
          <div class="card-body">
            <div class="table-responsive pt-3">
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

                        @php
    $datas = \App\CoreFunction\Cutstr::findimgInhtml('https://iddrives.co.th/web/export/findImgnews/?n_code=BLHYNNQTAHGCC1Q79WU');


@endphp
<img src="<?= $datas ?>" style="height:100px; width:150px; " />
                    </td>
                    <td>
                        {{ $items->title }}
                    </td>
                    <td>
                        @if ($items->status == 'Y')
                        <label class="badge badge-info">ใข้งาน</label>

                        @else
                        <label class="badge badge-danger">ไม่ใช้งาน</label>
                        @endif



                    </td>
                    <td>

                        <button type="button" class="btnx editmdi"><i class="mdi mdi-brush"></i></button>
                        <button type="button" class="btnx delmdi"><i class="mdi mdi-backspace"></i></button>
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


  <style type="text/css">
.btnx {
    display: inline-block;
    font-weight: 400;
    color: #001737;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    font-size: 0.875rem;
    line-height: 1;
    border-radius: 0.1875rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.delmdi{
    color: red;
}
.editmdi{
    color: rgb(255, 187, 0);
}
</style>
  <script>

    $(document).ready( function () {
      $('#myTable').DataTable();
  } );

    </script>







@endsection


