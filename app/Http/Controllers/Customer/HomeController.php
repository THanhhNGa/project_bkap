<?php
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\BLog;
use App\Models\Banner;
use App\Helper\Wishlist;
use Auth;
/**
*
*/
class HomeController extends Controller
{
	
	public function home(){
		//category
		$category=Category::where('status',1)->get();
		//produc t
		$product =Product::where('status',1)->limit(8)->get();
		$banner = Banner::where('status',1)->get();
		$pro_tre =Product::where('status',1)->orderBy('created_at','DESC')->limit(4)->get();
		$pro_sale =Product::where('status',1)->orderBy('sale_price','DESC')->limit(2)->get();
		return view('customer.home',compact('product','pro_tre','pro_sale','category','banner'));
		
	}
	public function blog(){
		$blog=Blog::all();
		return view('customer.blog',compact('blog'));
	}
	public function detail_blog($slug){
		$qr= Blog::where('slug',$slug)->first();
		$blog=Blog::where('status',1)->orderBy('updated_at','DESC')->limit(3)->get();
		return view('customer.detail_blog',compact('qr','blog'));
	}
	//ds yêu thích
	public function show_wishlist(){
		$wishlist= session('wishlist') ? session('wishlist'):[];
		$wishlists = new Wishlist();
		return view('customer.wishlist');
	}
	public function add_wishlist(Wishlist $wishlist, $id){
		if(Auth::check()){
			$product= Product::find($id);
			$wishlist->add($product);
			return redirect()->route('show_wishlist');
		}
		else{
			return view('customer.login');
		}
		
	}
	public function delete_wishlist(Wishlist $wishlist, $id){
		$wishlist->delete($id);
		return redirect()->back();
	}
	
}
?>