<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoustomerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\HomeController;
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




Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('coustomers', CoustomerController::class);

Route::resource('products', ProductsController::class);

Route::resource('invoices', InvoicesController::class);

Route::resource('home', HomeController::class);

Route::controller(CoustomerController::class)->group(function () {
    Route::get('/coustomer/create/', 'create')->name('create.coustomer');
    Route::get('/coustomer/{id}', 'show');
    Route::post('/coustomer', 'store');
});

Route::controller(ProductsController::class)->group(function () {
    Route::get('/product/create/', 'create')->name('create.product');
    Route::get('/product/{id}', 'show');
    Route::post('/product', 'store');
});

Route::controller(InvoicesController::class)->group(function () {
    Route::get('/invoices/create/', 'create')->name('create.invoice');
    Route::get('/invoices/{id}', 'show');
    Route::post('/invoices', 'store');
});
