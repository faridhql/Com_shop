<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Menampilkan semua produk.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Mengambil semua produk dari database
        $products = Product::all();

        // Mengembalikan data produk dalam format JSON
        return response()->json($products);
    }
}
