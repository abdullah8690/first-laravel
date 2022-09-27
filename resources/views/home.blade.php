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
                        <a class="text-decoration-none text-white" href="/product/{{$product['id']}}">
                            <img src="{{$product->image}}" width="250px" height="200px" class=" mt-2" alt="">
                            <h5 class="card-title ">{{$product->name}}</h5>
                            <h5 class="card-title">{{$product->description}}</h5>
                            <h5 class="card-title">{{$product->weight}} g</h5>
                            <h3 class="card-text">{{$product->price}} €</h3>
                        </a>
                        @elseif($product->price >= 20)
                            <div class="col-md-3  m-2 card bg-info">
                                {{--                            <div class="product bg-gray-300/50">--}}
                                <a class="text-decoration-none text-white" href="/product/{{$product['id']}}">
                                    <img src="{{$product->image}}" width="250px" height="200px" class=" mt-2"  alt="">
                                    <h5 class="card-title ">{{$product->name}}</h5>
                                    <h5 class="card-title">{{$product->description}}</h5>
                                    <h5 class="card-title">{{$product->weight}} g</h5>
                                <h3 class="card-text">{{$product->price}} €</h3>
                                </a>
                                @endif



                            </div>
                            {{--                </div>--}}
                            @endforeach

                    </div>

        </div>

@endsection

@section('footer')
@endsection






