<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AutenController;
use App\Http\Controllers\articleController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [articleController::class,'index']);
Route::get('/articles', [articleController::class,'index']);
Route::get('/articles/{id}', [articleController::class,'show']);

Route::get('/masuk',[AutenController::class,'index']);
Route::get('/registrasi',[AutenController::class,'registrasi']);

Route::get('/admin',[adminController::class,'index']);

