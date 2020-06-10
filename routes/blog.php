<?php 
	Route::get('list_blog','BlogController@list')->name('list_blog');
	Route::get('search_blog','BlogController@search')->name('search_blog');
	
	Route::get('add_blog','BlogController@add')->name('add_blog');
	Route::post('add_blog','BlogController@post_add')->name('add_blog');

	Route::get('edit_blog/{id}','BlogController@edit')->name('edit_blog');
	Route::post('edit_blog/{id}','BlogController@post_edit')->name('edit_blog');

	Route::get('delete_blog/{id}','BlogController@delete')->name('delete_blog');
 ?>