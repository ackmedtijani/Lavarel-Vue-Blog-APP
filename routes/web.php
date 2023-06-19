<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$blog = array('blog 1' , 'blog 2');

Route::get('/', function () {
    global $blog;
    return $blog;
});

Route::get('/{id}' , function($id){
    return "Blog $id";
});
