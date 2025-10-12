@extends('layouts.admin_layout')

@section('content')
    <div>
        <div>
            <h3>
                <a href="{{ route('manage_team') }}"><i class="fas fa-chevron-left dropdown-arrow"></i></a>
                <i class="fas fa-user"></i> Edit and Update Team
            </h3>
        </div>
        <form action="{{route('update_team', $team->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-4">
                <div>
                    <label for="">Current Photo</label>

                    <div class="mt-3">
                        @if ($team->photo == null)
                        <i class="fas fa-user"></i>
                    @else
                        <img src="{{ asset('storage/teams/' . $team->photo) }}" alt="Team Image"
                            style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">
                    @endif
                    </div>
                </div>
                <div class="mt-3">
                    <label for="">Update Photo (if neccessary)</label>
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="mt-3">
                    <label for="">Full Name</label>
                    <input type="text" value="{{ $team->name }}" class="form-control" name="name">
                </div>
                <div class="mt-3">
                    <label for="">Email Address</label>
                    <input type="text" value="{{ $team->email }}" class="form-control" name="email">
                </div>
                <div class="mt-3">
                    <label for="">Phone Number</label>
                    <input type="text" value="{{ $team->phone }}" class="form-control" name="phone">
                </div>
                <div class="mt-3">
                    <label for="">Team Position</label>
                    <input type="text" value="{{ $team->position }}" class="form-control" name="position">
                </div>
                <div class="mt-3">
                    <label for="">Team Description</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $team->description }}</textarea>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
