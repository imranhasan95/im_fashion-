<?php

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
    return view('welcome');
});

// Route::get('/app', 'AppController@app')->name('app');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//stat backend controller

  use App\Http\Controllers\ProductController;
  Route::resource('/product', ProductController::class);

  use App\Http\Controllers\ProductcategoryController;
  Route::resource('/productcategory', ProductcategoryController::class);



//end backend controller
