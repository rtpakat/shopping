<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Page Products</h2>
                            <a href="<?php echo base_url('admin/products/form_add'); ?>"><button class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>เพิ่มสินค้า</button></a>        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-1 m-b-25">จัดการข้อมูลสินค้า</h2>
                        <div class="table-responsive">

                            <table id="Products" class="table table-borderless table-striped table-earning" style="width:500%;word-wrap:break-word;margit-top:12px;">
                                <thead>
                                    <tr>
                                        <th width="20%;">รูปสินค้า</th>
                                        <th width="20%;">ชื่อสินค้า</th>
                                        <th width="20%;">รายละเอียดสินค้า</th>
                                        <th width="20%;">size</th>
                                        <th width="20%;">ราคา</th>
                                        <th width="20%;">สถานะสินค้า</th>
                                        <th width="20%;">สินค้าคงเหลือ</th>
                                        <th width="20%;">ประเภท</th>
                                        <th width="20%;">ลงวันที่</th>
                                        <th width="20%;">จัดการ</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($listProducts as $result): ?>
                                    <tr>
                                        <!-- <td><?php echo $result->product_img; ?></td> -->
                                        <td width="20%;"><img src="<?php echo base_url('assets/images/products/'.$result->product_img); ?>"></td>
                                        <td width="20%;">
                                            <?php echo $result->product_name; ?>
                                        </td>
                                        <td width="20%;">
                                            <?php echo $result->product_detail; ?>
                                        </td>
                                        <td width="20%;">
                                            <?php echo $result->product_size; ?>
                                        </td>
                                        <td width="20%;">
                                            <?php echo $result->product_price; ?>
                                        </td>
                                        <td width="20%;">
                                            <?php echo $result->product_status; ?>
                                        </td>
                                        <td width="20%;">
                                            <?php if($result->product_quality == 0) {?>
                                            <span class="Inventory" style="color: #ff0001;">
                                                <?php echo $result->product_quality; ?></span></td>
                                        </td>
                                        <?php } else {?>
                                        <span class="Inventory" style="color: #28a745;">
                                            <?php echo $result->product_quality; ?></span></td>

                                        <?php }?>
                                        <td width="20%;">
                                            <?php echo $result->cate_name; ?>
                                        </td>
                                        <td width="20%;">
                                            <?php echo $result->create_time; ?>
                                        </td>
                                        <td width="20%;">          

                                           <a href="<?php echo base_url('admin/products/form_edit/'.$result->product_id); ?>"
                                                class="btn btn-warning btn-xs" style="width:100%;"><i class="zmdi zmdi-edit"></i> Edit </a>
                                            <a data-toggle="modal" href="#del-<?php echo $result->product_id ?>" 
                                            class="btn btn-danger btn-xs" style="width:100%;"><i
                                                    class="zmdi zmdi-delete" ></i> Del </a>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="del-<?php echo $result->product_id ?>" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Delete Article</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete this Article (
                                                        <?php echo "users_ID: " .$result->product_id ?>) ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <a href="<?php echo base_url('admin/products/delete_product/'.$result->product_id.'/'.$result->product_img); ?>">
                                                        <button type="button" class="btn btn-danger" id="del-confirm-<?php echo $result->product_id ?>"
                                                            userid="<?php echo $result->product_id ?>">Delete</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>