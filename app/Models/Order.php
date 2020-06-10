<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;
	/**
	 * 
	 */
	class Order extends Model
	{
		
		protected $table ='orders';
		protected $fillable =['account_id','name','address','total_price','phone','status'];
		public function detail_order(){
			return $this->hasMany(Order_detail::class,'order_id','id');
		}

		//1 order có 1 khách hàng
		public function us(){
			return $this->hasOne('App\Models\Account','id','account_id');
		}
	}
 ?>