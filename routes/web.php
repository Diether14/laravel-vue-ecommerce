<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
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
Route::get('/products', [ProductController::class, 'showAll']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);

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

Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'admin'])->name('admin.dashboard');
    Route::get('/stores', [AdminController::class, 'storesIndex'])->name('admin.stores');
    Route::get('/products', [AdminController::class, 'productsIndex'])->name('admin.products');
    Route::get('/products/create', [AdminController::class, 'productsCreate'])->name('admin.products.create');
});