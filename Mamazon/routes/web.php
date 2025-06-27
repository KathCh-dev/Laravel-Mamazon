<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;


Route::get('/', [productController::class, 'index'])->name('home.index');
Route::get('/products/{product}', [productController::class, 'show'])->name('product.show');
