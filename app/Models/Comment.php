<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Comment extends Model
{
	
	protected $table='comment';
	protected $fillable=['product_id','account_id','comment'];

	public function cm(){
		return $this->hasOne('App\Models\Product','id','product_id');
	}
	public function us(){
		return $this->hasOne('App\Models\Account','id','account_id');
	}
	
	
}
 ?>