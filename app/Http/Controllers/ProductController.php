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
    # code...
    $product = Product::all();
    return response()->json(['data'=>$product]); 
 }
}
