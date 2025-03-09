<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\user\UserProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\user\UserStoreController;
use App\Http\Controllers\user\UserContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('brand');
})->name('brand');

Route::get('/product',[UserProductController::class,'index'])->name('product');
Route::get('/product/{id}',[UserProductController::class,'show'])->name('product.show');
Route::get('/store',[UserStoreController::class,'index'])->name('store');
Route::get('/contact',[UserContactController::class,'index'])->name('contact');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth','admin'])->group(function () {
    Route::get('admin/dashboard',[adminDashboardController::class,'index'])->name('admin.dashboard');
    Route::Resource('admin/products', ProductController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/store', StoreController::class);
    Route::get('/chart-data', [adminDashboardController::class, 'chartData']);


});
require __DIR__.'/auth.php';
