  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>



  <style>
/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
.row.content {
    height: 550px
}

/* Set gray background color and 100% height */
.sidenav {
    background-color: #f1f1f1;
    height: 100%;
}

/* On small screens, set height to 'auto' for the grid */
@media screen and (max-width: 767px) {
    .row.content {
        height: auto;
    }
}
  </style>


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

#background {
    position: absolute;
    z-index: 0;
    background: white;
    display: block;
    min-height: 50%;
    min-width: 50%;
    color: yellow;
}

#content {
    position: absolute;
    z-index: 1;
}

#bg-text {
    color: lightgrey;
    font-size: 120px;
    transform: rotate(300deg);
    -webkit-transform: rotate(300deg);
}
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- select2 -->
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/selects/select2.min.css">
  <!-- select2 -->
  <!-- datetime-->
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
  <!-- datetime-->
  <section>
      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-12 mb-2">
                      <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                      <h3 class="content-header-title">ข้อมูลประวัติราชการ</h3>
                      <!-- -ปุ่ม-------ค้นหา---------- -->
                      <div class="search-container">
                          <form action="/action_page.php">
                              <input type="text" placeholder="Search.." name="search">
                              <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                      </div>
                      <div class="content-body">
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
                                                          <li class="breadcrumb-item active" aria-current="page">
                                                              การศึกษา/ความรู้/ความชำนาญ
                                                          </li>
                                                      </ol>
                                                  </nav>


                                                  <div class="card">

                                                      <div class="card-content">
                                                          <div class="card-body">
                                                              <?php require_once '../include/behaviour_table.php'; ?>
                                                              

                                                              <div class="col-xl-12 col-lg-12">
              <div class="card">
               
                <div class="card-content">
                  <div class="card-body">
                    
                   
                    <div class="tab-content px-1 pt-1">
                      <div role="tabpanel" class="tab-pane active" id="tab20" aria-expanded="true" aria-labelledby="base-tab20">
                      <a href="./create.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">
                                                                              <span class="la la-plus-circle"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              เพิ่ม
                                                                          </a>
                                                                          <a href="./delete.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">

                                                                              <span class="la la-trash-o"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              ลบ
                                                                          </a>
                                                                          <table
                                                                              class="table table-striped table-borderless table-hover bootstrap-3 ">
                                                                              <thead>
                                                                                  <tr align="center"
                                                                                      style="background-color:#0f1733; color:whitesmoke;">
                                                                                      <th><input type="checkbox"
                                                                                              class="checkAll"
                                                                                              onclick="toggle(this);" />
                                                                                      </th>
                                                                                      <th></th>
                                                                                      <th>ลำดับที่</th>
                                                                                      <th>ประวัติความดี/ความชอบ/ความสามารถพิเศษ</th>
                                                                                      <th>วันที่มีผล</th>
                                                                                     


                                                                                  </tr>
                                                                              </thead>
                                                                              <tbody align="center">
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Before_work/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                          <a href="./delete.php"><i
                                                                                                  class="la la-trash-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                      </td>
                                                                                      <td>1</td>
                                                                                      <td>ประดับเครื่องหมายความสามารถในการบินชั้นกิตติมศักดิ์ของทอ.สิงค์โปร์</td>
                                                                                      <td>1 ต.ค. 2562</td>
                                                                                   

                                                                                  </tr>
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Before_work/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i>
                                                                                              <a href="./detail.php"><i
                                                                                                      class="la la-trash-o"
                                                                                                      style="color:#0f1733;"></i>
                                                                                      </td>
                                                                                      <td>2</td>
                                                                                      <td>ประดับเครื่องหมายความสามารถในการบินชั้นกิตติมศักดิ์ของทอ.สิงค์โปร์</td>
                                                                                      <td>1 ต.ค. 2562</td>


                                                                                  </tr>
                                                                              </tbody>

                                                                          </table>
                      </div>
                      <div class="tab-pane" id="tab21" aria-labelledby="base-tab21">
                      <a href="./create.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">
                                                                              <span class="la la-plus-circle"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              เพิ่ม
                                                                          </a>
                                                                          <a href="./delete.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">

                                                                              <span class="la la-trash-o"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              ลบ
                                                                          </a>
                                                                          <table
                                                                              class="table table-striped table-borderless table-hover bootstrap-3 ">
                                                                              <thead>
                                                                                  <tr align="center"
                                                                                      style="background-color:#0f1733; color:whitesmoke;">
                                                                                      <th><input type="checkbox"
                                                                                              class="checkAll"
                                                                                              onclick="toggle(this);" />
                                                                                      </th>
                                                                                      <th></th>
                                                                                      <th>ลำดับที่</th>
                                                                                      <th>รายการ</th>
                                                                                      <th>ตั้งแต่</th>
                                                                                      <th>ถึง</th>
                                                                                      <th>ได้รับวันทวีคูณเนื่องจาก</th>
                                                                                     

                                                                                  </tr>
                                                                              </thead>
                                                                              <tbody align="center">
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Before_work/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                          <a href="./delete.php"><i
                                                                                                  class="la la-trash-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                      </td>
                                                                                      <td>1</td>
                                                                                      <td>มีสิทธิ์นับเวลาราชการเป็นทวีคูณตามแผนเพื่อความมั่นคงของประเทศ</td>
                                                                                      <td>1 ก.ค.2562</td>
                                                                                      <td>1 ส.ค.2562</td>
                                                                                      <td>จบภารกิจ</td>
                                                                                     


                                                                                  </tr>
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Before_work/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i>
                                                                                              <a href="./detail.php"><i
                                                                                                      class="la la-trash-o"
                                                                                                      style="color:#0f1733;"></i>
                                                                                      </td>
                                                                                      <td>2</td>
                                                                                      <td>มีสิทธิ์นับเวลาราชการเป็นทวีคูณตามแผนเพื่อความมั่นคงของประเทศ</td>
                                                                                      <td>1 ก.ค.2562</td>
                                                                                      <td>1 ส.ค.2562</td>
                                                                                      <td>จบภารกิจ</td>


                                                                                  </tr>
                                                                              </tbody>

                                                                          </table>
                      </div>
                      <div class="tab-pane" id="tab22" aria-labelledby="base-tab22">
                      <a href="./create.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">
                                                                              <span class="la la-plus-circle"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              เพิ่ม
                                                                          </a>
                                                                          <a href="./delete.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">

                                                                              <span class="la la-trash-o"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              ลบ
                                                                          </a>
                                                                          <table
                                                                              class="table table-striped table-borderless table-hover bootstrap-3 ">
                                                                              <thead>
                                                                                  <tr align="center"
                                                                                      style="background-color:#0f1733; color:whitesmoke;">
                                                                                      <th><input type="checkbox"
                                                                                              class="checkAll"
                                                                                              onclick="toggle(this);" />
                                                                                      </th>
                                                                                      <th></th>
                                                                                      <th>ลำดับที่</th>
                                                                                      <th>ประเภทความรู้พิเศษ</th>
                                                                                      <th>ความรู้พิเศษ</th>
                                                                                      <th>หลักฐาน</th>
                                                                                      


                                                                                  </tr>
                                                                              </thead>
                                                                              <tbody align="center">
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Before_work/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                          <a href="./delete.php"><i
                                                                                                  class="la la-trash-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                      </td>
                                                                                      <td>1</td>
                                                                                      <td>ความรู้พิเศษ</td>
                                                                                      <td>ภาษาอังกฤษ,ภาษาจีน</td>
                                                                                      <td>ประกาศนียบัตร</td>
                                                                                     


                                                                                  </tr>
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Before_work/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i>
                                                                                              <a href="./detail.php"><i
                                                                                                      class="la la-trash-o"
                                                                                                      style="color:#0f1733;"></i>
                                                                                      </td>
                                                                                      <td>2</td>
                                                                                      <td>ความรู้พิเศษ</td>
                                                                                      <td>ภาษาอังกฤษ,ภาษาจีน</td>
                                                                                      <td>ประกาศนียบัตร</td>
                                                                                    


                                                                                  </tr>
                                                                              </tbody>

                                                                          </table>
                      </div>
                      <div class="tab-pane" id="tab23" aria-labelledby="base-tab23">
                      <a href="./create.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">
                                                                              <span class="la la-plus-circle"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              เพิ่ม
                                                                          </a>
                                                                          <a href="./delete.php"
                                                                              class="btn btn-social btn-min-width mb-1"
                                                                              style="background-color:#0f1733; color:white;">

                                                                              <span class="la la-trash-o"
                                                                                  style="color:white; font-weight: bold;font-size: 18px"></span>
                                                                              ลบ
                                                                          </a>
                                                                          <table
                                                                              class="table table-striped table-borderless table-hover bootstrap-3 ">
                                                                              <thead>
                                                                                  <tr align="center"
                                                                                      style="background-color:#0f1733; color:whitesmoke;">
                                                                                      <th><input type="checkbox"
                                                                                              class="checkAll"
                                                                                              onclick="toggle(this);" />
                                                                                      </th>
                                                                                      <th></th>
                                                                                      <th>ลำดับที่</th>
                                                                                      <th>ประเภทความรู้พิเศษ</th>
                                                                                      <th>ความรู้พิเศษ</th>
                                                                                      <th>หลักฐาน</th>
                                                                                      


                                                                                  </tr>
                                                                              </thead>
                                                                              <tbody align="center">
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Before_work/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                          <a href="./delete.php"><i
                                                                                                  class="la la-trash-o"
                                                                                                  style="color:#0f1733;"></i></a>
                                                                                      </td>
                                                                                      <td>1</td>
                                                                                      <td>ความรู้พิเศษ</td>
                                                                                      <td>ภาษาอังกฤษ,ภาษาจีน</td>
                                                                                      <td>ประกาศนียบัตร</td>
                                                                                     


                                                                                  </tr>
                                                                                  <tr>
                                                                                      <td><input type="checkbox"
                                                                                              class="checkAll" /></td>
                                                                                      <td>
                                                                                          <a
                                                                                              href="/Hris/Views/Before_work/index.php"><i
                                                                                                  class="la la-pencil-square-o"
                                                                                                  style="color:#0f1733;"></i>
                                                                                              <a href="./detail.php"><i
                                                                                                      class="la la-trash-o"
                                                                                                      style="color:#0f1733;"></i>
                                                                                      </td>
                                                                                      <td>2</td>
                                                                                      <td>ความรู้พิเศษ</td>
                                                                                      <td>ภาษาอังกฤษ,ภาษาจีน</td>
                                                                                      <td>ประกาศนียบัตร</td>
                                                                                     
                                                                                    


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

  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>


  <!-- BEGIN PAGE LEVEL JS-->
  <!-- <script type="text/javascript" src="../../app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script> -->
  <script src="../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <!-- footer -->
  <?php include '../include/footer.php'; ?>