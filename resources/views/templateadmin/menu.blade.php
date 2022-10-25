<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <div class="d-flex sidebar-profile">
          <div class="sidebar-profile-image">
            <img src="{{ asset('cms/images/faces/face29.png') }}" alt="image">
            <span class="sidebar-status-indicator"></span>
          </div>
          <div class="sidebar-profile-name">
            <p class="sidebar-name">
              Kenneth Osborne
            </p>
            <p class="sidebar-designation">
              Welcome
            </p>
          </div>
        </div>

        <p class="sidebar-menu-title">Dash menu</p>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard">
          <i class="typcn typcn-device-desktop menu-icon"></i>
          <span class="menu-title">ข้อมูลทั่วไป <span class="badge badge-primary ml-3">New</span></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="typcn typcn-briefcase menu-icon"></i>
          <span class="menu-title">รูปภาพ</span>
          <i class="typcn typcn-chevron-right menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/logoweb">โลโก้เว็บไซค์</a></li>
            <li class="nav-item"> <a class="nav-link" href="/admin/logoslide">ภาพสไลค์</a></li>
            <li class="nav-item"> <a class="nav-link" href="/admin/logobrand">โลโก้แบรนด์</a></li>
            <li class="nav-item"> <a class="nav-link" href="/admin/logoabout">ภาพสไลค์(เกี่ยวกับองค์กร)</a></li>
            <li class="nav-item"> <a class="nav-link" href="/admin/logocustomer">โลโก้ลูกค้าของเรา</a></li>
            <li class="nav-item"> <a class="nav-link" href="/admin/logocer">โลโก้การรับรอง</a></li>
            <li class="nav-item"> <a class="nav-link" href="/admin/logobussines">โลโก้ธุรกิจของเรา</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <p class="sidebar-menu-title">ข่าว</p>
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="typcn typcn-film menu-icon"></i>
          <span class="menu-title">ข่าวสาร / กิจกรรม</span>
          <i class="menu-arrow"></i>
        </a>

        <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="/admin/new/create">แบบฟอร์ม</a></li>
              <li class="nav-item"> <a class="nav-link" href="/admin/new">ข้อมูลข่าว</a></li>
              <li class="nav-item"> <a class="nav-link" href="/admin/new-setting">ตั้งค่า</a></li>
            </ul>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-bs" aria-expanded="false" aria-controls="form-bs">
         <i class="typcn typcn-th-small-outline menu-icon"></i>
          <span class="menu-title">ธุรกิจของเรา</span>
          <i class="menu-arrow"></i>
        </a>

        <div class="collapse" id="form-bs">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="/admin/bussines/create">แบบฟอร์ม</a></li>
              <li class="nav-item"> <a class="nav-link" href="/admin/bussines">ข้อมูลข่าว</a></li>
              <li class="nav-item"> <a class="nav-link" href="/admin/bussines-setting">ตั้งค่า</a></li>
            </ul>
          </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-product" aria-expanded="false" aria-controls="form-product">
            <i class="typcn typcn-globe-outline menu-icon"></i>
          <span class="menu-title">สินค้าและบริการ</span>
          <i class="menu-arrow"></i>
        </a>

        <div class="collapse" id="form-product">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="/admin/product/create">แบบฟอร์ม</a></li>
              <li class="nav-item"> <a class="nav-link" href="/admin/product">ข้อมูลข่าว</a></li>
              <li class="nav-item"> <a class="nav-link" href="/admin/product-setting">ตั้งค่า</a></li>
            </ul>
          </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-multi" aria-expanded="false" aria-controls="form-multi">
            <i class="typcn typcn-globe-outline menu-icon"></i>
          <span class="menu-title">ตั้งค่าภาษา </span>
          <i class="menu-arrow"></i>
        </a>

        <div class="collapse" id="form-multi">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="/admin/mutli/th">ภาษาไทย</a></li>
              <li class="nav-item"> <a class="nav-link" href="/admin/mutli/en">ภาษาอังกฤษ</a></li>
              <li class="nav-item"> <a class="nav-link" href="/admin/mutli/ch">ภาษาจีน</a></li>
            </ul>
          </div>
      </li>

  </nav>
