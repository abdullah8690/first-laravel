@extends('layout')

@section('title')
    RegistrationForm
@endsection

@section('content')
<form action="{{url('/')}}/register" method="POST">
    @csrf
    <div class="container">
        <h1 class="text-center">Registration</h1>

        <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
            <spam class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </spam>
        <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
            <spam class="text-danger">
                @error('email')
                {{$message}}
                @enderror
            </spam>
                    <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <spam class="text-danger">
                @error('password')
                {{$message}}
                @enderror
            </spam>
                    <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="form-group">
            <label for="">Conform Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <spam class="text-danger">
                @error('password_confirmation')
                {{$message}}
                @enderror
            </spam>
{{--                    <div id="emailHelp" class="form-text"></div>--}}
        </div>

        <div class="form-group">
            <label for=""> Gender</label><br>
            <input type="radio" id="html" name="gender" value="gender">
            <label for="html">Male</label>
            <input type="radio" id="css" name="gender" value="gender">
            <label for="css">Female</label><br>
        </div>
        <button type="submit" class="btn btn-primary m-2">Submit</button>
    </div>

</form>
@endsection

@section('footer')
@endsection

