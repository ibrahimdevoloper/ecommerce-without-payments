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

Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/dashboard/login', [App\Http\Controllers\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout']);
    Route::post('/dashboard/login/auth', [App\Http\Controllers\LoginController::class, 'authenticate']);
    Route::get('/dashboard/register', [App\Http\Controllers\RegisterController::class, 'register']);
    Route::post('/dashboard/register/auth', [App\Http\Controllers\RegisterController::class, 'authenticate']);
});

Route::middleware(['web', 'auth.admin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);
    Route::resource('/dashboard/users', App\Http\Controllers\UserController::class);
    Route::resource('/dashboard/categories', App\Http\Controllers\CategoryController::class);
    Route::resource('/dashboard/products', App\Http\Controllers\ProductController::class);
    Route::resource('/dashboard/inventories', App\Http\Controllers\InventoryController::class);
    Route::resource('/dashboard/orders', App\Http\Controllers\OrderController::class);
});
