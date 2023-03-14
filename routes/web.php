<?php

use App\Http\Controllers\ProductCategoryController;
use App\Models\ProductCategory;
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

Route::get("/", "App\Http\Controllers\FrontEndController@shop");
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
Route::resource('/admin/product_category', ProductCategoryController::class);
Route::get('/customer', 'App\Http\Controllers\FrontEndController@customer');
Route::get('/product_list', 'App\Http\Controllers\FrontEndController@productList');
Route::get('/product_detail', 'App\Http\Controllers\FrontEndController@productDetail');
Route::get('/add_to_cart', 'App\Http\Controllers\FrontEndController@addToCart');
Route::get('/checkout', 'App\Http\Controllers\FrontEndController@checkOut');
Route::get('/shop', 'App\Http\Controllers\FrontEndController@shop');

