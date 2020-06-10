<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Product extends Model
{
	
	protected $table='product';
	protected $fillable=['name','slug','image','image_list','price','sale_price','description','category_id','status'];
	public function category(){
		return $this->hasOne('App\Models\Category','id','category_id');
	}
	public function review(){
		return $this->hasMany('App\Models\Comment','product_id','id');
	}
	
	
}
 ?>