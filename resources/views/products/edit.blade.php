@extends('layouts.master')

@section('content')
    <h1>Create a products</h1>

    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label>Title</label>
            <input type="text" name="title" id="" class="form-control" value="{{ $product->title }}"
                required>
        </div>
        <div class="form-row">
            <label>Description</label>
            <input type="text" name="description" id="" class="form-control" value="{{ $product->description }}"
                required>
        </div>
        <div class="form-row">
            <label>Price</label>
            <input type="number" name="price" id="" class="form-control" value="{{ $product->price }}"
                min="1.00" step="0.01" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input type="number" name="stock" id="" class="form-control" value="{{ $product->stock }}"
                min="1" required>
        </div>
        <div class="form-row">
            <label>Status</label>
            <select name="status" id="" class="custom-selectaed">
                <option {{ $product->status == 'available' ? 'selected' : '' }} value="available">Available</option>
                <option {{ $product->status == 'unavailable' ? 'selected' : '' }} value="unavailable">Unavailable</option>
            </select>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-warning btn-lg">Edit Product</button>
        </div>
        
    </form>
@endsection