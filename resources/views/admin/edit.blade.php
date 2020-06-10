@extends('admin.master')
@section('title','Quản lý tài khoản')
@section('main')

<form action="" method="POST"  role="form" enctype="multipart/form-data">
	@csrf
	<legend>Form edit account</legend>
	<div class="col-md-7">
	<div class="form-group">
		<label class="" for="">Account name</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Input name" value="{{$qr->name}}">
		
	</div>
	
	<div class="form-group">
		<label class="" for="">Email</label>
		<input type="text" class="form-control" id="email"  name="email" value="{{$qr->email}}">
		
	</div>
	<div class="form-group">
		<label class="" for="">Ngày tạo</label>
		<input type="text" class="form-control"  name="created_at" placeholder="Created_at" value="{{$qr->created_at}}">
		
	</div>
	<div class="form-group">
		<label class="" for="">Chức danh</label>
		<div class="radio">
			<label>
			<input type="radio" name="status" value="1" {{($qr->status==1?'checked':'')}}>Admin
			</label>
			<label >
			<input type="radio" name="status" value="0" {{($qr->status==0?'checked':'')}}>Khách hàng
			</label>
			<label >
			<input type="radio" name="status" value="2" {{($qr->status==2?'checked':'')}}>Cộng tác viên
			</label>
		</div>
	</div>

	

	

	<button type="submit" class="btn btn-primary">Save</button>
	</div>
</form>
@stop()
