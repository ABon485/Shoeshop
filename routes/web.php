<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\AdminOrderController;
use  App\Http\Controllers\AdminProductController;
use  App\Http\Controllers\AdminUserController;

use  App\Http\Controllers\ProductController;
use App\Http\Controllers\testMomo;
use GuzzleHttp\Psr7\Request;

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

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'postLogin']);


Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'postRegister']);

Route::post('/logout', [AuthController::class,'logout'])->name('logout');
Route::post('/AdminLogin', [AuthController::class,'AdminLogin'])->name('AdminLogin');



Route::get('/',[ProductController::class,'index'])->name('home');

Route::get('/product',[ProductController::class,'getproduct'])->name('product');

Route::get('/detail/{id}',[ProductController::class,'Detailproduct'])->name('Detailproduct');


// Checkout 
Route::get('payUrl',function(){
    return view('webpage.testMomo');
})-> name('checkout-momo');

Route::post('/payUrl', [testMomo::class,'payment']);
//  Search
Route::get('/search', [ProductController::class, 'search'])->name('search');


//=================Route Admin====================

// show home admin
Route::get('/admin',[AdminOrderController::class,'index'])->name('home');

// show page Order
Route::get('/showOrder',[AdminOrderController::class,'showOrder'])->name('showOrder');
// show page User
Route::get('/showUser',[AdminUserController::class,'showUser'])->name('showUser');

// show page Product
Route::get('/showProduct',[AdminProductController::class,'showProduct'])->name('showProduct');
// show page form create product
Route::get('/createProduct',[AdminProductController::class,'create'])->name('createProduct');
// show page form edit product
Route::get('/editProduct',[AdminProductController::class,'edit'])->name('editProduct');
// show page form delete product
Route::get('/deleteProduct',[AdminProductController::class,'delete'])->name('deleteProduct');
