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
Route::get('/optimize', function () {
    Artisan::call('optimize');
});
Route::get('/optimize', function () {
    Artisan::call('optimize:clear');
});

Route::get('/', [App\Http\Controllers\BaseController::class, 'home'])->name('home');
Route::get('/search', [App\Http\Controllers\BaseController::class, 'search'])->name('search');
Route::get('/store/{store}', [App\Http\Controllers\BaseController::class, 'store'])->name('store');
Route::get('/about', [App\Http\Controllers\BaseController::class, 'about'])->name('about');
Route::get('/privacy-policy', [App\Http\Controllers\BaseController::class, 'policy'])->name('policy');