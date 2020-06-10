@extends('customer.master')
@section('main')
<section class="breadcrumb-area">
	<div class="container-fluid custom-container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bc-inner">
					<p><a href="{{route('home')}}">Trang chủ  |</a> Cửa hàng</p>
				</div>
			</div>
			<!-- /.col-xl-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<!--=========================-->
<!--=        Breadcrumb         =-->
<!--=========================-->
<!--Contact area
============================================= -->
@if(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
	{{Session::get('success')}}
</div>
@endif
<form action="{{route('contact')}}" method="POST" role="form">
	@csrf
	<section class="contact-area">
		<div class="container-fluid custom-container">
			<div class="section-heading pb-30">
				<h3><span>Lời nhắn </span>của bạn <span>cho chúng tôi</span></h3>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-8 col-xl-6">
					<div class="contact-form">
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						<form action="#">
							<div class="row">
								<div class="col-xl-6">
									<input type="text" placeholder="Họ và tên*" name="name" id="Họ và tên">
								</div>
								<div class="col-xl-6">
									<input type="text" placeholder="Điện thoại*" name="phone-number" id="phone-number">
								</div>
								<div class="col-xl-12">
									<input type="text" placeholder="Email*" name="email" id="email">
								</div>
								<!-- <div class="col-xl-6">
										<input type="text" placeholder="Website">
								</div> -->
								<div class="col-xl-12">
									<textarea name="message" placeholder="Lời nhắn của bạn..."></textarea>
								</div>
								<div class="col-xl-12">
									<input type="submit" value="SUBMIT">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /.row end -->
		</div>
		<!-- /.container-fluid end -->
	</section>
	<!-- /.contact-area end -->
</form>
<!--Map area
============================================= -->
<section class="google-map">
	<div class="row no-gutters">
		<div class="col-md-6 col-lg-6">
			<div class="gmap3-area" data-lat="40.730260" data-lng="-74.040315" data-mrkr="media/images/icon/map-marker.png"></div>
			<!-- /.google-map -->
		</div>
		<!-- /.col-xl-6 -->
		<div class="col-md-6 col-lg-6">
			<div class="contact-info">
				<h5>ThemeIM Park</h5>
				<span>garmany</span>
				<p>Queens stae park city, Momin Tower 78, New York,WT47.</p>
				<p>Monday - Sunday:<span> 9:00am - 7:15pm</span> </p>
				<p>Phone:<span> 022 1458 645 125</span></p>
			</div>
		</div>
		<!-- /.col-xl-6 -->
	</div>
	<!-- /.row -->
</section>
<!-- /#map -->
<!--Shop area
============================================= -->
<section class="store-area padding-120">
	<div class="container">
		<div class="section-heading  pb-30">
			<h3>SHOP ALSO <span>HERE</span></h3>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="single-store">
					<img src="media/images/banner/cf1.jpg" alt="">
					<a href="#">paris fashion city</a>
					<p>france</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-store">
					<img src="media/images/banner/cf2.jpg" alt="">
					<a href="#">fashion world</a>
					<p>new zealand</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-store">
					<img src="media/images/banner/cf3.jpg" alt="">
					<a href="#">ThemeIM Park</a>
					<p>manhattan</p>
				</div>
			</div>
		</div>
		<!-- /.row end -->
	</div>
	<!-- /.container-fluid end -->
</section>
<!-- /.contact-area end -->
<!--=========================-->
<!--=   Subscribe area      =-->
<!--=========================-->
<section class="subscribe-area style-two">
	<div class="container container-two">
		<div class="row">
			<div class="col-lg-5">
				<div class="subscribe-text">
					<h6>Join our newsletter</h6>
				</div>
			</div>
			<!-- col-xl-6 -->
			<div class="col-lg-7">
				<div class="subscribe-wrapper">
					<input placeholder="Enter Keyword" type="text">
					<button type="submit">SUBSCRIBE</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container-two -->
</section>
@stop()