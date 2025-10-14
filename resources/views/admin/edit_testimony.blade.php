@extends('layouts.admin_layout')

@section('content')
    <div>
        <div>
            <h3>
                <a href="{{ route('manage_testimony') }}"><i class="fas fa-chevron-left dropdown-arrow"></i></a>
                <i class="fas fa-quote-left"></i> Edit and Update Testimony
            </h3>
        </div>
        <form action="{{route('update_testimony', $testimony->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-4">
                <div>
                    <label for="">Current Photo</label>

                    <div class="mt-3">
                        @if ($testimony->photo == null)
                        <i class="fas fa-user"></i>
                    @else
                        <img src="{{ asset('storage/testimonies/' . $testimony->photo) }}" alt="Testimony Image"
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
                    <input type="text" value="{{ $testimony->name }}" class="form-control" name="name">
                </div>
                <div class="mt-3">
                    <label for="">Email Address</label>
                    <input type="text" value="{{ $testimony->email }}" class="form-control" name="email">
                </div>
                <div class="mt-3">
                    <label for="">Message</label>
                    <textarea name="message" class="form-control" id="" cols="30" rows="10">{{ $testimony->message }}</textarea>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
