@extends('layout')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="product">
                <div class="product bg-gray-300/50">
                        <img src="{{$product->image}}" class="img-fluid" alt="">
                        <h3 class="card-title ">{{$product->name}}</h3>
                        <h5 class="card-title ">{{$product->description}}</h5>
                        <h5 class="card-title">{{$product->weight}} g</h5>
                        <p class="card-text">{{$product->price}} €</p>
                        <p class="card-text"> Stock {{$product->quantity}}</p>

                    <form action="{{'/cart'}}/{{$product->id}}" method="POST">
                        @csrf
                        <input class="number w-25" type="number"  name="quantity" min="0">
                        @if($errors->has('quantity'))
                            <div class="error text-danger">{{ $errors->first('quantity') }}</div>
                        @endif
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="item_name" value="">
                        <input type="hidden" name="image" value="">
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name='price' value="">
                        <input type="hidden" name='weight' value="">
                        <button type="submit" class="btn btn-primary w-25 mt-2 d-inline-block  d-flex ">Add To Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection
