<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * Tampilkan daftar produk.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $products = Products::with('categories')->get();

        return response()->json([
            'success' => true,
            'data' => $products,
        ]);
    }
}
