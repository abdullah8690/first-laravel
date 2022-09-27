@extends('layout')
@section('title')
    products
@endsection
@section('content')

    <a href="/insertProductForm">
        <button class=" col-md-12 btn btn-primary  m-2 "> Add Product</button>
    </a>

    <div class="container">
        <div class="row">

            @foreach($products as $product)
                @if($product->price <= 10)
                    <div class="col-md-3 m-1 card bg-success text-white">
                        {{--                    <div class="product bg-gray-300/50">--}}
                        <h1 class="card-title ">{{$product->name}}</h1>
                        <img src="{{$product->image}}" class="img-fluid" alt="">

                        <p class="card-title p-2 text-center">{{$product->description}}</p>
                        <h4 class="card-title">{{$product->weight}} G</h4>
                        <h2 class="card-text">{{$product->category->category_name}} </h2>
                        <h2 class="card-text">{{$product->price}} €</h2>

                        @elseif($product->price >= 20)
                            <div class="col-md-3  m-1 card bg-info text-white">
                                {{--                            <div class="product bg-gray-300/50">--}}
                                <h1 class="card-title text-center ">{{$product->name}}</h1>
                                <img src="{{$product->image}}" class="img-fluid" alt="">
                                <p class="card-title">{{$product->description}}</p>
                                <h4 class="card-title">{{$product->weight}} G</h4>
                                <h2 class="card-text">Price {{$product->price}} €</h2>
                                <h2 class="card-text">{{$product->category->category_name}} </h2>
                                @endif
                                <form action="{{'/product/delete'}}/{{$product->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="item_name" value="">
                                    <input type="hidden" name="image" value="">
                                    <input type="hidden" name="id" value="">
                                    <input type="hidden" name='price' value="">
                                    <input type="hidden" name='weight' value="">
                                    <div class="d-flex">

                                        <a href="{{route('product.delete',['id'=>$product->id])}}">
                                            <button type="submit" name="delete"
                                                    class="btn btn-danger m-2 d-inline-block ">Delete
                                            </button>
                                        </a></div>
                                </form>
                                <a href="{{route("product.edit", ["id" => $product->id])}}">
                                    <button class="btn btn-primary d-inline-block m-2 d-flex ">Update</button>
                                </a>


                            </div>
                            {{--                </div>--}}
                            @endforeach

                    </div>

        </div>

@endsection

@section('footer')
@endsection




