@extends('layout')

@section('title')
   cart
@endsection

@section('content')
    <div class="container">
{{--        <a href="{{'/customer/registration'}}">--}}
{{--            <button class="btn btn-primary d-inline-block m-2 float-right"> Add--}}

{{--            </button>--}}
{{--        </a>--}}
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>State</th>
                <th>Country</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customer as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>
                        @if($customer->gender == "m")
                            Male
                        @elseif($customer->gender == "f")
                            Female
                        @else
                            Other
                        @endif
                    </td>
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
                    <td>
                        @if($customer->status == "1")
                            <a href="">
                                <span class="badge badge-success">Active</span>
                            </a>
                        @else
                            <a href="">
                                <span class="badge badge-danger">Inactive</span>
                            </a>
                        @endif

                    </td>
                    <td>
                        {{--                    <a href="{{url('/customer/delete/')}}/{{$customer->customer_id}}"><button class="btn btn-danger mb-1">Delete</button></a>--}}
{{--                        <a href="{{route('customer.delete',['id'=>$customer->customer_id])}}"><button class="btn btn-danger mb-1">Delete</button></a>--}}
                        <button class="btn btn-primary">Update</button>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>


@endsection

@section('footer')
@endsection
