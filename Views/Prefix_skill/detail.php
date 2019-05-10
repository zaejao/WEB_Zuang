  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/toggle/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/custom.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/ui/dragula.min.css">
  <!-- END VENDOR CSS-->

  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/app.css">
  <!-- END MODERN CSS-->

  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/switch.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/checkboxes-radios.css">
  <link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
  <!-- END Page Level CSS-->

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

      .table td {
          padding: -0.75rem 2rem;
      }

      .modal {
          text-align: center;
          padding: 0 !important;
          background-color: rgb(0, 0, 0);
          /* Fallback color */
          background-color: rgba(0, 0, 20, 0.4);
          /* Black w/ opacity */
      }

      .modal:before {
          content: '';
          display: inline-block;
          height: 100%;
          vertical-align: middle;
          margin-right: -4px;
      }

      .modal-dialog {
          display: inline-block;
          text-align: left;
          vertical-align: middle;
      }

      .modal-body {
          width: 100% height:100%;
      }

      .modal-content {
          background-color: transparent;
          border: none;
      }
  </style>

  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="../../Controllers/prefixSkillController.js"></script>

  <script>
      $(document).ready(function() {
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
          //   var orgListId = getUrlParameter('orgListId');
          var orgListId = getUrlParameter('orgListId');
          var personTypeId = getUrlParameter('personTypeId');

          $(document).ajaxStart(function() {
              $(".modal").show();

          });
          $(document).ajaxComplete(function() {
              $(".modal").hide();
              $("#orgTypeId").val(orgTypeId);
              $("#orgListId").val(orgListId);
              $("#personTypeId").val(personTypeId);
              $("#orgParentId").val(orgListId);
          });

          $.ajax({
              type: "POST",
              url: "../../Model/PrefixSkill/getDetailValue.php",
              data: {
                  orgTypeId: orgTypeId,
                  orgListId: orgListId
              },
              success: function(data) {
                  // console.log(data);
                  $('#list-group-tags').append(data);
                  var orgListId = $('#orgListList :selected').val();
                  $("#orgListId").val(orgListId);
              },
              error: function(error) {
                  // console.log(error);
              }
          });

          $('#prefixSkillTable').dataTable({
                "oLanguage": {
                    "sEmptyTable": "ไม่มีข้อมูลนี้ในตาราง"
                }
            });
      });
  </script>
  <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-body">
                  <img src="../../Asset/Images/gif-To-not-Bg-Th.gif" style="width:90%" alt="">
              </div>
          </div>
      </div>
  </div>
  <section>
      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-md-6 col-12 mb-2">
                      <h3 class="content-header-title">โครงการส่วนราชการ</h3>
                      <div class="row breadcrumbs-top">
                          <div class="breadcrumb-wrapper col-12">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานทำเนียบ</a>
                                  </li>
                                  <li class="breadcrumb-item"><a href="../home/index.php">ทำเนียบบรรจุกำลังพล</a>
                                  </li>
                                  <li class="breadcrumb-item active">บันทึกกรอบอัตราตำแหน่ง</li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>

              <input type="hidden" name="orgTypeId" id="orgTypeId">
              <input type="hidden" name="orgListId" id="orgListId">
              <input type="hidden" name="personTypeId" id="personTypeId">
              <input type="hidden" name="orgParentId" id="orgParentId">

              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-4">
                          <div class="content-body">
                              <!-- Description -->
                              <div class="sidebar-content card d-none d-lg-block">
                                  <div class="card-header" style="background-color:#0f1733; color:white; font-weight: bold;font-size: 18px">
                                      โครงการส่วนราชการ
                                      <a style="float:right;"><i class="la la-sitemap"></i> </a>
                                  </div>
                                  <div class="card-body" align="center">
                                      <a href="#" class="btn btn-sm" style="background-color:#0f1733;color:white;border:white" ;>
                                          <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 13px;margin-top:3px;"> เพิ่ม</span>
                                      </a>
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



                                      <div class="card-content">
                                          <div class="card-body skin-flat">
                                              <!-- <------------------------? -->
                                              <style>
                                                  .vl {
                                                      border-left: 8px solid #0f1733;
                                                      height: 30px;
                                                      float: left;
                                                      padding-right: 4px;
                                                  }
                                              </style>


                                              <ul class="list-group">
                                                  <li class="list-group-item">
                                                      <s class="vl"></s>
                                                      <span style="font-weight: bold;font-size: 12px;"> กองทัพอากาศ</span>
                                                  </li>
                                              </ul>
                                              <ul class="list-group" id="list-group-tags" align="left">
                                                  <a style="margin-left: 15px; ">
                                                      <li class="list-group-item">
                                                          <s class="vl"></s>
                                                          <!-- <span style="font-weight: bold;font-size: 12px;" ><?php echo $result['division_name']; ?></span> -->
                                                          <span style="font-weight: bold;font-size: 12px;" onclick="showDetail()"> &nbsp; กรมกำลังพลทาหารอากศ 0</span>
                                                      </li>
                                                  </a>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- ---------------------- -->
                      <!-- /Ratings sample -->

                      <div class="col-lg-8">
                          <section id="description" class="card">
                              <div class="card-content">
                                  <div class="card-body">
                                      <a href="./create.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                          <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                                      </a>
                                      <a href="./delete.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                          <span class="la la-trash-o" style="color:white; font-weight: bold;font-size: 18px"></span> ลบ
                                      </a>
                                      <table id="prefixSkillTable" class="table table-striped  table-borderless table-hover bootstrap-3 table-" style="width:100%">
                                          <thead>

                                              <tr align="center" style="background-color:#0f1733; color:whitesmoke;">
                                                  <th> <a class="skin-flat"><input type="checkbox" class="checkAll" onclick="toggle(this);" /> </a></th>
                                                  <th>ลำดับที่</th>
                                                  <th>ชื่อ</th>
                                                  <th>อัตราเงินเดือน</th>
                                                  <th>ใช้งาน</th>

                                              </tr>
                                          </thead>
                                          <tbody align="center "> </tbody>
                                      </table>
                                  </div>
                              </div>
                              <!--/ PUG Code -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </section>

  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/extensions/dragula.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->

  <script src="../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <!-- END MODERN JS-->

  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../app-assets/js/scripts/extensions/drag-drop.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/forms/checkbox-radio.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/dropdowns/dropdowns.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->



  <!-- footer -->
  <?php
  include "../include/footer.php";
  ?> 
