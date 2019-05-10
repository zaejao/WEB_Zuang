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
                  <div class="content-header-left col-12 mb-2">
                      <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                      <h3 class="content-header-title">ข้อมูลบุคคล</h3>
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
                                          <p class="card-text"></p>
                                          <nav aria-label="breadcrumb">
                                              <ol class="breadcrumb">
                                                  <li class="breadcrumb-item"><a
                                                          href="../home/index.php">งานประวัติข้าราชการ</a></li>
                                                  <li class="breadcrumb-item active" aria-current="page">
                                                      ข้อมูลบุคคล</li>
                                              </ol>
                                          </nav>

                                          <div
                                                  class="card collapse-icon accordion-icon-rotate active">
                                                                          <div id="headingCollapse31"
                                                                              class="card-header bg-success">
                                                                              <a data-toggle="collapse"
                                                                                  href="#collapse31"
                                                                                  aria-expanded="true"
                                                                                  aria-controls="collapse31"
                                                                                  class="card-title lead white">
                                                                                  <h6>
                                                                                      ค้นหา</h6>
                                                                              </a>
                                                                          </div>
                                                                          <div id="collapse31" role="tabpanel"
                                                                              aria-labelledby="headingCollapse31"
                                                                              class="card-collapse collapse show"
                                                                              aria-expanded="true" style="padding-left:300px;background-color:slategray;">
                                                                              <div class="card-content">
                                                                                  <div class="card-body">
                                                                                      <div class="row match-height">
                                                                                          <div
                                                                                              class="col-lg-3 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div class="card-body">
                                                                                                      ประเภทสัญบัตร :
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
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                      </select>
                                                                                                  
                                                                                                  </div>
                                                                                                 
                                                                                                 

                                                                                                     <div class="card-body"
                                                                                                    >
                                                                                                      ตำแหน่ง :
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
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>

                                                                                                  </div>


                                                                                                  <div
                                                                                              class="col-lg-3 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div class="card-body"
                                                                                                      id="Government_Number">
                                                                                                      1:
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="">
                                                                                                  </div>
                                                                                                
                                                                                               
                                                                                                
                                                                                             
                                                                                              </div>
                                                                                          </div>
                                                                                               
                                                                                              </div>
                                                                                          </div>
                                                                                          
                                                                                          <div
                                                                                              class="col-lg-3 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div class="card-body"
                                                                                                      id="Government_Number">
                                                                                                      หมายเลขประจำตัวราชการ:
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="">
                                                                                                  </div>
                                                                                                
                                                                                               
                                                                                                  <div class="card-body"
                                                                                                      id="Government_Number">
                                                                                                      หมายเลขประจำตัวราชการ:
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="">
                                                                                                  </div>
                                                                                             
                                                                                              </div>
                                                                                          </div>
                                                                                          <div
                                                                                              class="col-lg-3 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div class="card-body"
                                                                                                      id="Government_Number">
                                                                                                      หมายเลขแฟ้มประวัติ :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="หมายเลขแฟ้มประวัติ">
                                                                                                  </div>
                                                                                                
                                                                                               
                                                                                                  <div class="card-body"
                                                                                                      id="Government_Number">
                                                                                                      หมายเลขประจำตัวราชการ :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="หมายเลขประจำตัวราชการ">
                                                                                                  </div>                                                                                         
                                                                                              </div>
                                                                                          </div>


                                                                                        
                                                                                   
                                                                                     

                                                                                          
                                                                                      </div>
                                                                                      <br>
                                                                                      <br>
                                                                                      <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
 
 <button type="submit"><i class="fa fa-search">ค้นหา</i></button>
 <button type="submit"><i class="fa fa-search">ล้างค่า</i></button>
</form>             
                                                                                  </div>
                                                                              </div>
                                                                          </div>

 
                                                                      </div>
                                     


                                          <br>

                                          <a href="./create.php" class="btn btn-social btn-min-width mb-1"
                                              style="background-color:#0f1733; color:white;">
                                              <span class="la la-plus-circle"
                                                  style="color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                                          </a>
                                          <a href="./delete.php" class="btn btn-social btn-min-width mb-1"
                                              style="background-color:#0f1733; color:white;">
                                              <span class="la la-trash-o"
                                                  style="color:white; font-weight: bold;font-size: 18px"></span> ลบ
                                          </a>
                                          <table class="table table-striped table-borderless table-hover bootstrap-3 ">
                                              <thead>
                                                  <tr align="center"
                                                      style="background-color:#0f1733; color:whitesmoke;">
                                                      <th><input type="checkbox" class="checkAll"
                                                              onclick="toggle(this);" /></th>
                                                      <th></th>
                                                      <th>ลำดับที่</th>
                                                      <th>เลขประจำตัวข้าราชการ</th>
                                                      <th>หมายเลขแฟ้ม</th>
                                                      <th>ยศ</th>
                                                      <th>ชื่อ</th>
                                                      <th>นามสกุล</th>
                                                      <th>ตำแหน่ง</th>
                                                      <th>สถานะ</th>
                                                  </tr>
                                              </thead>
                                              <tbody align="center">
                                                  <tr>
                                                      <td><input type="checkbox" class="checkAll" /></td>
                                                      <td>
                                                          <a href="./detail.php"><i class="la la-pencil-square-o"
                                                                  style="color:#0f1733;"></i></a>
                                                          <a href="./delete.php"><i class="la la-trash-o"
                                                                  style="color:#0f1733;"></i></a>
                                                      </td>
                                                      <td>1</td>
                                                      <td>322330086500</td>
                                                      <td>ก20/58</td>
                                                      <td>ร.อ.</td>
                                                      <td>กิตติศักดิ์</td>
                                                      <td>สอนสวน</td>
                                                      <td>ชำนาญการพิเศษ</td>
                                                      <td align="center">
                                                          <input type="checkbox" checked data-toggle="toggle"
                                                              data-style="ios" data-on="ปกติ" data-off="ยกเลิก"
                                                              data-onstyle="success" data-offstyle="danger"
                                                              data-size="sm">
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td><input type="checkbox" class="checkAll" /></td>
                                                      <td>
                                                      <a href="./detail.php"><i class="la la-pencil-square-o" style="color:#0f1733;"></i>
                                                      <a href="./detail.php"><i class="la la-trash-o" style="color:#0f1733;"></i>
                                                      </td>
                                                      <td>2</td>
                                                      <td>33233085820</td>
                                                      <td>ก20/58</td>
                                                      <td>ร.อ.</td>
                                                      <td>กิตติศักดิ์.</td>
                                                      <td>สอนสวน</td>
                                                      <td>ชำนาญการพิเศษ</td>
                                                      <td align="center">
                                                          <input type="checkbox" checked data-toggle="toggle"
                                                              data-style="ios" data-on="ปกติ" data-off="ยกเลิก"
                                                              data-onstyle="success" data-offstyle="danger"
                                                              data-size="sm">
                                                      </td>
                                                  </tr>
                                              </tbody>
                                              <!-- <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot> -->
                                          </table>
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

  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>

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