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
Route::get('/dashboard',function(){
    return 'hi';
})->middleware('auth');
Route::get('/dashboard/login',[App\Http\Controllers\LoginController::class, 'login']);
Route::post('/dashboard/login/auth',[App\Http\Controllers\LoginController::class, 'authenticate']);
Route::get('/dashboard/register',[App\Http\Controllers\RegisterController::class, 'register']);
Route::post('/dashboard/register/auth',[App\Http\Controllers\RegisterController::class, 'authenticate']);
