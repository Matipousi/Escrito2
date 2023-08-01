<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductShow($id)
    {
        $products = Product::all();
        return view('product', ['product' => $products]);
    }
}
