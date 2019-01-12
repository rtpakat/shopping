<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">พนักงาน</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">เพิ่มข้อมูลพนักงาน</h3>
                        </div>
                        <hr>
                        <form id="edit-user" data-parsley-validate class="form-horizontal form-label-left" method="POST"
                            enctype="multipart/form-data" action="<?php echo base_url('admin/users/insert_user'); ?>">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                    <label class="control-label" for="name">ชื่อ
                                    </label>
                                    <input type="text" id="name" name="name" class="form-control ">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                    <label class="control-label" for="lastname">นามสกุล
                                    </label>
                                    <input type="text" id="lastname" name="lastname" class="form-control ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                    <label class="control-label" for="email">email
                                    </label>
                                    <input type="email" id="email" name="email" class="form-control ">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                    <label class="control-label  " for="password">password
                                    </label>
                                    <input type="type" id="password" name="password" class="form-control ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                    <label class="control-label  " for="email">เบอร์โทรศัพท์
                                    </label>
                                    <input type="tel" id="tel" name="tel" class="form-control ">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                    <label class="control-label  " for="salary">เงินเดือน
                                    </label>
                                    <input type="text" id="salary" name="salary" class="form-control ">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                    <label class="control-label" for="type">ประเภทผู้ใช้งาน
                                    </label>
                                    <select class="form-control" name="typeuser">
                                        <?php foreach($type as $typeuser): ?>
                                        <?php if($typeuser->type_id != 1){ ?>
                                        <option value="<?php echo $typeuser->type_id ?>">
                                            <?php echo $typeuser->type_name ?>
                                        </option>
                                        <?php } ?>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                    <label class="control-label  " for="address">ที่อยู่
                                    </label>

                                    <textarea class="form-control" required="required" rows="12" id="address" name="address"></textarea>

                                </div>
                            </div>
                            <center>
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success btn-lg">Save</button><br /><br />
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
            </div>