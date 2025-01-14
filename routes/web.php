<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/hello', function () {
    return response()->json([
        'message' => 'Hello World',
    ]);
});

Route::get('/api/products', [ProdukController::class, 'index']);