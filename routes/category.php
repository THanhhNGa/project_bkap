<?php 
	Route::group(['prefix'=>'category'],function(){
		Route::get('list_category','CategoryController@list')->name('list_category');
		Route::get('search_cate','CategoryController@search')->name('search_cate');

		Route::get('add_category','CategoryController@add')->name('add_category');
		Route::post('add_category','CategoryController@post_add')->name('add_category');
		
		Route::get('edit_category/{id}','CategoryController@edit')->name('edit_category');
		Route::post('edit_category/{id}','CategoryController@post_edit')->name('edit_category');
		Route::get('delete_category/{id}','CategoryController@delete')->name('delete_category');
	});
 ?>