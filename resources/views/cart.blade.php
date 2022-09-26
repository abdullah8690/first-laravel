@extends('layout')

@section('title')
   cart
@endsection

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Weight</th>
                <th>Available</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Created-at</th>
                <th>Updated_at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
{{--            @foreach($products as $product)--}}
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td><img src="{{$product->image}}" width="50px" height="50px" alt=""> </td>
                    <td> {{$product->weight}} G</td>
                    <td>
                        @if($product->available == "1")
                            <a href="">
                                <span class="badge badge-success">Disponible</span>
                            </a>
                        @else
                            <a href="">
                                <span class="badge badge-danger">Undisponible</span>
                            </a>
                        @endif
                    </td>
                    <td>{{$product->category_id}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td>

                        {{--                        <a href="{{route('customer.delete',['id'=>$customer->customer_id])}}"><button class="btn btn-danger mb-1">Delete</button></a>--}}
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
                                    <button  name="delete" class="btn btn-danger m-2 d-inline-block ">Delete</button>
                                </a>
                            </div>
                        </form>
                        <a href="{{route("product.edit", ["id" => $product->id])}}">
                            <button class="btn btn-primary d-inline-block m-2 d-flex ">Update</button>
                        </a>

                    </td>
                </tr>

{{--            @endforeach--}}
            </tbody>
        </table>
    </div>


@endsection

@section('footer')
@endsection
