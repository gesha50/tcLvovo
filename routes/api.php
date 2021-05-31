<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/information', [App\Http\Controllers\IndexController::class, 'information'] );
Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact'] );

Route::get('/gallery/photo', [App\Http\Controllers\GalleryController::class, 'index'] );
Route::get('/gallery/photoCategory', [App\Http\Controllers\GalleryController::class, 'category'] );

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'] );



