<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
/**
 * 
 */
class CategoryController extends Controller
{
	
	// public function list(){
	// 	$user=User::all();
	// 	return view('admin.list',['user'=>$user]);
	// }
	public function add(){
		return view('admin.category.add');
	}
	public function post_add(Request $req){
		$this->validate($req,[
			'name'=>'required',
		],[
			'name.required'=>'Tên DM không được để rỗng'
		]);
		Category::create($req->all());
		return redirect()->route('list_category');

	}
	public function search(Request $req){
		$search = $req->get('search');
		$cate = Category::where('status',1)->where('name','like','%'.$search.'%')->paginate(5);
		return view('admin.category.list',compact('cate'));
	}
	public function list(){
		$cate=Category::paginate(5);
		return view('admin.category.list',compact('cate'));
	}

	public function edit($id){
		$qr= Category::find($id);
		return view('admin.category.edit', compact('qr'));
	}
	public function post_edit($id, Request $req){
		$us= Category::find($id)->update([
			'name'=>$req->name,
			'slug'=>$req->slug,
			'status'=>$req->status
		]);
		return redirect()->route('list_category');

	}
	public function delete($id){
		$cate=Category::find($id)->delete();
		return redirect()->back();
	}
}

 ?>