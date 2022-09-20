@extends('layout')

@section('title')
    RegistrationForm
@endsection

@section('content')
    <form action="{{url('/')}}/product" method="POST">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h1 class="text-center text-primary">Customer Registration</h1>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
                    <spam class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email</label>
                    <input type="" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
                    <spam class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <spam class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Conform Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <spam class="text-danger">
                        @error('password_confirmation')
                        {{$message}}
                        @enderror
                    </spam>
                    {{--                    <div id="emailHelp" class="form-text"></div>--}}
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Country</label>
                    <input type="text" name="country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <spam class="text-danger">
                        @error('country')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">State</label>
                    <input type="text" name="state" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <spam class="text-danger">
                        @error('state')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-12 required">
                    <label for="">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <spam class="text-danger">
                        @error('address')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Date of birth</label>
                    <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <spam class="text-danger">
                        @error('dob')
                        {{$message}}
                        @enderror
                    </spam>
                    <div id="emailHelp" class="form-text"></div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary m-2">Submit</button>
        </div>
    </form>
@endsection

@section('footer')
@endsection

