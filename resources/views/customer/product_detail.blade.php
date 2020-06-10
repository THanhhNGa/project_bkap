@extends('customer.master')
@section('main')
<style>
	button, input, optgroup, select, textarea{
		background: #d19e66;
		width: 170px;
		height: 60px;
		border: none;
	}
</style>

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
		<!--=        Shop area          =-->
		<!--=========================-->

		<section class="shop-area single-product">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="order-2 order-md-1 col-md-4 col-lg-3 col-xl-3">
						<div class=" shop-sidebar">
							<form action="{{route('seek')}}" method="PUT">
								@csrf
								<div class="sidebar-widget sidebar-search">
									<input type="text" name="search" placeholder="Search Product....">
									<button type="submit"><i class="fas fa-search"></i></button>
								</div>
							</form>
							<div class="sidebar-widget product-widget">
								<h6>Sản phẩm khuyến mãi</h6>
								@foreach($pro_sale as $value)
								<div class="wid-pro">
									<a href="{{route('pro_detail',['slug'=>$value->slug])}}">
									<div class="sp-img">
										<img src="{{$value->image}}" width="110px" alt="">
									</div>
									</a>
									<div class="small-pro-details">
										<h5 class="title"><a href="#">{{$value->name}}</a></h5>
										@if($value->sale_price>0)
										<span>{{number_format($value->sale_price,0,'','.')}} đ</span><br>
										<span class="pre-price">{{number_format($value->price,0,'','.')}} đ</span>
										
										@else
										<span>{{number_format($value->price,0,'','.')}} đ</span>
										@endif
										<div class="rating">
											<ul>
												<li><a href="#"><i class="far fa-star"></i></a></li>
												<li><a href="#"><i class="far fa-star"></i></a></li>
												<li><a href="#"><i class="far fa-star"></i></a></li>
												<li><a href="#"><i class="fas fa-star"></i></a></li>
												<li><a href="#"><i class="fas fa-star"></i></a></li>
											</ul>
										</div>
									</div>
									
								</div>

								@endforeach

							</div>

							<div class="sidebar-widget banner-wid">
								<div class="img">
									<img src="{{url('')}}/public/media/images/banner/sb1.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					<!-- /.col-xl-3 -->
					<div class="order-1 order-md-2 col-md-8 col-lg-9 col-xl-9">
						<div class="row">
							<div class="col-lg-6 col-xl-6">
								<!-- Product View Slider -->
								<div class="quickview-slider">
									<div class="slider-for">
										<div class="">
											<img src="{{$pro_detail->image}}" alt="Thumb">
										</div>
										
										
									</div>

									<div class="slider-nav">
										@if(isset($images))
										@foreach($images as $img)
										<div class="">
											<img src="{{$img}}" alt="thumb">
										</div>
										@endforeach
										@endif
										
									</div>
								</div>
								<!-- /.quickview-slider -->
							</div>
							<!-- /.col-xl-6 -->

							<div class="col-lg-6 col-xl-6">
								<div class="product-details">
									<h5 class="pro-title"><a href="#">{{$pro_detail->name}}</a></h5>
									<!-- <span class="price">Price : ${{$pro_detail->price}}</span> -->
										@if($value->sale_price>0) 
										<span class="price">Giá : {{number_format($value->sale_price,0,'','.')}} đ</span><br>
										<span class="pre-price"><del>Giá gốc : {{number_format($value->price,0,'','.')}}</del></span>
										
										@else
										<span class="price">Giá : {{number_format($value->price,0,'','.')}} đ</span>
										@endif
									<div class="color-checkboxes">
										<h4>Color:</h4>
										<input class="color-checkbox__input" id="col-Blue" name="colour" type="radio">
										<label class="color-checkbox" for="col-Blue" id="col-Blue-label"></label>
										<span></span>

										<input class="color-checkbox__input" id="col-Green" value="#8bc34a" name="colour" type="radio">
										<label class="color-checkbox" for="col-Green" id="col-Green-label"></label>
										<span></span>

										<input class="color-checkbox__input" id="col-Yellow" value="#fdd835" name="colour" type="radio">
										<label class="color-checkbox" for="col-Yellow" id="col-Yellow-label"></label>
										<span></span>

										<input class="color-checkbox__input" id="col-Orange" value="" name="colour" type="radio">
										<label class="color-checkbox" for="col-Orange" id="col-Orange-label"></label>
										<span></span>

										<input class="color-checkbox__input" id="col-Red" value="#f44336" name="colour" type="radio">
										<label class="color-checkbox" for="col-Red" id="col-Red-label"></label>
										<span></span>

										<input class="color-checkbox__input" id="col-Black" value="#222222" name="colour" type="radio">
										<label class="color-checkbox" for="col-Black" id="col-Black-label"></label>
										<span></span>
									</div>

									<div class="add-tocart-wrap">
										<!--PRODUCT INCREASE BUTTON START-->
										<form action="{{route('add-cart',['id'=>$pro_detail->id])}}"  class="form-inline" role="form">
											<div class="cart-plus-minus-button">
												<input type="number" value="1" id="quantity" name="quantity" class="cart-plus-minus">
											</div>
											<div class="cart-btn-left" >
											<button type="submit" class="add-to-cart"><i class="flaticon-shopping-purse-icon"></i>  Add to cart</button>
											</div>
											<input type="hidden" id="id" value="$pro_detail->id">
										</form>
									</div>

									<p>{{$pro_detail->content}}</p>
									
									<div class="product-social">
										<span>Share :</span>
										<ul>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>

								</div>
								<!-- /.product-details -->
							</div>
							<!-- /.col-xl-6 -->


							<div class="col-xl-12">
								<div class="product-des-tab">
									<ul class="nav nav-tabs " role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô tả sản phẩm</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Bình luận</a>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
											<div class="prod-bottom-tab-sin description">
												<h5>Mô tả chi tiết</h5>
												<p>{{$pro_detail->description}}</p>

											</div>
										</div>
										
										<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
											<div class="prod-bottom-tab-sin">
												<h5>Bình luận</h5>
												<div class="product-review">
													<div class="reviwer">
														<!-- <img src="{{url('')}}/public/media/images/reviewer.png" alt=""> -->
														@foreach($pro_detail->review as $value)
														<div class="review-details">
															<span>Tên tài khoản: {{$value->us->name}}</span>
															<div class="rating">
																<ul>
																	<li><a href="#"><i class="far fa-star"></i></a></li>
																	<li><a href="#"><i class="far fa-star"></i></a></li>
																	<li><a href="#"><i class="far fa-star"></i></a></li>
																	<li><a href="#"><i class="far fa-star"></i></a></li>
																	<li><a href="#"><i class="far fa-star"></i></a></li>
																</ul>
															</div>
															<p>{{$value->created_at}}</p>
															<p>{{$value->comment}}</p>
														</div>
														@endforeach
													</div>
													<div class="add-your-review">
														<h6>Thêm bình luận</h6>
														<!-- <p>YOUR RATING* </p>
														<div class="rating">
															<ul>
																<li><a href="#"><i class="far fa-star"></i></a></li>
																<li><a href="#"><i class="far fa-star"></i></a></li>
																<li><a href="#"><i class="far fa-star"></i></a></li>
																<li><a href="#"><i class="far fa-star"></i></a></li>
																<li><a href="#"><i class="far fa-star"></i></a></li>
															</ul>
														</div> -->

														<div class="raing-form">
															<form action="{{route('post_cmt',['id'=>$pro_detail->id])}}" method="POST">
																<input type="hidden" name="_token" value="{{csrf_token()}}">
																<textarea name="comment"></textarea>
																<input type="submit">
															</form>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.row -->
					</div>
					<!-- /.col-xl-9 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.shop-area -->

		<section class="main-product padding-120">
			<div class="container container-two">
				<div class="section-heading">
					<h3>related <span>product</span></h3>
				</div>
				<!-- /.section-heading-->
				<div class="row inner-wrapper">
					<!-- Single product -->
					@foreach($product as $prod)
					<div class="col-sm-6 col-lg-3 col-xl-3">
						<div class="sin-product">
							<a href="{{route('pro_detail',['slug'=>$prod->slug])}}">
							<div class="pro-img">
								<img src="{{$prod->image}}" alt="">
							</div>
							</a>
							<div class="mid-wrapper" style="text-align: center">
								<h5 class="pro-title"><a href="product.html">{{$prod->name}}</a></h5>
								@if($prod->sale_price>0)
								<span>${{$prod->sale_price}}</span><br>
								<!-- <span ><del>${{$prod->price}}</del></span> -->
								@else
								<span>${{$prod->sale_price}}</span>
								@endif
							</div>
							<div class="pro-icon">
								<ul>
									<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
									<li><a href="#"><i class="flaticon-shopping-cart"></i></a></li>
									<li><a href="#" class="trigger"><i class="flaticon-zoom-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					<!--end Single product -->
					
				</div>
				<!-- Row End -->
			</div>
			<!-- Container  -->
		</section>
		<!-- main-product -->

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
		<!-- subscribe-area -->
@stop()