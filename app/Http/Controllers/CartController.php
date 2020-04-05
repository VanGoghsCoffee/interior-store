<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class CartController extends Controller
{
    public function index() {
        $cart = CartController::getCart();

        return view('cart.index', compact('cart'));
    }

    public function store() {
        $productID = request()->validate(['product_id' => ['required', 'numeric']]);
        $product = Product::findOrFail($productID)->first();

        $cart = request()->validate([
            'amount' => ['required', 'numeric', 'min:0', 'max:'.(int)$product->stock]
        ]);

        $newCart = CartController::getCart();

        array_push($newCart, [
            'entry' => [
                'product' => $product,
                'amount' => $cart['amount']
            ]
        ]);

        session(['cart' => $newCart]);

        $product->stock -= $cart["amount"];
        $product->save();

        return redirect(route('cart.index'));
    }

    public static function getCart() {
        $cart = session('cart');
        if (empty($cart)) {
            $cart = [];
        }
        return $cart;
    }

    public static function clearCart() {
        session(['cart' => []]);
    }
}
