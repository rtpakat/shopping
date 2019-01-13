<!--content-->
<div class="content-top ">
    <div class="container ">
        <div class="spec ">
            <h3>ประวัติสั่งซื้อสินค้า</h3>
        </div>
        <div class="row" style="margin-bottom: 20px;">
       
        <div class="col-lg-10">
            <div class="table-responsive">

                <table id="Products" class="table table-borderless table-striped table-earning" style="word-wrap:break-word;">
                    <thead>
                        <tr>
                            <th width="20%">รูปสินค้า</th>
                            <th width="20%;">ชื่อสินค้า</th>
                            <th width="20%;">size</th>
                            <th width="20%;">ราคา</th>
                            <th width="20%;">ประเภท</th>
                            <th width="20%;">ลงวันที่</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td  width="20%">Tiger Nixon</td>
                            <td  width="20%">System Architect</td>
                            <td  width="20%">Edinburgh</td>
                            <td  width="20%">61</td>
                            <td  width="20%">2011/04/25</td>
                            <td  width="20%">$320,800</td>
                            <td  width="20%">$320,800</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    </div>
</div>

<!--content-->

<!--content-->
<!-- Carousel
    ================================================== -->

<!--content-->
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        	var defaults = {
        	containerID: 'toTop', // fading element id
        	containerHoverID: 'toTopHover', // fading element hover id
        	scrollSpeed: 1200,
        	easingType: 'linear' 
        	};
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
<script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="<?php echo base_url('assets/js/jquery.mycart.js'); ?>"></script>
<script type="text/javascript">
    $(function() {

        var goToCartIcon = function($addTocartBtn) {
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
                "position": "fixed",
                "z-index": "999"
            });
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({
                top: position.top,
                left: position.left
            }, 500, "linear", function() {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function(products) {
                $.each(products, function() {
                    console.log(this);
                });
            },
            clickOnAddToCart: function($addTocart) {
                goToCartIcon($addTocart);
            },
            getDiscountPrice: function(products) {
                var total = 0;
                $.each(products, function() {
                    total += this.quantity * this.price;
                });
                return total * 1;
            }
        });

    });
</script>                                 

<!-- product -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">>
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Moong(1 kg)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$2.00</del>$1.50</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="1" data-name="Moong"
                            data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Sunflower Oil(5 kg)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$10.00</del>$9.00</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="2" data-name="Sunflower Oil"
                            data-summary="summary 2" data-price="9.00" data-quantity="1" data-image="<?php echo base_url('assets/images/of2.png'); ?>">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Kabuli Chana(1 kg)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$3.00</del>$2.00</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="3" data-name="Kabuli Chana"
                            data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Soya Chunks(1 kg)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$4.00</del>$3.50</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="4" data-name="Soya Chunks"
                            data-summary="summary 4" data-price="3.50" data-quantity="1" data-image="images/of3.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Lays(100 g)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$1.00</del>$0.70</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="5" data-name="Lays"
                            data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="images/of4.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Kurkure(100 g)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$1.00</del>$0.70</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="6" data-name="Kurkure"
                            data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="images/of5.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Popcorn(250 g)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$2.00</del>$1.00</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="7" data-name="Popcorn"
                            data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="images/of6.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Nuts(250 g)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$4.00</del>$3.50</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="8" data-name="Nuts"
                            data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="images/of7.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Banana(6 pcs)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$2.00</del>$1.50</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="9" data-name="Banana"
                            data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="images/of8.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Onion(1 kg)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$1.00</del>$0.70</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="10" data-name="Onion"
                            data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="images/of9.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Bitter Gourd(1 kg)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$2.00</del>$1.00</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="11" data-name="Bitter Gourd"
                            data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="images/of10.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Apples(1 kg)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$4.00</del>$3.50</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="12" data-name="Apples"
                            data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="images/of11.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Honey(500 g)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$7.00</del>$6.00</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="13" data-name="Honey"
                            data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="images/of12.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Chocos(250 g)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$5.00</del>$4.50</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="14" data-name="Chocos"
                            data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="images/of13.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Oats(1 kg)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$4.00</del>$3.50</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="15" data-name="Oats"
                            data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="images/of14.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Bread(500 g)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$1.00</del>$0.80</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="16" data-name="Bread"
                            data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="images/of15.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Moisturiser(500 g)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$1.00</del>$0.80</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="17" data-name="Moisturiser"
                            data-summary="summary 17" data-price="0.80" data-quantity="1" data-image="images/of16.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Lady Finger(250 g)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$1.00</del>$0.80</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="18" data-name="Lady Finger"
                            data-summary="summary 18" data-price="0.80" data-quantity="1" data-image="images/of17.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Satin Ribbon Red(1 pc)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$1.00</del>$0.80</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="19" data-name="Satin Ribbon Red"
                            data-summary="summary 19" data-price="0.80" data-quantity="1" data-image="images/of18.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Grapes(500 g)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$1.00</del>$0.80</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="20" data-name="Grapes"
                            data-summary="summary 20" data-price="0.80" data-quantity="1" data-image="images/of19.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Clips(1 pack)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$1.00</del>$0.80</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="21" data-name="Clips"
                            data-summary="summary 21" data-price="0.80" data-quantity="1" data-image="images/of20.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Conditioner</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$1.00</del>$0.80</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="22" data-name="Conditioner"
                            data-summary="summary 22" data-price="0.80" data-quantity="1" data-image="images/of21.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Cleaner(250 kg)</h3>
                    <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>$1.00</del>$0.80</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                        doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="23" data-name="Cleaner"
                            data-summary="summary 23" data-price="0.80" data-quantity="1" data-image="images/of22.png">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
</body>

<!-- <script>
function save(){
// alert('ddsfsf');
    var email=$('#email').val();
    var password=$('#password').val();
    // alert(email);
    //alert(gender);

     $.ajax({
        url: '<?php echo base_url();?>Login/checklogin',
        type: 'POST',
        data: {
            email: email,
            password:password

        },
        dataType: 'text',
        success: function(data) {
             console.log(data);
             alert(data);
            // alert("Succesfully Saved");
        //  location.reload(false);
        }
    }); 
}

</script> -->