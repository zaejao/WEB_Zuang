<?php require_once '../../config.php' ?>
<!-- header -->
<?php include '../include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/selects/select2.min.css">
<link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert.css">

<link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
<link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/pickers/daterange/daterange.css">


<link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/icheck.css">
<link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/custom.css">

<link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/checkboxes-radios.css">

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
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

<script>
    $(document).ready(function() {
        getIdForEdit();
    });
</script>



<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                <h3 class="content-header-title">เพิ่มอัตราตำแหน่งในโครงสร้างอัตรา</h3>
                <input type="text" name="orgTypeId" id="orgTypeId" value="">
            </div>

        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">ระบบงานโครงสร้างอัตรากำลังพล</a></li>
                <li class="breadcrumb-item"><a href="./index.php">โครงสร้าง</a></li>
                <li class="breadcrumb-item active" aria-current="page">เพิ่มอัตราตำแหน่งในโครงสร้างอัตรา</li>
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
                                    <form 1rm-horizontal">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="col-md-6 label-control" for="orgGroupTypeId">ประเภทโครงสร้าง</label>
                                                    <div class="col-md-12">
                                                        <select name="orgGroupTypeId" id="orgGroupTypeId" class="select2 form-control">
                                                            <option value="">กรุณาเลือกประเภทโครงสร้าง</option>
                                                            <?php
                                                            $sql = " SELECT OrgGroupTypeId, OrgGroupTypeName FROM OrgGroupType; ";
                                                            $result = sqlsrv_query($conn, $sql);
                                                            while ($row = sqlsrv_fetch_array($result)) {
                                                                echo "<option value='" . $row['OrgGroupTypeId'] . "'>" . $row['OrgGroupTypeName'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="col-md-4 label-control" for="orgTypeName">ชื่อโครงสร้าง</label>

                                                    <div class="col-md-12">
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="orgTypeName" name="orgTypeName" class="form-control border-primary" placeholder="ชื่อโครงสร้าง">
                                                            <div class="form-control-position">
                                                                <i class="ft-user"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <!-- <div class="col-md-12">
                                                      <label class="col-md-4 label-control" for="userinput2">ชื่อหน่วยงาน</label>

                                                      <div class="col-md-12">
                                                          <div class="position-relative has-icon-left">
                                                              <input type="text" id="timesheetinput1" class="form-control border-primary" placeholder="ชื่อหน่วยงาน" name="employeename">
                                                              <div class="form-control-position">
                                                                  <i class="ft-user"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div> -->

                                            </div>

                                            <div class="row mt-1">
                                                <div class="col-md-6">
                                                    <label class="col-md-6 label-control" for="startDate">วันที่เริ่มต้น</label>
                                                    <div class="input-group col-md-12">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <span class="la la-calendar-o"></span>
                                                            </span>
                                                        </div>
                                                        <input type='text' id="startDate" name="startDate" class="form-control pickadate-limits" placeholder=" _/_/_ " />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-md-6 label-control" for="endDate">วันที่สิ้นสุด</label>
                                                    <div class="input-group col-md-12">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <span class="la la-calendar-o"></span>
                                                            </span>
                                                        </div>
                                                        <input type='text' id="endDate" name="endDate" class="form-control pickadate-limits" placeholder=" _/_/_ " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-1">
                                            <fieldset class="checkboxsas">
                                                <label>
                                                    <input id="airForce" type="checkbox" value="1">&nbsp;โครงสร้างของ ทอ.
                                                </label>
                                            </fieldset>
                                            <fieldset class="checkbox">
                                                <label>
                                                    <input id="multiplesDay" type="checkbox" value="1">&nbsp;ได้รับวันทวีคูณ
                                                </label>
                                            </fieldset>
                                            <fieldset class="checkbox">
                                                <label>
                                                    <input id="currentOrg" type="checkbox" value="1">&nbsp;โครงสร้างปัจจุบัน
                                                </label>
                                            </fieldset>
                                            <div>
                                                <label class="label-control" for="userinput3">สถานะ</label>
                                                <input id="isActive" type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                            </div>
                                        </div>
                                        <div class="form-actions center" align="center">
                                            <button type="button" class="btn btn-danger  round btn-min-width mr-1 mb-1" id="type-error">ยกเลิก</button>
                                            <button type="button" class="btn btn-success  round btn-min-width mr-1 mb-1" id="submit" onclick="UpdateOrgType()">บันทึก</button>
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

<script src="../../Controllers/organizationTypeController.js"></script>

<!-- BEGIN VENDOR JS-->
<script src="../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- END PAGE LEVEL JS-->

<!-- select2 -->
<script src="../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
<script src="../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>

<!-- date -->
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script>
<script src="../../app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script>
<script src="../../app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
<script src="../../app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
<script src="../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script>
<!-- checkbox -->
<script src="../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
<script src="../../app-assets/js/scripts/forms/checkbox-radio.js" type="text/javascript"></script>

<!-- footer -->
<?php include '../include/footer.php'; ?>