  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>

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
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- select2 -->
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/selects/select2.min.css">
  <section>
      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-12 mb-2">
                      <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                      <h3 class="content-header-title">ข้อมูลประวัติราชการ</h3>
                  </div>
              </div>
              <div class="content-body">
                  <!-- Bootstrap 3 table -->
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
                                                  <li class="breadcrumb-item active" aria-current="page">ข้อมูลตำแหน่ง
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
                                                          <li><a data-action="collapse"><i class="ft-minus"></i></a>
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


                                          <div class="container">
                                              <div class="card-content">
                                                  <div class="card-body">
                                                      <div class="card collapse-icon accordion-icon-rotate active">
                                                          <div id="headingCollapse47" class="card-header bg-success">
                                                              <a data-toggle="collapse" href="#collapse47"
                                                                  aria-expanded="true" aria-controls="collapse47"
                                                                  class="card-title lead white">
                                                                  <h6><U>ส่วนที่ 1</U>
                                                                      ข้อมูลบุตร-ธิดา
                                                                  </h6>
                                                              </a>
                                                          </div>
                                                          <div id="collapse47" role="tabpanel"
                                                              aria-labelledby="headingCollapse47"
                                                              class="card-collapse collapse show" aria-expanded="true">
                                                              <div class="card-content">
                                                                  <div class="card-body">
                                                                      <div class="row match-height">



                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  ลำดับคู่สมรส
                                                                                  :
                                                                                  <input class="input form-control"
                                                                                      style="width: 100%;"
                                                                                      placeholder="">
                                                                              </div>
                                                                          </div>


                                                                          <div class="col-lg-6 col-md-12">


                                                                              <div class="card-body">
                                                                                  เพศ :


                                                                                  <div class="card-body">
                                                                                      <div
                                                                                          class="d-inline-block custom-control custom-radio mr-1">
                                                                                          <input type="radio"
                                                                                              class="custom-control-input"
                                                                                              name="colorRadio"
                                                                                              id="radio1">
                                                                                          <label
                                                                                              class="custom-control-label"
                                                                                              for="radio1">เพศชาย</label>
                                                                                      </div>


                                                                                      <div
                                                                                          class="d-inline-block custom-control custom-radio mr-1">
                                                                                          <input type="radio"
                                                                                              class="custom-control-input"
                                                                                              name="colorRadio"
                                                                                              id="radio2" checked>
                                                                                          <label
                                                                                              class="custom-control-label"
                                                                                              for="radio2"
                                                                                              checked>เพศหญิง</label>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>

                                                                          </div>

                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  หมายเลขประจำตัวราชการ
                                                                                  :
                                                                                  <input class="input form-control"
                                                                                      style="width: 100%;"
                                                                                      placeholder="">
                                                                              </div>
                                                                          </div>

                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  ยศศศศศ
                                                                                  :
                                                                                  <select class="select2 form-control"
                                                                                      style="width: 100%;">
                                                                                      <optgroup label="สัญญาบัตร">
                                                                                          <option value="AK">
                                                                                              เลือก
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศเอก/พล.อ.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศโท/พล.อ.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศตรี/พล.อ.ต.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศเอก/น.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศโท/น.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศตรี/น.ต.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศเอก/ร.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศโท/ร.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศตรี/ร.ต.
                                                                                          </option>
                                                                                      </optgroup>
                                                                                      <optgroup label="ชั้นประทวน">
                                                                                          <option value="CA">
                                                                                              พันจ่าอากาศเอก
                                                                                              พิเศษ/พ.อ.อ.(พ.)
                                                                                          </option>
                                                                                          <option value="NV">
                                                                                              พันจ่าอากาศเอก/พ.อ.อ.
                                                                                          </option>
                                                                                          <option value="OR">
                                                                                              พันจ่าอากาศโท/พ.อ.ท
                                                                                          </option>
                                                                                          <option value="WA">
                                                                                              พันจ่าอากาศตรี/พ.อ.ต
                                                                                          </option>
                                                                                          <option value="NV">
                                                                                              จ่าอากาศเอก/จ.อ.
                                                                                          </option>
                                                                                          <option value="OR">
                                                                                              จ่าอากาศโท/จ.ท.
                                                                                          </option>
                                                                                          <option value="WA">
                                                                                              จ่าอากาศตรี/จ.ต.
                                                                                          </option>
                                                                                          <option value="WA">
                                                                                              พลทหาร/พลฯ
                                                                                          </option>
                                                                                  </select>
                                                                              </div>
                                                                          </div>







                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  เลขประจำตัวประชาชน
                                                                                  :
                                                                                  <input class="input form-control"
                                                                                      style="width: 100%;"
                                                                                      placeholder="">
                                                                              </div>
                                                                          </div>


                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  คำนำหน้าชื่อ
                                                                                  :
                                                                                  <select class="select2 form-control"
                                                                                      style="width: 100%;">
                                                                                      <optgroup label="สัญญาบัตร">
                                                                                          <option value="AK">
                                                                                              เลือก
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศเอก/พล.อ.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศโท/พล.อ.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศตรี/พล.อ.ต.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศเอก/น.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศโท/น.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศตรี/น.ต.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศเอก/ร.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศโท/ร.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศตรี/ร.ต.
                                                                                          </option>
                                                                                      </optgroup>
                                                                                      <optgroup label="ชั้นประทวน">
                                                                                          <option value="CA">
                                                                                              พันจ่าอากาศเอก
                                                                                              พิเศษ/พ.อ.อ.(พ.)
                                                                                          </option>
                                                                                          <option value="NV">
                                                                                              พันจ่าอากาศเอก/พ.อ.อ.
                                                                                          </option>
                                                                                          <option value="OR">
                                                                                              พันจ่าอากาศโท/พ.อ.ท
                                                                                          </option>
                                                                                          <option value="WA">
                                                                                              พันจ่าอากาศตรี/พ.อ.ต
                                                                                          </option>
                                                                                          <option value="NV">
                                                                                              จ่าอากาศเอก/จ.อ.
                                                                                          </option>
                                                                                          <option value="OR">
                                                                                              จ่าอากาศโท/จ.ท.
                                                                                          </option>
                                                                                          <option value="WA">
                                                                                              จ่าอากาศตรี/จ.ต.
                                                                                          </option>
                                                                                          <option value="WA">
                                                                                              พลทหาร/พลฯ
                                                                                          </option>
                                                                                  </select>
                                                                              </div>
                                                                          </div>


                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  ชื่อ
                                                                                  :
                                                                                  <input class="input form-control"
                                                                                      style="width: 100%;"
                                                                                      placeholder="">
                                                                              </div>
                                                                          </div>


                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  นามสกุล
                                                                                  :
                                                                                  <input class="input form-control"
                                                                                      style="width: 100%;"
                                                                                      placeholder="">
                                                                              </div>
                                                                          </div>

                                                                          <div class="col-lg-6 col-md-12">


                                                                              <div class="card-body">
                                                                                  สถานภาพบุตร-ธิดา :


                                                                                  <div class="card-body">
                                                                                      <div
                                                                                          class="d-inline-block custom-control custom-radio mr-1">
                                                                                          <input type="radio"
                                                                                              class="custom-control-input"
                                                                                              name="colorRadio"
                                                                                              id="radio50">
                                                                                          <label
                                                                                              class="custom-control-label"
                                                                                              for="radio50">บุตร</label>
                                                                                      </div>


                                                                                      <div
                                                                                          class="d-inline-block custom-control custom-radio mr-1">
                                                                                          <input type="radio"
                                                                                              class="custom-control-input"
                                                                                              name="colorRadio"
                                                                                              id="radio51" checked>
                                                                                          <label
                                                                                              class="custom-control-label"
                                                                                              for="radio51"
                                                                                              checked>รับรองบุตร</label>
                                                                                      </div>

                                                                                      <div
                                                                                          class="d-inline-block custom-control custom-radio mr-1">
                                                                                          <input type="radio"
                                                                                              class="custom-control-input"
                                                                                              name="colorRadio"
                                                                                              id="radio52" checked>
                                                                                          <label
                                                                                              class="custom-control-label"
                                                                                              for="radio52"
                                                                                              checked>บุตรบุญธรรม</label>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>

                                                                          </div>

                                                                          <div class="col-lg-6 col-md-12">
                                                                          </div>






                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  หลักฐานการเกิด
                                                                                  :
                                                                                  <input class="input form-control"
                                                                                      style="width: 100%;"
                                                                                      placeholder="">
                                                                              </div>
                                                                          </div>


                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  เลขที่
                                                                                  :
                                                                                  <input class="input form-control"
                                                                                      style="width: 100%;"
                                                                                      placeholder="">
                                                                              </div>
                                                                          </div>


                                                                          <div class="col-lg-6 ">
                                                                              <div class="card-block">
                                                                                  <div class="input-group">
                                                                                      ลงวันที่
                                                                                      .
                                                                                      :
                                                                                      <input type="text"
                                                                                          class="form-control pickadate-disable-dates"
                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                          aria-describedby="button-addon4">
                                                                                      <div class="input-group-append">
                                                                                          <button
                                                                                              class="btn btn-primary"
                                                                                              type="button"
                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                  class="la la-calendar-o"></i></button>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>





                                                                          <div class="col-md-3">
                                                                              <div class="card-body">
                                                                                  จังหวัด
                                                                                  :
                                                                                  <select class="select2 form-control"
                                                                                      style="width: 100%;">
                                                                                      <optgroup label="สัญญาบัตร">
                                                                                          <option value="AK">
                                                                                              เลือก
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศเอก/พล.อ.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศโท/พล.อ.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศตรี/พล.อ.ต.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศเอก/น.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศโท/น.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศตรี/น.ต.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศเอก/ร.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศโท/ร.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศตรี/ร.ต.
                                                                                          </option>
                                                                                      </optgroup>

                                                                                  </select>
                                                                              </div>
                                                                          </div>



                                                                          <div class="col-md-3">
                                                                              <div class="card-body">
                                                                                  อำเภอ
                                                                                  :
                                                                                  <select class="select2 form-control"
                                                                                      style="width: 100%;">
                                                                                      <optgroup label="สัญญาบัตร">
                                                                                          <option value="AK">
                                                                                              เลือก
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศเอก/พล.อ.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศโท/พล.อ.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศตรี/พล.อ.ต.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศเอก/น.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศโท/น.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศตรี/น.ต.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศเอก/ร.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศโท/ร.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศตรี/ร.ต.
                                                                                          </option>
                                                                                      </optgroup>

                                                                                  </select>
                                                                              </div>
                                                                          </div>




                                                                          <div class="col-lg-6 ">
                                                                              <div class="card-block">
                                                                                  <div class="input-group">
                                                                                      วันเดือนปีเกิด
                                                                                      .
                                                                                      :
                                                                                      <input type="text"
                                                                                          class="form-control pickadate-disable-dates"
                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                          aria-describedby="button-addon4">
                                                                                      <div class="input-group-append">
                                                                                          <button
                                                                                              class="btn btn-primary"
                                                                                              type="button"
                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                  class="la la-calendar-o"></i></button>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>





                                                                          <div class="col-md-12 col-sm-12">
                                                                              <div class="card-body ">
                                                                                  สถานภาพ
                                                                                  :
                                                                                  <div class="card-content">
                                                                                      <div class="card-body">
                                                                                          <div
                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                              <input type="radio"
                                                                                                  class="custom-control-input"
                                                                                                  name="colorRadio"
                                                                                                  id="radio53">
                                                                                              <label
                                                                                                  class="custom-control-label"
                                                                                                  for="radi53">ปกติ</label>
                                                                                          </div>
                                                                                          <div
                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                              <input type="radio"
                                                                                                  class="custom-control-input"
                                                                                                  name="colorRadio"
                                                                                                  id="radio54" checked>
                                                                                              <label
                                                                                                  class="custom-control-label"
                                                                                                  for="radio54"
                                                                                                  checked>สูญเสีย</label>
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

                                                      <div class="card collapse-icon accordion-icon-rotate active">
                                                          <div id="headingCollapse48" class="card-header bg-success">
                                                              <a data-toggle="collapse" href="#collapse48"
                                                                  aria-expanded="true" aria-controls="collapse48"
                                                                  class="card-title lead white">
                                                                  <h6><U>ส่วนที่ 2</U>
                                                                      ข้อมูลบิดา
                                                                  </h6>
                                                              </a>
                                                          </div>
                                                          <div id="collapse48" role="tabpanel"
                                                              aria-labelledby="headingCollapse48"
                                                              class="card-collapse collapse show" aria-expanded="true">
                                                              <div class="card-content">
                                                                  <div class="card-body">
                                                                      <div class="row match-height">


                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  หมายเลขประจำตัวราชการ
                                                                                  :
                                                                                  <input class="input form-control"
                                                                                      style="width: 100%;"
                                                                                      placeholder="">
                                                                              </div>
                                                                          </div>

                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  ยศศศศศ
                                                                                  :
                                                                                  <select class="select2 form-control"
                                                                                      style="width: 100%;">
                                                                                      <optgroup label="สัญญาบัตร">
                                                                                          <option value="AK">
                                                                                              เลือก
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศเอก/พล.อ.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศโท/พล.อ.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศตรี/พล.อ.ต.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศเอก/น.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศโท/น.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              นาวาอากาศตรี/น.ต.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศเอก/ร.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศโท/ร.ท.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              เรืออากาศตรี/ร.ต.
                                                                                          </option>
                                                                                      </optgroup>
                                                                                      <optgroup label="ชั้นประทวน">
                                                                                          <option value="CA">
                                                                                              พันจ่าอากาศเอก
                                                                                              พิเศษ/พ.อ.อ.(พ.)
                                                                                          </option>
                                                                                          <option value="NV">
                                                                                              พันจ่าอากาศเอก/พ.อ.อ.
                                                                                          </option>
                                                                                          <option value="OR">
                                                                                              พันจ่าอากาศโท/พ.อ.ท
                                                                                          </option>
                                                                                          <option value="WA">
                                                                                              พันจ่าอากาศตรี/พ.อ.ต
                                                                                          </option>
                                                                                          <option value="NV">
                                                                                              จ่าอากาศเอก/จ.อ.
                                                                                          </option>
                                                                                          <option value="OR">
                                                                                              จ่าอากาศโท/จ.ท.
                                                                                          </option>
                                                                                          <option value="WA">
                                                                                              จ่าอากาศตรี/จ.ต.
                                                                                          </option>
                                                                                          <option value="WA">
                                                                                              พลทหาร/พลฯ
                                                                                          </option>
                                                                                  </select>
                                                                              </div>
                                                                          </div>


                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  หมายเลขประชาชน
                                                                                  :
                                                                                  <input class="input form-control"
                                                                                      style="width: 100%;"
                                                                                      placeholder="">
                                                                              </div>
                                                                          </div>


                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  คำนำหน้าชื่อ
                                                                                  :
                                                                                  <select class="select2 form-control"
                                                                                      style="width: 100%;">
                                                                                      <optgroup label="สัญญาบัตร">
                                                                                          <option value="AK">
                                                                                              เลือก
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศเอก/พล.อ.อ.
                                                                                          </option>
                                                                                          <option value="HI">
                                                                                              พลอากาศโท/พล.อ.ท.
                                                                                          </option>

                                                                                      </optgroup>

                                                                                  </select>
                                                                              </div>
                                                                          </div>


                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  ชื่อ
                                                                                  :
                                                                                  <input class="input form-control"
                                                                                      style="width: 100%;"
                                                                                      placeholder="">
                                                                              </div>
                                                                          </div>


                                                                          <div class="col-md-6">
                                                                              <div class="card-body">
                                                                                  นามสกุล
                                                                                  :
                                                                                  <input class="input form-control"
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





                                                  </div>
                                                  <br>


                                                  <!-- ----ส่วนที่2--- -->




                                                  <div class="tab-content px-1 pt-1">
                                                      <div class="form-actions center" align="center">
                                                          <button type="button"
                                                              class="btn btn-success  round btn-min-width mr-1 mb-1"
                                                              id="submit" name="submit"
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
                              </div>
                  </section>
                  <!--/ Bootstrap 3 table -->
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

  <!-- footer -->
  <?php include '../include/footer.php'; ?>



  </div>