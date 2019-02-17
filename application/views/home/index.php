
<div data-vide-bg="video/video" style="position: relative;"><div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; background-image: url(&quot;https://p.w3layouts.com/demos/june-2016/01-06-2016/big_store/web/video/video.gif&quot;);"><video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; width: 1351px; height: auto;"><source src="video/video.mp4" type="video/mp4"><source src="video/video.webm" type="video/webm"><source src="video/video.ogv" type="video/ogg"></video></div>
    <div class="container">
		<div class="banner-info">
			<h3 style="font-family:kanit">การแปรรูปผลผลิตทางการเกษตร<br>กลุ่มวิสาหกิจชุมชนบ้านแควแปรรูปผลไม้</h3>	
			<!-- <div class="search-form">
				<form action="#" method="post">
					<input type="text" placeholder="Search..." name="Search...">
					<input type="submit" value=" ">
				</form>
			</div>		 -->
		</div>	
    </div>
</div>

<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3 style="font-family:kanit">ผลิตภัณฑ์ที่จัดจำหน่าย</h3>
			<span><a href="" data-toggle="modal" data-target="#howtobuy">วิธีการสั่งซื้อ</a></span><br><br>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					  <li class="active"><a href="#tab1" data-toggle="tab">ผลิตภัณฑ์ประเภทกวน</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">ผลิตภัณฑ์ประเภทอบแห้ง</a></li> 
					  <li class=""><a href="#tab3" data-toggle="tab">ผลิตภัณฑ์ประเภทเครื่องดื่ม(ผง)</a></li>  
					  <li class=""><a href="#tab4" data-toggle="tab">ผลิตภัณฑ์ประเภททอฟฟี่</a></li>
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">
                <div class="tab-pane active text-style" id="tab1">
                    <div class=" con-w3l">
                        <?php foreach($listProducts as $result): ?>
                        <?php if($result->cate_id ==1) { ?>
                          
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="<?php echo "#myModal". $result->product_id ?>" class="offer-img">
                                    <img src="<?php echo base_url('assets/images/products/'.$result->product_img); ?>"
                                        class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Offer</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="single.html">
                                                <?php echo $result->product_name; ?></a></h6>
                                    </div>
                                    <div class="mid-2">
                                        <!-- <p ><label>$10.00</label><em class="item_price">$9.00</em></p> -->
                                        <p><em class="item_price">
                                                <?php echo $result->product_price; ?></em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?php echo $result->product_id ?>" data-name="<?php echo $result->product_name; ?>"
                                            data-summary="summary 2" data-price="<?php echo $result->product_price; ?>"
                                            data-quantity="1" data-image="<?php echo base_url('assets/images/products/'.$result->product_img); ?>">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php endforeach; ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="tab-pane  text-style" id="tab2">
                    <div class=" con-w3l">
					<?php foreach($listProducts as $result): ?>
                        <?php if($result->cate_id ==2) { ?>
                        <div class="col-md-3 m-wthree">
						<div class="col-m">
                                <a href="#" data-toggle="modal" data-target="<?php echo "#myModal". $result->product_id ?>" class="offer-img">
                                    <img src="<?php echo base_url('assets/images/products/'.$result->product_img); ?>"
                                        class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Offer</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="single.html">
                                                <?php echo $result->product_name; ?></a></h6>
                                    </div>
                                    <div class="mid-2">
                                        <!-- <p ><label>$10.00</label><em class="item_price">$9.00</em></p> -->
                                        <p><em class="item_price">
                                                <?php echo $result->product_price; ?></em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?php echo $result->product_id ?>" data-name="<?php echo $result->product_name; ?>"
                                            data-summary="summary 2" data-price="<?php echo $result->product_price; ?>"
                                            data-quantity="1" data-image="<?php echo base_url('assets/images/products/'.$result->product_img); ?>">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
						</div>
						<?php } ?>
                        <?php endforeach; ?>
                        
                           
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="tab-pane  text-style" id="tab3">
                    <div class=" con-w3l">
					<?php foreach($listProducts as $result): ?>
                        <?php if($result->cate_id ==3) { ?>
                        <div class="col-md-3 m-wthree">
						<div class="col-m">
                                <a href="#" data-toggle="modal" data-target="<?php echo "#myModal". $result->product_id ?>" class="offer-img">
                                    <img src="<?php echo base_url('assets/images/products/'.$result->product_img); ?>"
                                        class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Offer</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="single.html">
                                                <?php echo $result->product_name; ?></a></h6>
                                    </div>
                                    <div class="mid-2">
                                        <!-- <p ><label>$10.00</label><em class="item_price">$9.00</em></p> -->
                                        <p><em class="item_price">
                                                <?php echo $result->product_price; ?></em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?php echo $result->product_id ?>" data-name="<?php echo $result->product_name; ?>"
                                            data-summary="summary 2" data-price="<?php echo $result->product_price; ?>"
                                            data-quantity="1" data-image="<?php echo base_url('assets/images/products/'.$result->product_img); ?>">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
						</div>
						<?php } ?>
                        <?php endforeach; ?>
                        
                           
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="tab-pane  text-style" id="tab4">
                    <div class=" con-w3l">
					<?php foreach($listProducts as $result): ?>
                        <?php if($result->cate_id ==4) { ?>
                        <div class="col-md-3 m-wthree">
						<div class="col-m">
                                <a href="#" data-toggle="modal" data-target="<?php echo "#myModal". $result->product_id ?>" class="offer-img">
                                    <img src="<?php echo base_url('assets/images/products/'.$result->product_img); ?>"
                                        class="img-responsive" alt="">
                                    <div class="offer">
                                        <p><span>Offer</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6><a href="single.html">
                                                <?php echo $result->product_name; ?></a></h6>
                                    </div>
                                    <div class="mid-2">
                                        <!-- <p ><label>$10.00</label><em class="item_price">$9.00</em></p> -->
                                        <p><em class="item_price">
                                                <?php echo $result->product_price; ?></em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?php echo  $result->product_id ?>" data-name="<?php echo $result->product_name; ?>"
                                            data-summary="summary 2" data-price="<?php echo $result->product_price; ?>"
                                            data-quantity="1" data-image="<?php echo base_url('assets/images/products/'.$result->product_img); ?>">Add
                                            to Cart</button>
                                    </div>
                                </div>
                            </div>
						</div>
						<?php } ?>
                        <?php endforeach; ?>
                        
                           
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<!--content-->
<div class="content-mid">
    <div class="container">

        <div class="col-md-4 m-w3ls">
            <div class="col-md1 ">
                <a href="kitchen.html">
                    <img src="<?php echo base_url('assets/images/co.jpg'); ?>" class="img-responsive" alt="">
                    <div class="big-sa">
                        <h6>New Collections</h6>
                        <h3>Season<span>ing </span></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 m-w3ls1">
            <div class="col-md ">
                <a href="hold.html">
                    <img src="<?php echo base_url('assets/images/co1.jpg'); ?>" class="img-responsive" alt="">
                    <div class="big-sale">
                        <div class="big-sale1">
                            <h3>Big <span>Sale</span></h3>
                            <p>It is a long established fact that a reader </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 m-w3ls">
            <div class="col-md2 ">
                <a href="kitchen.html">
                    <img src="<?php echo base_url('assets/images/co2.jpg'); ?>" class="img-responsive" alt="">
                    <div class="big-sale2">
                        <h3>Cooking <span>Oil</span></h3>
                        <p>It is a long established fact that a reader </p>
                    </div>
                </a>
            </div>
            <div class="col-md3 ">
                <a href="hold.html">
                    <img src="<?php echo base_url('assets/images/co3.jpg'); ?>" class="img-responsive" alt="">
                    <div class="big-sale3">
                        <h3>Vegeta<span>bles</span></h3>
                        <p>It is a long established fact that a reader </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--content-->
<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="kitchen.html"> <img class="first-slide" src="<?php echo base_url('assets/images/ba.jpg'); ?>" alt="First slide"></a>

        </div>
        <div class="item">
            <a href="care.html"> <img class="second-slide " src="<?php echo base_url('assets/images/ba1.jpg'); ?>" alt="Second slide"></a>

        </div>
        <div class="item">
            <a href="hold.html"><img class="third-slide " src="<?php echo base_url('assets/images/ba2.jpg'); ?>" alt="Third slide"></a>

        </div>
    </div>

</div><!-- /.carousel -->

<!--content-->
<div class="product">
    <div class="container">
        <div class="spec ">
            <h3>Special Offers</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class=" con-w3l">
            <?php foreach($listProducts as $result): ?>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="<?php echo "#myModal". $result->product_id ?>" class="offer-img">
					<img src="<?php echo base_url('assets/images/products/'.$result->product_img); ?>">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="single.html"> <?php echo $result->product_name ?></a>(250 g)</h6>
                        </div>
                        <div class="mid-2">
                            <p><label></label><em class="item_price"><?php echo $result->product_price ?></em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?php echo $result->product_id ?>" data-name="<?php echo $result->product_name ?>"
                                data-summary="summary 1" data-price="<?php echo $result->product_price ?>" data-quantity="1" data-image="<?php echo base_url('assets/images/products/'.$result->product_img); ?>">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
			</div>
			<?php endforeach; ?>
            
            <div class="clearfix"></div>
        </div>
    </div>
</div>
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
                // console.log()
            }
        });

    });
