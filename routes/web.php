<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\LoadFileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\User\MainController;
use App\Http\Controllers\User\DetailController;
use App\Http\Controllers\User\CartController;

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






Route::prefix('admin')->group(function(){
    //Đăng nhập
    Route::get('/login', [LoginController::class,'login']);
    Route::post('/login', [LoginController::class,'loginPost']);
    // Đăng kí 
    Route::get('/register',[LoginController::class, 'register']);
    Route::post('/register',[LoginController::class, 'registerPost']);
    
    //Trang chủ
    Route::get('/home',[HomeController::class,'index'])->name('admin');

    //Thêm sản phẩm
    Route::get('/add',[ProductController::class,'add']);
    Route::post('/add',[ProductController::class,'postAdd']);
    Route::get('/list',[ProductController::class,'list'])->name('list');
    Route::get('edit/{product}',[ProductController::class,'edit']);
    Route::post('edit/{product}',[ProductController::class,'postedit']);
    Route::get('delete/{product}',[ProductController::class,'delete']);
    

    //Upload
    Route::post('upload',[LoadFileController::class,'upload']);

    Route::get('slider-add',[SliderController::class,'add']);
    Route::post('slider-add',[SliderController::class,'addPost']);


    Route::get('slider',[SliderController::class,'list'])->name('list_slider');


    Route::get('edit-slider/{slider}',[SliderController::class,'edit']);
    Route::post('edit-slider/{slider}',[SliderController::class,'postedit']);
    Route::get('delete-slider/{slider}',[SliderController::class,'delete']);



});

Route::get('/home',[MainController::class,'index']);
Route::get('/',[MainController::class,'index']);


Route::get('/di-dong',[MainController::class,'getMobile']);
Route::get('/may-tinh-bang',[MainController::class,'getTab']);
Route::get('/laptop',[MainController::class,'getLaptop']);
Route::get('/dong-ho-thong-minh',[MainController::class,'getWatch']);
Route::get('/phu-kien',[MainController::class,'getAccessory']);
 
Route::get('/home',[MainController::class,'getProduct'])->name('home');


Route::get('/phu-kien',[MainController::class,'getAccessory']);

Route::get('/{product}',[DetailController::class,'getDetail'])->name('detail');

Route::post('/add_cart',[CartController::class,'index']);


Route::get('/user/cart',[CartController::class,'show']);

Route::get('/cart/delete/{ProId}', [CartController::class,'deleteCart']);

Route::post('/cart/update', [CartController::class,'update'])->name('cart.update');

Route::post('/user/buy-products', [CartController::class, 'buy'])->name('cart.buy');
// Route::post('/user/buy-products', 'CartController@buy')->name('cart.buy');