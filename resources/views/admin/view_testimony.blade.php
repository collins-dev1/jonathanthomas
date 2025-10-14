@extends('layouts.admin_layout')

@section('content')
    <div>
        <div>
            <h3>
                <a href="{{ route('manage_testimony') }}"><i class="fas fa-chevron-left dropdown-arrow"></i></a>
                <i class="fas fa-quote-left"></i> View Information
            </h3>
        </div>
        <div class="mt-4">
            <div>

                @if ($testimony->photo == null)
                    <i class="fas fa-user"></i>
                @else
                    <img src="{{ asset('storage/testimonies/' . $testimony->photo) }}" alt="Team Image"
                        style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">
                @endif
            </div>
            <div class="mt-4">
                <label for="">Full Name</label>
                <input type="text" value="{{ $testimony->name }}" class="form-control" readonly>
            </div>
            <div class="mt-3">
                <label for="">Email Address</label>
                <input type="text" value="{{ $testimony->email }}" class="form-control" readonly>
            </div>
            <div class="mt-3">
                <label for="">Message</label>
                <textarea name="" class="form-control" readonly id="" cols="30" rows="10">{{ $testimony->message }}</textarea>
            </div>
        </div>
    </div>
@endsection
