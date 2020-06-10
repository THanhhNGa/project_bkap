<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;
/**
 * 
 */
class CommentController extends Controller
{
	
	public function list(){
		$cmt = Comment::all();
		return view('admin.comment.list',compact('cmt'));
	}
	public function delete($id){
		Comment::find($id)->delete();
		return redirect()->back();
	}
}

 ?>