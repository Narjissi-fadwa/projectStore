<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test-admin', function () {
    return 'Admin access works!';
})->middleware(['auth', 'role:admin']);

Route::get('/products', function () {
    return view('customer.products');
})->name('customer.products');

Route::get('/seller/add-product', function () {
    return view('seller.add-product');
})->middleware(['auth', 'role:seller'])->name('seller.add-product');

require __DIR__.'/auth.php';



