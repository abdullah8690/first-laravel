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
                        <form action="{{'/product/delete'}}/{{$product->id}}" method="POST">
                            @csrf
                            <input type="hidden" name="item_name" value="">
                            <input type="hidden" name="image" value="">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name='price' value="">
                            <input type="hidden" name='weight' value="">

                            <a href="{{route('product.delete',['id'=>$product->id])}}">
                                <button type="submit" name="delete" class="btn btn-danger ">Delete</button>
                            </a>
                        </form>
                        <a href="{{route("product.edit", ["id" => $product->id])}}">
                            <button class="btn btn-primary d-inline-block m-2 float-right">Update</button>
                        </a>

                    </div>
{{--                </div>--}}
            @endforeach

        </div>

    </div>

@endsection

@section('footer')
@endsection




