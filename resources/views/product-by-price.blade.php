@extends('layout')

@section('content')
    <div class="container">
        <h1>Shopping</h1>
        <div class="row">
            @foreach($product as $product)
                <div class="col-md-3 mb-5">
                    <div class="product bg-gray-300/50">
                        <a href="{{'/product/{id}'}}"> <img src="{{$product->image}}" class="img-fluid" alt=""></a>
                        <h5 class="card-title ">{{$product->name}}</h5>
                        <h5 class="card-title">{{$product->description}}</h5>
                        <h5 class="card-title">{{$product->weight}} g</h5>
                        <p class="card-text">{{$product->price}} €</p>
                        <a href="{{route("product.edit", ["id" => $product->id])}}">
                            <button class="btn btn-primary d-inline-block m-2 float-right">Update</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection

@section('footer')
@endsection




