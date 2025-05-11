<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// LOGIN Y REGISTER
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])->name('register');

// PREDASHBOARD/SETUP PRODUCTS
Route::get('/setup/products', [App\Http\Controllers\SetupProductController::class, 'create'])->name('setup.products');
Route::post('/setup/products', [App\Http\Controllers\SetupProductController::class, 'store'])->name('setup.products.store');

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// STOCK
Route::middleware(['auth'])->group(function () {
    Route::get('/stock', [ProductController::class, 'index'])->name('stock.index');
    Route::get('/stock/{product}/edit', [ProductController::class, 'edit'])->name('stock.edit');
    Route::put('/stock/{product}', [ProductController::class, 'update'])->name('stock.update');
    Route::get('/stock/create', [ProductController::class, 'create'])->name('stock.create');
    Route::post('/stock', [ProductController::class, 'store'])->name('stock.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
