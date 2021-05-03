<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {      
        $products = Product::all();
        return view('products.index')->with([
            'products' => $products,
        ]);
    }

    public function create() 
    {
        return view('products.create');
    }
    public function store() 
    {
        // $product = Product::create([
        //     'title' => request()->title,
        //     'description' =>request()->description,
        //     'price' =>request()->price,
        //     'stock' =>request()->stock,
        //     'status' =>request()->status,
        // ]);
        $product = Product::create(request()->all());
        dd($product);
    }
    public function show($product) 
    {
        $product = Product::findOrFail($product);
        return view('products.show')->with([
            'product' => $product,
        ]);
    }
    public function edit($product) 
    {
        return view('products.edit')->with([
            'product' => Product::findoRFail($product),
        ]);
    }
    public function update($product) 
    {
        $product = Product::findOrFail($product);
        $product->update(request()->all());
        dd($product);
    }
    public function destroy($product) 
    {
        //
    }
}
