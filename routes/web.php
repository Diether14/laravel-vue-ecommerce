<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StoreOwnerController;
use App\Http\Controllers\UserController;

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

Route::post('new-product', [ProductController::class, 'create']);
Route::get('/', function(){
    return view('pages.landing.index');
});
Route::get('/products', [ProductController::class, 'showAll']);
Route::get('/product-details', [ProductController::class, 'showProductDetails']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/signup', [UserController::class, 'showSignUpPage']);
Route::post('/signup', [UserController::class, 'signup'])->name('signup');
Route::get('/account', [UserController::class, 'account']);
Route::post('/checkout-email', [UserController::class, 'checkoutEmail']);




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
    Route::post('subscribe', [NewsletterController::class, 'subscribe']);
});

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::prefix('admin')->group(function() {
        Route::get('/', [AdminController::class, 'admin'])->name('admin.dashboard');
        Route::get('/stores', [AdminController::class, 'storesIndex'])->name('admin.stores');
        Route::get('/products', [AdminController::class, 'productsIndex'])->name('admin.products');
        Route::get('/products/create', [AdminController::class, 'productsCreate'])->name('admin.products.create');
    });
});

Route::group(['middleware' => ['auth', 'role:owner']], function () {
    Route::prefix('owner')->group(function() {
        Route::get('/', [StoreOwnerController::class, 'index'])->name('owner.dashboard');

        Route::prefix('auth')->group(function() {
            Route::get('/register', [StoreOwnerController::class, 'register'])->name('owner.register');
            Route::get('/login', [StoreOwnerController::class, 'showLoginForm'])->name('owner.login');
        });

        Route::prefix('products')->group(function() {
            Route::get('/', [StoreOwnerController::class, 'productsIndex'])->name('owner.products');
            Route::get('/create', [StoreOwnerController::class, 'showProductCreateForm'])->name('owner.products.create');
            Route::get('/update/{id}', [StoreOwnerController::class, 'showProductUpdateForm'])->name('owner.products.showUpdateForm');
        });

        Route::prefix('api')->group(function() {
            Route::prefix('products')->group(function() {
                Route::post('/', [ProductController::class, 'create']);
                Route::get('/', [ProductController::class, 'getAll']);
                Route::get('/{id}', [ProductController::class, 'getByID']);
                Route::put('/{id}', [ProductController::class, 'update']);
                Route::delete('/{id}', [ProductController::class, 'destroy']);
            });
        });

        Route::get('/transactions', [StoreOwnerController::class, 'transactionsIndex'])->name('owner.transactions');
        Route::get('/cancellations', [StoreOwnerController::class, 'cancellationsIndex'])->name('owner.cancellations');
        Route::get('/orders', [StoreOwnerController::class, 'ordersIndex'])->name('owner.orders');

    });
});
