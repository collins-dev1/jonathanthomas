@extends('layouts.admin_layout')

@section('content')
<div>
    <div>
        <h3><i class="fas fa-blog"></i> Create Blog</h3>
    </div>
    <div class="mt-4">
        <form action="{{route('create_blog')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Blog Title</label>
                <input type="text" class="form-control" placeholder="Enter Blog Title" name="title">
            </div>
            <div class="mt-3">
                <label for="">Blog Description</label>
                <textarea name="description" class="form-control" placeholder="Enter Blog Description" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="mt-3">
                <label for="">Upload Team Photo</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
