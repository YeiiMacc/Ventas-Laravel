<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $product->title}} ({{ $product->id}})</h5>
      <p class="card-text">- </p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $product->stock}}</li>
      <li class="list-group-item">{{ $product->status}}</li>
      <li class="list-group-item">${{ $product->price}}</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>