<?php
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\http\Request;
use App\Helper\Cart;
use App\Models\Account;
use App\Models\Order;
use App\Models\Order_detail;
use Auth;
/**
*
*/
class CheckoutController extends Controller
{
	
	public function get_check_out(){
		return view('customer.check-out2');
	}
	public function post_check_out(Cart $cart,Request $req){
		$this->validate($req,[
			'name'=>'required',
			'email'=>'required|email',
			'address'=>'required',
			'phone'=>'required'
		],[
			'name.required'=>'Tên không được để rỗng',
			'email.required'=>'Email không đc để rỗng',
			'email.email'=>'Kiểm tra lại định dạng email',
			'address.required'=>'Địa chỉ Không đc để rỗng password',
			'phone.required'=>" SĐT không đc để rỗng",
			
		]);
		$check = Account::where('email',$req->email)->first();
		if(!$check){
			$customer =Account::create([
			'name'=>$req->name,
			'email'=>$req->email,
			'phone'=>$req->phone,
			'address'=>$req->address
			]);
		}
		
		$order =Order::create([
			'account_id'=>Auth::user()->id,
			'name'=>$req->name,
			'email'=>$req->email,
			'phone'=>$req->phone,
			'address'=>$req->address,
			'total_price'=>$cart->total_price
		]);
		foreach($cart->items as $item){
			Order_detail::create([
				'product_id'=>$item['id'],
				'order_id'=>$order->id,
				'quantity'=>$item['quantity'],
				'price'=>$item['price'],
			]);
		}
		Session(['cart'=>[]]);
		Session(['wishlist'=>[]]);
		return redirect()->route('complete');
	}
}
?>