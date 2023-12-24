<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationSendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/', [ProductController::class, 'create'])->name('product.create');
    Route::get('/add-project', [ProductController::class, 'create'])->name('product.create');
    Route::get('/show', [ProductController::class, 'showAllProducts'])->name('product.showAll');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{id}/edit-product', [ProductController::class, 'editProduct'])->name('product.editProduct');
    Route::put('/product/{id}/update-product', [ProductController::class, 'update'])->name('product.updateProduct');
    Route::delete('/product/{id}/delete-product', [ProductController::class, 'deleteProduct'])->name('product.deleteProduct');
    Route::get('/product/{id}/view', [ProductController::class, 'viewProduct'])->name('product.viewProduct');
    




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
