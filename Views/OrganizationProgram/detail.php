  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- BEGIN VENDOR CSS-->
  <!--   
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/vendors.css"> -->
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/toggle/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/custom.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/ui/dragula.min.css">
  <!-- END VENDOR CSS-->

  <!-- BEGIN MODERN CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="../../app-assets/css/app.css"> -->
  <!-- END MODERN CSS-->

  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/switch.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/checkboxes-radios.css">
  <!-- <link rel="stylesheet" type="text/css" href="../../assets/css/style.css"> -->

  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/pickers/daterange/daterange.css">

  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/selects/select2.min.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert.css">
  <!-- END Page Level CSS-->


  <!-- END Custom CSS-->
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

      .table td {
          padding: -0.75rem 2rem;
      }
  </style>

  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="../../Controllers/OrganizationProgramController.js"></script>

  <script>
      $(document).ready(function() {

          $(document).ajaxStart(function() {
              $(".modal").show();
          });
          $(document).ajaxComplete(function() {
              $(".modal").hide();
          });

          var getUrlParameter = function getUrlParameter(sParam) {
              var sPageURL = window.location.search.substring(1),
                  sURLVariables = sPageURL.split('&'),
                  sParameterName,
                  i;

              for (i = 0; i < sURLVariables.length; i++) {
                  sParameterName = sURLVariables[i].split('=');

                  if (sParameterName[0] === sParam) {
                      return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                  }
              }
          };
          var orgTypeId = getUrlParameter('orgTypeId');
          var orgStrucId = getUrlParameter('orgStrucId');

          $(document).ajaxStart(function() {
              $(".modal").show();

          });
          $(document).ajaxComplete(function() {
              $(".modal").hide();
              $("#orgTypeId").val(orgTypeId);
              //   $("#orgListId").val(orgListId);
              $("#orgStrucId").val(orgStrucId);
          });


          $.ajax({
              type: "POST",
              url: "../../Model/OrganizationProgram/getDetailValue.php",
              data: {
                  orgTypeId: orgTypeId,
                  orgStrucId: orgStrucId
              },
              success: function(data) {
                  // console.log(data);
                  $('#list-group-tags').append(data);
                  var orgStrucId = $('#orgListList :selected').val();
                  $("#orgStrucId").val(orgStrucId);
              },
              error: function(error) {
                  // console.log(error);
              }
          });
      });
  </script>

  <section>
      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-12 mb-2">

                      <input type="hidden" id="orgTypeId" name="orgTypeId">

                      <input type="hidden" id="orgStrucId" name="orgStrucId">

                      <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                              <div class="modal-content">
                                  <div class="modal-body">
                                      <img src="../../Asset/Images/gif-To-not-Bg-Th.gif" style="width:90%" alt="">
                                  </div>
                              </div>
                          </div>
                      </div>



                      <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                      <h3 class="content-header-title">โปรแกรมจัดการโครงสร้าง</h3>
                      <div class="row breadcrumbs-top">
                          <div class="breadcrumb-wrapper col-12">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานโครงสร้างอัตรากำลังพล</a>
                                  </li>
                                  <li class="breadcrumb-item"><a href="./index.php">เลือกโครงสร้าง</a>
                                  </li>
                                  <li class="breadcrumb-item active">โปรแกรมจัดการโครงสร้าง</li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="content-body">

                              <?php include_once '../include/modelOnload.php' ?>
                              <!-- Description -->
                              <div class="sidebar-content card d-none d-lg-block">
                                  <div class="card-header" style="background-color:#0f1733; color:white; font-weight: bold;font-size: 18px">
                                      โครงการส่วนราชการ
                                      <a style="float:right;"><i class="la la-sitemap"></i> </a>
                                  </div>
                                  <div class="card-body" align="center">
                                      <button class="btn btn-sm" style="background-color:#0f1733;color:white;border:white;" onclick="create()">
                                          <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> เพิ่ม</span>
                                      </button>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white" ;>
                                          <span class="ft-trash-2" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> ลบ</span>
                                      </a>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white" ;>
                                          <span class="ft-copy" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> คัดลอก</span>
                                      </a>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white" ;>
                                          <span class="la la-gavel" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> คำสั่ง</span>
                                      </a>
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white" ;>
                                          <span class="la la-print" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;">พิมพ์</span>
                                      </a>
                                      <a href="testHi.php" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white" ;>
                                          <span class="la la-print" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;">แก้ไขโครงสร้าง</span>
                                      </a>



                                      <div class="card-content">
                                          <div class="card-body skin-flat">
                                              <?php require_once './Hirage.php'; ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- ---------------------- -->
                      <!-- /Ratings sample -->



                      <!-- 1 -->
                      <div class="col-lg-8">
                          <div class="card-header mb-1" style="background-color:#0f1733; color:white; font-weight: bold;font-size: 18px">
                              รายละเอียดโครงการส่วนราชการ
                          </div>
                          <div class="card">
                              <div class="card-header" style="background-color:#e1e8fc;">
                                  <h5 class="card-title" style="color:#0f1733;">ส่วนที่ 1 รายละเอียดข้อมูล</h5>
                                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                  <div class="heading-elements">
                                      <ul class="list-inline mb-0">
                                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="card-content">
                                  <div class="card-body">
                                      <div class="card-content collpase show">
                                          <div class="card-body">
                                              <form class="form form-horizontal">
                                                  <div class="form-body">
                                                      <div class="row">
                                                          <div class="col-md-6">
                                                              <label class="col-md-12 label-control" for="orgStrucNum">รหัสโครงการส่วนราชการ</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" disabled id="orgStrucNum" class="form-control" placeholder="รหัสโครงการส่วนราชการ" name="orgStrucNum">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label class="col-md-12 label-control" for="orgTypeName">โครงสร้าง</label> <!-- ดึงมาจากการ search หน้า index -->
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" disabled id="orgTypeName" style="width: 100%;"></select>
                                                              </div>
                                                              <!-- <div class="col-md-1">
                                                                  <a href="../organizationProgram/createOrganizationCategory.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a>
                                                              </div> -->
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="orgSubUnitId">รหัสหน่วย</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" disabled id="orgSubUnitId" class="form-control " placeholder="รหัสหน่วย" name="orgSubUnitId">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="divisionID">ลำดับสังกัด/หน่วยใน Tree</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" disabled id="divisionID" class="form-control " placeholder="ลำดับสังกัด/หน่วยใน Tree" name="divisionID">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="orgPartName">ชื่อส่วนราชการ</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" disabled id="orgPartName" style="width: 100%;"></select>
                                                              </div>
                                                              <!-- <div class="col-md-1">
                                                                  <a href="../organizationProgram/createOrganizationParts.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a>
                                                              </div> -->
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="orgSubUnitAbbr">ชื่อสังกัด</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" disabled id="orgSubUnitAbbr" style="width: 100%;"></select>
                                                              </div>
                                                              <!-- <div class="col-md-1">
                                                                  <a href="../Organizations/create.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a>
                                                              </div> -->
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="orgLevelName">ฐานะของหน่วย/สังกัด</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" disabled id="orgLevelName" style="width: 100%;"></select>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="orgSubUnitName">ชื่อหน่วย</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <input type="text" disabled id="orgSubUnitName" class="form-control " placeholder="ชื่อหน่วย" name="orgSubUnitName">
                                                              </div>
                                                              <!-- <div class="col-md-1">
                                                                  <a href="../Organizations/create.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a>
                                                              </div> -->
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="orgListAbbr">ชื่อย่อ</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text " disabled id="orgListAbbr" class="form-control " placeholder="ศปร." name="orgListAbbr">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="orgStrucLong">ชื่อเต็มหน่วย/สังกัด</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" disabled id="orgStrucLong" class="form-control " placeholder="ชื่อหน่วย/สังกัด" name="orgStrucLong">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="orgListAbbrLong">ชื่อย่อหน่วย/สังกัด</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" disabled id="orgListAbbrLong" class="form-control " placeholder="ชื่อย่อหน่วย/สังกัด" name="orgListAbbrLong">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="orgListAbbrLongAbbr">ชื่อกึ่งย่อหน่วย/สังกัด</label>
                                                              <div class="col-md-12">
                                                                  <div class="position-relative">
                                                                      <input type="text" disabled id="orgListAbbrLongAbbr" class="form-control " placeholder="ชื่อกึ่งย่อหน่วย/สังกัด" name="orgListAbbrLongAbbr">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="provincesName">จังหวัด</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" id="provincesName" style="width: 100%;">
                                                                      <!-- border-color: #8c93ee !important; -->
                                                                      <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                      <option value="">จังหวัด</option>
                                                                      <!-- <option value="HI">Hawaii</option> -->
                                                                      <!-- </optgroup> -->
                                                                  </select>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 mt-1">
                                                              <label class="col-md-12 label-control" for="districtsName">อำเภอ</label>
                                                              <div class="col-md-12" style="float:left;">
                                                                  <select class="select2 form-control block" id="districtsName" style="width: 100%;">
                                                                      <!-- border-color: #8c93ee !important; -->
                                                                      <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                      <option value="">อำเภอ</option>
                                                                      <!-- <option value="HI">Hawaii</option> -->
                                                                      <!-- </optgroup> -->
                                                                  </select>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- 1 -->
                          <div class="card">
                              <div class="card-header" style="background-color:#e1e8fc;">
                                  <h5 class="card-title" style="color:#0f1733;">ส่วนที่ 2 การใช้งาน</h5>
                                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                  <div class="heading-elements">
                                      <ul class="list-inline mb-0">
                                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="card-content">
                                  <div class="card-body">
                                      <div class="tab-content px-1 pt-1">
                                          <div role="tabpanel" class="tab-pane active" id="limit" aria-expanded="true" aria-labelledby="base-limit">
                                              <div class="row">
                                                  <div class="col-12 col-xl-6 border-right-blue-grey border-right-lighten-4 pr-2  pl-2 p-0">
                                                      <div class="row my-2">
                                                          <div class="col-4">
                                                              <h5 class="text-bold-500 mb-0">ใช้งาน</h5>
                                                          </div>
                                                      </div>
                                                      <form class="form form-horizontal">
                                                          <div class="form-body">
                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <label class="col-md-12" for="orgName">คำสั่ง</label>
                                                                      <div class="col-md-12" style="float:left;">
                                                                          <select class="select2 form-control block" id="orgName" style="width: 100%;">
                                                                              <!-- border-color: #8c93ee !important; -->
                                                                              <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                              <option value="">เลือกคำสั่ง</option>
                                                                              <option value="">คำสั่ง2</option>
                                                                              <!-- <option value="HI">Hawaii</option> -->
                                                                              <!-- </optgroup> -->
                                                                          </select>
                                                                      </div>
                                                                      <!-- <a href="../Organizations/create.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a> -->
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <label class="col-md-12" for="orgName">เลขที่คำสั่ง</label>
                                                                      <div class="col-md-12">
                                                                          <div class="position-relative">
                                                                              <input type="text" id="code" class="form-control " placeholder="เลขที่คำสั่ง" name="code">
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label class="col-md-12" for="orgName">ลง :</label>
                                                                          <div class="input-group col-md-12">
                                                                              <div class="input-group-prepend">
                                                                                  <span class="input-group-text">
                                                                                      <span class="la la-calendar-o"></span>
                                                                                  </span>
                                                                              </div>
                                                                              <!-- edit เงื่อนไขวัน Date limits ที่ ../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js บรรทัด 40 -->
                                                                              <input type='text' class="form-control pickadate-limits" placeholder="_/_/_" />
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label class="col-md-12" for="startDate">มีผลตั่งแต่ :</label>
                                                                          <div class="input-group col-md-12">
                                                                              <div class="input-group-prepend">
                                                                                  <span class="input-group-text">
                                                                                      <span class="la la-calendar-o"></span>
                                                                                  </span>
                                                                              </div>
                                                                              <!-- edit เงื่อนไขวัน Date limits ที่ ../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js บรรทัด 40 -->
                                                                              <input type='text' id="startDate" disabled name="startDate" class="form-control pickadate-limits" placeholder="_/_/_" />
                                                                          </div>
                                                                      </div>
                                                                  </div>

                                                              </div>

                                                          </div>
                                                      </form>
                                                  </div>

                                                  <!-- 2 -->
                                                  <div class="col-12 col-xl-6 pl-2 p-0">
                                                      <div class="row my-2">
                                                          <div class="col-4">
                                                              <h5 class="text-bold-500 mb-0">ยกเลิก</h5>
                                                          </div>
                                                      </div>
                                                      <form class="form form-horizontal">
                                                          <div class="form-body">
                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <label class="col-md-12" for="orgName">คำสั่ง</label>
                                                                      <div class="col-md-12" style="float:left;">
                                                                          <select class="select2 form-control block" id="orgName" style="width: 100%;">
                                                                              <!-- border-color: #8c93ee !important; -->
                                                                              <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                                                              <option value="">เลือกคำสั่ง</option>
                                                                              <option value="">คำสั่ง2</option>
                                                                              <!-- <option value="HI">Hawaii</option> -->
                                                                              <!-- </optgroup> -->
                                                                          </select>
                                                                      </div>
                                                                      <!-- <a href="../Organizations/create.php"><i class="la la-plus-circle" style="font-size:36px;"></i></a> -->
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <label class="col-md-12" for="orgName">เลขที่คำสั่ง</label>
                                                                      <div class="col-md-12">
                                                                          <div class="position-relative">
                                                                              <input type="text" id="code" class="form-control " placeholder="เลขที่คำสั่ง" name="code">
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label class="col-md-12" for="orgName">ลง :</label>
                                                                          <div class="input-group col-md-12">
                                                                              <div class="input-group-prepend">
                                                                                  <span class="input-group-text">
                                                                                      <span class="la la-calendar-o"></span>
                                                                                  </span>
                                                                              </div>
                                                                              <!-- edit เงื่อนไขวัน Date limits ที่ ../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js บรรทัด 40 -->
                                                                              <input type='text' class="form-control pickadate-limits" placeholder="_/_/_" />
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                  <div class="col-md-12">
                                                                      <div class="form-group">
                                                                          <label class="col-md-12" for="orgName">มีผลตั่งแต่ :</label>
                                                                          <div class="input-group col-md-12">
                                                                              <div class="input-group-prepend">
                                                                                  <span class="input-group-text">
                                                                                      <span class="la la-calendar-o"></span>
                                                                                  </span>
                                                                              </div>
                                                                              <!-- edit เงื่อนไขวัน Date limits ที่ ../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js บรรทัด 40 -->
                                                                              <input type='text' class="form-control pickadate-limits" placeholder="_/_/_" />
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                              <hr>
                                              <input id="isActive" type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
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





  <!-- ///////////////////////////////footer/////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
          <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span>
          <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
      </p>
  </footer>



  <!-- BEGIN VENDOR JS -->
  <script src="../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->

  <script>
      $(document).ready(function() {
          $('.dropdown-submenu a.test').on("click", function(e) {
              $(this).next('ul').toggle();
              e.stopPropagation();
              e.preventDefault();
          });


      });
  </script>
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/extensions/dragula.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->

  <!-- BEGIN MODERN JS-->
  <script src="../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <!-- END MODERN JS-->

  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../app-assets/js/scripts/extensions/drag-drop.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/forms/checkbox-radio.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/dropdowns/dropdowns.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../app-assets/js/scripts/tables/datatables/datatable-styling.js" type="text/javascript"></script>

  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>

  <!-- date -->
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script>

  <!-- select2 -->
  <script src="../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" />
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
  <script type="text/javascript" src="../../Asset/js/jquery.mjs.nestedSortable.js"></script>
  <!-- END PAGE LEVEL JS-->
  </body>

  </html>