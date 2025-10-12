@extends('layouts.admin_layout')

@section('content')
<div>
    <div>
        <h3> <i class="fas fa-images"></i> Add Photo Gallery</h3>
    </div>
    <div class="mt-4">
        <form action="{{route('create_gallery')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-3">
                <label for="">Upload Gallery Photo</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
