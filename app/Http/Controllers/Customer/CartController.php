<?php 
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Helper\Cart;
use Illuminate\http\Request;
/**
 * 
 */
class CartController extends Controller
{
	
	public function show(Cart $cart){
		$cart= session('cart') ? session('cart'):[];
		$carts = new Cart();
		return view('customer.show-cart');
		
	}
	public function add(Request $req,Cart $cart, $id){
		$product= Product::find($id);
		$qtt= $req->quantity;
		if(isset($qtt)){
			$cart->add($product,$qtt);
		}
		else{
			$cart->add($product);
		}
		
		return redirect()->route('show-cart',compact('qtt'));
	}
	public function update(Request $req,$id, Cart $cart){
		$quantity=$req->quantity;
		$cart->update($id,$quantity);
		// dd($cart);
		return redirect()->back();
	}
	public function delete($id,Cart $cart){
		$cart->delete($id);
		return redirect()->back();
	}
	
	public function checkout(){
		return view('customer.checkout');
	}
	public function sign(){
		return view('customer.sign');
	}
}
 ?>