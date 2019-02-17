<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">จัดการโปรไฟล์</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-4 col-md-4">
                        <?php foreach($listUserID as $result): ?>
                        <div class="portlet light profile-sidebar-portlet bordered">

                            <div class="profile-userpic">
                                <center><img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-responsive"
                                        alt="">
                            </div>
                            </center>
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"><?php echo $result->name ?> </div>
                                <div class="profile-usertitle-job"> Admin </div>
                            </div>
                            <form id="edit-user" data-parsley-validate class="form-horizontal form-label-left"
                                                method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/profile/update_profile'); ?>">
                            <div class="container profile-userbuttons">
                            <button id="payment-button" type="submit class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">แก้ไขโปรไฟล์</span>
                                <!-- <span id="payment-button-sending" style="display:none;">Sending…</span> -->
                            </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="portlet light bordered">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">รายละเอียด</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <!-- <form id="edit-user" data-parsley-validate class="form-horizontal form-label-left"
                                                method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/profile/update_profile'); ?>"> -->


                                                <input type="hidden" id="user_id" name="user_id" readonly="true" value="<?php echo $result->user_id ?>"
>
 
                                                <div class="form-group">
                                                    <label for="inputName">ชื่อ</label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="<?php echo $result->name ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputLastName">นามสกุล</label>
                                                    <input type="text" class="form-control" id="inputLastName"
                                                        placeholder="Last Name" value="<?php echo $result->lastname ?>" name="lastname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputLastName">เบอร์โทร</label>
                                                    <input type="text" class="form-control" id="inputTel"
                                                        placeholder="Tel" value="<?php echo $result->tel ?>" name="tel">
                                                </div>                                                
                                                <div class="form-group">
                                                    <label for="inputAddress">ที่อยู่</label>
                                                    <textarea type="text" class="form-control" id="inputAddress"
                                                        placeholder="Address" name="address"><?php echo $result->address ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">อีเมล</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        placeholder="Email" value="<?php echo $result->email ?>" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">รหัสผ่าน</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                                        placeholder="Password" value="<?php echo $result->password ?>" name="password">
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>






                