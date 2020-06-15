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
Route::get('admin','AdminController@index');
Route::post('admin-login','AdminController@login')->name('login');
Route::get('logout','AdminController@logout')->name('logout');

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
Route::get('delete-product/{id}','ProductController@delete_product')->name('delete_product');