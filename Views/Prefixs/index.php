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

<script src="../../Controllers/prefixsController.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->


  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  <script type="text/javascript">
      $(document).ready(function() {

        $(document).ajaxStart(function() {
            $(".modal").show();
        });
        $(document).ajaxComplete(function() {
            $(".modal").hide();
        });
        
        //   console.log("ready");
          change_autorefreshdiv();
          getPrefixs();
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
                      <h3 class="content-header-title">คำนำหน้า</h3>
                  </div>
              </div>
              <div class="content-body">
                  <!-- Bootstrap 3 table -->
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
                                                  <li class="breadcrumb-item"><a href="../home/index.php">ข้อมูลทั่วไป</a></li>
                                                  <li class="breadcrumb-item active" aria-current="page">คำนำหน้า</li>
                                              </ol>
                                          </nav>
                                          <a href="./create.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                              <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                                          </a>
                                          <a href="./delete.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                              <span class="la la-trash-o" style="color:white; font-weight: bold;font-size: 18px"></span> ลบ
                                          </a>
                                          <table id="prefixsTable" class="table table-striped table-borderless table-hover bootstrap-3 " style="width:100%">
                                              <thead>
                                                  <tr align="center" style="background-color:#0f1733; color:whitesmoke;">
                                                      <th></th>
                                                      <th>ลำดับที่</th>
                                                      <th>คำนำหน้า</th>
                                                      <th>ตัวย่อ</th>
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
              </div>
  </section>

  <!-- footer -->
  <?php include '../include/footer.php'; ?> 