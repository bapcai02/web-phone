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

//admin
Route::get('dashboad','AdminController@dashboad')->name('dashboad');
Route::get('admin','AdminController@index')->name('admin');
Route::post('admin-login','AdminController@login')->name('login');
Route::get('logout','AdminController@logout')->name('logout');
Route::get('register','AdminController@register')->name('register');
Route::post('signup','AdminController@signup')->name('signup');

//category

Route::get('add-category','Category@add_category')->name('add_category');
Route::post('save-category','Category@save_category')->name('save_category');
Route::get('list-category','Category@all_category')->name('all_category');
Route::post('add-category','Category@add')->name('add_cate');
Route::get('edit-category/{id}','Category@edit_category')->name('edit_category');
Route::post('update-category/{id}','Category@update_category')->name('update_category');
Route::get('delete-category/{id}','Category@delete_category')->name('delete_category');

//brand

Route::get('all-brand','BrandController@all_brand')->name('all_brand');
Route::get('add-brand','BrandController@add_brand')->name('add_brand');
Route::post('save-brand','BrandController@save_brand')->name('save_brand');
Route::get('edit-brand/{id}','BrandController@edit_brand')->name('edit_brand');
Route::post('update-brand/{id}','BrandController@update_brand')->name('update_brand');
Route::get('delete-brand/{id}','BrandController@delete_brand')->name('delete_brand');

//product

Route::get('all-product','ProductController@all_product')->name('all_product');
Route::get('add-product','ProductController@add_product')->name('add_product');
Route::post('save-product','ProductController@save_product')->name('save_product');
Route::get('edit-product/{id}','ProductController@edit_product')->name('edit_product');
Route::post('update-product/{id}','ProductController@update_product')->name('update_product');
Route::get('delete-product/{id}','ProductController@detete_product')->name('delete_product');

//info product

Route::get('all-info','InfoController@all_info')->name('all_info');
Route::get('add-info','InfoController@add_info')->name('add_info');
Route::post('save-info','InfoController@save_info')->name('save_info');
Route::get('edit-info/{id}','InfoController@edit_info')->name('edit_info');
Route::post('update-info/{id}','InfoController@update_info')->name('update_info');
Route::get('delete-info/{id}','InfoController@detete_info')->name('delete_info');

//size

Route::get('all-size','SizeController@all_size')->name('all_size');
Route::get('add-size','SizeController@add_size')->name('add_size');
Route::post('save-size','SizeController@save_size')->name('save_size');
Route::get('edit-size/{id}','SizeController@edit_size')->name('edit_size');
Route::post('update-size/{id}','SizeController@update_size')->name('update_size');
Route::get('delete-size/{id}','SizeController@detete_size')->name('delete_size');

//Bill

Route::get('all-bill','BillController@all_bill')->name('all_bill');
Route::get('print-pdf/{id}','BillController@print_order')->name('print_pdf');
// Route::get('add-bill','BillController@add_bill')->name('add_bill');
// Route::post('save-bill','BillController@save_bill')->name('save_bill');
// Route::get('edit-bill/{id}','BillController@edit_bill')->name('edit_bill');
// Route::post('update-bill/{id}','BillController@update_bill')->name('update_bill');
// Route::get('delete-bill/{id}','BillController@detete_bill')->name('delete_bill');

//user

Route::get('all-user','UserController@all_user')->name('all_user');
// Route::get('add-user','UserController@add_user')->name('add_user');
// Route::post('save-user','UserController@save_user')->name('save_user');
// Route::get('edit-user/{id}','UserController@edit_user')->name('edit_user');
// Route::post('update-user/{id}','UserController@update_user')->name('update_user');
// Route::get('delete-user/{id}','UserController@detete_user')->name('delete_user');


// type

Route::get('all-type','TypeController@all_type')->name('all_type');
Route::get('add-type', 'TypeController@add_type')->name('add_type');
Route::post('save-type','TypeController@save_type')->name('save_type');
Route::get('edit-type/{id}','TypeController@edit_type')->name('edit_type');
Route::post('update-type/{id}','TypeController@update_type')->name('update_type');

// Home

Route::get('home','HomeController@index')->name('index');
Route::get('details/{id}',"DetailController@getdetail")->name('details');
Route::get('addcart/{id}','CartController@AddCart')->name('cart');
Route::get('show','CartController@ShowCart')->name('show');
Route::get('delete/{id}','CartController@DeleteCart');
Route::get('update','CartController@UpdateCart')->name('updatecart');
Route::post('checkout','CartController@checkout')->name('checkout');
Route::get('email','CartController@email')->name('email');

Route::get('category/{id}','Category@getcatgory')->name('getcate');
Route::get('search','HomeController@search')->name('search');


