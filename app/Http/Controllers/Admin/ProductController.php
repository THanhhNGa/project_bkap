<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
/**
 * 
 */
class ProductController extends Controller
{
	
	public function add(){
		$cate= Category::where('status',1)->get();
		return view('admin.product.add',compact('cate'));
	}
	public function post_add(Request $req){
		$this->validate($req,[
			'name'=>'required',
			'slug'=>'required|unique:product,slug',
			'price'=>'required',
		],[
			'name.required'=>'Tên SP không được để rỗng',
			'slug.required'=>'Slug không được để rỗng',
			'slug.unique'=>'Slug đã tồn tại trong CSDL',
			'price.required'=>'Giá SP không được để rỗng '
		]);
		// $img= str_replace(url('uploads').'/', '', $req->image);
		$img=$req->image;
		$req->merge(['image'=>$img]);
		Product::create($req->all());
		return redirect()->route('list_product');

	}
	public function list(){
		$pro=Product::where('status',1)->paginate(5);
		return view('admin.product.list',compact('pro'));
	}
	public function search(Request $req){
		$search = $req->get('search');
		$pro =Product::where('status',1)->where('name','like','%'.$search.'%')->paginate(5);
		return view('admin.product.list',compact('pro'));
	}

	public function edit($id){
		$qr= Product::find($id);
		$cate= Category::where('status',1)->get();
		return view('admin.product.edit', compact('qr','cate'));
	}
	public function post_edit($id, Request $req){
		$this->validate($req,[
			'name'=>'required',
			'slug'=>'required|unique:product,slug,'.$id,
			'price'=>'required',
		],[
			'name.required'=>'Tên SP không được để rỗng',
			'slug.required'=>'Slug không được để rỗng',
			'slug.unique'=>'Slug đã tồn tại trong CSDL',
			'price.required'=>'Giá SP không được để rỗng '
		]);
		Product::find($id)->update([
			'name'=>$req->name,
			'slug'=>$req->slug,
			'image'=>$req->image,
			'image_list'=>$req->image_list,
			'price'=>$req->price,
			'sale_price'=>$req->sale_price,
			'description'=>$req->description,
			'category_id'=>$req->category_id,
			'status'=>$req->status
		]);
		return redirect()->route('list_product');

	}
	public function delete($id){
		$pro=Product::find($id)->delete();
		return redirect()->back();
	}
}

 ?>