@extends('layouts.admin_layout')

@section('content')
    <div>
        <div>
            <h3>
                <a href="{{ route('manage_blog') }}"><i class="fas fa-chevron-left dropdown-arrow"></i></a>
                <i class="fas fa-blog"></i>  Blog Information
            </h3>
        </div>
        <div class="mt-4">
            <div>
                    <img src="{{ asset('storage/blogs/' . $blog->photo) }}" alt="Team Image"
                        style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">

            </div>
            <div class="mt-3">
                <label for="">Full Name</label>
                <input type="text" value="{{ $blog->title }}" class="form-control" readonly>
            </div>
            <div class="mt-3">
                <label for="">Blog Description</label>
                <textarea name="" class="form-control" readonly id="" cols="30" rows="10">{{ $blog->description }}</textarea>
            </div>
        </div>
    </div>
@endsection
