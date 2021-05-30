@extends('layouts.app')

    @section('content')
           
        <h1>Order Details</h1>
        
        <div class="text-center mb-3">
            <form 
            class="d-inline"
            method="POST" 
            action="{{ route('orders.store') }}" 
            >
                @csrf
                <button type="submit" class="btn btn-success">Confirm Order</button>
            </form>
        </div>
        
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart->products as $product)
                        <tr>
                            <td>
                                <img src="{{ asset($product->images->first()->path) }}" alt="" width="100" height="130">
                                {{ $product->title }}
                            </td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->pivot->quantity }}</td>
                            <td>
                                <strong>
                                    {{ $product->total}}
                                </strong>
                            </td>
                        </tr>  
                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-right"><h5><strong>Order Total: </strong></h5></td>
                        <td><h5><strong>$ {{ $cart->total }}</strong></h5></td>
                    </tr>
                </tfoot>                   
            </table>
        </div>
        
    @endsection