<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template| Home :: w3layouts</title>
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
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel='stylesheet' type='text/css' /> -->
<!-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel='stylesheet' type='text/css' /> -->

<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/dataTables.responsive.min.js'); ?>"></script>
	<!-- <script src="<?php echo base_url('assets/js/main.js'); ?>"></script> -->
    <script src="<?php echo base_url('assets/js/tables.js'); ?>"></script>
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
<script src="<?php echo base_url('assets/js/jstarbox.js'); ?>" ></script>
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

</head>
<body>
<a href="offer.html"><img src="<?php echo base_url('assets/images/download.png'); ?>" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="<?php echo base_url('admin/Transportation/cart_history'); ?>"><b>T<br>H<br>E</b>บ้านแคว<span>The Best Superotop</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="<?php echo base_url('Home/index'); ?>" ><i class="fa fa-heart" aria-hidden="true"></i>หน้าหลัก</a></li>
					<li><a href="<?php echo base_url('admin/Transportation/cart_history'); ?>" ><i class="fa fa-file-text-o" aria-hidden="true"></i>ประวัติการสั่งซื้อ</a></li>
					<li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>รายการสั่งซื้อสินค้า</a></li>
					<li>
						<a href="" data-toggle="modal" data-target="#myModal">
						<i class="fa fa-user" aria-hidden="true"></i> |  เข้าสู่ระบบ </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModalregis">
						<i class="fa fa-arrow-right" aria-hidden="true"></i> สมัครสมาชิก </a>
					</li>
					
				</ul>	
			</div>
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
									<div class="modal-body modal-body-sub_agile">
									<div class="col-md-8 modal_body_left modal_body_left1">
									<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
							
                                    <form method="post" action="login/checklogin" >
										<div class="row margin0 text_center">
											<div class="  col-md-12 col-sm-12 col-xs-12" >  
											<input type="email" id="email" name="email" placeholder="Email*" class="form-control">
											</div>
											<span></span>
											<br>
											<div class="col-md-12 col-sm-12 col-xs-12 martop20">
											<input type="Password" id="password" name="password" placeholder="Password*" class="form-control">
											</div>
											
											<br>
											<div class="checkbox col-md-12 col-sm-12 col-xs-12 pull-left martop20" >
											<label class="pull-left"><input name="remember" type="checkbox" value="Remember Me"> Remember Me</label>
											</div>
											<div class=" col-md-12 col-sm-12 col-xs-12 pull-left text_blue martop20" >
											<a href="#" class="text_blue pull-left">
											Forgot password?
											</a>    
											</div>
										</div>
										<br>
										<div class="row margin0  ">
											<button type="submit"  class="btn btn-info btn-lg marleft20 active">Login</button>
										</div>
									</form>
									
																	<div class="clearfix"></div>
																	<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

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
									<div class="col-md-8 modal_body_left modal_body_left1">
									<h3 class="agileinfo_sign">Register <span>Now</span></h3>
												<form action="#" method="post">
												<div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
						<div class="form-group">
                            <input type="re_password" class="form-control" placeholder="Your Password again *" value="" />
                        </div>
                       
										<input type="submit" value="Register">
									</form>
									
																	<div class="clearfix"></div>
																	<p><a href="#" data-toggle="modal" data-target="#myModal2" > I have an account?</a></p>

									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<!-- //Modal content-->
						</div>
			</div>
						
						<div class="header-ri">
							<ul class="social-top">
								<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
								<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
								<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
								<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
							</ul>	
						</div>
					

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
								<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
									<ul class="nav navbar-nav ">
										
										
										
										
									</ul>
								</div>
								</nav>
								<div class="cart" >
								
									<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
								</div>
								<div class="clearfix"></div>
							</div>
								
							</div>			
			</div>
  <!---->
	