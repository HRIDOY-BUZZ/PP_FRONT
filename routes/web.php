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

// OPTIMIZATION
Route::get('/optimize', function () {
    Artisan::call('optimize');
});
Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
});

// HOME PAGE
Route::get('/', [App\Http\Controllers\BaseController::class, 'home'])->name('home');

// DINAMIC PAGES
Route::get('/events', [App\Http\Controllers\BaseController::class, 'events'])->name('events');
Route::get('/deals', [App\Http\Controllers\BaseController::class, 'deals'])->name('deals');
Route::get('/contact-us', [App\Http\Controllers\BaseController::class, 'contact'])->name('contact');
Route::post('/contact-us', [App\Http\Controllers\BaseController::class, 'contactPost'])->name('contactPost');


Route::get('/search', [App\Http\Controllers\ProductController::class, 'search'])->name('search');
Route::get('/store/{store}/{store_name}', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
Route::get('/product/{pid}/{pname}', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
Route::get('/event/{eid}/{ename}', [App\Http\Controllers\ProductController::class, 'event'])->name('event');

Route::get('/categories/{layer1?}/{layer1Name?}', [App\Http\Controllers\CategoryController::class, 'categories'])->name('categories');
Route::get('/categories/{layer}/{layer1Name}/{layer2Name?}', [App\Http\Controllers\CategoryController::class, 'catProducts'])->name('catProducts');

// STATIC PAGES
Route::get('/about', [App\Http\Controllers\StaticController::class, 'about'])->name('about');
Route::get('/privacy-policy', [App\Http\Controllers\StaticController::class, 'policy'])->name('policy');
Route::get('/faq', [App\Http\Controllers\StaticController::class, 'faq'])->name('faq');
Route::get('/terms-and-conditions', [App\Http\Controllers\StaticController::class, 'terms'])->name('terms');
Route::get('/cookies', [App\Http\Controllers\StaticController::class, 'cookies'])->name('cookies');
Route::get('/desclaimer', [App\Http\Controllers\StaticController::class, 'desclaimer'])->name('desclaimer');
