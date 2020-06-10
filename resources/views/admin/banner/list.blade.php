@extends('admin.master')
@section('title','Quản lý banner')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách banner</h3>
	</div>
	<div class="panel-body">
		<form action="" method="GET" class="form-inline" role="form">
		@csrf
			
		
			<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								
								<a href="{{route('add_banner')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true" ></i>  Thêm banner</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead  >
										<tr class="bg-primary">
											<th style="width: 70px">Mã banner</th>
											<th style="width: 100px">Tiêu đề</th>
											<th>Ảnh bài viết</th>
											<th style="width: 500px">Nội dung</th>
											<th>Trạng thái</th>
											<th>Xử lý</th>
										</tr>
									</thead>
									<tbody>
										@foreach($banner as $value)
										<tr>
											<td style="width: 70px">{{$value->id}}</td>
											<td style="width: 100px">{{$value->name}}</td>
											<td><img src="{{$value->image}}" alt="" width="150px"></td>
											<td  style="width: 500px">{{$value->content}}</td>
											@if($value->status ==1)
											<td>Hiện</td>
											@else
											<td>Ẩn</td>
											@endif
											<td><a href="{{route('delete_banner',['id'=>$value->id])}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"></i>  Xóa</a>
											<a href="{{route('edit_banner',['id'=>$value->id])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true" ></i> Sửa</a></td>
										</tr>
										@endforeach
									</tbody>

								</table>
								
							</div>
							
						</div>

					</div>
				</div>
				<!--/.row-->


			</div>
			<!--end main-->

		</form>
	</div>
</div>
@stop()