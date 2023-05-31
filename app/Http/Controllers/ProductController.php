<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 public function index()
 {
    # code...
    $product = Product::all();
    // return response()->json(['data'=>$product]);
    return ProductResource::collection($product); 
 }
}
