@extends('layout')

@section('content')
    <div class="container">
        <h1>Product Details</h1>
        <div class="row">
            {{--            @foreach($products as $product)--}}
            <div class="col-md-6">
                <div class="product">
                    <div class="product bg-gray-300/50">
                        <img src="{{$product->image}}" class="img-fluid" alt="">
                        <h5 class="card-title ">{{$product->name}}</h5>
                        <h5 class="card-title">{{$product->description}}</h5>
                        <h5 class="card-title">{{$product->weight}} g</h5>
                        <p class="card-text">{{$product->price}} €</p>

                        {{--                                <form action="{{'/product/delete'}}/{{$data->id}}" method="POST">--}}
                        <form action="{{'/product/delete'}}/{{$product->id}}" method="POST">
                            @csrf
                            <label for="quantity">Quantity :</label>
                            <input type="number" name="qty" min="1" max="5" value="1">
                            <input type="hidden" name="item_name" value="">
                            <input type="hidden" name="image" width="250px" height="200px" value="">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name='price' value="">
                            <input type="hidden" name='weight' value="">
                            <button type="submit" name="add_to_cart" class="btn btn-info">Add To Cart</button>
                            <a href="{{route('product.delete',['id'=>$product->id])}}">
                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            {{--            @endforeach--}}
        </div>
    </div>

@endsection

@section('footer')
@endsection
