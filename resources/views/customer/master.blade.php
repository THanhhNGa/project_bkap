<!DOCTYPE html>
<html>


<!-- Mirrored from themeim.com/demo/comercio/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Oct 2019 15:10:29 GMT -->
<head>
	<!-- Meta Data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comercio - Fashion Shop Ecommerce HTML Template</title>

	<!-- Fav Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{url('')}}/public/assets/img/fav-icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="{{url('')}}/public/assets/img/fav-icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="{{url('')}}/public/assets/img/fav-icons/favicon-16x16.png">

	<!-- Dependency Styles -->
	<link rel="stylesheet" href="{{url('')}}/public/dependencies/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="{{url('')}}/public/dependencies/fontawesome/css/fontawesome-all.min.css" type="text/css">
	<link rel="stylesheet" href="{{url('')}}/public/dependencies/owl.carousel/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="{{url('')}}/public/dependencies/owl.carousel/css/owl.theme.default.min.css" type="text/css">
	<link rel="stylesheet" href="{{url('')}}/public/dependencies/flaticon/css/flaticon.css" type="text/css">
	<link rel="stylesheet" href="{{url('')}}/public/dependencies/wow/css/animate.css" type="text/css">
	<link rel="stylesheet" href="{{url('')}}/public/dependencies/jquery-ui/css/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="{{url('')}}/public/dependencies/venobox/css/venobox.css" type="text/css">
	<link rel="stylesheet" href="{{url('')}}/public/dependencies/slick-carousel/css/slick.css" type="text/css">

	<!-- Site Stylesheet -->
	<link rel="stylesheet" href="{{url('')}}/public/assets/css/app.css" type="text/css">

	<!-- <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
	<style>
		
		.sidebar-widget h6{
			font-family: 'Lexend Deca', sans-serif;
		}
		body{
			font-family: 'Lexend Deca', sans-serif;
		}
		.mainmenu > ul li a{
			font-family: 'Lexend Deca', sans-serif;
		}
		.sin-product h5.pro-title{
			font-family: 'Lexend Deca', sans-serif;
		}
		.wid-pro .small-pro-details .title{
			font-family: 'Lexend Deca', sans-serif;
		}
		.section-heading h3{
			font-family: 'Lexend Deca', sans-serif;
		}
		.bc-inner p{
			font-family: 'Lexend Deca', sans-serif;
		}
		.cart-table .tables thead tr th{
			font-family: 'Lexend Deca', sans-serif;
		}
	</style>


</head>

