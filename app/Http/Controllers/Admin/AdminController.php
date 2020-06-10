<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\Account;
use Auth;
use App\User;
use Carbon\carbon;
/**
 * 
 */
class AdminController extends Controller
{
	public function reset(){
		return view('admin.reset');
	}
	public function index(){
		$pro_count=Product::count();
		$or_count=Order::where('status',0)->orWhere('status',1)->count();
		$acc_count= Account::count();
		//
		$month_now= carbon::now()->format('m');
		$year_now= carbon::now()->format('Y');
		for($i=1; $i<= $month_now; $i++){
			$dl['Tháng '.$i]= Order::where('status',2)->whereMonth('updated_at',$i)->whereYear('updated_at',$year_now)->sum('total_price');

		}
		return view('admin.index',compact('pro_count','or_count','acc_count','dl'));
	}
	public function register(){
		return view('admin.register');
	}
	public function post_register(Request $req){
		$this->validate($req,[
			'name'=>'required',
			'email'=>'required|email',
			'password'=>'required',
			'confirm_password'=>'required|same:password'

		],[
			'name.required'=>'Tên không được để rỗng',
			'email.required'=>'Email không đc để rỗng',
			'email.email'=>'Kiểm tra lại định dạng email',
			'password.requires'=>'Không đc để rỗng password',
			'confirm_password.required'=>"Mật khẩu xác nhận không đc để rỗng",
			'confirm_password.same'=>'Mật khẩu không trùng khớp'
		]);
		Account::create([
			'name'=>$req->name,
			'email'=>$req->email,
			'password'=>bcrypt($req->password)

		]);
		return view('admin.login');
	}
	public function login(){
		return view('admin.login');
	}
	public function post_login(Request $req){
		$this->validate($req,[
			'email'=>'required|email',
			'password'=>'required'
		],[
			'email.required'=>'email không được để rỗng',
			'email.email'=>'email không đúng định dạng',
			'password.required'=>'pass không được để rỗng'
		]);
		if(Auth::attempt($req->only('email','password'),$req->has('rmb'))){
			return redirect()->route('index');
		}
		else{
			return view('admin.login');
		}
	}
	public function logout(){
		Auth::logout();
		return view('admin.login');
	}
	public function list(){
		$user=User::all();
		return view('admin.list',['user'=>$user]);
	}
	public function edit($id){
		$qr= User::find($id);
		return view('admin.edit', compact('qr'));
	}
	public function post_edit($id, Request $req){
		$us= User::find($id)->update([
			'name'=>$req->name,
			'email'=>$req->email,
			'created_at'=>$req->created_at,
			'status'=>$req->status
		]);
		return redirect()->route('list_admin');

	}
	public function delete($id){
		$us=User::find($id)->delete();
		return redirect()->back();
	}
}

 ?>