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

  <section>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
            <h3 class="content-header-title">งานเสนอความต้องการบรรจุกำลังพล</h3>
          </div>

        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">ระบบงานวิเคราะห์ความต้องการกำลังพลประจำปี</a></li>
            <li class="breadcrumb-item active" aria-current="page">งานเสนอความต้องการบรรจุกำลังพล</li>
          </ol>
        </nav>
        <div class="content-body">
          <!-- Bootstrap 3 table -->
          <section id="bootstrap3">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-content collapse show">



                    <div class="card-body card-dashboard">

                      <ul class="nav nav-tabs nav-top-border no-hover-bg" style="float:left;">
                        <li class="nav-item">
                          <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11" href="#tab11" aria-expanded="true">ตำแหน่งภายใน</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="base-tab12" data-toggle="tab" aria-controls="tab12" href="#tab12" aria-expanded="false">สมาชิก</a>
                        </li>
                      </ul>
                      <div align="right">
                          <a href="./create.php" class="btn btn-social btn-min-width mb-1 btn-sm" style="background-color:#0f1733 ;  color:white;">
                            <span class="la la-user-plus" style="color:white; font-weight: bold;font-size: 18px"></span> คำขอบรรจุ
                          </a>

                          <a href="./member.php" class="btn btn-social btn-min-width mb-1 btn-sm" style="background-color:#0f1733;margin-left: 5px; color:white;">
                            <span class="la la-clipboard" style="color:white; font-weight: bold;font-size: 18px"></span> คำร้อง
                          </a>
                        </div>


                      <div class="tab-content pt-1">
                        <!-- Jobs positions -->
                        <div role="tabpanel" class="tab-pane active" id="tab11" aria-expanded="true" aria-labelledby="base-tab11" >
                          <table class="table table-striped table-borderless table-hover bootstrap-3" style="width:100%">
                            <thead >
                              <h3>โรงเรียนการบิน</h3>
                              <tr align="center" style="background-color:#0f1733; color:whitesmoke;" >
                                <th>ลำดับที่</th>
                                <th>ตำแหน่ง</th>
                                <th>จำนวนบรรจุ</th>
                                <th>จำนวนเต็มบรรจุ</th>
                              </tr>
                            </thead>
                            <tbody align="center">
                              <tr>
                                <td>1t</td>
                                <td>ช่างอากาศ</td>
                                <td>5</td>
                                <td>61</td>
                             
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>ฝ่ายเทคนิค</td>
                                <td>20</td>
                                <td>63</td>
                               
                              </tr>
                            </tbody>
                          </table>
                        </div>
        

                        <!-- member -->
                        <div class="tab-pane" id="tab12" aria-labelledby="base-tab12">
                        <table class="table table-striped table-borderless table-hover bootstrap-3"  style="width:100%">
                        <h3>สมาชิก</h3>
                            <thead>
                              <tr align="center" style="background-color:#0f1733; color:whitesmoke;">
                                <th>ลำดับที่</th>
                                <th>รหัส</th>
                                <th>ชื่อ</th>
                                <th>ใช้งาน</th>
                              </tr>
                            </thead>
                            <tbody align="center">
                              <tr>
                              <td>1</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                              </tr>
                              <tr>
                              <td>2</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                               
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- end member -->
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

  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

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



  <!-- footer -->
  <?php include '../include/footer.php'; ?>