<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
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

// -------category routes---------

Route::get('/admin/categories',[CategoriesController::class,'index'])->name('categories.index');
Route::get('/admin/categories/create',[CategoriesController::class,'create'])->name('categories.create');
Route::get('/admin/categories/{id}/edit',[CategoriesController::class,'edit'])->name('categories.edit');
Route::PUT('/admin/categories/update{id}',[CategoriesController::class,'update'])->name('categories.update');
Route::DELETE('/admin/categories/delete{id}',[CategoriesController::class,'delete'])->name('categories.delete');
Route::post('/admin/categories',[CategoriesController::class,'store'])->name('categories.store');

// admin route
// Route::get('/admin', 'Admin\UserDashboardController@index');

// Route::get('/admin',[UserDashboardController::class, 'index']);

// -----products route----

// Route::resource('/admin/products',ProductsController::class);

Route::get('/admin/products',[ProductsController::class,'index'])->name('products.index');
Route::get('/admin/products/create',[ProductsController::class,'create'])->name('products.create');
Route::get('/admin/products/{id}/edit',[ProductsController::class,'edit'])->name('products.edit');
Route::PUT('/admin/products/update{id}',[ProductsController::class,'update'])->name('products.update');
Route::DELETE('/admin/products/delete{id}',[ProductsController::class,'delete'])->name('products.delete');
Route::post('/admin/products',[ProductsController::class,'store'])->name('products.store');

// -----short cut Route method/loop-----

// Route::prefix('admin')->group(function(){
//  Route::resource('/category',CategoriesController::class);
//  Route::resource('/products',ProductsController::class);
// });