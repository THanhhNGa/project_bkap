@extends('admin.master')
@section('title','Quản lý bình luận')
@section('main')
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách bình luận</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
		@csrf
			
			<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>Mã bình luận</th>
											<th>Tên tài khoản</th>
											<th>Tên sản phẩm</th>
											<th>Nội dung bình luận</th>
											<th>Ngày đăng</th>
											<th>Xử lý</th>
										</tr>
									</thead>
									<tbody>
										@foreach($cmt as $value)
										<tr>
											<td>{{$value->id}}</td>
											<td>{{$value->us->name}}</td>
											<td>{{$value->cm->name}}</td>
											<td>{{$value->comment}}</td>
											<td>{{$value->created_at}}</td>
											<td><a href="{{route('delete_cmt',['id'=>$value->id])}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa fa-trash" aria-hidden="true" ></i>  Xóa</a></td>
											
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