  <div class="card">
    <img class="card-img-top" src="{{ asset($product->images->first()->path) }}" alt="Card image cap" height="300">
    <div class="card-body">
      <h5 class="card-title">{{ $product->title}} ({{ $product->id}})</h5>
      <p class="card-text">- </p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $product->stock}}</li>
      <li class="list-group-item">{{ $product->status}}</li>
      <li class="list-group-item">${{ $product->price}}</li>
    </ul>
    <div class="card-body text-center">

      @if (isset($cart))
        <form 
        class="d-inline"
        method="POST" 
        action="{{ route('products.carts.destroy', ['cart' => $cart->id, 'product' => $product->id]) }}" 
        >
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Remove from Cart</button>
        </form>
      @else
        <form 
        class="d-inline"
        method="POST" 
        action="{{ route('products.carts.store', ['product' => $product->id]) }}" 
        >
          @csrf
          <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>   
      @endif

    </div>
  </div>