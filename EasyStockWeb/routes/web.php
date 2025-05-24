<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;
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

// PRODUCTS
Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
});

// INVOICES
Route::get('/sales', [InvoiceController::class, 'index'])->name('invoices.index');
Route::get('/sales/create', [InvoiceController::class, 'create'])->name('invoices.create');
Route::post('/sales', [InvoiceController::class, 'store'])->name('invoices.store');
Route::get('/invoices', [InvoiceController::class, 'invoices'])->name('invoices.invoices');
Route::get('/invoices/{invoice}', [InvoiceController::class, 'show'])->name('invoices.show');
Route::get('/invoices/{invoice}/pdf', [InvoiceController::class, 'downloadPDF'])->name('invoices.pdf');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
