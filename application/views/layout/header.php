<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>บ้านแคว Bankwae</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js'); ?>"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->

<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js'); ?>"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet"> 
<link href="<?php echo base_url('//fonts.googleapis.com/css?family=Montserrat:400,700'); ?>" rel='stylesheet' type='text/css'>
<link href="<?php echo base_url('//fonts.googleapis.com/css?family=Noto+Sans:400,700'); ?>" rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="<?php echo base_url('assets/js/jstarbox.js'); ?>" >
	<link rel="stylesheet" href="<?php echo base_url('assets/css/jstarbox.css'); ?>" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> 

</header><meta charset="utf-8">
<link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
<style>
body {
  font-family: 'Kanit';
  font-weight:500;
}

</style>
<body>
<div class="header">
		<div class="container">		
			<div class="logo">
				<h1 style="font-family:Kanit"><a href="index.php"><b>B<br>A<br>K</b>บ้านแคว<span style="font-family:Kanit">วิสาหกิจชุมชนแปรรูปผลผลิตทางการเกษตร</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="<?php echo base_url('Home/index'); ?>" ><i class="fa fa-heart" aria-hidden="true"></i>หน้าหลัก</a></li>
					<li><a href="<?php echo base_url("member/Member/orderhistory"); ?>" ><i class="fa fa-file-text-o" aria-hidden="true"></i>ประวัติการสั่งซื้อ</a></li>
					<li><a href="<?php echo base_url("member/Member/transportation"); ?>" ><i class="fa fa-truck" aria-hidden="true"></i>การส่งสินค้า</a></li>					<?php if($this->session->userdata('auth') == null && $this->session->userdata('display_name') == "" ) { ?>
					<li>
						<a href="" data-toggle="modal" data-target="#myModal">
						<i class="fa fa-user" aria-hidden="true"></i> |  เข้าสู่ระบบ </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModalregis">
						<i class="fa fa-arrow-right" aria-hidden="true"></i> สมัครสมาชิก </a>
					</li>
					<?php }else{ ?>
					<li>
						<a href="" data-toggle="modal" data-target="#myModal">
						<i class="fa fa-user" aria-hidden="true"></i> |  <?php echo $this->session->userdata('display_name'); ?> </a>
					</li>
					<li>
						<a href="<?php echo base_url('login/logout'); ?>">
						<i class="fa fa-arrow-right" aria-hidden="true"></i> ออกจากระบบ </a>
					</li>	
					<?php } ?>					
				</ul>	
			</div>
			

			<!-- Menu Bar -->
			<div class="nav-top">
								<nav class="navbar navbar-default">
								
								<div class="navbar-header nav_2">
									<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									

								</div> 
								<!-- <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
									<ul class="nav navbar-nav ">
										<li class=" active"><a href="index.html" class="hyper "><span>หน้าหลัก</span></a></li>	
										
										<li class="dropdown ">
											<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Kitchen<b class="caret"></b></span></a>
											<ul class="dropdown-menu multi">
												<div class="row">
													<div class="col-sm-3">
														<ul class="multi-column-dropdown">
						
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Water & Beverages</a></li>
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruits & Vegetables</a></li>
															<li><a href="kitchen.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Staples</a></li>
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Branded Food</a></li>
													
														</ul>
													
													</div>
													<div class="col-sm-3">
													
														<ul class="multi-column-dropdown">
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Breakfast &amp; Cereal</a></li>
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Snacks</a></li>
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Spices</a></li>
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Biscuit &amp; Cookie</a></li>
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Sweets</a></li>
													
														</ul>
													
													</div>
													<div class="col-sm-3">
													
														<ul class="multi-column-dropdown">
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pickle & Condiment</a></li>
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant Food</a></li>
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Dry Fruit</a></li>
															<li><a href="kitchen.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Tea &amp; Coffee</a></li>
													
														</ul>
													</div>
													<div class="col-sm-3 w3l">
														<a href="kitchen.html"><img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt=""></a>
													</div>
													<div class="clearfix"></div>
												</div>	
											</ul>
										</li>
										<li class="dropdown">
										
											<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Personal Care <b class="caret"></b></span></a>
											<ul class="dropdown-menu multi multi1">
												<div class="row">
													<div class="col-sm-3">
														<ul class="multi-column-dropdown">
															<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Ayurvedic </a></li>
															<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Baby Care</a></li>
															<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
															<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Purfumes</a></li>
													
														</ul>
														
													</div>
													<div class="col-sm-3">
														
														<ul class="multi-column-dropdown">
															<li><a href="care.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
															<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Oral Care</a></li>
															<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Personal Hygiene</a></li>
															<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>
													
														</ul>
														
													</div>
													<div class="col-sm-3">
														
														<ul class="multi-column-dropdown">
															<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion Accessories </a></li>
															<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Grooming Tools</a></li>
															<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Shaving Need</a></li>
															<li><a href="care.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Sanitary Needs</a></li>
													
														</ul>
													</div>
													<div class="col-sm-3 w3l">
														<a href="care.html"><img src="<?php echo base_url('assets/images/of2.png'); ?>" class="img-responsive" alt=""></a>
													</div>
													<div class="clearfix"></div>
												</div>	
											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Household<b class="caret"></b></span></a>
											<ul class="dropdown-menu multi multi2">
												<div class="row">
													<div class="col-sm-3">
														<ul class="multi-column-dropdown">
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cleaning Accessories</a></li>
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>CookWear</a></li>
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>
													
														</ul>
													
													</div>
													<div class="col-sm-3">
														
														<ul class="multi-column-dropdown">
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Kitchen & Dining</a></li>
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>KitchenWear</a></li>
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>
													
														</ul>
													
													</div>
													<div class="col-sm-3">
													
														<ul class="multi-column-dropdown">
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
															<li><a href="hold.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>
													
														</ul>
													</div>
													<div class="col-sm-3 w3l">
														<a href="hold.html"><img src="<?php echo base_url('assets/images/me2.png'); ?>" class="img-responsive" alt=""></a>
													</div>
													<div class="clearfix"></div>
												</div>	
											</ul>
										</li>
										
										<li><a href="codes.html" class="hyper"> <span>Codes</span></a></li>
										<li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li>
									</ul>
								</div> -->
								</nav>
								<div id="Cart" style="position:absolute;top: 5px;right: 30px;z-index:999;" class="cart">
									<span class="fa fa-shopping-cart my-cart-icon"> <span style="font-family:kanit;font-size:14px;">จำนวนสินค้า</span> <span class="badge badge-notify my-cart-badge"></span></span>
								</div>
								<div class="clearfix"></div>
							</div>
								
							</div>			
			</div>

			<!-- Modal Login -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
									<div class="modal-body modal-body-sub_agile">
									
									<h3 class="agileinfo_sign" style="font-family:kanit;color:#999;">เข้าสู่ระบบ</h3>
									<br>
                                    <form method="post" action="login/checklogin" >
										<div class="form-group"> 
											<input type="email" id="email" name="email" placeholder="Email*" class="form-control">
										</div>
										<div class="form-group">
											<input type="Password" id="password" name="password" placeholder="Password*" class="form-control">
										</div>
										<label style="color:#999;font-weight:500;">
											<input name="remember" type="checkbox" value="Remember Me"> <span>จดจำข้อมูลของฉัน</span>
											| <a href="#" class="text_blue">
											<span><i class="fa fa-key" aria-hidden="true"></i> ลืมรหัสผ่าน</span>
											</a>
