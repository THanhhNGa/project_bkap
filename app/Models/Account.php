<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Account extends Model
{
	
	protected $table='account';
	protected $fillable=['name', 'email', 'password','phone','address','status'];
	public function order(){
		return $this->hasMany(Order::class,'account_id','id');
	}
}
 ?>