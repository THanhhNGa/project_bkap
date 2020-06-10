@extends('admin.master')
@section('title','Quản lý đơn hàng')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách đơn hàng chưa xử lý</h3>
	</div>
	<div class="panel-body">
		<form action="{{route('search')}}" method="GET" class="form-inline" role="form">
		@csrf
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="text" class="form-control" name="search" placeholder="Tìm kiếm theo tên khách hàng">
			</div>
			<button type="sb" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm</button> 
		</form>
		<form action="{{route('order_list')}}" method="GET" class="form-inline" role="form">
		
			<span><b>Lọc sản phẩm theo ngày</b>
				<input type="date" name="date_from">
				<input type="date" name="date_to">
				<button type="submit" class="btn btn-default">Lọc</button>
			</span>
		</form>
			
			<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>Mã đơn hàng </th>
											<th>Tên khách hàng</th>
											<th>Ngày đặt</th>
											<th>Trạng thái</th>
											<th>Địa chỉ giao hàng</th>
											<th>Tổng tiền</th>
											<th>Xử lý</th>
										</tr>
									</thead>
									<tbody>
										@foreach($orders as $value)
										<tr>
											<td>{{$value->id}}</td>
											<td>{{$value->us->name}}</td>
											<td>{{$value->created_at}}</td>
											@if($value->status ==0)
											<td>Đang chờ duyệt</td>
											@elseif($value->status ==1)
											<td>Đang giao hàng</td>
											@else
											<td>Đã giao hàng</td>
											@endif
											<td>{{$value->address}}</td>
											<td>{{$value->total_price}}</td>
											<td>
												<a href="{{route('order_detail',['id'=>$value->id])}}" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> Xem chi tiết</a>
											</td>
										</tr>
										@endforeach
										
									</tbody>
									
								</table>
								<a href="{{route('processed')}}" class="btn btn-primary"><i class="fa fa-eye"></i> 
								Đơn đã xử lý</a>
								<div class="clearfix"></div>
								<div align="right">
									{{$orders->links()}}
								</div>
							</div>
							
						</div>

					</div>
				</div>
				<!--/.row-->


			</div>
			<!--end main-->

		
	</div>
</div>

	


@stop