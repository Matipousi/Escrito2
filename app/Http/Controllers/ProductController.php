<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductShow()
    {
        $product = Product::all();
        return view('product', ['product' => $products]);
    }
    public function index()
    {
        $products = Product::all();
        return view('product', ['product' => $products]);
    }
}