</script>


<?php foreach($listProducts as $result): ?>

<div class="modal fade" id="<?php echo "myModal". $result->product_id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
           

            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="<?php echo base_url('assets/images/products/'.$result->product_img); ?>" class="img-responsive"
                            alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3><?php echo $result->product_name ?></h3>
                    <p class="in-para"> <?php echo $result->product_title ?></p>
                    <div class="price_single">
                        <span class="reducedfrom "><del></del><?php echo $result->product_price ?></span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> <?php echo $result->product_detail ?></p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="<?php echo $result->product_id ?>" data-name="<?php echo $result->product_name ?>"
                            data-summary="summary 1" data-price="<?php echo $result->product_price ?>" data-quantity="1" data-image="<?php echo base_url('assets/images/products/'.$result->product_img); ?>">Add
                            to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
           
        </div>
    </div>
    
</div>
<?php endforeach; ?>
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

<script>
window.onscroll = startsc;
function startsc() {
	var sctop = (document.all)?document.body.scrollTop:window.pageYOffset;
	document.getElementById("Cart").style.top = sctop+5+"px";
}

var elements = document.getElementsByTagName("price")
for (var i = 0; i < elements.length; i++) {
    if(elements[i].value == "") {
        alert('empty');
        //Do something here
    }
}

console.log(localStorage.getItem('sumpqulity'));    


