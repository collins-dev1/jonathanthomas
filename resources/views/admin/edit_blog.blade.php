@extends('layouts.admin_layout')

@section('content')
    <div>
        <div>
            <h3>
                <a href="{{ route('manage_team') }}"><i class="fas fa-chevron-left dropdown-arrow"></i></a>
                <i class="fas fa-blog"></i> Edit and Update Blog
            </h3>
        </div>
        <form action="{{route('update_blog', $blog->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-4">
                <div>
                    <label for="">Current Photo</label>

                    <div class="mt-3">
                        <img src="{{ asset('storage/blogs/' . $blog->photo) }}" alt="Team Image"
                            style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">

                    </div>
                </div>
                <div class="mt-3">
                    <label for="">Update Photo (if neccessary)</label>
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="mt-3">
                    <label for="">Blog Title</label>
                    <input type="text" value="{{ $blog->title }}" class="form-control" name="title">
                </div>
                <div class="mt-3">
                    <label for="">Blog Description</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $blog->description }}</textarea>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
