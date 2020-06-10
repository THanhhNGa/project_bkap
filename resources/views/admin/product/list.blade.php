@extends('admin.master')
@section('title','Quản lý sản phẩm')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách sản phẩm</h3>
	</div>
	<div class="panel-body">
		<form action="{{route('search_pro')}}" method="GET" class="form-inline" role="form">
		@csrf
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="text" class="form-control" name="search" id="" placeholder="Tìm kiếm theo tên">
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true" ></i>  Tìm kiếm</button>
		</form>
			<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								
								<a href="{{route('add_product')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true" ></i>  Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>Mã sản phẩm</th>
											<th>Tên sản phẩm</th>
											<th>Ảnh sản phẩm</th>
											<th>Giá SP</th>
											<th>Giá KM</th>
											<th>Danh mục</th>
											<th>Mô tả</th>
											<th>Ngày tạo</th>
											<th>Trạng thái</th>
											<th  style="width: 170px">Xử lý</th>
										</tr>
									</thead>
									<tbody>
										@foreach($pro as $value)
										<tr>
											<td>{{$value->id}}</td>
											<td>{{$value->name}}</td>
											<td><img src="{{$value->image}}" width="100px" alt=""></td>
											<td>{{number_format($value->price,0,'','.')}} VNĐ</td>
											<td>{{number_format($value->sale_price,0,'','.')}} VNĐ</td>
											<td>{{$value->category->name}}</td>
											<td>{{$value->description}}</td>
											<td>{{$value->created_at}}</td>
											@if($value->status==0)
											<td>Hết hàng</td>
											@else
											<td>Còn hàng</td>
											@endif
											<td  style="width: 170px">
												<a href="{{route('edit_product',['id'=>$value->id])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{route('delete_product',['id'=>$value->id])}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa fa-trash" aria-hidden="true" ></i> Xóa</a>
											</td>
										</tr>
										@endforeach
										
									</tbody>

								</table>
								<div style="text-align: right">
									{{$pro->links()}}
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
@stop()