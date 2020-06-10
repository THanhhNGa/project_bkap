@extends('customer.master')
@section('main')

<section class="breadcrumb-area">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="col-xl-12">
						<div class="bc-inner">
							<p><a href="{{route('home')}}">Cửa hàng  |</a> Sản phẩm yêu thích</p>
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

		<section class="cart-area">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="col-xl-9">
						<div class="cart-table">
							<table class="tables">
								<thead>
									<tr>
										<th></th>
										<th>Ảnh</th>
										<th>Tên sản phẩm</th>
										<th>Đơn giá</th>
										<th>Thêm vào giỏ hàng</th>
									</tr>
								</thead>
								<tbody>
									@foreach($wishlist->items as $row)
									<form action="{{route('add-cart',['id'=>$row['id']])}}" class="form-inline" role="form">
										<input type="hidden" id="id" value="$row['id']">
									<tr>
										<td>
											<a href="{{route('delete_wishlist',['id'=>$row['id']])}}">X</a>
										</td>
										<td>
											<a href="#">
												<div class="product-image">
													<img alt="Stylexpo" src="{{$row['image']}}" width="100px">
												</div>
											</a>
										</td>
										<td>
											<div class="product-title">
												<a href="#">{{$row['name']}}</a>
											</div>
										</td>
										<td>
											<ul>
												<li>
													<div class="price-box">
														<span class="price">{{number_format($row['price']),0,'','.'}} đ</span>
													</div>
												</li>
											</ul>
										</td>
										<td>
											<button type="submit" class="add-to-cart" style="height: 50px; background: #d19e66; color: #fff"><i class="flaticon-shopping-purse-icon" ></i>  Add to cart</button>
										</td>
									</tr>
									</form>
								@endforeach
									
								</tbody>
							</table>

						</div>
						<!-- /.cart-table -->
						<div class="row cart-btn-section">
							
							
							<!-- /.col-xl-6 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.col-xl-9 -->
					<div class="col-xl-3">
						
						</div>
						<!-- /.cart-subtotal -->


					</div>
					<!-- /.col-xl-3 -->
				</div>
			</div>
		</section>
		<!-- /.cart-area -->

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