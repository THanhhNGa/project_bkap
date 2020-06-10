<?php 
//ql order
	//đơn chưa xử lý
	Route::get('order_list','OrderController@list')->name('order_list');
	Route::get('search','OrderController@search')->name('search');
	//đã xử lý
	Route::get('processed','OrderController@processed')->name('processed');
	Route::get('search_processed','OrderController@search_processed')->name('search_processed');

	ROute::get('order_detail/{id}','OrderController@order_detail')->name('order_detail');
	Route::post('update_order','OrderController@update_order')->name('update_order');
 ?>