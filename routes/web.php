<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/hello', function () {
    return response()->json([
        'message' => 'Hello World',
    ]);
});

Route::get('/api/products', [ProductController::class, 'index']);