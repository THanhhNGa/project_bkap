<?php 
	namespace App\Http\Controllers\Customer;
	use App\Models\Account;
	use App\Models\Product;
	use App\Models\Comment;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Auth;
	use App\User;
	/**
	 * 
	 */
	class CommentController extends Controller
	{
		
		
		public function post_cmt($id,Request $req){
			// dd($req->all());
			if(Auth::check()){
				$id_pro=$id;
				$pro = Product::find($id);
				$comment= new Comment;
				$comment->product_id =$id_pro;
				$comment->account_id = Auth::User()->id;
				$comment->comment = $req->comment;
				$comment->save();
				return redirect()->back();
			}
			else{
				return redirect()->route('login_cus');
			}
			
		}
		
	}
 ?>