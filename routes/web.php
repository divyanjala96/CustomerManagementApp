<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
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
    return view('welcome');
});

// category parts routes
Route::get('/category-all', [CategoryController::class, 'index'])->name('category-all');
Route::post('/save-category', [CategoryController::class, 'catStore'])->name('save-category');
Route::get('/delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('delete-category');
Route::get('/update-category/{id}',[CategoryController::class,'updateCategory'])->name('update-category');
Route::post('/category-update-part',[CategoryController::class,'update'])->name('update-category-part');

// product parts routes
Route::get('/product-all', [ProductController::class, 'index'])->name('product-all');
Route::post('/save-product', [ProductController::class, 'proStore'])->name('save-product');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
Route::get('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
Route::post('/update-product-part', [ProductController::class, 'update'])->name('update-product-part');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
