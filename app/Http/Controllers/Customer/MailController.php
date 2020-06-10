<?php 
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\http\Request;
use Mail;
/**
 * 
 */
class MailController extends Controller
{
	
	public function get_contact(){
		return view('customer.contact');
	}
	public function post_contact(Request $req){
		$this->validate($req,[
			'name'=>'required',
			'email'=>'required|email',
			'phone-number'=>'required',
			'message'=>'required'

		],[
			'name.required'=>'Tên không được để rỗng',
			'email.required'=>'Email không đc để rỗng',
			'email.email.required'=>'Kiểm tra lại định dạng email',
			'phone-number.required'=>'SĐT không đc để rỗng password',
			'message.required'=>"Lời nhắn không đc để rỗng",
		]);
		$data =[
			'name'=>$req->name,
			'email'=>$req->email,
			'content'=>$req->content
		];
		$email=[
			'donga403@gmail.com',
			$data['email']
		];
		Mail::send('customer.mail',$data,function($message) use($data,$email){
			$message->from('ph1906ij@gmail.com');
			$message->to($email,'Cảm ơn quý khách')->subject('Cảm ơn quý khách');
		});
		return redirect()->route('contact')->with('success','Cảm ơn sự đóng góp ý kiến của bạn!');
	}
}
 ?>