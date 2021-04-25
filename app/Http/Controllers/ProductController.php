<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {      
        return 'This is list of products from Controller';
    }

    public function create() 
    {
        return 'This is the form to create a product';
    }
    public function store() 
    {
        //
    }
    public function show($product) 
    {
        return "Showing products with id {$product}";
    }
    public function edit($product) 
    {
        return "Showing the form to edit the products with id {$product}";
    }
    public function update($product) 
    {
        //
    }
    public function destroy($product) 
    {
        //
    }
}
