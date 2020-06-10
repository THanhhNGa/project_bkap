<?php 
namespace App\Helper;
/**
 * 
 */


class Wishlist 
{
	
	public $items=[];
	
	function __construct(){
		$this->items = session('wishlist') ? session('wishlist') :[] ;
		
	}
	//thêm mới vào giỏ hàng
	public function add($product){

		$item=[
			'id'=>$product->id,
			'name'=>$product->name,
			'image'=>$product->image,
			'price'=>$product->sale_price ? $product->sale_price :$product->price,
		];
		$this->items[$product->id] =$item;
		// if(isset($this->items[$product->id])){
		// 	$this->items[$product->id]['quantity'] +=$quantity;
		// }
		// else{
		// 	$this->items[$product->id] =$item;
		// }
		session(['wishlist'=>$this->items]);
		
	}
	//cập nhật giỏ hàng
	
	//xóa
	public function delete($id){
		if(isset($this->items[$id])){
			unset($this->items[$id]);
		}
		session(['wishlist'=>$this->items]);
	}
	public function deleteAll(){
		session(['wishlist'=>'']);
	}
	
}
 ?>