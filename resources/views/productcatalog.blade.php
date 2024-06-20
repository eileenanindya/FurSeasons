@extends('catalog')

@section('content')

<div class="row"> 
    @foreach($products as $product)
        <div class="col-md-3 col-6">
            <div class="card">
                <img src="{{ asset('product/' . $product->product_pic) }}" class="card-img-top"/>
                <div class="card-body">
                    <h4 class="card-title">{{ $product->product_name}}</h4>
                    <p class="card-text"><strong>Price: </strong>Rp {{ number_format($product->product_price, 0, ',', '.') }}</p>
                    <p class="view-product"><a href="{{ url('product_details', $product->id)}}" class="view-btn">View Product</a></p>
                    <form action="{{ URL('add_cart', $product->id) }}" method="Post">
                        @csrf
                        <div class="add-cart">
                            <input type="number" class="input-qty" name="product_quantity" value="1" min="1" required>
                            <button type="submit" class="input-btn">Add to Cart</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection