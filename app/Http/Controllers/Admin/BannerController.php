<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
/**
 * 
 */
class BannerController extends Controller
{
	
	public function add(){
		// $banner= Banner::all();
		return view('admin.banner.add');
	}
	public function post_add(Request $req){
		$this->validate($req,[
			'name'=>'required',
		],[
			'name.required'=>'Tên bài viết không được để rỗng',
			
		]);
		// $img= str_replace(url('uploads').'/', '', $req->image);
		$img=$req->image;
		$req->merge(['image'=>$img]);
		Banner::create($req->all());
		return redirect()->route('list_banner');

	}
	public function list(){
		$banner=Banner::paginate(3);
		return view('admin.banner.list',compact('banner'));
	}
	public function edit($id){
		$qr= Banner::find($id);
		return view('admin.banner.edit', compact('qr'));
	}
	public function post_edit($id, Request $req){
		$this->validate($req,[
			'name'=>'required',
		],[
			'name.required'=>'Tên bài viết không được để rỗng',
		]);
		Banner::find($id)->update([
			'name'=>$req->name,
			'image'=>$req->image,
			'content'=>$req->content,
			'status'=>$req->status
		]);
		return redirect()->route('list_banner');

	}
	public function delete($id){
		Banner::find($id)->delete();
		return redirect()->back();
	}
}

 ?>