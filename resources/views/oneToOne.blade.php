@extends('layout')
@section('title')
    products
@endsection
@section('content')

    <div class="container">
        <div class="row">

           @foreach($categories as $category)
                <h1 class="card-title  bg-success">{{$category->category_name}}</h1>
                    @foreach($category->products as $product)
                        <div class="col-md-3 mb-5">
                            <div class="product bg-info text-white m-1">
                                <p class="card-text">{{$category->category_name}} </p>
                                <h3 class="card-title text-center m-1">{{$product->name}} </h3>
                               <img src="{{$product->image}}" class="img-fluid" alt="">
{{--                                <h3 class="card-title">{{$product->description}}</h3>--}}
                                <h3 class="card-title p-1 ">{{$product->weight}} g</h3>
                                <h3 class="card-text p-1">{{$product->price}} €</h3>
                            </div>
                        </div>
                    @endforeach
            @endforeach

        </div>

    </div>
@endsection

@section('footer')
@endsection




