@extends('layout.main')
@section('mainsection')
<div class="container mt-5">
    <h1 >
       Products <hr/>
    </h1>
    {{-- @php
        print_r($products);
    @endphp --}}
    <div class="row">
        @forelse ($products as $product )
        {{-- @php
            // print_r($product);
            echo $product['name'];
        @endphp --}}
            <div class="col-3 mb-2">
                <div class="card">
                    <img class="card-img-top" src="{{asset($product['image'])}}" height='150px' alt="name" />
                    <div class="card-body">
                        <h4 class="card-title">{{$product['name']}}</h4>
                        <p>{{$product['category']}} </p>
                        <p class="card-text">&#8377;{{$product['price']}} </p>
                        <p class="card-text">Available - {{$product['stock']}} </p>
                        <button type="button" class="btn btn-danger">Add to Cart</button>
                    </div>
                </div>
            </div>
        @empty
            <h1>No product found</h1>
        @endforelse

        
        
    </div>
  
    
</div>
@endsection