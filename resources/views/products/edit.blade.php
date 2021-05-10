@extends('layouts.master')

@section('content')
    <h1>Create a products</h1>

    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label>Title</label>
            <input type="text" name="title" id="" class="form-control" value="{{ old('title') ?? $product->title }}"
                required>
        </div>
        <div class="form-row">
            <label>Description</label>
            <input type="text" name="description" id="" class="form-control" value="{{ old('description') ?? $product->description }}"
                required>
        </div>
        <div class="form-row">
            <label>Price</label>
            <input type="number" name="price" id="" class="form-control" value="{{ old('price') ?? $product->price }}"
                min="1.00" step="0.01" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input type="number" name="stock" id="" class="form-control" value="{{ old('stock') ?? $product->stock }}"
                min="0" required>
        </div>
        <div class="form-row">
            <label>Status</label>
            <select name="status" id="" class="custom-selectaed">
                <option {{ old('status') == 'available' ? 'selected' : ($product->status == 'available' ? 'selected' : '') }} 
                    value="available">Available</option>
                <option {{ old('status') == 'unavailable' ? 'selected' : ($product->status == 'unavailable' ? 'selected' : '') }} 
                    value="unavailable">Unavailable</option>
            </select>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-warning btn-lg">Edit Product</button>
        </div>
        
    </form>
@endsection