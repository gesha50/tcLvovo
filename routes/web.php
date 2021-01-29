<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\InformationController;
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


Route::get('/',  [App\Http\Controllers\IndexController::class, 'index'])->name('index');

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

    Route::group(['prefix' => 'information', 'as' => 'information.',], function() {
        Route::get('/edit', [InformationController::class, 'edit'])->name('edit');
        Route::put('/update', [InformationController::class, 'update'])->name('update');
    });

    Route::group(['prefix' => 'contact', 'as' => 'contact.',], function() {
        Route::put('/update', [ContactController::class, 'update'])->name('update');
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::get('/edit', [ContactController::class, 'edit'])->name('edit');
    });
});





// Авторизация
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Для файлового менеджера
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/company',  [App\Http\Controllers\CompanyController::class, 'index'])->name('company');
Route::get('/company/{any}',  [App\Http\Controllers\CompanyController::class, 'index'])
    ->name('company')
    ->where('any', '.*');

// для использования vue-router
//Route::get('/company/{any}', function (){
//    return view('welcome');
//})->where('any', '.*');
