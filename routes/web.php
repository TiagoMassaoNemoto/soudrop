<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [ProductController::class, 'index']);

Route::get('/myproduct', [ProductController::class, 'yourProduct'
])->middleware('auth');

Route::delete('/myproduct/{id}', [ProductController::class, 'destroy'
])->name('myproduct.destroy')->middleware('auth');

Route::get('/products/edit/{id}', [ProductController::class, 'edit'
])->middleware('auth');

Route::put('/products/update/{id}', [ProductController::class, 'update'
])->middleware('auth');

Route::get('/newproduct', function () {
    return view('products.newproduct');
})->middleware('auth');

Route::post('/newproduct', [ProductController::class, 'store']
)->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
