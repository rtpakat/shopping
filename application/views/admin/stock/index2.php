<div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Page Stock</h2>
                                    <a href="<?php echo base_url('admin/stock/form_add'); ?>"><button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>เพิ่มวัตถุดิบ</button></a>
                                </div>
                            </div>
                        </div>                       
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <h2 class="title-1 m-b-25">รายการวัตุดิบ</h2>
                                <div class="table-responsive table--no-card m-b-40">

                                    <table id="Products" class="table table-borderless table-striped table-earning" style="width:100%;table-layout:fixed; ">
                                        <thead>
                                            <tr>                 
                                                <th width="20%;">ไอดี</th>
                                                <th width="20%;">ชื่อ</th>
                                                <th width="20%;">เวลา</th>
                                                <th width="20%;">จำนวน</th>                   
                                                <th width="20%;">จัดการ</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(isset($listStock)) { ?>    
                                        <?php foreach($listStock as $result): ?>
                                            <tr>
                                                <td width="20%;"><?php echo $result->stock_id; ?></td>
                                                <td width="20%;"><?php echo $result->stock_name; ?></td>
                                                <td width="20%;"><?php echo $result->create_time; ?></td>
                                                <td width="20%;"><?php echo $result->stock_qty; ?></td>

                                                <td width="20%;"><a href="<?php echo base_url('admin/stock/form_edit/'.$result->stock_id); ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                <a data-toggle="modal" href="#del-<?php echo $result->stock_id ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Del </a></td>
                                            </tr>
                                
                        <div class="modal fade" id="del-<?php echo $result->stock_id ?>" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Delete Article</h4>
                              </div>
                              <div class="modal-body">
                                <p>Are you sure you want to delete this Article (<?php echo "users_ID: " .$result->stock_id ?>) ?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="<?php echo base_url('admin/stock/delete_stock/'.$result->stock_id); ?>" >
                                <button type="button" class="btn btn-danger" id="del-confirm-<?php echo $result->stock_id ?>" userid="<?php echo $result->stock_id ?>">Delete</button></a>
                              </div>
                            </div>
                          </div>
                        </div>

                                <?php endforeach; ?>
                                        <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                      