<body id="home-version-1" class="home-version-1" data-style="default">
	
	<div class="site-content">


		<!--=========================-->
		<!--=        Header         =-->
		<!--=========================-->



		<header id="header" class="header-area">
			<div class="top-bar">
				<div class="container-fluid custom-container">
					<div class="row">
						<div class="col-lg-6">
							<div class="top-bar-left">
								<p><i class="far fa-flag"></i><a href="contact.html">Our Location</a></p>

								<p><i class="far fa-envelope"></i><a href="mailto:comercio@info.com">comercio@info.com</a></p>
							</div>
						</div>
						<!-- Col -->
						<div class="col-lg-6">
							<div class="top-bar-right">
								<div class="social">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
									</ul>
								</div>
								@if(Auth::check())
								<a href="{{route('login_cus')}}" class="dropdown-toggle" data-toggle="dropdown"> Xin chào {{Auth::user()->name}} </a>
								<ul class="dropdown-menu">
            						<li><span style="padding-left: 15px"><i class="fas fa-sign-in-alt" style="color: #d19e66"></i><a href="{{route('info_cus',['id'=>Auth::user()->id])}}" style="color: grey">   Thông tin</a></span></li>
           						 	<li><span style="padding-left: 15px"><i class="fas fa-times-circle" style="color: #d19e66" ></i><a href="{{route('logout_cus')}}" style="color: grey" onclick="return confirm('Bạn có chắc không?')">Thoát tài khoản</a></span></li>
          						</ul>
          						@else
          						<a href="{{route('login_cus')}}" class="dropdown-toggle" data-toggle="dropdown"> My Account</a>
								<ul class="dropdown-menu">
            						<li><a href="{{route('login_cus')}}" style="color: grey">Đăng nhập</a></li>
            						<li><a href="{{route('register')}}" style="color: grey">Đăng ký</a></li>
          						</ul>
          						@endif

							</div>
							<!--top-bar-right end-->
						</div>
						<!-- Col end-->
					</div>
					<!--Row end-->
				</div>
			</div>
			<div class="container-fluid custom-container menu-rel-container">
				<div class="row">
					<!-- Logo
					============================================= -->

					<div class="col-lg-6 col-xl-2">
						<div class="logo">
							<a href="{{route('home')}}">
								<img src="{{url('')}}/public/media/images/logo.png" alt="">
							</a>
						</div>
					</div>

					<!-- Main menu
					============================================= -->

					<div class="col-lg-12 col-xl-7 order-lg-3 order-xl-2 menu-container">
						<div class="mainmenu">
							<ul id="navigation">
								<li class="has-child "><a href="{{route('home')}}" class="active">Trang chủ</a>
								</li>
								
								<li class="has-child"><a href="">Danh mục</a>
									<div class="mega-menu five-col">
										<div class="mega-product">
											<h4>Danh mục</h4>
											<ul class="mega-button">
												@foreach($category as $cate)
												<li><a href="{{route('products_cate',['slug'=>$cate->slug])}}">{{$cate->name}}</a></li>
												@endforeach
											</ul>
										</div>
										@foreach($pro_sale as $pr_sale)
										<div class="mega-product">
											<div class="sin-product">
												<div class="pro-img">
													<img src="{{$pr_sale->image}}" alt="" width="150px">
												</div>
												<div class="mid-wrapper">
													<h5 class="pro-title"><a href="{{route('pro_detail',['slug'=>$pr_sale->slug])}}">{{$pr_sale->name}}</a></h5>
													
													<span>{{number_format($pr_sale->sale_price,0,'','.')}} đ</span><br>
													
												</div>
											</div>
										</div>
										@endforeach
										
									</div>
								</li>
								<li class="has-child"><a href="{{route('shop')}}">Cửa hàng</a>
									
								</li>
								<li class="has-child"><a href="{{route('blog')}}">Tin tức</a>
									
								</li>
								<li><a href="{{route('contact')}}">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<!--Main menu end-->
					<div class="col-lg-6 col-xl-3 order-lg-2 order-xl-3">
						<div class="header-right-one">
							<ul>
								<li class="user-login">
									<a href="{{route('show_wishlist')}}"><i class="fas fa-heart" aria-hidden="true"></i></a>
								</li>
								<li class="top-cart">
										@if($cart->items)
									<a href="javascript:void(0)"><i class="fa fa-shopping-cart" aria-hidden="true"></i>({{$cart->total_quantity}})</a>
									<div class="cart-drop">

										@foreach($cart->items as $value)
										<div class="single-cart">
											<div class="cart-img">
												<img alt="" src="{{$value['image']}}" width="50px">
											</div>
											<div class="cart-title">
												<p><a href="#">{{$value['name']}}</a></p>
											</div>
											<div class="cart-price">
												<p>{{$value['quantity']}} x {{number_format($value['price'],0,'','.')}} đ</p>
											</div>
											<a href="{{route('delete-cart',['id'=>$value['id']])}}"><i class="fa fa-times"></i></a>
										</div>
										@endforeach
										<div class="cart-bottom">
											<div class="cart-sub-total">
												<p>Tổng tiền <span>{{number_format($cart->total_price,0,'','.')}} đ</span></p>
											</div>
											<div class="cart-sub-total">

												<p>Phí vận chuyển <span>{{$ship}}$</span></p>
											</div>
											<div class="cart-sub-total">
												<p>Thanh toán <span>{{number_format($cart->total_price + $ship,0,'','.')}} đ</span></p>
											</div>
											<div class="cart-checkout">
												<a href="{{route('show-cart')}}"><i class="fa fa-shopping-cart"></i>View Cart</a>
											</div>
											<div class="cart-share">
												<a href="{{route('check_out')}}"><i class="fa fa-share"></i>Checkout</a>
											</div>
										</div>
									</div>
									@endif
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--Container-Fluid-->
		</header>
		<!--Main Header end-->




		<!--=========================-->
		<!--=        Mobile Header     =-->
		<!--=========================-->



		<header class="mobile-header">
			<div class="container-fluid custom-container">
				<div class="row">

					<!-- Mobile menu Opener
					============================================= -->
					<div class="col-4">
						<div class="accordion-wrapper">
							<a href="#" class="mobile-open"><i class="flaticon-menu-1"></i></a>
						</div>
					</div>
					<div class="col-4">
						<div class="logo">
							<a href="index-2.html">
								<img src="media/images/logo.png" alt="">
							</a>
						</div>
					</div>
					<div class="col-4">
						<div class="top-cart">
							<a href="javascript:void(0)"><i class="fa fa-shopping-cart" aria-hidden="true"></i> (2)</a>
							<div class="cart-drop">
								<div class="single-cart">
									<div class="cart-img">
										<img alt="" src="media/images/product/car1.jpg">
									</div>
									<div class="cart-title">
										<p><a href="#">Aliquam Consequat</a></p>
									</div>
									<div class="cart-price">
										<p>1 x $500</p>
									</div>
									<a href="#"><i class="fa fa-times"></i></a>
								</div>
								<div class="single-cart">
									<div class="cart-img">
										<img alt="" src="media/images/product/car2.jpg">
									</div>
									<div class="cart-title">
										<p><a href="#">Quisque In Arcuc</a></p>
									</div>
									<div class="cart-price">
										<p>1 x $200</p>
									</div>
									<a href="#"><i class="fa fa-times"></i></a>
								</div>
								<div class="cart-bottom">
									<div class="cart-sub-total">
										<p>Sub-Total <span>$700</span></p>
									</div>
									<div class="cart-sub-total">
										<p>Eco Tax (-2.00)<span>$7.00</span></p>
									</div>
									<div class="cart-sub-total">
										<p>VAT (20%) <span>$40.00</span></p>
									</div>
									<div class="cart-sub-total">
										<p>Total <span>$244.00</span></p>
									</div>
									<div class="cart-checkout">
										<a href="cart.html"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a>
									</div>
									<div class="cart-share">
										<a href="#"><i class="fa fa-share"></i>Thanh toán</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.row end -->
			</div>
			<!-- /.container end -->
		</header>

		

		<!--=========================-->
		<!--=        Slider         =-->
		<!--=========================-->


		@yield('main')

		<!--=========================-->
		<!--=   Footer area      =-->
		<!--=========================-->

		<footer class="footer-widget-area">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="col-md-6 col-lg-3 col-xl-3">
						<div class="footer-widget">
							<div class="logo">
								<a href="#">
							<img src="media/images/logo2.png" alt="">
						</a>
							</div>
							<p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore eu olestie consequat Autem vel eum iriure dolor.</p>
							<div class="social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /.col-xl-3 -->
					<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
						<div class="footer-widget">
							<h3>our shop</h3>
							<div class="footer-menu">
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Browse Products</a></li>
									<li><a href="#">Read Our Blog</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /.col-xl-3 -->
					<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
						<div class="footer-widget">
							<h3>COLLECTIONS</h3>
							<div class="footer-menu">
								<ul>
									<li><a href="#">Summer 2018</a></li>
									<li><a href="#">Women's Dresses</a></li>
									<li><a href="#">Women's Jackets</a></li>
									<li><a href="#">Men's Shirts</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /.col-xl-3 -->
					<div class="col-md-6 col-lg-3 col-xl-3">
						<div class="footer-widget">
							<h3>Payment Methods</h3>
							<p>Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum</p>
							<div class="payment-link">
								<ul>
									<li><a href="#"><img src="media/images/p1.png" alt=""></a></li>
									<li><a href="#"><img src="media/images/p2.png" alt=""></a></li>
									<li><a href="#"><img src="media/images/p3.png" alt=""></a></li>
									<li><a href="#"><img src="media/images/p4.png" alt=""></a></li>
								</ul>
							</div>
						</div>

						<!-- <div class="footer-widget">
					<h3>News & Updates</h3>
					<p>Sign up to get the latest on sales, new releases and more …</p>
					<div class="footer-subscribe-wrapper">
						<input placeholder="Enter Keyword" type="text">
						<button type="submit">SUBSCRIBE</button>
					</div>

				</div> -->
					</div>
					<!-- /.col-xl-3 -->
				</div>
				<div class="footer-bottom">
					<div class="row">
						<div class="col-12">
							<p>Copyright © <span>2018</span> ThemeIM Solution • Designed by <a href="#">ThemeIM</a></p>
						</div>
						<!-- /.col-xl-6 -->

					</div>
					<!-- /.row -->
				</div>
			</div>
			<!-- container-fluid -->
		</footer>
		<!-- footer-widget-area -->



		<!-- Back to top
	============================================= -->

		<div class="backtotop">
			<i class="fa fa-angle-up backtotop_btn"></i>
		</div>



	</div>
	<!-- /#site -->

	<!-- Dependency Scripts -->
	<script src="{{url('')}}/public/dependencies/jquery/jquery.min.js"></script>
	<script src="{{url('')}}/public/dependencies/popper.js/popper.min.js"></script>
	<script src="{{url('')}}/public/dependencies/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{url('')}}/public/dependencies/owl.carousel/js/owl.carousel.min.js"></script>
	<script src="{{url('')}}/public/dependencies/wow/js/wow.min.js"></script>
	<script src="{{url('')}}/public/dependencies/isotope-layout/js/isotope.pkgd.min.js"></script>
	<script src="{{url('')}}/public/dependencies/imagesloaded/js/imagesloaded.pkgd.min.js"></script>
	<script src="{{url('')}}/public/dependencies/jquery.countdown/js/jquery.countdown.min.js"></script>
	<script src="{{url('')}}/public/dependencies/gmap3/js/gmap3.min.js"></script>
	<script src="{{url('')}}/public/dependencies/venobox/js/venobox.min.js"></script>
	<script src="{{url('')}}/public/dependencies/slick-carousel/js/slick.js"></script>
	<script src="{{url('')}}/public/dependencies/headroom/js/headroom.js"></script>
	<script src="{{url('')}}/public/dependencies/jquery-ui/js/jquery-ui.min.js"></script>
	<!--Google map api -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc"></script>


	<!-- Site Scripts -->
	<script src="{{url('')}}/public/assets/js/app.js"></script>

</body>


<!-- Mirrored from themeim.com/demo/comercio/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Oct 2019 15:11:00 GMT -->
</html>
