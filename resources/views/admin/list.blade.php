@extends('admin.master')
@section('title','Trang quản trị')
@section('main')
<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								
								<a href="{{route('register_admin')}}" class="btn btn-primary">Thêm tài khoản</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin tài khoản</th>
											<th>Địa chỉ Email</th>
											<th>Ngày tạo</th>
											<th>Chức danh</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										@foreach($user as $value)
										<tr>
											<td>{{$loop->index+1}}</td>
											<td>
												{{$value->name}}
											</td>
											<td>{{$value->email}}</td>
											<td>
												{{$value->created_at}}
											</td>
											@if($value->status==0)
											<td>Khách hàng</td>
											@elseif($value->status==1)
											<td>Quản trị viên</td>
											@else
											<td>Cộng tác viên</td>
											@endif
											<td>
												<a href="{{route('edit_account',['id'=>$value->id])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{route('delete_account',['id'=>$value->id])}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa fa-trash" aria-hidden="true" ></i> Xóa</a>
											</td>
											
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

			

@stop()