<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    Route::get('/dashboard',[AdminController::class,'admin'])->middleware("auth","admin");
    Route::get('/customer',[AdminController::class,'customer'])->middleware("auth","admin");
    Route::get('/order',[AdminController::class,'order'])->middleware("auth","admin");
    Route::get('/Addproduct',[AdminController::class,'product'])->middleware("auth","admin");
    Route::get('/product',[AdminController::class,'Showproduct'])->middleware("auth","admin");
    Route::post('/store-Product',[AdminController::class,'store'])->middleware("auth","admin");
    Route::get('/edit-Product/{id}',[AdminController::class,'edit'])->middleware("auth","admin");
    Route::get('/delete-Product/{id}',[AdminController::class,'destroy'])->middleware("auth","admin");
    Route::post('/update-Product/{id}',[AdminController::class,'update'])->middleware("auth","admin");
});
Route::prefix('E-Book')->group(function () {
    Route::get('/Home',[UserController::class,'home']);
    Route::get('/Shop',[UserController::class,'product']);
    Route::get('/About-Us',[UserController::class,'about']);
    Route::get('/Contact-Us',[UserController::class,'contact']);
    Route::get('/Blog',[UserController::class,'blog']);
    Route::get('/Site-Map',[UserController::class,'site']);
    Route::get('/Store-Locator',[UserController::class,'store']);
    Route::get('/Product-Detail/{id}',[UserController::class,'ProductDetail']);
});
require __DIR__.'/auth.php';
