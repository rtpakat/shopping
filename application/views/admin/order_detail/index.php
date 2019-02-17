<div class="page-container">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">รายการสั่งสินค้า</h2>
                                    
                                </div>
                            </div>
                        </div>                       
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title-1 m-b-25">รายการสั่งสินค้าของลูกค้า</h2>
                                <div class="table-responsive table--no-card m-b-40">

                                    <table id="Users" class="table table-borderless table-striped table-earning1" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>DateTime</th>
                                                <th>OrderID</th>                                                
                                                <th>Name</th>
                                                <th>Size</th>
                                                <th>จำนวน</th>                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(isset($listOrderDetail)) {?>
                                        <?php foreach($listOrderDetail as $result): ?>
                                            <tr>
                                                <td><?php echo $result->date_time; ?></td>
                                                <td><?php echo $result->order_id; ?></td>
                                                <td><?php echo $result->product_name; ?></td>
                                                <td><?php echo $result->product_size ; ?></td>
                                                <td><?php echo $result->amount; ?></td>
                                            </tr>
                                <?php endforeach; ?>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
