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
    Route::get('/dashboard',[AdminController::class,'admin']);
    Route::get('/customer',[AdminController::class,'customer']);
    Route::get('/order',[AdminController::class,'order']);
    Route::get('/Addproduct',[AdminController::class,'product']);
    Route::get('/product',[AdminController::class,'Showproduct']);
    Route::post('/store-Product',[AdminController::class,'store']);
    Route::get('/edit-Product/{id}',[AdminController::class,'edit']);
    Route::get('/delete-Product/{id}',[AdminController::class,'destroy']);
    Route::post('/update-Product/{id}',[AdminController::class,'update']);
});
Route::prefix('E-Book')->group(function () {
    Route::get('/Home',[UserController::class,'home']);
    Route::get('/Shop',[UserController::class,'product']);
    Route::get('/About-Us',[UserController::class,'about']);
    Route::get('/Contact-Us',[UserController::class,'contact']);
    Route::get('/Blog',[UserController::class,'blog']);
    Route::get('/Site-Map',[UserController::class,'site']);
    Route::get('/Store-Locator',[UserController::class,'store']);
});
require __DIR__.'/auth.php';
