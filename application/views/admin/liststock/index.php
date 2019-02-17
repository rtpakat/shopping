<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">จัดการวัตถุดิบสต็อกสินค้า</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-1 m-b-25">จัดการวัตถุดิบสต็อกสินค้า</h2>
                        <div class="table-responsive table--no-card m-b-40">

                            <table id="Products" class="table table-borderless table-striped table-earning" style="width:100%;table-layout:fixed; ">
                                <thead>
                                    <tr>
                                        <th style="width:20px">ไอดี</th>
                                        <th style="width:20px">ชื่อ</th>
                                        <th style="width:20px">เวลา</th>
                                        <th style="width:20px">จำนวน</th>
                                        <th style="width:20px">จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($listStock as $result): ?>
                                    <tr>
                                        <td style="width:20px">
                                            <?php echo $result->stock_id; ?>
                                        </td>
                                        <td style="width:20px">
                                            <?php echo $result->stock_name; ?>
                                        </td >
                                        <td style="width:20px">
                                            <?php echo $result->create_time; ?>
                                        </td>
                                        <td style="width:20px">
                                            <?php if($result->stock_qty == 0) {?>
                                            <span class="Inventory" style="color: #ff0001;">
                                                <?php echo $result->stock_qty;?></span></td>
                                        </td>
                                        <?php } else {?>
                                        <span class="Inventory" style="color: #28a745;">
                                            <?php echo $result->stock_qty; ?></span></td>

                                        <?php }?>
                                        

                                        <td style="width:20px">
                                            <?php if($result->stock_qty > 0){ ?>

                                            <a href="<?php echo base_url('admin/List_Stock/form_add/'.$result->stock_id); ?>"
                                                class="btn btn-success btn-xs" style="width:80%;"><i class="zmdi zmdi-plus"></i>
                                                ADD </a>
                                            <a href="<?php echo base_url('admin/List_Stock/form_withdraw/'.$result->stock_id); ?>"
                                                class="btn btn-warning btn-xs" style="width:80%;"><i class="zmdi zmdi-minus"></i>
                                                Withdraw </a>
                                            <?php }else { ?>
                                            <a href="<?php echo base_url('admin/List_Stock/form_add/'.$result->stock_id); ?>"
                                                class="btn btn-success btn-xs" style="width:80%;"><i class="zmdi zmdi-plus"></i>
                                                ADD </a>
                                            <?php } ?>
                                            <a href="<?php echo base_url('admin/List_Stock/stock/'.$result->stock_id); ?>"
                                                class="btn btn-info btn-xs" style="width:80%;"><i class="zmdi zmdi-format-list-bulleted"></i>
                                                VIEW </a>



                                        </td>
                                    </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>