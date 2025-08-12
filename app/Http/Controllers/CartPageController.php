<?php

namespace App\Http\Controllers;

class CartPageController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('pages.cart', compact('cart'));
    }
}
