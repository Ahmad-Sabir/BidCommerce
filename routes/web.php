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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('products','Productcontrollers@list');
//Route::get('test','Productcontrollers@list');
//Route::get('test','categoriescontroller@cat');
Route::get('/product','Productcontrollers@prod');
Route::get('/Home', 'HomeController2@index');
Route::get('/contact_us', 'contact_usController@contact');

Route::get('/add','Add_productController@index');
Route::post('/add','Add_productController@store')->name('addimage');
Route::get('/prod_view','Add_productController@display');
Route::view('add_product','add_product');

Route::get('store_image', 'StoreImageController@index');

Route::post('store_image/insert_image', 'StoreImageController@insert_image');

Route::get('store_image/fetch_image/{id}', 'StoreImageController@fetch_image');
Route::get('/editimage/{id}','Add_productController@edit');
Route::put('/updateimage/{id}','Add_productController@update');
Route::get('/deleteimage/{id}','Add_productController@destroy');

