@extends('admin.master')
@section('title','Quản lý tin tức')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách bài viết</h3>
	</div>
	<div class="panel-body">
		<form action="{{route('search_blog')}}" method="GET" class="form-inline" role="form">
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
								
								<a href="{{route('add_blog')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true" ></i>  Thêm bài viết</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead  >
										<tr class="bg-primary">
											<th style="width: 70px">Mã bài viết</th>
											<th style="width: 100px">Tiêu đề bài viết</th>
											<th>Ảnh bài viết</th>
											<th style="width: 600px">Nội dung</th>
											<th>Trạng thái</th>
											<th>Xử lý</th>
										</tr>
									</thead>
									<tbody>
										@foreach($blog as $value)
										<tr>
											<td style="width: 70px">{{$value->id}}</td>
											<td style="width: 100px">{{$value->name}}</td>
											<td><img src="{{$value->image}}" width="100px" alt=""></td>
											<td style="width: 600px">{{$value->content}}</td>
											@if($value->status==0)
											<td>Ẩn</td>
											@else
											<td>Hiện</td>
											@endif
											<td>
												<a href="{{route('edit_blog',['id'=>$value->id])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{route('delete_blog',['id'=>$value->id])}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa fa-trash" aria-hidden="true" ></i> Xóa</a>
											</td>
										</tr>
										@endforeach
										
									</tbody>

								</table>
								{{$blog->links()}}
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