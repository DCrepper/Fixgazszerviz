<?php

namespace App\Http\Controllers;

class CheckOutController extends Controller
{
    public function index()
    {
        $cart = CartController::createCart();

        return view('checkout.index', compact('cart'));
    }
}
