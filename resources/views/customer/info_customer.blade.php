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
					<div class="col-xl-3">
						<div class="account-details">
							<p>Thông tin khách hàng</p>
							<ul>
								<li>Tên khách hàng: {{Auth::user()->name}}</li>
								<li>Email: {{Auth::user()->email}}</li>
								<li>Địa chỉ: {{Auth::user()->address}}</li>
								<li>SĐT: {{Auth::user()->phone}}</li>
							</ul>
						</div>
						<!-- /.cart-subtotal -->
					</div>
					<!-- /.col-xl-3 -->
					<div class="col-xl-9">
						<div class="account-table">
							<h6>Lịch sử mua hàng</h6>
							<table class="tables">
								<thead>
									<tr>
										<th>Mã hóa đơn</th>
										<th>Ngày mua</th>
										
										<th>Trạng thái đơn hàng</th>
										<th>Tổng tiền</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									@foreach($or as $row)
									<tr>
										<td>{{$row->id}}</td>
										<td>{{$row->created_at}}</td>
										@if($row->status==0)
										<td>Đang chờ duyệt</td>
										@elseif($row->status==1)
										<td>Đang giao hàng</td>
										@else
										<td>Đã thanh toán</td>
										@endif
										<td>{{number_format($row->total_price,0,'','.')}}</td>
										<td><a href="{{route('pros_detail',['id'=>$row->id])}}">Chi tiết đơn hàng</a></td>
									</tr>
									
									@endforeach
									<!-- /.single product  -->
								</tbody>
								
							</table>

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