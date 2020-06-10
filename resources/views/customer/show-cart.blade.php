@extends('customer.master')
@section('main')

<section class="breadcrumb-area">
			<div class="container-fluid custom-container">
				<div class="row">
					<div class="col-xl-12">
						<div class="bc-inner">
							<p><a href="{{route('home')}}">Trang chủ  |</a> Giỏ hàng</p>
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
										<th>Số lượng</th>
										<th>Giá sản phẩm</th>
										<th>Tổng tiền</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									@if(isset($cart->items))
									@foreach($cart->items as $row)
									<form action="{{route('update-cart',['id'=>$row['id']])}}">
									<tr>
										<td>
											<a href="{{route('delete-cart',['id'=>$row['id']])}}">X</a>
										</td>
										<td>
											<a href="#">
												<div class="product-image">
													<img alt="Stylexpo" src="{{$row['image']}}" width="150px">
												</div>
											</a>
										</td>
										<td>
											<div class="product-title">
												<a href="#">{{$row['name']}}</a>
											</div>
										</td>
										<td>
											<div class="quantity">
												<input type="number" value="{{$row['quantity']}}" name="quantity">
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
											<div class="total-price-box">
												<span class="price">{{number_format($row['price']*$row['quantity']),0,'','.'}} đ</span>
											</div>
										</td>
										<td>
											<button type="submit" style="height: 50px; background: #d19e66; color: #fff">Update</button>
										</td>

									</tr>
									</form>
								@endforeach
								@endif
								
									<!-- end single product  -->
									
									
								</tbody>
							</table>

						</div>
						<!-- /.cart-table -->
						
						<!-- /.row -->
					</div>
					<!-- /.col-xl-9 -->
					<div class="col-xl-3">
						<div class="cart-subtotal">
							<p>SUBTOTAL</p>
							<ul>
								<?php $sale_price=10000 ?>
								<li><span>Total Price:</span>{{number_format($cart->total_price),0,'','.'}} đ</li>
								<li><span>Shipping Cost:</span>{{$sale_price}} đ</li>
								<li><span>TOTAL:</span>{{number_format($cart->total_price + $sale_price),0,'','.'}} đ</li>
							</ul>
							<div class="note">
								<span>Order Note :</span>
								<textarea></textarea>
							</div>
							@if(Auth::check())
							<a href="{{route('check_out')}}">Proceed To Checkout</a>
							@else
							<a href="{{route('sign_checkout')}}">Proceed To Checkout</a>
							@endif
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