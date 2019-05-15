  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>



  <style>
/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
.row.content {
    height: 550px
}

/* Set gray background color and 100% height */
.sidenav {
    background-color: #f1f1f1;
    height: 100%;
}

/* On small screens, set height to 'auto' for the grid */
@media screen and (max-width: 767px) {
    .row.content {
        height: auto;
    }
}
  </style>


  <style>
/* ol > li > a {color:#222233;} */
.toggle.ios,
.toggle-on.ios,
.toggle-off.ios {
    border-radius: 20rem;
}

.toggle.ios .toggle-handle {
    border-radius: 20rem;
}

#background {
    position: absolute;
    z-index: 0;
    background: white;
    display: block;
    min-height: 50%;
    min-width: 50%;
    color: yellow;
}

#content {
    position: absolute;
    z-index: 1;
}

#bg-text {
    color: lightgrey;
    font-size: 120px;
    transform: rotate(300deg);
    -webkit-transform: rotate(300deg);
}
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- select2 -->
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/selects/select2.min.css">
  <!-- select2 -->
  <!-- datetime-->
  <!-- <link rel="stylesheet" type="text/css" href="../../app-assets/css/vendors.css"> -->
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
  <!-- datetime-->
  <section>
      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-12 mb-2">
                      <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                      <h3 class="content-header-title">ข้อมูลประวัติราชการ</h3>
                      <!-- -ปุ่ม-------ค้นหา---------- -->
                      <div class="search-container">
                          <form action="/action_page.php">
                              <input type="text" placeholder="Search.." name="search">
                              <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                      </div>
                      <div class="content-body">
                          <section id="bootstrap3">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="card">
                                          <div class="card-content collapse show">
                                              <div class="card-body card-dashboard">
                                                  <nav aria-label="breadcrumb">
                                                      <ol class="breadcrumb">
                                                          <li class="breadcrumb-item"><a
                                                                  href="../home/index.php">งานประวัติรับราชการ</a></li>
                                                          <li class="breadcrumb-item active" aria-current="page">
                                                              ข้อมูลตำแหน่ง
                                                          </li>
                                                      </ol>
                                                  </nav>
                                                  <!-- เริ่ม--กล้องข้อมูลคนรูป -->
                                                  <div class="card">

                                                      <div class="card-header"
                                                          style="background-color:#0f1733;padding:1.0rem 1.0rem">
                                                          <h6 class="card-title">
                                                              <font color="White">พล.อ.เลย์รสสาหร่าย สองถุง
                                                                  หมายเลขประจำตัว
                                                                  332124562455
                                                          </h6>
                                                          </font>
                                                          <a class="heading-elements-toggle"><i
                                                                  class="la la-ellipsis-v font-medium-3"></i></a>
                                                          <div class="heading-elements">
                                                              <ul class="list-inline mb-0">
                                                                  <li><a data-action="collapse"><i
                                                                              class="ft-minus"></i></a>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!-- จบ--กล้องข้อมูลคนรูป -->
                                                  <!-- เริ่ม--กล้องข้อมูลคนเนื้อหา -->
                                                  <div class="profile"
                                                      style="background-color:#f4f5fa; color:whitesmoke;padding:1%; height: 180px;width: 100%;">
                                                      <div class="image"
                                                          style="background-color:#BEBEBE;height: 160px;width: 12%;">

                                                          <div class="profile_data"
                                                              style="height: 160px;width: 450px;margin-left:150px;padding:1%;">
                                                              <p class="text">
                                                                  <h6>หมายเลขประจำตัว : 12345678888</h6>
                                                                  <h6>ยศ : ร.อ.</h6>
                                                                  <h6>เหล่า : สบ.</h6>
                                                                  <h6>สังกัด : กพ.ทอ.</h6>
                                                                  <h6>ตำแหน่ง : ปฏิบัติการเครื่องจักรคำนวณ แผนกวิเคราะห์
                                                                  </h6>
                                                              </p>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!-- จบ--กล้องข้อมูลคนเนื้อหา -->
                                                  <div class="profile_head"
                                                      style="background-color:#f5f5f5;height: auto;width: 100%;margin-left:0px;padding:1%;">
                                                      <br>
                                                      <div class="card">
                                                          <div class="card-header">
                                                              <h5 class="card-title">ประวัติข้าราชการ</h5>
                                                          </div>
                                                          <div class="card-content">
                                                              <div class="card-body">
                                                                  <?php require_once '../include/profile_table.php'; ?>


                                                                  <div class="tab-content px-1 pt-1">

                                                                  <!-- ---------------ข้อมูลบุคคล-------------- -->
                                                                      <div role="tabpanel" class="tab-pane active"
                                                                          id="tab11" aria-expanded="true"
                                                                          aria-labelledby="base-tab11">
                                                                          <div class="container">
                                                                              <div class="card-content">
                                                                                  <div class="card-body">

                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">


                                                                                          <div id="headingCollapse31"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse31"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse31"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 1</U>
                                                                                                      ข้อมูลบุคคล(ประวัติข้าราชการ)
                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse31"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse31"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="Personnel_type">
                                                                                                                      ประเภทกำลังพล
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  จอมพลอากาศ
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>

                                                                                                                  <div class="card-body"
                                                                                                                      id="gender">
                                                                                                                      เพศ
                                                                                                                      :
                                                                                                                      <div
                                                                                                                          class="card-content">
                                                                                                                          <div
                                                                                                                              class="card-body">
                                                                                                                              <div
                                                                                                                                  class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                                  <input
                                                                                                                                      type="radio"
                                                                                                                                      class="custom-control-input"
                                                                                                                                      name="colorRadio"
                                                                                                                                      id="radio1">
                                                                                                                                  <label
                                                                                                                                      class="custom-control-label"
                                                                                                                                      for="radio1">เพศชาย</label>
                                                                                                                              </div>
                                                                                                                              <div
                                                                                                                                  class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                                  <input
                                                                                                                                      type="radio"
                                                                                                                                      class="custom-control-input"
                                                                                                                                      name="colorRadio"
                                                                                                                                      id="radio2"
                                                                                                                                      checked>
                                                                                                                                  <label
                                                                                                                                      class="custom-control-label"
                                                                                                                                      for="radio2"
                                                                                                                                      checked>เพศหญิง</label>
                                                                                                                              </div>
                                                                                                                          </div>
                                                                                                                      </div>
                                                                                                                  </div>

                                                                                                                  <div class="card-body"
                                                                                                                      id="Rank_losing">
                                                                                                                      ยศก่อนสูญเสีย
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 100%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  จอมพลอากาศ
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>

                                                                                                                      </select>

                                                                                                                  </div>
                                                                                                                  <div class="card-body"
                                                                                                                      id="name_thai">
                                                                                                                      ชื่อ(ภาษาไทย)
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="เลย์ ">
                                                                                                                  </div>
                                                                                                                  <div class="card-body"
                                                                                                                      id="name_eng">
                                                                                                                      ชื่อ(ภาษาอังกฤษ)
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="Lays  ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="Government_Number">
                                                                                                                      หมายเลชประจำตัวทหาร:
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="1111111111">
                                                                                                                  </div>

                                                                                                                  <div class="card-body"
                                                                                                                      id="rank">
                                                                                                                      ยศ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 100%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  จอมพลอากาศ
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                      </select>
                                                                                                                  </div>

                                                                                                                  <div class="card-body"
                                                                                                                      id="title_name">
                                                                                                                      คำนำหน้าชื่อ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 100%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  จอมพลอากาศ
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                  </div>
                                                                                                                  <div class="card-body"
                                                                                                                      id="lastnames_thai">
                                                                                                                      นามสกุล(ภาษาไทย)
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="เลย์รสสาหร่าย ">
                                                                                                                  </div>
                                                                                                                  <div class="card-body"
                                                                                                                      id="lastnames_eng">
                                                                                                                      นามสกุล(อังกฤษ)
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="Nori Seaweed ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-6 col-sm-12">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_type">
                                                                                                                  ประเภทแฟ้ม
                                                                                                                  :
                                                                                                                  <div
                                                                                                                      class="card-content">
                                                                                                                      <div
                                                                                                                          class="card-body">
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio3">
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio3">แผ่น</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio4"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio4"
                                                                                                                                  checked>เล่ม</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio5"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio5"
                                                                                                                                  checked>ชุดบรรจุกล่อง</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio6"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio6"
                                                                                                                                  checked>เล่ม(ปกสีฟ้า)</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio7"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio7"
                                                                                                                                  checked>ไม่ระบุ</label>
                                                                                                                          </div>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  หมายเลขแฟ้มประวัติ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="123456798 ">
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_new">
                                                                                                                  <a>หมายเลขแฟ้มประวัติใหม่
                                                                                                                      :
                                                                                                                  </a>
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="123456789 ">
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="Identification_number">
                                                                                                                      เลขที่บัตรประจำตัว
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="1111111111">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วันที่ออกบัตร
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <br>



                                                                                      <!-- ----ส่วนที่1------      -->

                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                                          <div id="headingCollapse33"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse33"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse33"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 2</U>
                                                                                                      ข้อมูลบุคคล(ประวัติข้าราชการ)
                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse33"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse33"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">
                                                                                                          
                                                                                                         
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="first_birth">
                                                                                                                      กำเนิด
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;border-color: #ff0000 ;border: 1px solid #ff0000;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body">
                                                                                                                      เหล่า
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>

                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="qualification_contain">
                                                                                                                      จำพวก
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>

                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="qualification_adapt">
                                                                                                                      รุ่น นตท
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="Study_period">
                                                                                                                      รุ่น นนอ.
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="Study_period">
                                                                                                                      รุ่นศิษย์การบิน
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>

                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="corps">
                                                                                                                      เลขหมายรายงาน
                                                                                                                      :
                                                                                                                      <br>
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="genera">
                                                                                                                      ลชทอ หลัก
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div class="card-body"
                                                                                                                  id="NTT">
                                                                                                                  ลชทอ รอง1 :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div class="card-body"
                                                                                                                  id="NTT_repetitive">
                                                                                                                  <a>ลชทอ รอง2
                                                                                                                      :
                                                                                                                  </a>
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>

                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div class="card-body"
                                                                                                                  id="NNO">
                                                                                                                  เลขที่ตำแหน่ง(ระบบจ่ายตรง)
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div class="card-body"
                                                                                                                  id="NNO_repetitive">
                                                                                                                  <a>ตำแหน่ง
                                                                                                                  </a>
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="Flying_student">
                                                                                                                      สังกัด
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-3">


                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-3">


                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      วดป รับตำแหน่ง
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class=" col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      วดป เป็นสัญ/ประทวน
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  <a>ลชทอ.
                                                                                                                      รอง1
                                                                                                                      :
                                                                                                                  </a>
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>

                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  ลชทอ.
                                                                                                                  รอง2 :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>

                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      เลขที่ตำแหน่งระบบจ่ายตรงฯ
                                                                                                                      (ตำแหน่งหลัก)
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-12 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ชื่อตำแหน่ง
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      สังกัด
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      สายวิทยาการ
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  ชั้นเงินเดือน
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>

                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  <a>เงินเดือน
                                                                                                                      :
                                                                                                                  </a>
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>

                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">

                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วัน/เดือน/ปี
                                                                                                                      รับตำแหน่ง
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>

                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">

                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วัน/เดือน/ปี
                                                                                                                      บรรจุ
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>

                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">

                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วัน/เดือน/ปี
                                                                                                                      น.สัญญาบัตร/ประทวน
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>

                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">

                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วัน/เดือน/ปี
                                                                                                                      บรรจุรับยศปัจจุบัน
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>

                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">


                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      เบิกลด
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">


                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      สถานะภาพบุคคล
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  คำนวณวันรับยศ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>

                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  <a>จำนวนปีครองยศ
                                                                                                                      :
                                                                                                                  </a>
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>

                                                                                                          </div>




                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  จำนวนปีรับราชการ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>

                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  <a>จำนวนวันลา
                                                                                                                      :
                                                                                                                  </a>
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder=" ">
                                                                                                              </div>

                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">


                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      วันทวีคูณ
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">


                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ประเภทการสูญเสีย
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">

                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วัน/เดือน/ปี
                                                                                                                      สูญเสีย
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>

                                                                                                              </div>
                                                                                                          </div>




                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>





                                                                                      </div>
                                                                                      <br>


                                                                                      <!-- ----ส่วนที่2--- -->


                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                                          <div id="headingCollapse34"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse34"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse34"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 3</U>
                                                                                                      ข้อมูลบุคคล(ประวัติข้าราชการ)
                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse34"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse34"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      เลขประจำตัวประชาชน
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="154990044999 ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      เลขประจำตัวผู้เสียภาษี
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="130545621872  ">
                                                                                                                  </div>

                                                                                                              </div>

                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-md-12 col-sm-12">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  สถานภาพสมรส
                                                                                                                  :
                                                                                                                  <div
                                                                                                                      class="card-content">
                                                                                                                      <div
                                                                                                                          class="card-body">
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio8">
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio8">ไม่ระบุ</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio9"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio9"
                                                                                                                                  checked>โสด</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio10"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio10"
                                                                                                                                  checked>สมรส</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio11"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio11"
                                                                                                                                  checked>หย่า</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio12"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio12"
                                                                                                                                  checked>หม้าย</label>
                                                                                                                          </div>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">

                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วัน/เดือน/ปี
                                                                                                                      เกิด
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>

                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วัน/เดือน/ปี
                                                                                                                      เกษียณ
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>

                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      เชื้อชาติ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      สัญชาติ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ศาสนา
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>

                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      อาชีพก่อนรับราชการ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>

                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                                  </div>



                                                                                                              </div>


                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-md-6 col-sm-12">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  กบข./กสจ.
                                                                                                                  :
                                                                                                                  <div
                                                                                                                      class="card-content">
                                                                                                                      <div
                                                                                                                          class="card-body">
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio14">
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio14">ไม่ระบุ</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio15"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio15"
                                                                                                                                  checked>เป็นสมาชิก</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio16"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio16"
                                                                                                                                  checked>ไม่เป็นสมาชิก</label>
                                                                                                                          </div>


                                                                                                                      </div>
                                                                                                                  </div>


                                                                                                              </div>

                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-md-6 col-sm-12">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  ประเภทการเป็นสมาชิก
                                                                                                                  :
                                                                                                                  <div
                                                                                                                      class="card-content">
                                                                                                                      <div
                                                                                                                          class="card-body">
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio16">
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio16">สมาชิกแบบสะสม</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio17"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio17"
                                                                                                                                  checked>สมาชิกแบบไม่สะสม</label>
                                                                                                                          </div>


                                                                                                                      </div>
                                                                                                                  </div>


                                                                                                              </div>


                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">


                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      อีเมล
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">


                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      อีเมลสำรอง
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">


                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      หมายเลขโทรศัพท์ที่ทำงาน
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                          </div>







                                                                                                          <div
                                                                                                              class="col-lg-12 col-md-12">

                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ข้อมูลทะเบียนรา
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;height: 150px;"
                                                                                                                          placeholder="">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>





                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <br>

                                                                                      <!-- -------ส่วนที่3 -->

                                                                                      <div
                                                                                          class="tab-content px-1 pt-1">
                                                                                          <div class="form-actions center"
                                                                                              align="center">
                                                                                              <button type="button"
                                                                                                  class="btn btn-success  round btn-min-width mr-1 mb-1"
                                                                                                  id="submit"
                                                                                                  name="submit"
                                                                                                  onclick="insertOrganizationGroupType()">บันทึก</button>
                                                                                              <button type="button"
                                                                                                  class="btn btn-danger  round btn-min-width mr-1 mb-1"
                                                                                                  id="type-error">ยกเลิก</button>
                                                                                          </div>
                                                                                      </div>


                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                      </div>


                                                                       <!-- ---------------รูปภาพ-------------- -->
                                                                      <div class="tab-pane" id="tab12"
                                                                          aria-labelledby="base-tab12">
                                                                          <div class="row" style="margin-right:15px;">
                                                                              <div class="col-sm-4"
                                                                                  style="position:relative; min-height:1px; padding-right:15px;padding-left:15px;">
                                                                                  <div class="well"
                                                                                      style="min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;">
                                                                                      <!-- <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:50%" alt="Image"position > -->
                                                                                      <!-- <p style="position:absolute;">Text</p> -->
                                                                                      <p>Text</p>
                                                                                      <p>Text</p>
                                                                                      <a
                                                                                          href="/HRIS/Views/ProfileImage/index.php"><i
                                                                                              class="la la-pencil-square-o"
                                                                                              style="color:#0f1733;"></i></a>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="col-sm-4"
                                                                                  style="position:relative; min-height:1px; padding-right:15px;padding-left:15px;">
                                                                                  <div class="well"
                                                                                      style="min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;">
                                                                                      <!-- <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:50%" alt="Image"position > -->
                                                                                      <!-- <p style="position:absolute;">Text</p> -->
                                                                                      <p>Text</p>
                                                                                      <p>Text</p>
                                                                                      <a
                                                                                          href="/HRIS/Views/ProfileImage/index.php"><i
                                                                                              class="la la-pencil-square-o"
                                                                                              style="color:#0f1733;"></i></a>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="col-sm-4"
                                                                                  style="position:relative; min-height:1px; padding-right:15px;padding-left:15px;">
                                                                                  <div class="well"
                                                                                      style="min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;">
                                                                                      <!-- <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:50%" alt="Image"position > -->
                                                                                      <!-- <p style="position:absolute;">Text</p> -->
                                                                                      <p>Text</p>
                                                                                      <p>Text</p>
                                                                                      <a
                                                                                          href="/HRIS/Views/ProfileImage/index.php"><i
                                                                                              class="la la-pencil-square-o"
                                                                                              style="color:#0f1733;"></i></a>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="col-sm-4"
                                                                                  style="position:relative; min-height:1px; padding-right:15px;padding-left:15px;">
                                                                                  <div class="well"
                                                                                      style="min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;">
                                                                                      <!-- <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:50%" alt="Image"position > -->
                                                                                      <!-- <p style="position:absolute;">Text</p> -->
                                                                                      <p>Text</p>
                                                                                      <p>Text</p>
                                                                                      <a
                                                                                          href="/HRIS/Views/ProfileImage/index.php"><i
                                                                                              class="la la-pencil-square-o"
                                                                                              style="color:#0f1733;"></i></a>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="col-sm-4"
                                                                                  style="position:relative; min-height:1px; padding-right:15px;padding-left:15px;">
                                                                                  <div class="well"
                                                                                      style="min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;">
                                                                                      <!-- <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:50%" alt="Image"position > -->
                                                                                      <!-- <p style="position:absolute;">Text</p> -->
                                                                                      <p>Text</p>
                                                                                      <p>Text</p>
                                                                                      <a
                                                                                          href="/HRIS/Views/ProfileImage/index.php"><i
                                                                                              class="la la-pencil-square-o"
                                                                                              style="color:#0f1733;"></i></a>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="col-sm-4"
                                                                                  style="position:relative; min-height:1px; padding-right:15px;padding-left:15px;">
                                                                                  <div class="well"
                                                                                      style="min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;">
                                                                                      <!-- <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:50%" alt="Image"position > -->
                                                                                      <!-- <p style="position:absolute;">Text</p> -->
                                                                                      <p>Text</p>
                                                                                      <p>Text</p>
                                                                                      <a
                                                                                          href="/HRIS/Views/ProfileImage/index.php"><i
                                                                                              class="la la-pencil-square-o"
                                                                                              style="color:#0f1733;"></i></a>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="col-sm-4"
                                                                                  style="position:relative; min-height:1px; padding-right:15px;padding-left:15px;">
                                                                                  <div class="well"
                                                                                      style="min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;">
                                                                                      <!-- <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:50%" alt="Image"position > -->
                                                                                      <!-- <p style="position:absolute;">Text</p> -->
                                                                                      <p>Text</p>
                                                                                      <p>Text</p>
                                                                                      <a
                                                                                          href="/HRIS/Views/ProfileImage/index.php"><i
                                                                                              class="la la-pencil-square-o"
                                                                                              style="color:#0f1733;"></i></a>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="col-sm-4"
                                                                                  style="position:relative; min-height:1px; padding-right:15px;padding-left:15px;">
                                                                                  <div class="well"
                                                                                      style="min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;">
                                                                                      <!-- <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:50%" alt="Image"position > -->
                                                                                      <!-- <p style="position:absolute;">Text</p> -->
                                                                                      <p>Text</p>
                                                                                      <p>Text</p>
                                                                                      <a
                                                                                          href="/HRIS/Views/ProfileImage/index.php"><i
                                                                                              class="la la-pencil-square-o"
                                                                                              style="color:#0f1733;"></i></a>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="col-sm-4"
                                                                                  style="position:relative; min-height:1px; padding-right:15px;padding-left:15px;">
                                                                                  <div class="well"
                                                                                      style="min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;">
                                                                                      <!-- <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:50%" alt="Image"position > -->
                                                                                      <!-- <p style="position:absolute;">Text</p> -->
                                                                                      <p>Text</p>
                                                                                      <p>Text</p>
                                                                                      <a
                                                                                          href="/HRIS/Views/ProfileImage/index.php"><i
                                                                                              class="la la-pencil-square-o"
                                                                                              style="color:#0f1733;"></i></a>
                                                                                  </div>
                                                                              </div>



                                                                          </div>
                                                                      </div>


                                                                        <!-- ---------------การเปลี่ยนชื่อ-------------- -->
                                                                      <div class="tab-pane" id="tab13"
                                                                          aria-labelledby="base-tab13">


                                                                          <a href="./create.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">
                                                                              <span class="la la-plus-circle"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              เพิ่ม
                                                                          </a>
                                                                          <a href="./delete.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">

                                                                              <span class="la la-trash-o"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              ลบ
                                                                          </a>
                                                                          <table
                                                                              class="table table-striped table-borderless table-hover bootstrap-3 ">
                                                                              <thead>
                                                                                  <tr align="center"
                                                                                      style="background-color:#0f1733; color:whitesmoke;">
                                                                                      <th><input type="checkbox"
                                                                                              class="checkAll"
                                                                                              onclick="toggle(this);" />
                                                                                      </th>
                                                                                      <th></th>
                                                                                      <th>ลำดับที่</th>
                                                                                      <th>ชื่อใหม่</th>
                                                                                      <th>นามสกุลใหม่</th>
                                                                                      <th>วันที่มีผล</th>

                                                                                  </tr>
                                                                              </thead>
                                                                              <tbody align="center">
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/hris/Views/Profile_changename/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                          <a href="./delete.php"><i
                                                                                                  class="la la-trash-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                      </td>
                                                                                      <td>1</td>
                                                                                      <td>กิตติศักดิ์</td>
                                                                                      <td>สวนสอน</td>
                                                                                      <td>18 ก.ค. 2560</td>

                                                                                  </tr>
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/hris/Views/Profile_changename/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i>
                                                                                              <a href="./detail.php"><i
                                                                                                      class="la la-trash-o"
                                                                                                      style="color:#0f1733;"></i>
                                                                                      </td>
                                                                                      <td>2</td>
                                                                                      <td>กิตตินันท์</td>
                                                                                      <td>อารมณ์</td>
                                                                                      <td>20 ก.ค. 2560</td>

                                                                                  </tr>
                                                                              </tbody>

                                                                          </table>
                                                                      </div>

                                                                       <!-- ---------------ขึ้นทะเบียนทหาร-------------- -->

                                                                      <div class="tab-pane" id="tab14"
                                                                          aria-labelledby="base-tab14">




                                                                          <div class="container">
                                                                              <div class="card-content">


                                                                                  <div class="card-body">

                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">


                                                                                          <div id="headingCollapse35"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse35"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse35"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 1</U>
                                                                                                      การขึ้นทะเบียนทหาร
                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse35"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse35"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">

                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วันขึ้นทะเบียนทหาร
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  เครื่องหมาย
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="ทร.2552  น.ว.965">
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      ขึ้นทะเบียนเพราะ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 100%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>


                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>






                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วันล้วงงงงง
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วันร้องงงงงงง
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      วันปลดประจำการ
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <br>



                                                                                      <!-- ----ส่วนที่1------      -->

                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                                          <div id="headingCollapse36"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse36"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse36"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 2</U>
                                                                                                      ปลดเป็นทหารกองหนุนประเภท
                                                                                                      2
                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse36"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse36"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">

                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      กองหนุนชั้นที่1
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      กองหนุนชั้นที่
                                                                                                                      2
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      กองหนุนชั้นที่
                                                                                                                      3
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="input-group">
                                                                                                                      พ้นราชการ
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          type="text"
                                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                                          aria-describedby="button-addon4">
                                                                                                                      <div
                                                                                                                          class="input-group-append">
                                                                                                                          <button
                                                                                                                              class="btn btn-primary"
                                                                                                                              type="button"
                                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>





                                                                                      </div>
                                                                                      <br>


                                                                                      <!-- ----ส่วนที่2--- -->


                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                                          <div id="headingCollapse37"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse37"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse37"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 3</U>
                                                                                                      ลักษณะร่างกาย

                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse37"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse37"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">
                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      กลุ่มเลือด
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 100%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ส่วนสูง
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      น้ำหนัก
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      รอบอกหายใจออก
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      รอบอกหายใจเข้า
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      รอบเอว
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ขนาดเสื้อ
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ขนาดกางเกง
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ขนาดรองเท้า
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      รูปร่าง
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      สีผิว
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ตำหนิ/แผลเป็น
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder=" ">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>










                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <br>

                                                                                      <!-- -------ส่วนที่3 -->

                                                                                      <div
                                                                                          class="tab-content px-1 pt-1">
                                                                                          <div class="form-actions center"
                                                                                              align="center">
                                                                                              <button type="button"
                                                                                                  class="btn btn-success  round btn-min-width mr-1 mb-1"
                                                                                                  id="submit"
                                                                                                  name="submit"
                                                                                                  onclick="insertOrganizationGroupType()">บันทึก</button>
                                                                                              <button type="button"
                                                                                                  class="btn btn-danger  round btn-min-width mr-1 mb-1"
                                                                                                  id="type-error">ยกเลิก</button>
                                                                                          </div>
                                                                                      </div>


                                                                                  </div>
                                                                              </div>
                                                                          </div>


                                                                          <br>









                                                                      </div>

                                                                       <!-- ---------------เหล่าทหาร-------------- -->

                                                                      <div class="tab-pane" id="tab15"
                                                                          aria-labelledby="base-tab15">


                                                                          <a href="./create.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">
                                                                              <span class="la la-plus-circle"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              เพิ่ม
                                                                          </a>
                                                                          <a href="./delete.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">

                                                                              <span class="la la-trash-o"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              ลบ
                                                                          </a>
                                                                          <table
                                                                              class="table table-striped table-borderless table-hover bootstrap-3 ">
                                                                              <thead>
                                                                                  <tr align="center"
                                                                                      style="background-color:#0f1733; color:whitesmoke;">
                                                                                      <th><input type="checkbox"
                                                                                              class="checkAll"
                                                                                              onclick="toggle(this);" />
                                                                                      </th>
                                                                                      <th></th>
                                                                                      <th>ลำดับที่</th>
                                                                                      <th>เหล่า</th>
                                                                                      <th>วันที่มีผล</th>
                                                                                      <th>คำสั่ง</th>
                                                                                      <th>เลขที่คำสั่ง</th>
                                                                                      <th>ลง</th>



                                                                                  </tr>
                                                                              </thead>
                                                                              <tbody align="center">
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Corps_soldier/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                          <a href="./delete.php"><i
                                                                                                  class="la la-trash-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                      </td>
                                                                                      <td>1</td>
                                                                                      <td>นบ.</td>
                                                                                      <td>18 ก.ค. 2560</td>
                                                                                      <td>กห.</td>
                                                                                      <td>104/51</td>
                                                                                      <td>18 ก.ค. 2560</td>

                                                                                  </tr>
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Corps_soldier/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i>
                                                                                              <a href="./detail.php"><i
                                                                                                      class="la la-trash-o"
                                                                                                      style="color:#0f1733;"></i>
                                                                                      </td>
                                                                                      <td>2</td>
                                                                                      <td>นบ.</td>
                                                                                      <td>18 ก.ค. 2560</td>
                                                                                      <td>กห.</td>
                                                                                      <td>104/51</td>
                                                                                      <td>18 ก.ค. 2560</td>

                                                                                  </tr>
                                                                              </tbody>

                                                                          </table>



                                                                      </div>
                                                                       <!-- ---------------บิดา-มารดาบรรพบุรุษ-------------- -->

                                                                      <div class="tab-pane" id="tab16"
                                                                          aria-labelledby="base-tab16">


                                                                          <div class="container">
                                                                              <div class="card-content">


                                                                                  <div class="card-body">

                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">


                                                                                          <div id="headingCollapse38"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse38"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse38"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 1</U>
                                                                                                      ข้อมูลบิดา
                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse38"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse38"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">




                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  หมายเลขประจำตัวราชการ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      ยศศศศศศศศ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>






                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  เลขประจำตัวประชาชน
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      คำนำหน้าชื่อ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 100%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>

                                                                                                                      </select>


                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  ชื่อ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  นามสกุล
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      เชื้อชาติ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 100%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>

                                                                                                                      </select>


                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      สัญชาติ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 100%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>

                                                                                                                      </select>


                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>




                                                                                                          <div
                                                                                                              class="col-md-12 col-sm-12">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  สถานภาพ
                                                                                                                  :
                                                                                                                  <div
                                                                                                                      class="card-content">
                                                                                                                      <div
                                                                                                                          class="card-body">
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio20">
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio20">สมรส</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio21"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio21"
                                                                                                                                  checked>หย่า</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio22"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio22"
                                                                                                                                  checked>เสียชีวิต</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio23"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio23"
                                                                                                                                  checked>สูญหาย</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio24"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio24"
                                                                                                                                  checked>จดทะเบียนรับรองบุตร</label>
                                                                                                                          </div>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>




                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <br>



                                                                                      <!-- ----ส่วนที่1------      -->

                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                                          <div id="headingCollapse39"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse39"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse39"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 2</U>
                                                                                                      ข้อมูลมารดา
                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse39"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse39"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">




                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  หมายเลขประจำตัวราชการ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      ยศศศศศศศศ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>






                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  เลขประจำตัวประชาชน
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      คำนำหน้าชื่อ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 100%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>

                                                                                                                      </select>


                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  ชื่อ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  นามสกุล
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      เชื้อชาติ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 100%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>

                                                                                                                      </select>


                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      สัญชาติ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 100%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>

                                                                                                                      </select>


                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>




                                                                                                          <div
                                                                                                              class="col-md-12 col-sm-12">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  สถานภาพ
                                                                                                                  :
                                                                                                                  <div
                                                                                                                      class="card-content">
                                                                                                                      <div
                                                                                                                          class="card-body">
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio20">
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio20">สมรส</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio21"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio21"
                                                                                                                                  checked>หย่า</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio22"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio22"
                                                                                                                                  checked>เสียชีวิต</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio23"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio23"
                                                                                                                                  checked>สูญหาย</label>
                                                                                                                          </div>
                                                                                                                          <div
                                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                              <input
                                                                                                                                  type="radio"
                                                                                                                                  class="custom-control-input"
                                                                                                                                  name="colorRadio"
                                                                                                                                  id="radio24"
                                                                                                                                  checked>
                                                                                                                              <label
                                                                                                                                  class="custom-control-label"
                                                                                                                                  for="radio24"
                                                                                                                                  checked>จดทะเบียนรับรองบุตร</label>
                                                                                                                          </div>
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>




                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>





                                                                                      </div>
                                                                                      <br>


                                                                                      <!-- ----ส่วนที่2--- -->


                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                                          <div id="headingCollapse40"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse40"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse40"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 3</U>
                                                                                                      ข้อมูลปู่

                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse40"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse40"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">


                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  หมายเลขประจำตัวราชการ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      ยศศศศศศศศ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>





                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  คำนำหน้าชื่อ
                                                                                                                  :
                                                                                                                  <select
                                                                                                                      class="select2 form-control"
                                                                                                                      style="width: 100%;">
                                                                                                                      <optgroup
                                                                                                                          label="สัญญาบัตร">
                                                                                                                          <option
                                                                                                                              value="AK">
                                                                                                                              เลือก
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศเอก/พล.อ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศโท/พล.อ.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศตรี/พล.อ.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศเอก/น.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศโท/น.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศตรี/น.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศเอก/ร.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศโท/ร.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศตรี/ร.ต.
                                                                                                                          </option>
                                                                                                                      </optgroup>
                                                                                                                      <optgroup
                                                                                                                          label="ชั้นประทวน">
                                                                                                                          <option
                                                                                                                              value="CA">
                                                                                                                              พันจ่าอากาศเอก
                                                                                                                              พิเศษ/พ.อ.อ.(พ.)
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="NV">
                                                                                                                              พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="OR">
                                                                                                                              พันจ่าอากาศโท/พ.อ.ท
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="NV">
                                                                                                                              จ่าอากาศเอก/จ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="OR">
                                                                                                                              จ่าอากาศโท/จ.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              จ่าอากาศตรี/จ.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              พลทหาร/พลฯ
                                                                                                                          </option>
                                                                                                                  </select>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  ชื่อ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  นามสกุล
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>






                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <br>

                                                                                      <!-- -------ส่วนที่3 -->



                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                                          <div id="headingCollapse41"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse41"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse41"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 4</U>
                                                                                                      ข้อมูลย่า

                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse41"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse41"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">


                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  หมายเลขประจำตัวราชการ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      ยศศศศศศศศ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>





                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  คำนำหน้าชื่อ
                                                                                                                  :
                                                                                                                  <select
                                                                                                                      class="select2 form-control"
                                                                                                                      style="width: 100%;">
                                                                                                                      <optgroup
                                                                                                                          label="สัญญาบัตร">
                                                                                                                          <option
                                                                                                                              value="AK">
                                                                                                                              เลือก
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศเอก/พล.อ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศโท/พล.อ.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศตรี/พล.อ.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศเอก/น.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศโท/น.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศตรี/น.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศเอก/ร.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศโท/ร.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศตรี/ร.ต.
                                                                                                                          </option>
                                                                                                                      </optgroup>
                                                                                                                      <optgroup
                                                                                                                          label="ชั้นประทวน">
                                                                                                                          <option
                                                                                                                              value="CA">
                                                                                                                              พันจ่าอากาศเอก
                                                                                                                              พิเศษ/พ.อ.อ.(พ.)
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="NV">
                                                                                                                              พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="OR">
                                                                                                                              พันจ่าอากาศโท/พ.อ.ท
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="NV">
                                                                                                                              จ่าอากาศเอก/จ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="OR">
                                                                                                                              จ่าอากาศโท/จ.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              จ่าอากาศตรี/จ.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              พลทหาร/พลฯ
                                                                                                                          </option>
                                                                                                                  </select>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  ชื่อ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  นามสกุล
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>



                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <br>

                                                                                      <!-- -------ส่วนที่4 -->



                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                                          <div id="headingCollapse42"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse42"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse42"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 4</U>
                                                                                                      ข้อมูลตา

                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse42"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse42"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">

                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  หมายเลขประจำตัวราชการ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      ยศศศศศศศศ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>





                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  คำนำหน้าชื่อ
                                                                                                                  :
                                                                                                                  <select
                                                                                                                      class="select2 form-control"
                                                                                                                      style="width: 100%;">
                                                                                                                      <optgroup
                                                                                                                          label="สัญญาบัตร">
                                                                                                                          <option
                                                                                                                              value="AK">
                                                                                                                              เลือก
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศเอก/พล.อ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศโท/พล.อ.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศตรี/พล.อ.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศเอก/น.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศโท/น.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศตรี/น.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศเอก/ร.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศโท/ร.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศตรี/ร.ต.
                                                                                                                          </option>
                                                                                                                      </optgroup>
                                                                                                                      <optgroup
                                                                                                                          label="ชั้นประทวน">
                                                                                                                          <option
                                                                                                                              value="CA">
                                                                                                                              พันจ่าอากาศเอก
                                                                                                                              พิเศษ/พ.อ.อ.(พ.)
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="NV">
                                                                                                                              พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="OR">
                                                                                                                              พันจ่าอากาศโท/พ.อ.ท
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="NV">
                                                                                                                              จ่าอากาศเอก/จ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="OR">
                                                                                                                              จ่าอากาศโท/จ.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              จ่าอากาศตรี/จ.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              พลทหาร/พลฯ
                                                                                                                          </option>
                                                                                                                  </select>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  ชื่อ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  นามสกุล
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>




                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <br>

                                                                                      <!-- -------ส่วนที่ 5 -->



                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                                          <div id="headingCollapse43"
                                                                                              class="card-header bg-success">
                                                                                              <a data-toggle="collapse"
                                                                                                  href="#collapse43"
                                                                                                  aria-expanded="true"
                                                                                                  aria-controls="collapse43"
                                                                                                  class="card-title lead white">
                                                                                                  <h6><U>ส่วนที่ 4</U>
                                                                                                      ข้อมูลยาย

                                                                                                  </h6>
                                                                                              </a>
                                                                                          </div>
                                                                                          <div id="collapse43"
                                                                                              role="tabpanel"
                                                                                              aria-labelledby="headingCollapse43"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">

                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  หมายเลขประจำตัวราชการ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-lg-6 col-md-12">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div class="card-body"
                                                                                                                      id="noncomm_and_comm">
                                                                                                                      ยศศศศศศศศ
                                                                                                                      :
                                                                                                                      <select
                                                                                                                          class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
                                                                                                                              </option>
                                                                                                                      </select>
                                                                                                                      <a
                                                                                                                          href="../Organizations/create.php">
                                                                                                                          <i class="la la-plus-circle"
                                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>





                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div class="card-body"
                                                                                                                  id="File_number">
                                                                                                                  คำนำหน้าชื่อ
                                                                                                                  :
                                                                                                                  <select
                                                                                                                      class="select2 form-control"
                                                                                                                      style="width: 100%;">
                                                                                                                      <optgroup
                                                                                                                          label="สัญญาบัตร">
                                                                                                                          <option
                                                                                                                              value="AK">
                                                                                                                              เลือก
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศเอก/พล.อ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศโท/พล.อ.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศตรี/พล.อ.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศเอก/น.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศโท/น.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              นาวาอากาศตรี/น.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศเอก/ร.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศโท/ร.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="HI">
                                                                                                                              เรืออากาศตรี/ร.ต.
                                                                                                                          </option>
                                                                                                                      </optgroup>
                                                                                                                      <optgroup
                                                                                                                          label="ชั้นประทวน">
                                                                                                                          <option
                                                                                                                              value="CA">
                                                                                                                              พันจ่าอากาศเอก
                                                                                                                              พิเศษ/พ.อ.อ.(พ.)
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="NV">
                                                                                                                              พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="OR">
                                                                                                                              พันจ่าอากาศโท/พ.อ.ท
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="NV">
                                                                                                                              จ่าอากาศเอก/จ.อ.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="OR">
                                                                                                                              จ่าอากาศโท/จ.ท.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              จ่าอากาศตรี/จ.ต.
                                                                                                                          </option>
                                                                                                                          <option
                                                                                                                              value="WA">
                                                                                                                              พลทหาร/พลฯ
                                                                                                                          </option>
                                                                                                                  </select>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div
                                                                                                                  class="card-body">
                                                                                                                  ชื่อ
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class="col-md-6">
                                                                                                              <div
                                                                                                                  class="card-body">
                                                                                                                  นามสกุล
                                                                                                                  :
                                                                                                                  <input
                                                                                                                      class="input form-control"
                                                                                                                      style="width: 100%;"
                                                                                                                      placeholder="">
                                                                                                              </div>
                                                                                                          </div>




                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <br>

                                                                                      <!-- -------ส่วนที่ 6 -->


                                                                                      <div
                                                                                          class="tab-content px-1 pt-1">
                                                                                          <div class="form-actions center"
                                                                                              align="center">
                                                                                              <button type="button"
                                                                                                  class="btn btn-success  round btn-min-width mr-1 mb-1"
                                                                                                  id="submit"
                                                                                                  name="submit"
                                                                                                  onclick="insertOrganizationGroupType()">บันทึก</button>
                                                                                              <button type="button"
                                                                                                  class="btn btn-danger  round btn-min-width mr-1 mb-1"
                                                                                                  id="type-error">ยกเลิก</button>
                                                                                          </div>
                                                                                      </div>


                                                                                  </div>
                                                                              </div>
                                                                          </div>


                                                                      </div>

                                                                       <!-- ---------------คู่สมรส-------------- -->

                                                                      <div class="tab-pane" id="tab17"
                                                                          aria-labelledby="base-tab17">


                                                                          <a href="./create.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">
                                                                              <span class="la la-plus-circle"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              เพิ่ม
                                                                          </a>
                                                                          <a href="./delete.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">

                                                                              <span class="la la-trash-o"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              ลบ
                                                                          </a>
                                                                          <table
                                                                              class="table table-striped table-borderless table-hover bootstrap-3 ">
                                                                              <thead>
                                                                                  <tr align="center"
                                                                                      style="background-color:#0f1733; color:whitesmoke;">
                                                                                      <th><input type="checkbox"
                                                                                              class="checkAll"
                                                                                              onclick="toggle(this);" />
                                                                                      </th>
                                                                                      <th></th>
                                                                                      <th>ลำดับที่</th>
                                                                                      <th>ยศ</th>
                                                                                      <th>คำนำหน้าชื่อ</th>
                                                                                      <th>ชื่อ-สกุล</th>
                                                                                      <th>สกุลเดิม</th>
                                                                                      <th>วันเดือนปีจดทะเบียนสมรส</th>
                                                                                      <th>สถานภาพ</th>

                                                                                  </tr>
                                                                              </thead>
                                                                              <tbody align="center">
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Spouse/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                          <a href="./delete.php"><i
                                                                                                  class="la la-trash-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                      </td>
                                                                                      <td>1</td>
                                                                                      <td>พล.อ.พ.หญิง</td>
                                                                                      <td>-</td>
                                                                                      <td>พิรุฬห์ลักษณ์ โภคาสุข</td>
                                                                                      <td>ข่มอาวุธ</td>
                                                                                      <td>11 พ.ค. 2562</td>
                                                                                      <td>สมรส</td>

                                                                                  </tr>
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Spouse/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i>
                                                                                              <a href="./detail.php"><i
                                                                                                      class="la la-trash-o"
                                                                                                      style="color:#0f1733;"></i>
                                                                                      </td>
                                                                                      <td>2</td>
                                                                                      <td>พล.อ.พ.หญิง</td>
                                                                                      <td>-</td>
                                                                                      <td>พิรุฬห์ลักษณ์ โภคาสุข</td>
                                                                                      <td>ข่มอาวุธ</td>
                                                                                      <td>11 พ.ค. 2562</td>
                                                                                      <td>หย่า</td>

                                                                                  </tr>
                                                                              </tbody>

                                                                          </table>



                                                                      </div>

                                                                       <!-- ---------------บุตร-ธิดา-------------- -->
                                                                      <div class="tab-pane" id="tab18"
                                                                          aria-labelledby="base-tab18">

                                                                          <a href="./create.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">
                                                                              <span class="la la-plus-circle"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              เพิ่ม
                                                                          </a>
                                                                          <a href="./delete.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">

                                                                              <span class="la la-trash-o"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              ลบ
                                                                          </a>
                                                                          <table
                                                                              class="table table-striped table-borderless table-hover bootstrap-3 ">
                                                                              <thead>
                                                                                  <tr align="center"
                                                                                      style="background-color:#0f1733; color:whitesmoke;">
                                                                                      <th><input type="checkbox"
                                                                                              class="checkAll"
                                                                                              onclick="toggle(this);" />
                                                                                      </th>
                                                                                      <th></th>
                                                                                      <th>ลำดับที่</th>
                                                                                      <th>ยศ</th>
                                                                                      <th>คำนำหน้าชื่อ</th>
                                                                                      <th>ชื่อ</th>
                                                                                      <th>นามสกุล</th>
                                                                                      <th>วันเดือนปีเกิด</th>


                                                                                  </tr>
                                                                              </thead>
                                                                              <tbody align="center">
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Child/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                          <a href="./delete.php"><i
                                                                                                  class="la la-trash-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                      </td>
                                                                                      <td>1</td>
                                                                                      <td>พล.อ.พ.หญิง</td>
                                                                                      <td>นางสาว</td>
                                                                                      <td>พิรุฬห์ลักษณ์ โภคาสุข</td>
                                                                                      <td>โภคาสุข</td>
                                                                                      <td>11 พ.ค. 2562</td>


                                                                                  </tr>
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Child/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i>
                                                                                              <a href="./detail.php"><i
                                                                                                      class="la la-trash-o"
                                                                                                      style="color:#0f1733;"></i>
                                                                                      </td>
                                                                                      <td>2</td>
                                                                                      <td>พล.อ.พ.หญิง</td>
                                                                                      <td>นางสาว</td>
                                                                                      <td>พิรุฬห์ลักษณ์ โภคาสุข</td>
                                                                                      <td>โภคาสุข</td>
                                                                                      <td>11 พ.ค. 2562</td>


                                                                                  </tr>
                                                                              </tbody>

                                                                          </table>

                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
      </div>

      </div>
      </div>
      </div>
      </div>
  </section>


  <script src=" http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
  </script>
  <script src="../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
  <script type="text/javascript">
$(document).ready(function() {
    console.log("ready");
    change_autorefreshdiv();
});

function change_autorefreshdiv() {
    // $('#prefixPage').addClass('active');
}

function toggle(source) {
    var checkboxes = document.querySelectorAll('.checkAll');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
  </script>

  <!-- select2 -->
  <script src="../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
  <!-- select2 -->

  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>


  <!-- BEGIN PAGE LEVEL JS-->
  <!-- <script type="text/javascript" src="../../app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script> -->
  <script src="../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <!-- footer -->
  <?php include '../include/footer.php'; ?>