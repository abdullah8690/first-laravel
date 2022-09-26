@extends('layout')

@section('title')
    RegistrationForm
@endsection

@section('content')
    <form action="{{url('insert-product')}}/" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h1 class="text-center text-primary">Add Product</h1>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control"  value="{{old('name')}}">
                    <spam class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control" value="{{old('email')}}">
                    <spam class="text-danger">
                        @error('description')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Price</label>
                    <input type="number" name="price" class="form-control" >
                    <spam class="text-danger">
                        @error('price')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Image</label>
                    <input type="text" name="image" class="form-control" accept="image/jpeg">
                    <spam class="text-danger">
                        @error('image')
                        {{$message}}
                        @enderror
                    </spam>
                    {{--                    <div id="emailHelp" class="form-text"></div>--}}
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Weight</label>
                    <input type="number" name="weight" class="form-control" >
                    <spam class="text-danger">
                        @error('weight')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Avalaible</label>
                    <input type="number" name="available" class="form-control">
                    <spam class="text-danger">
                        @error('available')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Category</label>
                    <input type="number" name="category_id" class="form-control">
                    <spam class="text-danger">
                        @error('category_id')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Quantity</label>
                    <input type="number" name="quantity" class="form-control" >
                    <spam class="text-danger">
                        @error('quantity')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary m-2" value="upload">Submit</button>
        </div>
    </form>
@endsection

@section('footer')
@endsection

