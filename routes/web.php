<?php

use App\Http\Controllers\CartItemController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $categories = Category::with('products')->get();

    return view('index', [
        'categories' => $categories
    ]);
});

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product/{product}', [ProductController::class, 'ProductSingle']);

Route::get('/carrinho', [CartItemController::class, 'index']);
Route::post('/carrinho/add/{product}', [CartItemController::class, 'add'])->name('cart.add');
Route::delete('/carrinho/{id}', [CartItemController::class, 'remove'])->name('cart.remove');

Route::get('/checkout', function () {
    return view('checkout');
});