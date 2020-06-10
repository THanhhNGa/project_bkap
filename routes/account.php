<?php 
	Route::get('','AdminController@login')->name('home');
	Route::get('index','AdminController@index')->name('index');
	Route::get('register_admin','AdminController@register')->name('register_admin');
	Route::post('register_admin','AdminController@post_register')->name('register_admin');

	Route::get('login_admin','AdminController@login')->name('login_admin');
	Route::post('login_admin','AdminController@post_login')->name('login_admin');

	Route::get('logout_admin','AdminController@logout')->name('logout_admin');
	Route::get('list_admin','AdminController@list')->name('list_admin');

	Route::get('edit_account/{id}','AdminController@edit')->name('edit_account');
	Route::post('edit_account/{id}','AdminController@post_edit')->name('edit_account');

	Route::get('delete_account/{id}','AdminController@delete')->name('delete_account');
	Route::get('reset','AdminController@reset')->name('reset');
 ?>