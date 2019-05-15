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
                                                  <li class="breadcrumb-item"><a href="../home/index.php">งานประวัติรับราชการ</a></li>
                                                  <li class="breadcrumb-item active" aria-current="page">ข้อมูลตำแหน่ง
                                                  </li>


                                              </ol>
                                          </nav>
                                          <div id="how-to" class="card">
                                              <!-- card -->
                                              <div class="card-header" style="background-color:#0f1733;padding:1.0rem 1.0rem">
                                                  <h6 class="card-title">
                                                      <font color="White">พล.อ.เลย์รสสาหร่าย สองถุง หมายเลขประจำตัว
                                                          332124562455
                                                  </h6>
                                                  </font>
                                                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                                  <div class="heading-elements">
                                                      <ul class="list-inline mb-0">
                                                          <li><a data-action="collapse"><i class="ft-minus"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div> <!-- card -->

                           <div class="container">

                                              <div class="card-content">
                                                  <div class="card-body">


                                                      <div class="tab-content px-1 pt-1">
                                                          <div role="tabpanel" class="tab-pane active" id="tab11" aria-expanded="true" aria-labelledby="base-tab11">

                                                              <div class="card collapse-icon accordion-icon-rotate active">
                                                                  <div id="headingCollapse80" class="card-header bg-success">
                                                                      <a data-toggle="collapse" href="#collapse80" aria-expanded="true" aria-controls="collapse80" class="card-title lead white">
                                                                          <h6 style="margin-left:5px;">บันทึก/แก้ไข เหล่าทหาร</h6>
                                                                      </a>
                                                                  </div>



                                                                  <div class="tab-content px-1 pt-1">
                                                                                  <div role="tabpanel80"
                                                                                      class="tab-pane active"
                                                                                      id="tab1180" aria-expanded="true"
                                                                                      aria-labelledby="base-tab1180">

                                                                                      <div
                                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                                          
                                                                                          <div id="collapse80"
                                                                                              role="tabpanel80"
                                                                                              aria-labelledby="headingCollapse80"
                                                                                              class="card-collapse collapse show"
                                                                                              aria-expanded="true">
                                                                                              <div class="card-content">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <div
                                                                                                          class="row match-height">

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
                                                                                                                                  for="radio8">สำเร็จ</label>
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
                                                                                                                                  checked>ไม่สำเร็จ</label>
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
                                                                                                                                  checked>กำลังศึกษา</label>
                                                                                                                          </div>
                                                                                                                
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                         
                                                                                                         
                                                                                                         
                                                                                                         
                                                                                           
                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ประเภทหลักสูตร
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ประเภทการศึกษา
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                        <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ชื่อหลักสูตร
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ระดับการศึกษา
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      คุณวุฒที่ได้รับ
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      สาขา
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      อนุสาขา
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>



                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ทาง/กลุ่มวิชา
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      วิชาเอก
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      แขนงวิชา
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      สถาบันการศึกษา
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      กลุ่มสถาบันการศึกษา
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ประเทศ
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ทุนการศึกษา
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
                                                                                                      </select>

                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class="col-md-6 col-sm-12">
                                                                                                              <div
                                                                                                                  class="card-body ">
                                                                                                                  ทุน
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
                                                                                                                                  for="radio8">ผูกพัน</label>
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
                                                                                                                                  checked>ไม่ผูกพัน
                                                                                                                          </div>
                                                                                                                    
                                                                                                                
                                                                                                                      </div>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>

                                                                                                         

                                                                                                          <div
                                                                                                              class=" col-md-3">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      ปีที่สำเร็จการศึกษา
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
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
                                                                                                                      รุ่นน
                                                                                                                      :
                                                                                                                      <input
                                                                                                                          class="input form-control"
                                                                                                                          style="width: 100%;"
                                                                                                                          placeholder="">
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                          </div>


                                                                                                          <div
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                    ผลัด
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
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
                                                                                                                     วันที่เริ่มศึกษา  
                                                                                                                     
                                                                                                                    
                                                                                                                      
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
                                                                                                                     วันที่สำเร็จการศึกษา
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
                                                                                                                     วันที่รายงานตัว
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
                                                                                                              class=" col-md-6">
                                                                                                              <div
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                    ประเภทผลการศึกษา
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
                                                                                                            
                                                                                                          </optgroup>
                                                                                                          
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
                                                                                                                      จำนวนผู้เข้ารับการศึกษา
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
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      สอบได้ลำดับที่
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
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      สอบได้คะแนนร้อยละ
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
                                                                                                                  class="card-block">
                                                                                                                  <div
                                                                                                                      class="card-body ">
                                                                                                                      สอบได้เกรดเฉลี่ย
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
                                                                                                                      วันที่ลง
                                                                                                                      (ทะเบียนราษฎร์)
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



                                                                                  </div>
                                                                              </div>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="tab-content px-1 pt-1">
                                                                      <div class="form-actions center" align="center">
                                                                          <!-- <button type="button" class="btn btn-danger  round btn-min-width mr-1 mb-1" id="type-error">ยกเลิก</button>
                                <button type="button" class="btn btn-success  round btn-min-width mr-1 mb-1" id="confirm-text" onclick="insertOrganizationParts()">บันทึก</button> -->

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
                  </section>
                  <!--/ Bootstrap 3 table -->
              </div>
          </div>
      </div>
  </section>

  <script src=" http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
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