@extends('layouts.app')

@section('content')
        <h1 class="text-center">Welcome</h1>
        @empty($products)
            <div class="alert alert-danger" role="alert">
              No products yet!         
            </div>
        @else
            <div class="row justify-content-center">
              @foreach ($products as $product)
                <div class="col-10	col-sm-5	col-md-4	col-lg-4	col-xl-3 ">

                  @include('components.product-card')

                </div>       
              @endforeach    
            </div>

        @endempty
@endsection

