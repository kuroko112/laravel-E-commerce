<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\bankcarController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\CartController;
use App\Models\product;
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
    return view('home');
});

Route::get('/home/login',                            [authController::class,'login'])->name('login');
Route::get('/home/register',                         [authController::class,'register']);
Route::post('/postregister',                         [authController::class,'postregister']);
Route::get('/home/logout',                           [authController::class,'logout'])->name('login');
Route::get('/home/profile',                          [homeController::class,'profile']);
Route::get('/home',                                  [productController::class,'home']);
Route::get('/home/lab/{group_id}',                   [productController::class,'getlab']);
Route::get('/home/elc/TV/{group_id}',                [productController::class,'gettv']);
Route::get('/home/elc/Washing-Machine/{group_id}',   [productController::class,'getwashing']);
Route::get('/home/elc/refrigerator/{group_id}',      [productController::class,'getrefrigerator']);
Route::get('/home/mob/{group_id}',                   [productController::class,'getmob']);
Route::get('/home/elc',                              [productController::class,'getelc']);
Route::post('/postlogin',                            [authController::class,'postlogin']);
// -------< detailes >---------------------------------------------------------------------
Route::get('/home/elc/TV/{group_id}/{id_product}',   [productController::class,'detailes']);
Route::get('/home/lab/{group_id}/{id_product}',      [productController::class,'detailes']);
Route::get('/home/mob/{group_id}/{id_product}',      [productController::class,'detailes']);
// -------< cart detailes >---------------------------------------------------------------------
Route::get('/home/cart',                             [CartController::class,'getcart']);
Route::post('/home/cart/incart',                     [CartController::class,'insertwithqun']);
Route::get('/home/cart/do/{total}',                  [CartController::class,'Buying_succeededsuccess']);
Route::get('/admin/dashboard',                       [adminController::class,'home']);
// ---------------------------------------------------------
Route::get ('/PayCard',                              [bankcarController::class,'logincardbank']);
Route::post('/postloginbankcard',                    [bankcarController::class,'postloginbankcard']);
// --------------------------------------------------------------------------
Route::get ('/PayCard/login/Cards',                  [CardsController::class,'logincard']);
Route::post ('/postlogincard',          [CardsController::class,'postlogincard']);