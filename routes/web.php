<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('index',[ProductController::class,'index']);

// Route::get('add',[ProductController::class,'add']);

// Route::post('save',[ProductController::class,'save']);

// Route::get('edit/{id}',[ProductController::class,'edit']);

// Route::post('update',[ProductController::class,'update']);

// Route::get('delete/{id}',[ProductController::class,'delete']);

// Route::get('delete/{id}',[ProductController::class,'delete']);



/*customer*/

Route::get('customers/index',[ProductController::class,'index']);
Route::get('customers/products',[ProductController::class,'products']);
Route::get('customers/contact',[ProductController::class,'contact']);
Route::get('customers/productsdetail',[ProductController::class,'productsdetail']);
Route::get('customers/checkout',[ProductController::class,'checkout']);
Route::get('customers/register',[CustomerController::class,'register']);
Route::post('customers/registerProcess',[CustomerController::class,'registerProcess']);
Route::post('customers/loginProcess',[CustomerController::class,'loginProcess']);
Route::get('customers/login',[CustomerController::class,'login']);
Route::get('customers/logout',[CustomerController::class,'logout']);


/*admin*/
Route::get('admin/indexs',[ProductController::class,'indexs']);
Route::get('admin/login',[ProductController::class,'login']);
Route::get('admin/register',[ProductController::class,'register']);

Route::get('admin/indexs',[AdminController::class,'indexs'])->middleware('isLoggedAdmin');
Route::get('admin/login',[AdminController::class,'login'])->name('login');
Route::post('admin/checkLogin',[AdminController::class,'checkLogin'])->name('checkLogin');
Route::get('admin/logout',[AdminController::class,'logout'])->name('logout');
Route::get('admin/products',[ProductController::class,'productsAdmin'])->name('products');
Route::get('admin/addproduct',[ProductController::class,'productsAdd'])->name('addproduct');

Route::get('admin/add',[ProductController::class,'add']);

Route::post('save',[ProductController::class,'save']);

Route::get('admin/edit/{id}',[ProductController::class,'edit']);

Route::post('update',[ProductController::class,'update']);

Route::get('admin/delete/{id}',[ProductController::class,'delete']);


Route::get('customers/admin',[ProductController::class,'indexs']);
// Route::get('customers/productsdetail',[ProductController::class,'productsdetail']);




// Route::group(['namespace' => 'App\Http\Controllers'], function()
// {   
//     /**
//      * Home Routes
//      */
//     Route::get('/', 'HomeController@index')->name('home.index');


//     Route::group(['middleware' => ['guest']], function() {
//         /**
//          * Register Routes
//          */
//         Route::get('/register', 'RegisterController@show')->name('register.show');
//         Route::post('/register', 'RegisterController@register')->name('register.perform');

//         /**
//          * Login Routes
//          */
//         Route::get('/login', 'LoginController@show')->name('login.show');
//         Route::post('/login', 'LoginController@login')->name('login.perform');

//     });

//     Route::group(['middleware' => ['auth']], function() {
//         /**
//          * Logout Routes
//          */
//         Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
//     });
// });

