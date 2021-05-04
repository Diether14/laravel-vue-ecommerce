<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [ProductController::class, 'index']);

Route::prefix('products')->group(function() {
    Route::get('get-all', [ProductController::class, 'getAll']);
});

Route::prefix('partners')->group(function() {
    Route::get('get-all', [ProductController::class, 'getAll']);
});

Route::prefix('categories')->group(function() {
    Route::get('get-all', [CategoryController::class, 'getAll']);
});

Route::prefix('newsletter')->group(function() {
    Route::get('get-all', [ProductController::class, 'getAll']);
});