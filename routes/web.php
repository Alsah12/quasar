<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BerandaController;

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

Route::get('/',[AboutController::class,'index']);
Route::get('/service',[ServiceController::class,'index']);

Route::get('/beranda',[BerandaController::class,'index'])->name('product');
Route::get('/artikel/detail/{id_artikel}',[BerandaController::class,'artikel']);
Route::get('/artikel/detail2/{id_artikel2}',[BerandaController::class,'artikel2']);
Route::get('/artikel/detail3/{id_artikel3}',[BerandaController::class,'artikel3']);
Route::get('/imgproject/detail/{id_imgproject}',[BerandaController::class,'imgproject']);
Route::get('/imgproject/detail2/{id_imgproject2}',[BerandaController::class,'imgproject2']);
Route::get('/imgproject/detail3/{id_imgproject3}',[BerandaController::class,'imgproject3']);
Route::get('/imgproject/detail4/{id_imgproject4}',[BerandaController::class,'imgproject4']);
Route::get('/imgproject/detail5/{id_imgproject5}',[BerandaController::class,'imgproject5']);
Route::get('/imgproject/detail6/{id_imgproject6}',[BerandaController::class,'imgproject6']);

Route::get('/imgproject/edit/{id_imgproject}',[BerandaController::class,'imgedit']);
Route::post('/imgproject/update/{id_imgproject}',[BerandaController::class,'imgupdate']);

Route::get('/imgproject/edit2/{id_imgproject2}',[BerandaController::class,'imgedit2']);
Route::post('/imgproject/update2/{id_imgproject2}',[BerandaController::class,'imgupdate2']);

Route::get('/imgproject/edit3/{id_imgproject3}',[BerandaController::class,'imgedit3']);
Route::post('/imgproject/update3/{id_imgproject3}',[BerandaController::class,'imgupdate3']);

Route::get('/imgproject/edit4/{id_imgproject4}',[BerandaController::class,'imgedit4']);
Route::post('/imgproject/update4/{id_imgproject4}',[BerandaController::class,'imgupdate4']);

Route::get('/imgproject/edit5/{id_imgproject5}',[BerandaController::class,'imgedit5']);
Route::post('/imgproject/update5/{id_imgproject5}',[BerandaController::class,'imgupdate5']);

Route::get('/imgproject/edit6/{id_imgproject6}',[BerandaController::class,'imgedit6']);
Route::post('/imgproject/update6/{id_imgproject6}',[BerandaController::class,'imgupdate6']);

Route::get('/product',[ProductController::class,'index']);
Route::get('/product/detail/{id_imgproject}',[ProductController::class,'imgproject']);
Route::get('/product/detail2/{id_imgproject2}',[ProductController::class,'imgproject2']);
Route::get('/product/detail3/{id_imgproject3}',[ProductController::class,'imgproject3']);
Route::get('/product/detail4/{id_imgproject4}',[ProductController::class,'imgproject4']);
Route::get('/product/detail5/{id_imgproject5}',[ProductController::class,'imgproject5']);
Route::get('/product/detail6/{id_imgproject6}',[ProductController::class,'imgproject6']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

