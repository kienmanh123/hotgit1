<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/product/debug', 'ProductController@debug');

Route::get('/home', function () {
    return view('home');
});


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/list', 'ProductController@index');

//create form
Route::get('/product/create', 'ProductController@create');

//submit form
Route::post('/product/store', 'ProductController@store')->name("product-store");

//show
Route::get('/product/show/{id}', 'ProductController@show')->name("product-show");

//update form
Route::post('/product/update', 'ProductController@update')->name("product-update");
