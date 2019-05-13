  <!-- header -->
  <?php include '../include/header.php'; ?>
  <?php include '../../Model/Ducklab/func.php'; ?>
  <?php  
  //Recruitment and appointment
    $menu1 = "RECRNAPPOINT" ;
    $menu2 = "PlanManpower" ;


  ?>
  <!-- menu -->
  <?php include '../include/menu.php'; ?>

  <section>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
          <h3 class="content-header-title">แผนการบรรจุกำลังพล (จากกองแผน)</h3>
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
                        <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานสรรหาและบรรจุกำลังพล</a></li> 
                        <li class="breadcrumb-item active" aria-current="page">แผนการบรรจุกำลังพล</li>
                      </ol>
                    </nav>
                    
                    <table id="personTypesTable" class="table table-striped table-borderless table-hover bootstrap-3 " style="width:100%;">
                      <thead>
                        <tr style="background-color:#0f1733; color:whitesmoke;text-align: center;">
                          <th><input type="checkbox" class="checkAll" onclick="toggle(this);" /></th>
                          <th>ลำดับที่</th>
                          <th>คุณวุฒิ</th>
                          <th>ตำแหน่ง</th>
                          <th>เหล่าทหาร/จำพวกทหาร</th>
                          <th>เพศ</th>
                          <th> อัตรา</th>
                          <th> สังกัด</th>
                          <th> จำนวน </th>
                        </tr>
                      </thead>
                      <tbody> 
                      </tbody>
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

  
 
  
  

    

  <!-- footer -->
  <?php include '../include/footer.php'; ?>
  <script type="text/javascript">
    $(document).ready(function() { 
     
    }); 
  </script>
  <script src="../../Controllers/planManpowerController.js"></script>