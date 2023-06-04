<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\articlesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// ->middleware('auth:api')

Route::get('/articles',[articlesController::class,'index']);
Route::get('/articles/{id}',[articlesController::class,'show']);


Route::middleware(['auth:api'])->group(function(){
    Route::post('/articles',[articlesController::class,'store']);
    Route::patch('/articles/{id}',[articlesController::class,'update'])->middleware('pemilik-postingan');
    Route::delete('/articles/{id}',[articlesController::class,'destroy'])->middleware('pemilik-postingan');
});


Route::group([ 'middleware' => 'api','prefix' => 'auth'
], function ($router) {
    Route::post('register', [AuthController::class,'register']);
    Route::post('login', [AuthController::class,'login']);
    Route::post('logout',[AuthController::class,'logout'] );
    Route::post('refresh',[AuthController::class,'refresh'] );
    Route::post('me', [AuthController::class,'me']);
});