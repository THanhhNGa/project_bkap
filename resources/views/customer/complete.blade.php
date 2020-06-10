@extends('customer.master')
@section('main')

<html style="" class=""><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Store Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Animate.css -->
	
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{url('')}}/public/front_checkout/css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{url('')}}/public/front_checkout/css/style.css">
</head>

<body>
	<!--header -->
	<div class="colorlib-loader" style="display: none;"></div>
	<div id="page">
		
		
		<!-- End header -->
		<!-- main -->

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap" style="margin-top: 15em">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Giỏ hàng</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Thanh toán</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Hoàn tất thanh toán</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<span class="icon"><i class="fas fa-shopping-cart"></i></i></span>
						<h2>Cảm ơn bạn đã mua hàng, Đơn hàng của bạn đã đặt thành công</h2>
						<p>
							<a href="{{route('home')}}" class="btn btn-primary">Trang chủ</a>
							<a href="{{route('home')}}" class="btn btn-primary btn-outline">Tiếp tục mua sắm</a>
						</p>
					</div>
				</div>
				<div class="row mt-50">
					
					
					
				</div>
			</div>
			
		</div>
		<!-- end main -->

		<!-- jQuery -->
		<script src="{{url('')}}/public/front_checkout/js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<!-- Bootstrap -->
		<script src="{{url('')}}/public/front_checkout/js/bootstrap.min.js"></script>
		<!-- Waypoints -->

</div></body></html>
@stop()