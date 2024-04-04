<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



use  App\Http\Controllers\ManageProductController;
use  App\Http\Controllers\ManageOrderController;
use  App\Http\Controllers\ManageUserController;

use  App\Http\Controllers\ProductController;



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

// Route::get('/', function () {
//     return view('webpage.home');
// });

//=================Route Admin====================
Route::group(['admin' => 'Admin'], function () {
    Route::resource('product', ManageProductController::class);

    Route::resource('order', ManageOrderController::class);

    Route::resource('user', ManageUserController::class);
});

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'postLogin']);


Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'postRegister']);

Route::post('/logout', [AuthController::class,'logout'])->name('logout');
Route::post('/AdminLogin', [AuthController::class,'AdminLogin'])->name('AdminLogin');






// Route::get('/product', function () {
//     return view('webpage.product');
// });
// Route::get('/product', function () {
    //     return view('webpage.product');
    // });
Route::get('/',[ProductController::class,'index'])->name('home');

Route::get('/product',[ProductController::class,'getproduct'])->name('product');

Route::get('/detail/{id}',[ProductController::class,'Detailproduct'])->name('Detailproduct');
