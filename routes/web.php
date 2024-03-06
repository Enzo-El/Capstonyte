<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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

// Original Built-in Function for "welcome.blade.php".
// Route::get('/', function () {
//    return view('frontend.index');
// });

// Multiple Webpage Routing in Front-End Landing Page(s).
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/frontend.index', [PageController::class, 'index'])->name('index');
Route::get('/frontend.services', [PageController::class, 'services'])->name('services');
Route::get('/frontend.about', [PageController::class, 'about'])->name('about');

// Dashboard Webpage Routing in User Page(s) while logged in.
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Customers Webpage Routing in User Page(s) while logged in.
Route::get('/customers', function () {
    return view('customers');
})->middleware(['auth', 'verified'])->name('customers');

// Products Webpage Routing in User Page(s) while logged in.
// Route::get('/products', function () {
//     return view('products');
// })->middleware(['auth', 'verified'])->name('products');

// Suppliers Webpage Routing in User Page(s) while logged in.
Route::get('/suppliers', function () {
    return view('suppliers');
})->middleware(['auth', 'verified'])->name('suppliers');

// Transactions Webpage Routing in User Page(s) while logged in.
Route::get('/transactions', function () {
    return view('transactions');
})->middleware(['auth', 'verified'])->name('transactions');

// User Profile Webpage while logged in.
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('productsView/{id}', [ProductController::class, 'productsView'])->name('productsView');
    Route::get('productupdateview/{id}', [ProductController::class, 'productupdateview'])->name('productupdateview');
    Route::put('productupdateview/{id}', [ProductController::class, 'productupdate'])->name('productupdate');
    Route::get('/products/{id}', [ProductController::class, 'productdelete'])->name('productdelete');
});

// Route::controller(ProductController::class)->group(function() {
//     Route::get('products', 'products')->name('product.index');
//     Route::get('create', 'create')->name('product.create');
//     Route::post('store', 'store')->name('product.store');
// })->middleware(['auth', 'verified'])->name('products');

require __DIR__.'/auth.php';
