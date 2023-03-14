<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return 'Home';
});
Route::get("/home",function (){
    return "Home";
});
Route::get("/product",function (){
    echo "<h1>Product</h1>";
});
Route::get('/mgt-customer', function () {
    return view("back_end.manage_customer.index");
});
Route::get('/mgt-customer/create', function () {
    return view('back_end.manage_customer.create');
});
Route::get('/invoice', function () {
    echo '<h1>invoice</h1>';
});

Route::get("/new_product",function (){
//    return "<H1>MY PRODUCT</h1>";
    return view("back_end.manage_product.index");
});

Route::get("/shop",
    "App\Http\Controllers\FrontEndController@shop");
Route::get('/about', 'App\Http\Controllers\FrontEndController@about');
Route::get('/contact', 'App\Http\Controllers\FrontEndController@contact');
Route::get('/home', 'App\Http\Controllers\FrontEndController@home');
Route::get("/admin/dashboard",function (){
   return view("back_end.dashboard");
});

Route::get('/admin/sample_table', function () {
    return view('back_end.sample_table');
});


Route::resource('products', ProductController::class);
