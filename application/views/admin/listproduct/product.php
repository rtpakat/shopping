<div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Page Stock</h2>
                                </div>
                            </div>
                        </div>                       
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title-1 m-b-25">จัดการสต๊อกสินค้า</h2>
                                <div class="">

                                    <table id="Products" class="table table-borderless table-striped table-earning1" style="width:100%">
                                        <thead>
                                            <tr>
                                                <!-- <th>ไอดี</th>  -->
                                                <th>ชื่อ</th>                                                
                                                <th>size</th>
                                                <th>จำนวน</th>
                                                <th>date</th>
                                                <th>action</th>
                                                <th>user</th>
                                                <!-- <th>จัดการ</th>                                                 -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(isset($listProductID)) { ?>    
                                        <?php foreach($listProductID as $result): ?>
                                            <tr>
                                                <!-- <td><?php //echo $result->list_id; ?></td> -->
                                                <td><?php echo $result->product_name; ?></td>
                                                <td><?php echo $result->product_size; ?></td>
                                                <td><?php echo $result->quality ?></td>
                                                <td><?php echo $result->create_time; ?></td>
                                                <td><?php echo $result->status; ?></td>
                                                <td><?php echo $result->name.' '.$result->lastname; ?></td>
<!--                                                 <td><a href="<?php //echo base_url('admin/list_product/product/'.$result->product_id); ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> VIEW </a></td> -->
                                            </tr>

                                <?php endforeach; ?>
                                <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
