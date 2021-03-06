@extends('admin.master')
@section('title','Quản lý banner')
@section('main')
<form action="{{route('edit_banner',['id'=>$qr->id])}}" method="POST"  role="form">
	@csrf
	<input type="hidden" name="method" value="PUT">
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
			<h3 class="panel-title">Chỉnh sửa banner</h3>
		</div>
	</div>
	<div class="col-md-8">
		<div class="form-group">
			<label class="" for="">Tiêu đề</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Input name" value="{{$qr->name}}">
		</div>
		<div class="form-group">
			<label class="" for="">Nội dung banner</label>
				<textarea name="content" id="editor1" rows="10" cols="80">
               {{$qr->content}}
            	</textarea>
		</div>
		
	</div>
	<div class="col-md-4">
		
		<div class="form-group">
			<label class="" for="">Trạng thái banner</label>
			<div class="radio">
				<label>
				<input type="radio" name="status" value="1" {{($qr->status==1)?'checked':''}}>Hiện
				</label>
				<label >
					<input type="radio" name="status" value="0" {{($qr->status==0)?'checked':''}}>Ẩn
				</label>
			</div>
		</div>
		<div class="form-group">
			<label class="" for="">Ảnh đại diện</label>
				<input type="hidden" name="image" width="200px" id="image" value="{{$qr->image}}">
			<span class="input-group-btn">
				<a href="#modal-file"  data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>
			</span>
			<img src="{{$qr->image}}" alt="" id="show_img" width="150px">
		</div>
	</div>
	
	
	<button type="submit" class="btn btn-success" style="margin-left: 15px">Cập nhật</button>

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

<script type="text/javascript">
	$('#modal-file').on('hide.bs.modal',function(){
		var _img=$('input#image').val();
		$('img#show_img').attr('src',_img);
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