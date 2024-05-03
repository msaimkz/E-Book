<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminController::class,'admin']);
    Route::get('/customer',[AdminController::class,'customer']);
    Route::get('/order',[AdminController::class,'order']);
    Route::get('/product',[AdminController::class,'product']);
    Route::get('/AddProduct',[AdminController::class,'Addproduct']);
});
require __DIR__.'/auth.php';
