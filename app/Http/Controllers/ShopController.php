<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {
        $products = \App\Product::all();

        return view('welcome', compact('products'));
    }
}
