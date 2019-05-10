  <!-- header -->
  <?php require_once '../../config.php' ?>
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>
  <!-- BEGIN SELECT2 CSS-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/selects/select2.min.css">
  <!-- END SELECT2 CSS-->
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

  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  <script type="text/javascript">

    $(document).ready(function() {
      change_autorefreshdiv();

      getOrganizationSubUnit();
      
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

  <section>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
            <h3 class="content-header-title">ชื่อหน่วยงาน</h3>
          </div>
        </div>
        <div class="content-body">
        <?php include_once '../include/modelOnload.php' ?>
          <section id="bootstrap3">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                      <p class="card-text"></p>
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานโครงสร้างอัตรากำลังพล</a></li>
                          <li class="breadcrumb-item"><a href="../home/index.php">โครงสร้าง</a></li>
                          <li class="breadcrumb-item active" aria-current="page">ชื่อหน่วยงาน</li>
                        </ol>
                      </nav>

                      <a href="./create.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                        <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                      </a>
                      <a href="./delete.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                        <span class="la la-trash-o" style="color:white; font-weight: bold;font-size: 18px"></span> ลบ
                      </a>
                     
                      <table id="OrganizationLevels" class="table table-striped table-borderless table-hover bootstrap-3 " style="width:100%;">
                        <thead>
                          <tr align="center" style="background-color:#0f1733; color:whitesmoke;">

                            <th></th>
                            <th>ลำดับที่</th>
                            <th>ชื่อเต็มหน่วยงาน</th>
                            <th>ชื่อย่อหน่วยงาน</th>
                            <th>ชื่อกึ่งหน่วยงาน</th>
                            <th>สถานะ</th>
                            
                          </tr>
                        </thead>
                        <tbody align="center">

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
</footer>
<!-- BEGIN VENDOR JS-->
<script src="../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
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
<script src="../../app-assets/js/scripts/tables/datatables/datatable-styling.js" type="text/javascript"></script>
<script src="../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>

<script src="../../Controllers/organizationSubUnitController.js"></script>

</body>

</html>