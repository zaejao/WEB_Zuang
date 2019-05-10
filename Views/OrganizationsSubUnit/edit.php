  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert.css">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/selects/select2.min.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
  <!-- END Custom CSS-->

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
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script>
      $(document).ready(function() {
          getIdForEdit();
          //   console.log("ready");
      });
  </script>

  <div class="app-content content">
      <div class="content-wrapper">
          <div class="content-header row">
              <div class="content-header-left col-md-6 col-12 mb-2">
                  <h3 class="content-header-title">แก้ไขประเภทโครงสร้าง</h3>
                  <div class="row breadcrumbs-top">

                  </div>
              </div>

          </div>
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./index.php">ระบบงานโครงสร้างอัตรากำลังพล</a></li>
                  <li class="breadcrumb-item"><a href="./index.php">โครงสร้าง</a></li>
                  <li class="breadcrumb-item active" aria-current="page">แก้ไขประเภทโครงสร้าง</li>
              </ol>
          </nav>
          <div class="content-body">
              <!-- Basic form layout section start -->
              <section id="horizontal-form-layouts">

                  <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-header">
                                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                  <div class="heading-elements">
                                      <ul class="list-inline mb-0">
                                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                          <li><a data-action="close"><i class="ft-x"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="card-content collpase show">
                                  <div class="card-body">
                                      <!-- <div class="card-text">
                                          <p>คำโปรย</p>
                                      </div> -->
                                      <form class="form form-horizontal">
                                          
                                          <div class="row">
                                          <div class="col-md-6 mt-1">
                                                  <label class="col-md-6 label-control" for="OrgLevelId">ฐานะหน่วย</label>
                                                  <div class="col-md-12">
                                                          <div class="position-relative ">
                                                              <select name="OrgLevelId" id="OrgLevelId" class="select2 form-control " style="width:100%;">
                                                              <?php
                                                                    require_once "../../config.php";
                                                                    $sql = " SELECT OrgLevelId, OrgLevelName, OrgLevelActive FROM OrgLevel WHERE OrgLevelActive = 1; ";
                                                                    $result = sqlsrv_query($conn, $sql);
                                                                    while ($row = sqlsrv_fetch_array($result)) {
                                                                        ?>
                                                                      <option value="<?php echo $row['OrgLevelId'] ?>"><?php echo $row['OrgLevelName'] ?></option>
                                                                  <?php
                                                                }
                                                                ?>
                                                              </select>
                                                          </div>
                                                      </div>
                                                </div>
                                              <div class="col-md-6 mt-1 ">
                                                  <label class="col-md-6 label-control" for="OrgSubUnitName">ชื่อเต็มหน่วยงาน</label>
                                                  <div class="col-md-12">
                                                      <div class="position-relative ">
                                                          <input type="text" id="OrgSubUnitName" class="form-control border-primary" placeholder="ชื่อเต็มโครงสร้างอัตราส่วนราชการ" name="OrgSubUnitName">

                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-6 mt-1">
                                                  <label class="col-md-6 label-control" for="OrgSubUnitAbbr">ชื่อย่อหน่วยงาน</label>
                                                  <div class="col-md-12">
                                                      <div class="position-relative">
                                                          <input type="text" id="OrgSubUnitAbbr" class="form-control border-primary" placeholder="ชื่อย่อหัวหน้าสายวิชาการ" name="OrgSubUnitAbbr">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-6 mt-1">
                                                  <label class="col-md-6 label-control" for="OrgSubUnitSemiAbbr">ชื่อกึ่งหน่วยงาน</label>
                                                  <div class="col-md-12">
                                                      <div class="position-relative">
                                                          <input type="text" id="OrgSubUnitSemiAbbr" class="form-control border-primary" placeholder="ชื่อย่อหัวหน้าสายวิชาการ" name="OrgSubUnitSemiAbbr">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <br>
                                                  <label class="col-md-3 label-control" for="upToAirforce" style="padding-right:0px;">หน่วยขึ้นตรงกองทัพอากาศ</label>
                                                  <input id="upToAirforce" type="checkbox"  data-toggle="toggle" data-style="ios" data-on="ขึ้นตรง" data-off="ไม่ขึ้นตรง" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <br>
                                                  <label class="col-md-1 label-control" for="userinput3" style="padding-right:0px;">สถานะ</label>
                                                  <input id="isActive" type="checkbox" data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                              </div>
                                          </div>
                                          <div class="form-actions center" align="center">

                                              <input type="hidden" name="id" id="id" value="">

                                              <!-- <button type="button" class="btn btn-danger  round btn-min-width mr-1 mb-1" id="type-error">ยกเลิก</button>
                                <button type="button" class="btn btn-success  round btn-min-width mr-1 mb-1" id="confirm-text" onclick="insertOrganizationParts()">บันทึก</button> -->

                                              <button type="button" class="btn btn-danger  round btn-min-width mr-1 mb-1" id="type-error">ยกเลิก</button>
                                              <button type="button" class="btn btn-success  round btn-min-width mr-1 mb-1" id="submit" name="submit" onclick="UpdateOrganizationSubUnit()">บันทึก</button>

                                          </div>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
          </section>
          <!-- // Basic form layout section end -->
      </div>
  </div>
  </div>
  <input type="hidden" name="id" id="id" value="">
  <script src="../../Controllers/organizationSubUnitController.js"></script>

  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
          <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span>
          <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
      </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <script src="../../Asset/js/sweetalert2.min.js"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>
  </body>

  </html>