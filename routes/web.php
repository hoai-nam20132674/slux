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

Route::get('/', function () {
    return view('index');
});
Route::get('/cau-chuyen-slux.html', function () {
    return view('sluxHistory');
});
Route::get('/tin-tuc.html', function(){
	return view('blog');
});
Route::get('/lien-he.html', function(){
	return view('contact');
});
Route::get('/linh-phu-kien.html', function(){
	return view('frontEndUser.list-product');
});
Route::get('/view-product-item.html', function(){
	return view('frontEndUser.view-product-item');
});