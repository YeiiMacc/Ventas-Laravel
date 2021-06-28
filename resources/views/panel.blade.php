@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Panel</div>

                <div class="card-body">
                    In panel
                    <div class="list-group">
                        <a href="{{ route('products.index') }}" class="list-group-item">
                           Manage products 
                        </a>
                        <a href="{{ route('users.index') }}" class="list-group-item">
                            Manage users 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
