<?php 
	Route::group(['prefix'=>'product'], function(){
		Route::get('list_product','ProductController@list')->name('list_product');
		Route::get('search_pro','ProductController@search')->name('search_pro');

		Route::get('add_product','ProductController@add')->name('add_product');
		Route::post('add_product','ProductController@post_add')->name('add_product');

		Route::get('edit_product/{id}','ProductController@edit')->name('edit_product');
		Route::post('edit_product/{id}','ProductController@post_edit')->name('edit_product');
		Route::get('delete_product/{id}','ProductController@delete')->name('delete_product');
	});
 ?>