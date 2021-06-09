<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ServiceController;
use \App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\TenantController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use \App\Http\Controllers\Admin\HistoryController;

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

Route::group([
    'prefix' => 'dashboard',
    'as' => 'admin.',
    'middleware' => 'auth'
], function () {
    Route::resources([
        'news' => NewsController::class,
        'services' => ServiceController::class,
        'brands' => BrandController::class,
        'histories' => HistoryController::class,
        'tenants' => TenantController::class,
    ]);
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
    Route::group(['prefix' => 'gallery', 'as' => 'gallery.',], function() {
        Route::get('/destroy/{id}', [GalleryController::class, 'destroy'])->name('destroy');
        Route::get('/filter', [GalleryController::class, 'filter'])->name('filter');
        Route::post('/store', [GalleryController::class, 'store'])->name('store');
        Route::get('/', [GalleryController::class, 'index'])->name('index');
    });
});

// Авторизация
Auth::routes();

// Для файлового менеджера
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

// для использования vue-router
Route::get('/{any?}', function (){
    return view('app');
})->where('any', '.*');
