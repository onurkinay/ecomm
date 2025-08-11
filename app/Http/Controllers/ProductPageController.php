<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductPageController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('pages.home', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.product', compact('product'));
    }
}
