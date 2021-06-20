<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function index()
    {
        
        // Solucion a N+1 consultas
        // $products = Product::with('images')->get();
        $products = Product::all();

        return view('welcome')->with([
            'products' =>  $products,
        ]);
    }
}
