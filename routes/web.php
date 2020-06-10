<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function(){
//tài khoản
	Route::get('list_comment','CommentController@list')->name('list_comment');
	Route::get('delete_cmt/{id}','CommentController@delete')->name('delete_cmt');
	include 'account.php';
	include 'category.php';
	include 'product.php';
	include 'blog.php';
	include 'banner.php';
	include 'order.php';
});
// Auth::routes();
Route::get('/','Customer\HomeController@home')->name('home');
Route::group(['prefix'=>'customer','namespace'=>'Customer'],function(){
	
	//blog
	Route::get('blog','HomeController@blog')->name('blog');
	Route::get('detail_blog/{slug}','HomeController@detail_blog')->name('detail_blog');
	//sp yêu thích
	Route::get('add_wishlist/{id}','HomeController@add_wishlist')->name('add_wishlist');
	Route::get('wishlist','HomeController@show_wishlist')->name('show_wishlist');
	Route::get('delete_wishlist/{id}','HomeController@delete_wishlist')->name('delete_wishlist');
	//ql comment
	Route::post('comment/{id}','CommentController@post_cmt')->name('post_cmt');
	//lọc và tìm kiếm
	Route::get('seek','ProductController@seek')->name('seek');
	Route::get('filter','ProductController@filter')->name('filter');
	Route::get('pro_detail/{slug}','ProductController@pro_detail')->name('pro_detail');
	Route::get('products_cate/{slug}','ProductController@products_cate')->name('products_cate');
	Route::get('shop','ProductController@shop')->name('shop');
	//giỏ hàng
	Route::group(['prefix'=>'cart'],function(){
		Route::get('show-cart','CartController@show')->name('show-cart');
		Route::get('add-cart/{id}','CartController@add')->name('add-cart');
		Route::get('update-cart/{id}','CartController@update')->name('update-cart');
		Route::get('delete-cart/{id}','CartController@delete')->name('delete-cart');
		Route::get('sign_checkout','CartController@sign')->name('sign_checkout');
	});
	//gửi mail
	Route::get('contact','MailController@get_contact')->name('contact');
	Route::post('contact','MailController@post_contact')->name('contact');
	//ql tài khoản
	Route::get('login_cus','AccountController@login')->name('login_cus');
	Route::post('login_cus','AccountController@post_login')->name('login_cus');
	Route::get('logout','AccountController@logout')->name('logout_cus');
	Route::get('register','AccountController@register')->name('register');
	Route::post('register','AccountController@post_register')->name('register');
	//lịch sử mua hàng
	// Route::get('info_cus','AccountController@info_cus')->name('info_cus');
	Route::get('pros_detail/{id}','AccountController@detail')->name('pros_detail');
	Route::get('info_cus/{id}','AccountController@info_cus')->name('info_cus');
	//check-out
	Route::get('check-out','CheckoutController@get_check_out')->name('check_out');
	Route::post('check-out','CheckoutController@post_check_out')->name('check_out');
	Route::get('complete',function(){
		return view('customer.complete');
	})->name('complete');
});