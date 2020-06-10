@extends('admin.master')
@section('title','Trang quản trị')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách danh mục</h3>
	</div>
	<div class="panel-body">
		<form action="{{route('search_cate')}}" method="GET" class="form-inline" role="form">
		@csrf
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="text" name="search" class="form-control" id="" placeholder="Tìm kiếm theo tên">
			</div>
			<button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true" ></i>  Tìm kiếm</button>
		</form>
			<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{route('add_category')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true" ></i>  Thêm danh mục</a>
								<table class="table table-bordered" style="margin-top:20px;">
									<thead>
										<tr class="bg-primary">
											<th>STT</th>
											<th>Tên danh mục</th>
											<th>Ngày tạo</th>
											<th>Trạng thái</th>
											<th>Xử lý</th>
										</tr>
									</thead>
									<tbody>
										@foreach($cate as $value)
										<tr>
											<td>{{$loop->index+1}}</td>
											<td>{{$value->name}}</td>
											<td>{{$value->created_at}}</td>
											@if($value->status==0)
											<td>Hết hàng</td>
											@else
											<td>Còn hàng</td>
											@endif
											<td>
												<a href="{{route('edit_category',['id'=>$value->id])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{route('delete_category',['id'=>$value->id])}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa fa-trash" aria-hidden="true" ></i> Xóa</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								{{$cate->links()}}
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