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

Route::get('about', function () {
	return view('welcome');
});
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/range', function () {
	return view('front.range');
});

Route::get('/product_details/{id}', 'HomeController@product_details');
Route::get('selectSize', 'HomeController@selectSize');
Route::get('selectColor', 'HomeController@selectColor');

//Route::get('/login', function () {
//    return view('auth.login');
//    return view('pages.login');
//});

//Route::get('/register', 'Auth\LoginController@register');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/shop', 'HomeController@shop');

Route::get('/groups/{nickname}', 'HomeController@group_items');

Route::get('/products', 'HomeController@shop');
Route::get('/products/{nickname}', 'HomeController@category');

Route::get('/contact', 'HomeController@contact');
Route::post('/search', 'HomeController@search');


Route::get('/newArrival', 'HomeController@newArrival');

// logged in user pages
Route::group(['middleware' => 'auth'], function () {
	Route::get('/checkout', 'CheckoutController@index');
	Route::post('/formvalidate', 'CheckoutController@formvalidate');

	Route::get('/profile', function () {
		return view('profile.index');
	});
	Route::get('/orders', 'ProfileController@orders');

	Route::get('/address', 'ProfileController@address');
	Route::post('/updateAddress', 'ProfileController@UpdateAddress');

	Route::get('/password', 'ProfileController@Password');
	Route::post('/updatePassword', 'ProfileController@updatePassword');

	Route::get('/thankyou', function () {
		return view('profile.thankyou');
	});

	Route::get('/mail', 'HomeController@sendmail');

});

Auth::routes();

Route::resource('cart', 'CartController');
Route::resource('/cart/remove', 'CartController@destroy');
Route::resource('/cart/update', 'CartController@update');
//Route::resource('shop', 'CartController', ['only' => ['index', 'store', 'update', 'destroy']]);
Route::delete('emptyCart', 'CartController@emptyCart');