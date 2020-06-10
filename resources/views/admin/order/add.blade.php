@extends('admin.master')
@section('title','Thêm mới sản phẩm')
@section('main')

<form action="" method="POST"  role="form" enctype="multipart/form-data">
	@csrf
	<legend>Form add product</legend>
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
		<input type="text" class="form-control" name="name" id="name" placeholder="Input name">
		
	</div>
	<div class="form-group">
		<label class="" for="">Chọn danh mục</label>

		<select name="category_id" >
			@foreach($cate as $row)
			<option value="{{$row->id}}">{{$row->name}}</option>
			@endforeach
		</select>		
	</div>
	<div class="form-group">
		<label class="" for="">Slug</label>
		<input type="text" class="form-control" id="slug"  name="slug">
		
	</div>
	<div class="form-group">
		<label class="" for="">Content</label>
		<textarea name="content" id="content" class="form-control"></textarea> 
		
	</div>

	<div class="form-group">
		<label class="" for="">Giá</label>
		<input type="text" class="form-control"  name="price" placeholder="Input price">
		
	</div>
	<div class="form-group">
		<label class="" for="">Giá KM</label>
		<input type="text" class="form-control"  name="sale_price" placeholder="Input sale_price">
		
	</div>
	<div class="form-group">
		<label class="" for="">Product status</label>
		<div class="radio">
			<label>
			<input type="radio" name="status" value="1" checked="checked">Hiện
			</label>
			<label >
			<input type="radio" name="status" value="0" >Ẩn
			</label>
		</div>
	</div>
	<div class="form-group">
		<label class="" for="">Ảnh đại diện</label>
		<input type="hidden" name="image" width="200px" id="image">
		<span class="input-group-btn">
			<a href="#modal-file"  data-toggle="modal" class="btn btn-default">Select</a>
		</span>
		<img src="" alt="" id="show_img" width="150px">
	</div>
	<div class="form-group">
		<label class="" for="">Ảnh chi tiết</label>
		<input type="hidden" name="image_list" width="100px" id="image_list">
		<span class="input-group-btn">
			<a href="#modal-files"  data-toggle="modal" class="btn btn-default">Select</a>
		</span>
		<div class="row" id="image_show_list">
			
		</div>
	</div>
	
	<button type="submit" class="btn btn-primary">Save</button>
</form>
@stop()

@section('js')

<div class="modal fade" id="modal-file">
	<div class="modal-dialog" >
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Quản lý file</h4>
			</div>
			<div class="modal-body">
				
				<iframe src="{{url('file')}}/dialog.php?akey=VSLzJuW5fQvOsCxvI5Axui3AqkB9JSR70lP&field_id=image" style="width: 100%; height: 500px; border: 0; overflow-y: auto"></iframe>
			</div>
		</div>
	</div>
</div>
<!-- ---model 2-- -->
<div class="modal fade" id="modal-files">
	<div class="modal-dialog" >
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Quản lý file</h4>
			</div>
			<div class="modal-body">
				
				<iframe src="{{url('file')}}/dialog.php?akey=VSLzJuW5fQvOsCxvI5Axui3AqkB9JSR70lP&field_id=image_list" style="width: 100%; height: 500px; border: 0; overflow-y: auto"></iframe>
			</div>
		</div>
	</div>
</div>
<script src="{{url('/public/admin')}}/js/slug.js"></script>
<script src="{{url('/public/admin')}}/tinymce/tinymce.min.js"></script>
<script src="{{url('/public/admin')}}/tinymce/config.js"></script>
<script type="text/javascript">
	$('#modal-file').on('hide.bs.modal',function(){
		var _img=$('input#image').val();
		$('img#show_img').attr('src',_img);
	});
	$('#modal-files').on('hide.bs.modal',function(){
		var _imgs =$('input#image_list').val();
		var img_list =$.parseJSON(_imgs);
		var _html='';
		for (var i =0; i< img_list.length; i++) {
			_html+='<div class="col-md-3 thumbnail">';
				_html+='<img src="'+img_list[i]+'" alt="">';
			_html+='</div>';
		}
		$('#image_show_list').html(_html);
	});

</script>
@stop()