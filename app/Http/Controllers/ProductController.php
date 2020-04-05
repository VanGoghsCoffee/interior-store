<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    public function show(Product $product) {
        return view('product.show', compact('product'));
    }

    public function create() {
        return view('product.create');
    }

    public function store() {
        $product = request()->validate($this->validation);

        auth()->user()->products()->create($product);

        return redirect('home');
    }

    public function edit(Product $product) {
        return view('product.edit', compact('product'));
    }

    public function update() {
        $productID = (request()->product);
        $product = request()->validate($this->validation);

        auth()->user()->products()->findOrFail($productID)->update($product);
        return redirect('home');
    }

    public function destroy(Product $product) {
        auth()->user()->products()->findOrFail($product->id)->delete();

        return redirect('home');
    }

    private $validation = [
        'title' => 'required',
        'description' => 'required',
        'product_image' => 'required',
        'stock' => ['required', 'numeric', 'min:0'],
        'price' => ['required', 'numeric', 'min:0']
    ];
}
