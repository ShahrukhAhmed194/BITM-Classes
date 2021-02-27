<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;
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


Route::get('/admin/categories',[CategoriesController::class,'index'])->name('categories.index');
Route::get('/admin/categories/create',[CategoriesController::class,'create'])->name('categories.create');
Route::post('/admin/categories',[CategoriesController::class,'store'])->name('categories.store');

// admin route
// Route::get('/admin', 'Admin\UserDashboardController@index');

// Route::get('/admin',[UserDashboardController::class, 'index']);


