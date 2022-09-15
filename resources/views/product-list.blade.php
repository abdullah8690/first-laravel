@extends('layout')
@section('title')
   Product
@endsection
@section('content')
    <div class="container">
        <h1>Shopping</h1>
        <div class="row">

            <div class="col-md-3">
                <div class="product">
                    <img src="data:image/jpeg;base64,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" class="img-fluid">
                    <h5 class="card-title">Product Name : </h5>
                    <p class="card-text">Product Price with tax :</p>
                    <p class="card-text">Product Price without tax :</p>


                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
@endsection




