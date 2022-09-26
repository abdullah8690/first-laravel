@extends('layout')
@section('title')
    products
@endsection
@section('content')

    <div class="container">
        <div class="row">

            @foreach($products as $product)
                @if($product->price <= 10)
                    <div class="col-md-3 m-2 card bg-success">
                        {{--                    <div class="product bg-gray-300/50">--}}
                        <a href="{{'/product/{id}'}}"> <img src="{{$product->image}}" class="img-fluid" alt=""></a>
                        <h5 class="card-title ">{{$product->name}}</h5>
                        <h5 class="card-title">{{$product->description}}</h5>
                        <h5 class="card-title">{{$product->weight}} g</h5>
                        <p class="card-text">{{$product->price}} €</p>
                        @elseif($product->price >= 20)
                            <div class="col-md-3  m-2 card bg-warning">
                                {{--                            <div class="product bg-gray-300/50">--}}
                                <a href="{{'/product/{id}'}}"> <img src="{{$product->image}}" class="img-fluid" alt=""></a>
                                <h5 class="card-title ">{{$product->name}}</h5>
                                <h5 class="card-title">{{$product->description}}</h5>
                                <h5 class="card-title">{{$product->weight}} g</h5>
                                <p class="card-text">{{$product->price}} €</p>
                                @endif
                                <form action="{{'/cart'}}/{{$product->id}}" method="POST">
                                    @csrf
                                    <input type="number" name="quantity" min="0" max="{{$product->quantity}}">
                                    <input type="hidden" name="item_name" value="">
                                    <input type="hidden" name="image" value="">
                                    <input type="hidden" name="id" value="">
                                    <input type="hidden" name='price' value="">
                                    <input type="hidden" name='weight' value="">
                                </form>
                                <a href="{{route("addTo.cart", ["id" => $product->id])}}">
                                    <button class="btn btn-primary d-inline-block m-2 d-flex ">Add To Cart</button>
                                </a>


                            </div>
                            {{--                </div>--}}
                            @endforeach

                    </div>

        </div>

@endsection

@section('footer')
@endsection






