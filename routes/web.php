<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\AdminOrderController;
use  App\Http\Controllers\AdminProductController;
use  App\Http\Controllers\AdminUserController;

use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\CheckoutController;
use App\Http\Controllers\testMomo;
use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ContactController;


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
//  Search

Route::get('/search', [ProductController::class, 'search'])->name('search');

Route::get('/',[ProductController::class,'index'])->name('homepage');

Route::get('/product',[ProductController::class,'getproduct'])->name('product');

Route::get('/detail/{id}',[ProductController::class,'Detailproduct'])->name('Detailproduct');

//để liên kết với nút hình Giỏ hàng để thêm sản phẩm vào giỏ hàng
Route::get('/add-to-cart/{id}',[CartController::class,'addToCart'])->name('post-cart');

Route::get('/get-cart',[CartController::class,'getCart'])->name('cart-page');

Route::get('/delete-cart/{id}', [CartController::class, 'deleteCart'])->name('delete-cart');
Route::post('update-to-cart', [CartController::class, 'updateToCart'])->name('update-to-cart');


// Checkout 
Route::get('payUrl',[testMomo::class,'formCheckout'])-> name('checkout-momo');

// Hiển thị form confirm Checkout
Route::get('/checkout', [CartController::class, 'getDataAndRenderView'])->name('checkout');

// Checkout-momo
// Route::get('payUrl',function(){
//     return view('clients.webpage.checkout');
// })-> name('checkout-momo');


Route::post('/payUrl', [testMomo::class,'payment']);

//  Search
Route::get('/search', [ProductController::class, 'search'])->name('search');

// Hiển thị danh sách sản phẩm yêu thích của người dùng

Route::post('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');

Route::get('/contact', [ContactController::class,'contact'])->name('contact');
Route::get('/favorite/{product}', [ProductController::class, 'favorite'])->name('webpage.favorite');
Route::get('/favorite',[FavoriteController::class,'favorite'])->name('favorite');
Route::delete('/favorites/{id}', [FavoriteController::class,'destroy'])->name('favorites.destroy');

//=================Route Admin====================
// show home admin



Route::get('/admin',[AdminOrderController::class,'index'])->name('homeAdmin');
// show page Order
Route::get('/showOrder',[AdminOrderController::class,'showOrder'])->name('showOrder');
// Manage Order
Route::get('/ordered',[AdminOrderController::class,'ordered']);
// show page Product
Route::get('/showProduct',[AdminProductController::class,'index'])->name('showProduct');
// show page form create product
Route::get('/createProduct',[AdminProductController::class,'create'])->name('createProduct');

Route::post('/createProduct',[AdminProductController::class,'store'])->name('Product.store');

// show page form edit product
Route::get('/Product/{id}/edit',[AdminProductController::class,'edit'])->name('editProduct');

Route::put('/Product/{id}/update', [AdminProductController::class, 'update'])->name('updateProduct');

// show page form delete product
Route::get('/delete/{id}',[AdminProductController::class,'destroy'])->name('deleteProduct');
Route::get('/admin',[AdminUserController::class,'index'])->name('home');

Route::get('/showUser',[AdminUserController::class,'showUser'])->name('index');
Route::get('/edit/{id}',[AdminUserController::class,'edit'])->name('edit');
Route::post('/edit/{id}',[AdminUserController::class,'update'])->name('update');
Route::get('/destroy/{id}',[AdminUserController::class,'destroy'])->name('destroy');
Route::get('/showUser/{id}',[AdminUserController::class,'show'])->name('show');

// logout Admin
Route::get('/admin/logout/out',[AuthController::class,'logoutAdmin'])->name('logout.admin');