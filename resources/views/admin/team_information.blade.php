@extends('layouts.admin_layout')

@section('content')
    <div>
        <div>
            <h3>
                <a href="{{ route('manage_team') }}"><i class="fas fa-chevron-left dropdown-arrow"></i></a>
                <i class="fas fa-user"></i> Team Information
            </h3>
        </div>
        <div class="mt-4">
            <div>

                @if ($team->photo == null)
                    <i class="fas fa-user"></i>
                @else
                    <img src="{{ asset('storage/teams/' . $team->photo) }}" alt="Team Image"
                        style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">
                @endif
            </div>
            <div class="mt-3">
                <label for="">Full Name</label>
                <input type="text" value="{{ $team->name }}" class="form-control" readonly>
            </div>
            <div class="mt-3">
                <label for="">Email Address</label>
                <input type="text" value="{{ $team->email }}" class="form-control" readonly>
            </div>
            <div class="mt-3">
                <label for="">Phone Number</label>
                <input type="text" value="{{ $team->phone }}" class="form-control" readonly>
            </div>
            <div class="mt-3">
                <label for="">Team Position</label>
                <input type="text" value="{{ $team->position }}" class="form-control" readonly>
            </div>
            <div class="mt-3">
                <label for="">Team Description</label>
                <textarea name="" class="form-control" readonly id="" cols="30" rows="10">{{ $team->description }}</textarea>
            </div>
        </div>
    </div>
@endsection
