@extends('admin.master')
@section('title','Trang quản trị')
@section('main')
<form action="" method="POST"  role="form" enctype="multipart/form-data">
	@csrf
	<div class="col-md-8">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Thêm mới danh mục SP</h3>
		</div>
		
	</div>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	
	<div class="form-group">
		<label class="" for="">Product name</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Nhập vào tên danh mục">
		
	</div>
	
	<div class="form-group">
		<label class="" for="">Slug</label>
		<input type="text" class="form-control" id="slug"  name="slug" placeholder="Nhập vào slug">
		
	</div>
	
	<div class="form-group">
		<label class="" for="">Product status</label>
		<div class="radio">
			<label>
			<input type="radio" name="status" value="1" checked="checked">Còn hàng
			</label>
			<label >
			<input type="radio" name="status" value="0" >Hết hàng
			</label>
		</div>
	</div>
	</div>
	<div class="clearfix"></div>
	<button type="submit" class="btn btn-primary" style="margin-left: 10px">Thêm mới DM</button>
</form>
@stop()
@section('js')
<script src="{{url('/public/admin')}}/js/slug.js"></script>
@stop()