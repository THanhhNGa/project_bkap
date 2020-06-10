<?php 
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\http\Request;
/**
 * 
 */
class ProductController extends Controller
{
	
	public function pro_detail($slug){
		$category=Category::all();
		$product=Product::where('status',1)->limit(4)->get();
		$pro_sale=Product::where('status',1)->orderBy('sale_price','DESC')->limit(2)->get();
		$pro_detail=Product::where('slug',$slug)->first();

		//chuyển thành mảng images
		$images= json_decode($pro_detail->image_list);  
										
		return view('customer.product_detail',compact('product','category','pro_sale','pro_detail','images'));
	}
	public function products_cate($slug){
		$category=Category::where('slug',$slug)->first();
		$product=Product::where('status',1)->where('category_id',$category->id)->paginate(9);
		return view('customer.products_cate',compact('product'));
	}
	public function shop(){
		$category=Category::where('status',1)->get();
		$product=Product::where('status',1)->paginate(9);
		return view('customer.shop',compact('product','category'));
	}
	public function seek(Request $req){
		$seek = $req->get('search');
		$product=Product::where('status',1)->where('name','like','%'.$seek.'%')->paginate(9);
		// dd($product->all());
		return view('customer.products_cate',compact('product'));
	}
	public function filter(Request $r){
		if($r->start!=''){
				$product= Product::where('status',1)->whereBetween('sale_price',[$r->start,$r->end])->paginate(9);
			}
			else{
				$product= Product::where('status',1)->paginate(9);
			}
		return view('customer.shop',compact('product'));
	}
	
}
 ?>