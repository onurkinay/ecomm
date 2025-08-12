<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AddToCardController extends Controller
{
    public $cart = [];

    public function __construct()
    {
        $this->cart = Session::get('cart', []);
    }

    public function store(Request $request)
    {

        $productId = $request->input('id');
        $product = Product::findOrFail($productId);

        $this->cart[$productId] = [
            'id' => $product->id,
            'name' => $product->name,
            'quantity' => 1,
            'price' => $product->price,
            'color' => $request->input('color'),
            'image' => $product->image, // Assuming the product has an image attribute
        ];
        Session::put('cart', $this->cart);

        return response()->json(['status' => 'ok', 'message' => 'Product added to cart successfully', 'cart_count' => count($this->cart)]);
    }
}
