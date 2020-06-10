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
		<!--=        Shop area          =-->
		<!--=========================-->

		<section class="shop-area">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="order-2 order-lg-1 col-lg-3 col-xl-3">
						<div class=" shop-sidebar left-side">
							<div class="sidebar-widget sidebar-search">
								<input type="text" placeholder="Tìm kiếm theo tên....">
								<button type="submit"><i class="fas fa-search"></i></button>
							</div>
							<div class="sidebar-widget category-widget">
								<h6><a href="{{route('shop')}}" style="color: #d19e66">DANH MỤC SẢN PHẨM</a></h6>
								<ul>
									@foreach($category as $cat)
									<li><a href="{{route('products_cate',['slug'=>$cat->slug])}}">{{$cat->name}} </a> <span>({{$cat->products->count()}})</span></li>
									@endforeach
								</ul>
							</div>
							<div class="side" style="width: 250px">
								<h1><b>Khoảng giá</b></h1>
								<form method="GET" action="{{route('filter')}}" class="colorlib-form-2">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="guests">Từ:</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="start" id="people" class="form-control">
														<option value="100000">100.000 VNĐ</option>
														<option value="300000">300.000 VNĐ</option>
														<option value="500000">500.000 VNĐ</option>
														<option value="700000">700.000 VNĐ</option>
														<option value="1000000">1.000.000 VNĐ</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="guests">Đến:</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="end" id="people" class="form-control">
														<option value="300000">300.000 VNĐ</option>
														<option value="600000">600.000 VNĐ</option>
														<option value="800000">800.000 VNĐ</option>
														<option value="1000000">1.000.000 VNĐ</option>
														<option value="2000000">2.000.000 VNĐ</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<button type="submit" style="width: 100%;border: none;height: 40px; background: #d19e66">Tìm kiếm</button>
								</form>
							</div>
							<br>
							<hr>
							<br>
							<div class="sidebar-widget color-widget">
								<h6>PRODUCT COLOR</h6>
								<ul>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>
							</div>

							<div class="sidebar-widget product-widget">
								<h6>BEST SELLERS</h6>
								@foreach($pro_sale as $pr)
								
								<div class="wid-pro">
									<a href="{{route('pro_detail',['slug'=>$pr->slug])}}">
										<div class="sp-img">
											<img src="{{$pr->image}}" alt="" width="70px">
										</div>
										<div class="small-pro-details">
											<h5 class="title"><a href="#">{{$pr->name}}</a></h5>
											<span>{{number_format($pr->sale_price,0,'','.')}} VNĐ</span>
											<span class="pre-price">${{number_format($pr->price,0,'','.')}} VNĐ</span>
											<div class="rating">
												<ul>
													<li><a href="#"><i class="far fa-star"></i></a></li>
													<li><a href="#"><i class="far fa-star"></i></a></li>
													<li><a href="#"><i class="far fa-star"></i></a></li>
													<li><a href="#"><i class="far fa-star"></i></a></li>
													<li><a href="#"><i class="far fa-star"></i></a></li>
												</ul>
											</div>
										</div>
									</a>
								</div>
								
								@endforeach()
								
							</div>
							<div>
								{{$product->links()}}
							</div>
							<div class="sidebar-widget advertise-img">
								<a href="#" class="img">
									<img src="{{url('')}}/public/media/images/banner/sb1.jpg" alt="">
								</a>
							</div>

						</div>
					</div>
					<!-- /.col-xl-3 -->
					<div class="order-1 order-lg-2 col-lg-9 col-xl-9">
						<div class="shop-sorting-area row">
							<div class="col-4 col-sm-4 col-md-6">
								<ul class="nav nav-tabs shop-btn" id="myTab" role="tablist">
									<li class="nav-item ">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="flaticon-menu"></i></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="flaticon-list"></i></a>
									</li>
								</ul>
							</div>
							<!-- /.col-->
						</div>
						<!-- /.shop-sorting-area -->
						<div class="shop-content">
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<div class="row">
										@foreach($product as $pro)
										<div class="col-sm-6 col-xl-4">
											<div class="sin-product style-two">
												<a href="{{route('pro_detail',['slug'=>$pro->slug])}}">
												<div class="pro-img">
													<img src="{{$pro->image}}" alt="">
												</div>
												<div class="mid-wrapper">
													<h5 class="pro-title"><a href="product.html">{{$pro->name}}</a></h5>
													<div class="color-variation">
														<ul>
															<li><i class="fas fa-circle"></i></li>
															<li><i class="fas fa-circle"></i></li>
															<li><i class="fas fa-circle"></i></li>
															<li><i class="fas fa-circle"></i></li>
														</ul>
													</div>
													<p style="text-align: center">Woman / <span>{{number_format($pro->sale_price,0,'','.')}} VNĐ</span></p>
												</div>
												<div class="icon-wrapper">
													<div class="pro-icon">
														<ul>
															<li><a href="#"><i class="flaticon-valentines-heart"></i></a></li>
															<li><a href="#"><i class="flaticon-compare"></i></a></li>
															<li><a href="#" class="trigger"><i class="flaticon-eye"></i></a></li>
														</ul>
													</div>
													<div class="add-to-cart">
														<a href="{{route('add-cart',['id'=>$pro->id])}}">add to cart</a>
													</div>
												</div>
												</a>
											</div>
											<!-- /.sin-product -->
										</div>
										@endforeach
										<!-- /.col- -->

										

									</div>
									<!-- /.row -->
								</div>
								
								
							</div>
							
						</div>
						<!-- /.shop-content -->
					</div>
					<!-- /.col- -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.shop-area -->

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