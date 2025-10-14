@extends('layouts.admin_layout')

@section('content')
<div>
    <div>
        <h3><i class="fas fa-quote-left"></i> Create Testimony</h3>
    </div>
    <div class="mt-4">
        <form action="{{route('create_testimony')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter Full Name" name="name">
            </div>
            <div class="mt-3">
                <label for="">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter Email Address" name="email">
            </div>
            <div class="mt-3">
                <label for="">Message</label>
                <textarea name="message" class="form-control" placeholder="Enter Message" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="mt-3">
                <label for="">Upload Person Photo</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
