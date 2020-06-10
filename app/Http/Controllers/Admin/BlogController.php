<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
/**
 * 
 */
class BlogController extends Controller
{
	
	public function add(){
		$blog= Blog::all();
		return view('admin.blog.add',compact('blog'));
	}
	public function post_add(Request $req){
		$this->validate($req,[
			'name'=>'required',
			'slug'=>'required|unique:product,slug',
		],[
			'name.required'=>'Tên bài viết không được để rỗng',
			'slug.required'=>'Slug không được để rỗng',
			'slug.unique'=>'Slug đã tồn tại trong CSDL',
		]);
		// $img= str_replace(url('uploads').'/', '', $req->image);
		$img=$req->image;
		$req->merge(['image'=>$img]);
		Blog::create($req->all());
		return redirect()->route('list_blog');

	}
	public function list(){
		$blog=Blog::paginate(3);
		return view('admin.blog.list',compact('blog'));
	}
	public function search(Request $req){
		$search = $req->get('search');
		$blog = Blog::where('status',1)->where('name','like','%'.$search.'%')->paginate(3);
		return view('admin.blog.list',compact('blog'));
	}
	public function edit($id){
		$qr= Blog::find($id);
		return view('admin.blog.edit', compact('qr'));
	}
	public function post_edit($id, Request $req){
		$this->validate($req,[
			'name'=>'required',
			'slug'=>'required|unique:blog,slug,'.$id,
		],[
			'name.required'=>'Tên bài viết không được để rỗng',
			'slug.required'=>'Slug không được để rỗng',
			'slug.unique'=>'Slug đã tồn tại trong CSDL',
		]);
		Blog::find($id)->update([
			'name'=>$req->name,
			'slug'=>$req->slug,
			'image'=>$req->image,
			'content'=>$req->content,
			'status'=>$req->status
		]);
		return redirect()->route('list_blog');

	}
	public function delete($id){
		Blog::find($id)->delete();
		return redirect()->back();
	}
}

 ?>