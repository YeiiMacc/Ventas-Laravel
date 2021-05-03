@extends('layouts.master')

@section('content')
    <h1>Create a products</h1>

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="form-row">
            <label>Title</label>
            <input type="text" name="title" id="" class="form-control" required>
        </div>
        <div class="form-row">
            <label>Description</label>
            <input type="text" name="description" id="" class="form-control" required>
        </div>
        <div class="form-row">
            <label>Price</label>
            <input type="number" name="price" id="" class="form-control" min="1.00" step="0.01" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input type="number" name="stock" id="" class="form-control" min="1" required>
        </div>
        <div class="form-row">
            <label>Status</label>
            <select name="status" id="" class="custom-selectaed">
                <option value="" selected>Select...</option>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg">Create Product</button>
        </div>
        
    </form>
@endsection