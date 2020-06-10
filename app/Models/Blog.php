<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Blog extends Model
{
	
	protected $table='blog';
	protected $fillable=['name','slug','image','content','status'];
	public function comment(){
		return $this->hasMany(Comment::class,'product_id','id');
	}
	
}
 ?>