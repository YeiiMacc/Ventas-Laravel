  <div class="card">
    
    <div id="carousel{{ $product->id }}" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        @foreach ($product->images as $image)
          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

            <img class="d-block w-100 card-img-top" src="{{ asset($image->path) }}" height="300">
            <div class="carousel-caption d-none d-md-block">
              <h5>Title</h5>
              <p>Text</p>
            </div>
          </div> 
        @endforeach         
      </div>
      <a class="carousel-control-prev" href="#carousel{{ $product->id }}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>        
      </a>

      <a class="carousel-control-next" href="#carousel{{ $product->id }}" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>        
      </a>
    </div>

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
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $product->pivot->quantity }} in your cart
            <strong>(${{ $product->total }})</strong>
          </li>
        </ul>
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