<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{

    public function index()
    {
        return view('welcome')->with([
            'products' =>  Product::all(),
        ]);
    }
}
