<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Page Products</h2>        
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-1 m-b-25">จัดการข้อมูลสต็อกวัตถุดิบ</h2>
                        <div class="table-responsive">

                            <table id="Products" class="table table-borderless table-striped table-earning" style="word-wrap:break-word;">
                                <thead>
                                    <tr>
                                        <th width="10%;">รูปสินค้า</th>
                                        <th width="10%;">ชื่อสินค้า</th>
                                        <th width="10%;">size</th>
                                        <th width="10%;">ราคา</th>
                                        <th width="10%;">สินค้าคงเหลือ</th>
                                        <th width="10%;">ประเภท</th>
                                        <th width="10%;">ลงวันที่</th>
                                        <th width="10%;">จัดการสต๊อก</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($listProducts as $result): ?>
                                    <tr>
                                        <!-- <td><?php echo $result->product_img; ?></td> -->
                                        <td width="10%;"><img src="<?php echo base_url('assets/images/products/'.$result->product_img); ?>" width="70%;height:70%;"></td>
                                        <td width="10%;">
                                            <?php echo $result->product_name; ?>
                                        </td>
                                        <td width="10%;">
                                            <?php echo $result->product_size; ?>
                                        </td>
                                        <td width="10%;">
                                            <?php echo $result->product_price; ?>
                                        </td>
                                        <td width="10%;">
                                            <?php if($result->product_quality == 0) {?>
                                            <span class="Inventory" style="color: #ff0001;">
                                                <?php echo $result->product_quality; ?></span></td>
                                        </td>
                                        <?php } else {?>
                                        <span class="Inventory" style="color: #28a745;">
                                            <?php echo $result->product_quality; ?></span></td>

                                        <?php }?>
                                        <td width="10%;">
                                            <?php echo $result->cate_name; ?>
                                        </td>
                                        <td width="10%;">
                                            <?php echo $result->create_time; ?>
                                        </td>
                                        <td width="10%;">
                                        <a href="<?php echo base_url('admin/List_Product/form_add/'.$result->product_id); ?>" 
                                        class="btn btn-success btn-xs" style="width:80%;"><i class="zmdi zmdi-plus"></i> ADD Stock</a>
                                        <?php if($result->product_quality > 0){ ?>
                                        <a href="<?php echo base_url('admin/List_Product/form_withdraw/'.$result->product_id); ?>"
                                         class="btn btn-warning btn-xs" style="width:80%;"><i class="zmdi zmdi-minus"></i> Withdraw </a>
                                        <?php } ?>
                                        <a href="<?php echo base_url('admin/List_Product/product/'.$result->product_id); ?>" 
                                        class="btn btn-info btn-xs" style="width:80%;"><i class="zmdi zmdi-format-list-bulleted"></i> VIEW</a>
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