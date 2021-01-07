<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;

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

Route::group([
    'prefix' => 'dashboard',
    'as' => 'admin.',
    'middleware' => 'auth'
], function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/charts', [IndexController::class, 'charts'])->name('charts');
    Route::get('/tables', [IndexController::class, 'tables'])->name('tables');
    Route::get('/layoutStatic', [IndexController::class, 'layoutStatic'])->name('layoutStatic');
    Route::get('/layoutSidenav', [IndexController::class, 'layoutSidenav'])->name('layoutSidenav');
});





// Авторизация
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Для файлового менеджера
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


// для использования vue-router
Route::get('/blog/{any}', function (){
    return view('welcome');
})->where('any', '.*');
