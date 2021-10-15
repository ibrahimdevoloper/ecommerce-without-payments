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
    Route::get('/dashboard',[App\Http\Controllers\HomeController::class, 'index'])->middleware('auth.admin');
    Route::resource('/dashboard/users',App\Http\Controllers\UserController::class)->middleware('auth.admin');
    Route::get('/dashboard/login',[App\Http\Controllers\LoginController::class, 'login']);
    Route::post('/logout',[App\Http\Controllers\LoginController::class, 'logout']);
    Route::post('/dashboard/login/auth',[App\Http\Controllers\LoginController::class, 'authenticate']);
    Route::get('/dashboard/register',[App\Http\Controllers\RegisterController::class, 'register']);
    Route::post('/dashboard/register/auth',[App\Http\Controllers\RegisterController::class, 'authenticate']);
});

