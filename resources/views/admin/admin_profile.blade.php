@extends('layouts.admin_layout')

@section('content')
    <div>
        <div>
            <h1 class="text-dark fw-bold mb-2">My Profile</h1>
            <h5 class="text-dark">Account Details</h5>
        </div>
        <div class="row mt-5 px-2">

            <div>
                @auth
                    <div>
                        <label for="">User Name</label>
                        <input type="text" value="{{ auth()->user()->name }}" readonly class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="">Email Address</label>
                        <input type="email" value="{{ auth()->user()->email }}" class="form-control" readonly>
                    </div>
                    <div class="mt-3">
                        <a href="{{route('admin_setting')}}">
                            <button class="btn btn-info">Edit Profile</button>
                        </a>
                    </div>
                @endauth
            </div>


        </div>
    </div>
@endsection