function load_data(amount_product,sumprice){
    // debugger;
  $.ajax({
    url:"<?php echo base_url();?>member/Order_member/insert_ref_order",   
    method: "POST",
    // contentType: 'application/json; charset=utf-8',
    // url: "'http:/localhost/shopping/api/order/",
    data:{ "amount_product": amount_product ,"sumprice":sumprice},
    success: function (data) {
        if(data>0){
            send_data(data);
        }else{

        }
      console.log("REF DATA FK: "+ data);
    //   console.log(datareturn.promise.responseText);
    }
    // send_data();
  });
  //console.log(localStorage.getItem('order_id'));
  

}

</script>		
<script>
function send_data(x){
console.log("-----------------------") ;
//console.log(localStorage.getItem('products'));
localStorage.setItem("order_id", x);
var test = localStorage.getItem('products');
var storedNames = JSON.parse(localStorage.getItem("products"));

for(var i=0; i<storedNames.length; i++){
    $.ajax({
    url:"<?php echo base_url();?>member/Order_member/insert_order_detail",   
    method: "POST",
    // contentType: 'application/json; charset=utf-8',
    // url: "'http:/localhost/shopping/api/order/",
    data:{ "order_id": localStorage.getItem("order_id"), "product_id": storedNames[i] },
    success: function (data) {
      console.log(data);
    }
  });
}



}

</script>


