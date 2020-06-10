<?php 
	namespace App\Http\Controllers\Customer;
	use App\Models\Category;
	use App\Models\Account;
	use App\Models\Order;
	use App\Models\Order_detail;
	use App\Helper\Cart;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Auth;
	use App\User;
	/**
	 * 
	 */
	class AccountController extends Controller
	{
		
		
		public function login(){
			return view('customer.login');
		}
		public function post_login(Request $request){
			$this->validate($request,[
				'email'=>'required|email',
				'password'=>'required'
			],[
				'email.required'=>'email không được để rỗng',
				'email.email'=>'email không đúng định dạng',
				'password.required'=>'pass không được để rỗng'
			]);
			// dd($request->only('email','password'));
			//so sánh email và pass trong csdl để cho đăng nhập
			if(Auth::attempt($request->only('email','password'),$request->has('remember'))){
				return redirect()->route('home');
			}
			else{
				return redirect()->back();
			}

		}
		//logout
		public function logout(){
			Auth::logout();
			Session(['cart'=>[]]);
			return redirect()->route('home');
		}

		public function register(){
			return view('customer.register');
		}
		public function post_register(Request $request){
			User::create([
				'name'=>$request->name,
				'email'=>$request->email,
				'password'=>bcrypt($request->password),
				'phone'=>$request->phone,
				'address'=>$request->address
			]);
			return redirect()->route('login_cus');
		}
		//Info_cus
		public function info_cus(Cart $cart, $id){
			$acc= Account::where('id',$id)->first();
			$or=Order::where('account_id',$id)->get();
			
			// dd($or);
			// $or_detail=Order_detail::where('order_id',$or->id)->get();
			return view('customer.info_customer',compact('acc','or'));
		}
		public function detail($id){
			$order=Order::find($id);
			$pro=Order_detail::where('order_id',$id)->get();
			return view('customer.info_cus_detail',compact('pro'));
		}
	}
 ?>