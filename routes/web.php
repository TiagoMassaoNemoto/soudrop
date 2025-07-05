<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewProduct;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [NewProduct::class, 'index']);

Route::get('/myproduct', [NewProduct::class, 'yourProduct'
])->middleware('auth');

Route::delete('/myproduct/{id}', [NewProduct::class, 'destroy'
])->name('myproduct.destroy')->middleware('auth');

Route::get('/myproduct/{id}', [NewProduct::class, 'edit'
])->middleware('auth');

Route::get('/newproduct', function () {
    return view('newproduct');
})->middleware('auth');

Route::post('/newproduct', [NewProduct::class, 'store']
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
