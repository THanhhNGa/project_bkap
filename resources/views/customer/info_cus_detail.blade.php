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

		<section class="account-area">
			<div class="container-fluid custom-container">
				<div class="row">
					
					<!-- /.col-xl-3 -->
					<div class="col-xl-9">
						<div class="account-table">
							<h6>Lịch sử mua hàng</h6>
							<table class="tables">
								<thead>
									<tr>
										<th>Hình ảnh</th>
										<th>Tên sản phẩm</th>
										<th>Giá sản phẩm</th>
										<th>Số lượng</th>
									</tr>
								</thead>
								<tbody>
									@foreach($pro as $row)
									<tr>
										<td><img src="{{$row->pro->image}}" width="50px" alt=""></td>
										<td>{{$row->pro->name}}</td>
										<td>{{$row->price}}</td>
										<td>{{$row->quantity}}</td>
									</tr>
									
									@endforeach
									<!-- /.single product  -->
								</tbody>
								
							</table>
							<a href ="{{route('shop')}}" style="width: 100px; height: 30px; background: #d19e66; color: #fff; margin-left: 0px">Trở về</a>
						</div>

						<!-- /.cart-table -->
					</div>

					<!-- /.col-xl-9 -->

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