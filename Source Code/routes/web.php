<?php

use Illuminate\Support\Facades\Route;

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

// Route::redirect('/', '/admin');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['isLogin', 'customAuth']], function () {
    Route::redirect('/', '/admin/index');
    Route::resource('admin', 'AdminController');
    Route::resource('category', 'CategoryController');
    Route::resource('products', 'ProductsController');
    Route::resource('Customer', 'CustomerController');
    Route::get('orders', 'OrdersController@index');
    Route::get('orders/{id}/{status}', 'OrdersController@changeStatus');
    Route::get('contacts', 'ContactController@AdminIndex');
    Route::get('index', 'AdminIndexController@index');
});

// ======================
Route::post('/login', 'loginRegisterController@login');
Route::post('/register', 'loginRegisterController@register');
Route::get('/logout', 'loginRegisterController@logout');
// ======================
Route::get('/', 'ShowPublicController@index');
Route::get('index', 'ShowPublicController@index');

Route::get('shop', 'ShowPublicController@shop');

Route::get('shop/{id}', 'ShowPublicController@shopID');

Route::get('product/{id}', 'ShowPublicController@Product');

Route::post('product/{id}', 'ReviewController@store');

Route::get('/search/', 'ShowPublicController@search')->name('search');
// ==========================
Route::get('profile', 'ProfileController@index');


Route::patch('profile', 'ProfileController@update');
// ==============================
Route::post('/addToCart', 'cartController@addToCart');
Route::post('/update', 'cartController@update');
Route::get('cart', 'cartController@index');
Route::get('cart/delete/{id}', 'cartController@delete');
Route::get('checkout', 'cartController@Checkout')->middleware('isLogin');
Route::post('checkout', 'OrdersController@store')->middleware('isLogin');

// =========================

Route::get('about', function () {
    return view('public.about');
});
Route::get('contact', function () {
    return view('Pages.contact');
});
Route::get('login', function () {
    return view('public.register');
});

Route::get('404', function () {
    return view('public.404');
});

Route::get('/contact', "ContactController@index");
Route::post('/contact', "ContactController@create");
