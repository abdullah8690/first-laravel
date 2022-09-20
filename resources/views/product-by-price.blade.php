@extends('layout')

@section('content')
    <div class="container">
        <h1>Shopping</h1>
        <div class="row">
            @foreach($data as $data)
                <div class="col-md-3 mb-5">
                    <div class="product bg-gray-300/50">
                        <a href="{{'/product/{id}'}}"> <img src="{{$data->image}}" class="img-fluid" alt=""></a>
                        <h5 class="card-title ">{{$data->name}}</h5>
                        <h5 class="card-title">{{$data->description}}</h5>
                        <h5 class="card-title">{{$data->weight}} g</h5>
                        <p class="card-text">{{$data->price}} €</p>
                        <form action="{{'/product/delete'}}/{{$data->id}}" method="POST">
                            @csrf
                            {{--                            <input type="number" name="qty" min="1" max="5" value="1">--}}
                            <input type="hidden" name="item_name" value="">
                            <input type="hidden" name="image" value="">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name='price' value="">
                            <input type="hidden" name='weight' value="">
                            <button type="submit" name="update_product" class="btn btn-info">Update</button>
                            <a href="{{route('product.delete',['id'=>$data->id])}}">
                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                            </a>
                        </form>
                        {{--                    <laba>Quantity</laba>--}}
                        {{--                    <input type="number" class="input-group w-1 mb-1" value="1">--}}
                        {{--                    <input style="width: 200px" class="btn btn-primary" type="submit" value="Add to Cart">--}}


                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection

@section('footer')
@endsection




