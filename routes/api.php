<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['auth:santum']] , function(){
    Route::get('/blogs', [BlogController::class , 'index']);
    Route::post('/blogs' , [BlogController::class , 'store']);
    Route::put('/blogs/{id}' , [BlogController::class , 'store']);
    Route::delete('/blogs/{id}', [ProductController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/blogs/{id}', [BlogController::class , 'show']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});