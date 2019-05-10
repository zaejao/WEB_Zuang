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
            <h3 class="content-header-title">คำร้อง</h3>
          </div>

        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">ระบบงานวิเคราะห์ความต้องการกำลังพลประจำปี</a></li>
            
            <li class="breadcrumb-item"><a href="./index.php">งานเสนอความต้องการบรรจุกำลังพล</a></li>
            <li class="breadcrumb-item active" aria-current="page">คำร้อง</li>
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

                  


                      <div class="tab-content pt-1">
                        <!-- Jobs positions -->
                        <div role="tabpanel" class="tab-pane active" id="tab11" aria-expanded="true" aria-labelledby="base-tab11" >
                          <table class="table table-striped table-borderless table-hover bootstrap-3" style="width:100%">
                            <thead >
                              <tr align="center" style="background-color:#0f1733; color:whitesmoke;" >
                                <th>ลำดับที่</th>
                                <th>ตำแหน่ง</th>
                                <th>จำนวนบรรจุ</th>
                                <th>คำอธิบาย</th>
                                <th>สถานะ</th>
                              </tr>
                            </thead>
                            <tbody align="center">
                          
                              <tr>
                                <td>1</td>
                                <td>ฝ่ายเทคนิค</td>
                                <td>20</td>
                                <td>ต้องการผู้ช่วยซ่อมแซม เครื่องยนต์ยานบิน</td>
                                <td></td>
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