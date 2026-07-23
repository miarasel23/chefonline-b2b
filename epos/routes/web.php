<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::get('/{name}', [ContactController::class, 'product'])->name('product');
    Route::post('/store', [ContactController::class, 'store'])->name('store');
    Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('sendEmail')->middleware('throttle:6,1');
});

Route::prefix('package')->name('package.')->group(function () {
    Route::get('/', [ProductController::class, 'packageIndex'])->name('index');
    Route::get('/{slug}', [ProductController::class, 'packageDetail'])->name('detail');
});

Route::prefix('addon')->name('addon.')->group(function () {
    Route::get('/', [ProductController::class, 'addonIndex'])->name('index');
    // Route::get('/{id}', [ProductController::class, 'addonDetail'])->name('detail');
    Route::get('/{slug}', [ProductController::class, 'addonDetail'])->name('detail');
});

Route::get('/about', function () {
    return view('frontend.about');
});


Route::get('/terms', function () {
    return view('frontend.terms');
});

Route::get('/privacy-policy', function () {
    return view('frontend.privacy');
});

Route::get('/thanks', function () {
    return view('frontend.thanks');
})->name('thanks');
