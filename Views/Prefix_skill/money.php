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

      [class*="bs-callout"] .callout-arrow-left:before {
          right: -5%;
      }
  </style>

  <div class="app-content content">
      <div class="content-wrapper">
          <div class="content-header row">
              <div class="content-header-left">
                  <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                  <h3 class="content-header-title">รายละเอียดอัตราตำแหน่งโครงสร้าง</h3> <br>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานโครงสร้างอัตรากำลังพล</a></li>
                          <li class="breadcrumb-item"><a href="../home/index.php">ตำแหน่ง</a></li>
                          <li class="breadcrumb-item"><a href="../home/index.php">อัตราตำแหน่งโครงสร้าง</a></li>
                          <li class="breadcrumb-item active" aria-current="page">รายละเอียด</li>
                      </ol>
                  </nav>
              </div>
          </div>
          <div class="content-body">
              <!-- Basic tabs start -->
              <section id="basic-tabs-components">
                  <div class="row match-height">
                      <div class="" style="width:100%;">
                          <div class="card">
                              <div class="card-content">
                                  <div class="card-header">

                                      <div class="bs-callout-primary callout-transparent">
                                          <div class="media align-items-stretch">
                                              <div class="media-left media-middle bg-primary position-relative callout-arrow-left p-2" style="width:150px;">
                                                  <i class="la la-user white" style="font-size: 100px; padding-left:6px;"></i>
                                              </div>
                                              <div class="media-body p-1">
                                                  <h5 style="color:#0f1733;">ชื่อตำแหน่ง :&nbsp;
                                                      <span id="orgPositionName"></span></h5>
                                                  <h5 style="color:#0f1733;">ชื่อตำแหน่ง-สังกัด :&nbsp;
                                                      <span id="orgPositionSemiAbbrName"></span></h5>
                                                  <h5 style="color:#0f1733;">เงินเดือนอัตรา :&nbsp;
                                                      <span id="saralyRateAbbrName"></span></h5>
                                                  <h5 style="color:#0f1733;">จำนวน :&nbsp;
                                                      <span style=" ">1</span>
                                                      <!-- <p style="float:left;" id="qquota"></p> -->
                                                      <span>&nbsp;อัตรา</span></h5>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                                  <div class="card-body">

                                      <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                          <li class="nav-item">
                                              <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11" href="#tab11" aria-expanded="true">เงินเพิ่มประจำตำแหน่ง</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" id="base-tab12" data-toggle="tab" aria-controls="tab12" href="#tab12" aria-expanded="false">ลชทอ./เลขหมายรายงาน</a>
                                          </li>
                                      </ul>
                                      <div class="tab-content pt-1">
                                          <div role="tabpanel" class="tab-pane active" id="tab11" aria-expanded="true" aria-labelledby="base-tab11">
                                              <a href="./create.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                                  <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                                              </a>
                                              <a href="./delete.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                                  <span class="la la-trash-o" style="color:white; font-weight: bold;font-size: 18px"></span> ลบ
                                              </a>
                                              <table class="table table-striped table-borderless table-hover bootstrap-3">
                                                  <thead>
                                                      <tr align="center" style="background-color:#0f1733; color:whitesmoke;">
                                                          <th><input type="checkbox" class="checkAll" onclick="toggle(this);" /></th>
                                                          <th>ลำดับที่</th>
                                                          <th>ชื่อเงินเพิ่ม</th>
                                                          <th>จำนวนเงิน</th>
                                                          <th>ค่าตอบแทน</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody align="center">
                                                      <tr>
                                                          <td><input type="checkbox" class="checkAll" /></td>
                                                          <td>1</td>
                                                          <td>เงินเพิ่มวิชาชีพเฉพาะ</td>
                                                          <td>3,500</td>
                                                          <td></td>

                                                      </tr>
                                                      <tr>
                                                          <td><input type="checkbox" class="checkAll" /></td>
                                                          <td>2</td>
                                                          <td>เงินเพิ่มการอบรม</td>
                                                          <td>2,500</td>
                                                          <td></td>

                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </div>
                                          <div class="tab-pane" id="tab12" aria-labelledby="base-tab12">
                                              <table class="table table-striped table-borderless table-hover bootstrap-3" style="width:100%">
                                              <a href="./create.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                                  <span class="la la-plus-circle" style="margin-right: 5px;color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                                              </a>  
                                              <a href="./delete.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                                  <span class="la la-trash-o" style="margin-right: 5px; color:white; font-weight: bold;font-size: 18px"></span> ลบ
                                              </a>
                                                  <thead>
                                                  <tr align="center" style="background-color:#0f1733; color:whitesmoke;">
                                                          <th><input type="checkbox" class="checkAll" onclick="toggle(this);" /></th>
                                                          <th>ลำดับที่</th>
                                                          <th>เลขหมายราชงาน/ลชทอ.</th>
                                                          <th>เหล่า</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody align="center">
                                                      <tr>
                                                          
                                                      <td><input type="checkbox" class="checkAll" /></td>
                                                          <td>1</td>
                                                          <td>7315</td>
                                                          <td></td>
                                                      </tr>
                                                      <tr>
                                                          
                                                      <td><input type="checkbox" class="checkAll" /></td>
                                                          <td>2</td>
                                                          <td>2715</td>
                                                          <td></td>

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
          </section>
          <!-- Basic badge Input end -->
      </div>
  </div>
  </div>

  <script src="../../Controllers/MoneyController.js"></script>

  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

  <script type="text/javascript">
      $(document).ready(function() {
          console.log("ready");
          getMoney();
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



  <!-- footer -->
  <?php include '../include/footer.php'; ?>