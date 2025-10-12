@extends('layouts.admin_layout')

@section('content')
<div>
    <div>
        <h3><i class="fas fa-users"></i> Create Team</h3>
    </div>
    <div class="mt-4">
        <form action="{{route('create_team')}}" method="POST" enctype="multipart/form-data">
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
                <label for="">Phone Number</label>
                <input type="tel" class="form-control" placeholder="Enter Phone Number" name="phone">
            </div>
            <div class="mt-3">
                <label for="">Team Position</label>
                <input type="text" class="form-control" placeholder="Enter Team Position" name="position">
            </div>
            <div class="mt-3">
                <label for="">Team Description</label>
                <textarea name="description" class="form-control" placeholder="Enter Team Description" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="mt-3">
                <label for="">Upload Team Photo</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
