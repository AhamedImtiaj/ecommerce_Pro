<?php
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\CheckoutController;
use App\Http\Controllers\Site\AccountController;

// Route::view('/', 'site.pages.homepage');
// Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
// Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

// Route::post('/product/add/cart', [ProductController::class, 'addToCart'])->name('product.add.cart');
// Route::get('/cart', [CartController::class, 'getCart'])->name('checkout.cart');
// Route::get('/cart/item/{id}/remove', [CartController::class, 'removeItem'])->name('checkout.cart.remove');
// Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('checkout.cart.clear');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/checkout', [CheckoutController::class, 'getCheckout'])->name('checkout.index');
//     Route::post('/checkout/order', [CheckoutController::class, 'placeOrder'])->name('checkout.place.order');

//     Route::get('checkout/payment/complete', [CheckoutController::class, 'complete'])->name('checkout.payment.complete');

//     Route::get('account/orders', [AccountController::class, 'getOrders'])->name('account.orders');
// });

// Auth::routes();
require 'admin.php';
