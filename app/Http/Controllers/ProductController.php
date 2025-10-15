<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', ['allProducts' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'quantity' => 'required|min:0',
            'description' => 'nullable',
        ]);

        $product = Product::create($validated);

        return redirect('/products/'.$product->id.'/show');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/products/');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', ['singleProduct' => $product]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'quantity' => 'required|min:0',
            'description' => 'nullable',
        ]);

        $product = Product::find($id);

        $product->update($validated);

        return redirect('/products/'.$product->id.'/show');
    }
}
