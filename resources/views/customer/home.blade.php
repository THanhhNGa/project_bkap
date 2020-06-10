@extends('customer.master')
@section('main')
<section class="slider-wrapper">
			<div class="slider-start slider-1 owl-carousel owl-theme">
				@foreach($banner as $value)
				<div class="item">
					<img src="{{$value->image}}" alt="">
					<div class="container-fluid custom-container slider-content">
						<div class="row align-items-center">

							<div class="col-12 col-sm-8 col-md-8 col-lg-6 ml-auto">
								<div class="slider-text ">
									<h4 class="animated fadeInUp"><span>{{$value->name}}</span></h4>
									<h1 class="animated fadeInUp">COMERCIO SHOP</h1>
									<p class="animated fadeInUp">Autem vel eum iriure dolor in molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros.</p>
									<a class="animated fadeInUp btn-two" href="{{route('shop')}}">SHOP NOW</a>
								</div>
							</div>
							<!-- Col End -->
						</div>
						<!-- Row End -->
					</div>
				</div>
				@endforeach
			</div>
		</section>
		<!-- Slides end -->

		<section class="main-product">
			<div class="container container-two">
				<div class="section-heading">
					<h3>Welcome to <span>product</span></h3>
				</div>
				<!-- /.section-heading-->
				<div class="row">
					<div class="col-xl-12 ">
						<div class="pro-tab-filter">
							<ul class="pro-tab-button">
								<li class="filter active" data-filter="*">ALL</li>
								@foreach($category as $cate)
								<li class="filter" data-filter=".two" ><a href="{{route('products_cate',['slug'=>$cate->slug])}}" style="color: #d19e66">{{$cate->name}}</a></li>
								@endforeach
								<!-- <li class="filter" data-filter=".two">Accessories</li> -->
								
							</ul>
							<div class="grid row">
								<!-- single product -->
								@foreach($product as $pro)
								<div class=" grid-item two col-6 col-md-6  col-lg-4 col-xl-3">
									<div class="sin-product style-one">
										<a class="" href="{{route('pro_detail',['slug'=>$pro->slug])}}">
										<div class="pro-img">
											<img src="{{$pro->image}}" alt="">
											
										</div>
										</a>
										<div class="mid-wrapper">
											<h5 class="pro-title"><a href="{{route('pro_detail',['slug'=>$pro->slug])}}">{{$pro->name}}</a></h5>
											<span>{{number_format($pro->sale_price,0,'','.')}} VNĐ</span>
										</div>

										<div class="pro-icon">
											<ul>
												<li><a href="{{route('add_wishlist',['id'=>$pro->id])}}"><i class="flaticon-valentines-heart"></i></a></li>
												<li><a href="{{route('add-cart',['id'=>$pro->id])}}"><i class="flaticon-shopping-cart"></i></a></li>
												<li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>

											</ul>
										</div>
									</div>
								</div>
								@endforeach
								
								<!-- --end single product-- -->
							</div>
						</div>
					</div>
				</div>
				<!-- Row End -->
			</div>
			<!-- Container  -->
		</section>
		<!-- main-product -->

		<!--=========================-->
		<!--=        Feature Area      =-->
		<!--=========================-->

		<section class="feature-area">
			<div class="container-fluid custom-container">
				<div class="row">
					<!-- Single Feature -->
					<div class="col-sm-6 col-xl-3">
						<div class="sin-feature">
							<div class="inner-sin-feature">
								<div class="icon">
									<i class="flaticon-free-delivery"></i>
								</div>
								<div class="f-content">
									<h6><a href="#">FREE SHIPPING</a></h6>
									<p>Free shipping on all order</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Single Feature -->
					<div class="col-sm-6  col-xl-3">
						<div class="sin-feature">
							<div class="inner-sin-feature">
								<div class="icon">
									<i class="flaticon-shopping-online-support"></i>
								</div>
								<div class="f-content">
									<h6><a href="#">ONLINE SUPPORT</a></h6>
									<p>Online support 24 hours</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Single Feature -->
					<div class="col-sm-6  col-xl-3">
						<div class="sin-feature">
							<div class="inner-sin-feature">
								<div class="icon">
									<i class="flaticon-return-of-investment"></i>
								</div>
								<div class="f-content">
									<h6><a href="#">MONEY RETURN</a></h6>
									<p>Back guarantee under 5 days</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Single Feature -->
					<div class="col-sm-6  col-xl-3">
						<div class="sin-feature">
							<div class="inner-sin-feature">
								<div class="icon">
									<i class="flaticon-sign"></i>
								</div>
								<div class="f-content">
									<h6><a href="#">MEMBER DISCOUNT</a></h6>
									<p>Onevery order over $150</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.feature-area -->

		<!--=========================-->
		<!--=   Product  area Two   =-->
		<!--=========================-->

		<section class="banner-product">
			<div class="container container-two">
				<div class="section-heading pb-30">
					<h3>Sản phẩm <span>Thịnh hành</span></h3>
				</div>
				<!-- section-heading-->
				<div class="grid row">
					<!-- single product -->
					@foreach($pro_tre as $pro)
					<div class=" grid-item two col-6 col-md-6  col-lg-4 col-xl-3">
						<div class="sin-product style-one">
							<a class="" href="{{route('pro_detail',['slug'=>$pro->slug])}}">
							<div class="pro-img">
								<img src="{{$pro->image}}" alt="">
								
							</div>
							</a>
							<div class="mid-wrapper">
								<h5 class="pro-title"><a href="product.html">{{$pro->name}}</a></h5>
								@if($pro->sale_price>0)
								<span>{{number_format($pro->sale_price,0,'','.')}} VNĐ</span>
								<p class="pre-price"><del>{{number_format($pro->price,0,'','.')}} VNĐ</del></p>
								
								@else
								<span>{{number_format($pro->price,0,'','.')}} VNĐ</span>
								@endif
							</div>

							<div class="pro-icon">
								<ul>
									<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
									<li><a href="{{route('add-cart',['id'=>$pro->id])}}"><i class="flaticon-shopping-cart"></i></a></li>
									<li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>

								</ul>
							</div>
						</div>
					</div>
					@endforeach
				<!-- /.row -->
			</div>
			<!-- Container-two  -->
		</section>
		<!-- main-product -->

		<!--=========================-->
		<!--=   Discount Countdown area   =-->
		<!--=========================-->

		<section class="add-area">
			<a href="#"><img src="{{url('')}}/public/media/images/banner/add.jpg" alt=""></a>
		</section>

		<!--=========================-->
		<!--=   Small Product area    =-->
		<!--=========================-->
		<div class="section-heading pb-30" style="margin-top: 30px">
			<h3>Sản phẩm <span>Khuyến mãi</span></h3>
		</div>
			<div class="grid row">
				<!-- single product -->
				@foreach($pro_tre as $pro)
				<div class=" grid-item two col-6 col-md-6  col-lg-4 col-xl-3">
					<div class="sin-product style-one">
						<a class="" href="{{route('pro_detail',['slug'=>$pro->slug])}}">
						<div class="pro-img">
							<img src="{{$pro->image}}" alt="">
							
						</div>
						</a>
						<div class="mid-wrapper">
							<h5 class="pro-title"><a href="product.html">{{$pro->name}}</a></h5>
							@if($pro->sale_price>0)
								<span>{{number_format($pro->sale_price,0,'','.')}} VNĐ</span>
								<p class="pre-price"><del>{{number_format($pro->price,0,'','.')}} VNĐ</del></p>
								
								@else
								<span>{{number_format($pro->price,0,'','.')}} VNĐ</span>
								@endif
						</div>

						<div class="pro-icon">
							<ul>
								<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
								<li><a href="{{route('add-cart',['id'=>$pro->id])}}"><i class="flaticon-shopping-cart"></i></a></li>
								<li><a class="trigger" href="#"><i class="flaticon-zoom-in"></i></a></li>

							</ul>
						</div>
					</div>
				</div>
				@endforeach
			<!-- /.row -->
		</div>
		


		<!--=========================-->
		<!--=   Instagram area      =-->
		<!--=========================-->

		<section class="instagram-area">
			<div class="instagram-slider owl-carousel owl-theme">
				<!-- single instagram-slider -->
				<div class="sin-instagram">
					<img src="{{url('')}}/public/media/images/instagram/1.jpg" alt="">
					<div class="hover-text">
						<a href="#">
					<img src="{{url('')}}/public/media/images/icon/ig.png" alt="">
					<span>instagram</span>
				</a>
					</div>
				</div>
				<!-- single instagram-slider -->
				<div class="sin-instagram">
					<img src="{{url('')}}/public/media/images/instagram/2.jpg" alt="">
					<div class="hover-text">
						<a href="#">
					<img src="{{url('')}}/public/media/images/icon/ig.png" alt="">
					<span>instagram</span>
				</a>
					</div>
				</div>
				<!-- single instagram-slider -->
				<div class="sin-instagram">
					<img src="{{url('')}}/public/media/images/instagram/3.jpg" alt="">
					<div class="hover-text">
						<a href="#">
					<img src="{{url('')}}/public/media/images/icon/ig.png" alt="">
					<span>instagram</span>
				</a>
					</div>
				</div>
				<!-- single instagram-slider -->
				<div class="sin-instagram">
					<img src="{{url('')}}/public/media/images/instagram/4.jpg" alt="">
					<div class="hover-text">
						<a href="#">
					<img src="{{url('')}}/public/media/images/icon/ig.png" alt="">
					<span>instagram</span>
				</a>
					</div>
				</div>
				<!-- single instagram-slider -->
				<div class="sin-instagram">
					<img src="{{url('')}}/public/media/images/instagram/5.jpg" alt="">
					<div class="hover-text">
						<a href="#">
					<img src="{{url('')}}/public/media/images/icon/ig.png" alt="">
					<span>instagram</span>
				</a>
					</div>
				</div>
			</div>
			<!-- /.instagram-slider end -->
		</section>
		<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dca8054d96992700fc70628/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
		<!-- /.instagram-area end-->
@stop()
