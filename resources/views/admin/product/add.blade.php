@extends('admin.master')
@section('title','Quản lý sản phẩm')
@section('main')
<form action="" method="POST"  role="form">
	@csrf
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Thêm sản phẩm</h3>
		</div>
	</div>
	<div class="col-md-8">
		<div class="form-group">
			<label class="" for="">Product name</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Input name">
		</div>
		<div class="form-group">
			<label class="" for="">Slug</label>
			<input type="text" class="form-control" name="slug" id="slug" placeholder="Input slug">
		</div>
		<div class="form-group">
			<label class="" for="">Mô tả sản phẩm</label>
				<textarea name="description" id="editor1" rows="10" cols="80">
               This is my textarea to be replaced with CKEditor.
            	</textarea>
		</div>
		
		<div class="form-group">
			<label class="" for="">Ảnh chi tiết</label>
			<input type="hidden" name="image_list" width="100px" id="image_list">
			<span class="input-group-btn">
				<a href="#modal-files"  data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>
			</span>
			<div class="row" id="image_show_list">
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label class="" for="">Chọn danh mục</label>
			<select name="category_id" >
				@foreach($cate as $row)
				<option value="{{$row->id}}">{{$row->name}}</option>
				@endforeach
			</select>		
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
				<input type="radio" name="status" value="1" checked="checked">Còn hàng
				</label>
				<label >
					<input type="radio" name="status" value="0" >Hết hàng
				</label>
			</div>
		</div>
		<div class="form-group">
			<label class="" for="">Ảnh đại diện</label>
				<input type="hidden" name="image" width="200px" id="image">
			<span class="input-group-btn">
				<a href="#modal-file"  data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>
			</span>
			<img src="" alt="" id="show_img" width="150px">
		</div>
	</div>
	
	
	<button type="submit" class="btn btn-primary">Thêm mới</button>

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
				
				<iframe src="{{url('file')}}/dialog.php?field_id=image" style="width: 100%; height: 500px; border: 0; overflow-y: auto"></iframe>
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
				
				<iframe src="{{url('file')}}/dialog.php?field_id=image_list" style="width: 100%; height: 500px; border: 0; overflow-y: auto"></iframe>
			</div>
		</div>
	</div>
</div>
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
<script src="{{url('/public/admin')}}/js/slug.js"></script>
<script type="text/javascript">
	$('#modal-file').on('hide.bs.modal',function(){
		var _img=$('input#image').val();
		$('img#show_img').attr('src',_img);
	});
	config={};
	config.entities_latin = false;
	config.enterMode = CKEDITOR.ENTER_BR;
	CKEDITOR.replace( 'editor1',config);
</script>
@stop()