</label><br><br>
										<div class="row margin0  ">
											<button type="submit"  class="btn btn-info btn-lg marleft20 active">เข้าสู่ระบบ</button>
										</div>
									</form>
									
																	<br><p><a href="#" data-toggle="modal" data-target="#myModal2"> ยังไม่มีบัญชีในการเข้าสู่ระบบ คลิก !!</a></p>

									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<!-- //Modal content-->
						</div>
			</div>
			
			<div class="modal fade" id="myModalregis" tabindex="-1" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
									<div class="modal-body modal-body-sub_agile">
	
									<h3 class="agileinfo_sign" style="font-family:kanit;color:#999;">ลงทะเบียน</h3><br>
												<form action="login/register" method="post">
												<div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
						</div>
						<div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your name *" value="" />
						</div>
						<div class="form-group">
                            <input type="text" name="lastname" class="form-control" placeholder="Your lastname *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password"  name="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
						<!-- //	<div class="form-group">
                            <input type="password" name="re_password" class="form-control" placeholder="Your Password again *" value="" />
                        </div>-->
                       
										<input type="submit" value="Register" class="btn btn-info btn-lg marleft20 active">
									</form>
									
																	<div class="clearfix"></div>
																	<br><p><a href="#" data-toggle="modal" data-target="#myModal2" > ฉันมีบัญชีในการเข้าสู่ระบบแล้ว</a></p>

									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<!-- //Modal content-->
						</div>
			</div>
						
  <!---->
  

    <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/vendor/jquery-1.11.1.min.js'); ?>"><\/script>')</script>
    <script src="<?php echo base_url('assets/js/jquery.vide.min.js'); ?>"></script>