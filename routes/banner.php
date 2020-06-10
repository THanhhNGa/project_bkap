<?php 
	Route::get('list_banner','BannerController@list')->name('list_banner');
	
	Route::get('add_banner','BannerController@add')->name('add_banner');
	Route::post('add_banner','BannerController@post_add')->name('add_banner');

	Route::get('edit_banner/{id}','BannerController@edit')->name('edit_banner');
	Route::post('edit_banner/{id}','BannerController@post_edit')->name('edit_banner');

	Route::get('delete_banner/{id}','BannerController@delete')->name('delete_banner');
 ?>