@extends('layouts.admin_layout')

@section('content')
    <div>
        <div>
            <h3>
                <a href="{{ route('contact_information') }}"><i class="fas fa-chevron-left dropdown-arrow"></i></a>
                <i class="fas fa-address-book"></i> View Information
            </h3>
        </div>
        <div class="mt-4">
            <div>
                <label for="">Full Name</label>
                <input type="text" value="{{ $info->name }}" class="form-control" readonly>
            </div>
            <div class="mt-3">
                <label for="">Email Address</label>
                <input type="text" value="{{ $info->email }}" class="form-control" readonly>
            </div>
            <div class="mt-3">
                <label for="">Phone Number</label>
                <input type="text" value="{{ $info->phone }}" class="form-control" readonly>
            </div>
            <div class="mt-3">
                <label for="">Subject</label>
                <input type="text" value="{{ $info->subject }}" class="form-control" readonly>
            </div>
            <div class="mt-3">
                <label for="">Message</label>
                <textarea name="" class="form-control" readonly id="" cols="30" rows="10">{{ $info->message }}</textarea>
            </div>
        </div>
    </div>
@endsection
