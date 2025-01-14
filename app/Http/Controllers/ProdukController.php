<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\JsonResponse;

class ProdukController extends Controller
{
    /**
     * Tampilkan daftar produk.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // Ambil semua data produk beserta relasi kategori
        $produks = Produk::with('kategori')->get();

        return response()->json([
            'success' => true,
            'data' => $produks,
        ]);
    }
}
