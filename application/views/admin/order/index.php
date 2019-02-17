<div class="page-container">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">จัดการข้อมูลสั่งสินค้า</h2> 
                                </div>
                            </div>
                        </div>                       
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title-1 m-b-25">จัดการข้อมูลสั่งรายการสินค้า</h2>
                                <div class="table-responsive table--no-card m-b-40">

                                    <table id="Users" class="table table-borderless table-striped table-earning1" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Datetime</th>
                                                <th>OrderID</th>                                                
                                                <th>Member</th>
                                                <th>ราคารวม</th>
                                                <th>Status</th>
                                                <th>จัดการ</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(isset($listOrder)) {?>
                                        <?php foreach($listOrder as $result):  ?>
                                            <?php if($result->status_id == 2) { ?>
                                            <tr>
                                                <td><?php echo $result->createtime; ?></td>
                                                <td><?php echo $result->order_id; ?></td>
                                                <td><?php echo $result->name .$result->lastname ; ?></td>
                                                <td><?php echo $result->sum_price ; ?></td>
                                                <td><?php echo $result->status_name; ?></td>

                                        <td width="10%;">
                                        <a href="<?php echo base_url('admin/order_detail/get/'.$result->order_id); ?>" 
                                        class="btn btn-info btn-xs" style="width:80%;"><i class="zmdi zmdi-format-list-bulleted"></i> View </a>
                                        <a href="<?php echo base_url('admin/order/update_ref_order_notok/'.$result->order_id.'/'.$result->status_id); ?>" 
                                        class="btn btn-warning btn-xs" style="width:80%;"><i class="zmdi zmdi-minus"></i> Reject </a>
                                        <a href="<?php echo base_url('admin/order/update_ref_order_ok/'.$result->order_id.'/'.$result->status_id); ?>"
                                         class="btn btn-success btn-xs" style="width:80%;"><i class="zmdi zmdi-plus"></i> Accept </a>

                                        </td>
                                            </tr>
                                    <?php } ?>
                                    <?php if($result->status_id == 1) { ?>
                                            <tr>
                                                <td><?php echo $result->createtime; ?></td>
                                                <td><?php echo $result->order_id; ?></td>
                                                <td><?php echo $result->name .$result->lastname ; ?></td>
                                                <td><?php echo $result->sum_price ; ?></td>
                                                <td><?php echo $result->status_name; ?></td>

                                        <td width="10%;">
                                        <a href="<?php echo base_url('admin/order_detail/get/'.$result->order_id); ?>" 
                                        class="btn btn-info btn-xs" style="width:80%;"><i class="zmdi zmdi-format-list-bulleted"></i> View </a>
                                        <a href="<?php echo base_url('admin/order/update_ref_order_ok/'.$result->order_id.'/'.$result->status_id); ?>"
                                         class="btn btn-success btn-xs" style="width:80%;"><i class="zmdi zmdi-plus"></i> Accept </a>
                                         <a href="<?php echo base_url('admin/order/update_ref_order_notok/'.$result->order_id.'/'.$result->status_id); ?>"
                                         class="btn btn-warning btn-xs" style="width:80%;"><i class="zmdi zmdi-minus"></i> Reject </a>

                                        </td>
                                            </tr>
                                    <?php } ?>
                                    <?php if($result->status_id == 3) { ?>
                                            <tr>
                                                <td><?php echo $result->createtime; ?></td>
                                                <td><?php echo $result->order_id; ?></td>
                                                <td><?php echo $result->name .$result->lastname ; ?></td>
                                                <td><?php echo $result->sum_price ; ?></td>
                                                <td><?php echo $result->status_name; ?></td>

                                        <td width="10%;">
                                        <a href="<?php echo base_url('admin/order_detail/get/'.$result->order_id); ?>" 
                                        class="btn btn-info btn-xs" style="width:80%;"><i class="zmdi zmdi-format-list-bulleted"></i> View </a>
                                        </td>
                                            </tr>
                                    <?php } ?>
                                    <?php if($result->status_id == 4) { ?>
                                            <tr>
                                                <td><?php echo $result->createtime; ?></td>
                                                <td><?php echo $result->order_id; ?></td>
                                                <td><?php echo $result->name .$result->lastname ; ?></td>
                                                <td><?php echo $result->sum_price ; ?></td>
                                                <td><?php echo $result->status_name; ?></td>

                                        <td width="10%;">
                                        <a href="<?php echo base_url('admin/order_detail/get/'.$result->order_id); ?>" 
                                        class="btn btn-info btn-xs" style="width:80%;"><i class="zmdi zmdi-format-list-bulleted"></i> View </a>

                                        </td>
                                            </tr>
                                    <?php } ?>
                                <?php endforeach; ?>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
