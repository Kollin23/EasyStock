<?php

use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
