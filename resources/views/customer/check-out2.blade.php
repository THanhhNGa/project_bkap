@extends('customer.master')
@section('main')
<html style="" class="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Store Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Animate.css -->
		
		<link rel="stylesheet" href="{{url('')}}/public/front_checkout/css/bootstrap.css">
		<link rel="stylesheet" href="{{url('')}}/public/front_checkout/css/style.css">
		
	</head>
	<body>
		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md" style="padding-top: 15em">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
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
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<form method="post" class="colorlib-form" action="{{route('check_out')}}">
					@csrf
					<div class="row">
						<div class="col-md-7">
							
							<h2>Chi tiết thanh toán</h2>
							@if(Auth::check())
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="fname">Họ &amp; Tên</label>
										<input type="text" id="name" name="name" value="{{Auth::user()->name}}" class="form-control" placeholder="First Name">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="fname">Địa chỉ</label>
										<input type="text" id="address" name="address" value="{{Auth::user()->address}}" class="form-control" placeholder="Nhập địa chỉ của bạn">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6">
										<label for="email">Địa chỉ email</label>
										<input type="email" id="email" name="email" value="{{Auth::user()->email}}" class="form-control" placeholder="Ex: youremail@domain.com">
									</div>
									<div class="col-md-6">
										<label for="Phone">Số điện thoại</label>
										<input type="text" id="phone" name="phone" value="{{Auth::user()->phone}}" class="form-control" placeholder="Ex: 0123456789">
									</div>
								</div>
								
							</div>
							@endif
							
						</div>
						<div class="col-md-5">
							<div class="cart-detail">
								<h2>Tổng Giỏ hàng</h2>
								<ul>
									<li>
										<ul>
											@foreach($cart->items as $row)
											<li><span>{{$row['quantity']}} x{{ $row['name']}} </span> <span>₫{{$row['price']*$row['quantity']}} </span></li>
											@endforeach
										</ul>
									</li>
									<li><span>Tổng tiền đơn hàng</span> <span>₫ {{$cart->total_price}}</span></li>
								</ul>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" name="dat-hang" class="btn btn-success">Đặt hàng</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<script src="public/front_checkout/js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		
		<!-- Bootstrap -->
		<script src="public/front_checkout/js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		
	</div></body></html>
	@stop()