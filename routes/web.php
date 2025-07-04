<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewProduct;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [NewProduct::class, 'index']);

Route::get('/myproduct', function () {
    return view('myproduct');
});

Route::get('/newproduct', function () {
    return view('newproduct');
});

Route::post('/newproduct', [NewProduct::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
