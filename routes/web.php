<?php

use App\Http\Controllers\AddToCardController;
use App\Http\Controllers\CartPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductPageController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [ProductPageController::class, 'show'])->name('product.detail');

Route::post('/add-to-cart', [AddToCardController::class, 'store'])->name('cart.add');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('products', ProductController::class)->middleware('auth');

Route::get('/cart', [CartPageController::class, 'index'])->name('cart.index');

require __DIR__.'/auth.php';
