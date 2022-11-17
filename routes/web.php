<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [ProductController::class,'allProducts']);

Route::group(['prefix' => 'products' ,'middleware' => 'auth'], function (){

    Route::get('search',[ProductController::class,'search'])->name('products.search');
    Route::get('getSearch',[ProductController::class,'getSearch'])->name('products.getSearch');
    Route::get('all',[ProductController::class,'index'])->name('products.all');
    Route::get('create',[ProductController::class,'create'])->name('products.create');
    Route::post('store',[ProductController::class,'store'])->name('products.store');
    Route::get('edit/{id}',[ProductController::class,'edit'])->name('products.edit');
    Route::put('update/{id}',[ProductController::class,'update'])->name('products.update');
    Route::get('delete/{id}',[ProductController::class,'delete'])->name('products.delete');
    Route::post('import',[ProductController::class,'import'])->name('products.import');
    Route::get('export',[ProductController::class,'export'])->name('products.export');
    Route::get('status/{id}',[ProductController::class,'status'])->name('products.status');


});


Route::group(['prefix' => 'sliders' ,'middleware' => 'auth'], function (){

    Route::get('index',[SliderController::class,'index'])->name('sliders.index');
    Route::post('store',[SliderController::class,'store'])->name('sliders.store');
    Route::get('create',[SliderController::class,'create'])->name('sliders.create');
    Route::get('edit/{id}',[SliderController::class,'edit'])->name('sliders.edit');
    Route::put('update/{id}',[SliderController::class,'update'])->name('sliders.update');
    Route::get('delete/{id}',[SliderController::class,'delete'])->name('sliders.delete');
    Route::get('status/{id}',[SliderController::class,'status'])->name('sliders.status');



});

Auth::routes(['register' => false]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
