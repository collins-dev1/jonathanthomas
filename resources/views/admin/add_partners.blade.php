@extends('layouts.admin_layout')

@section('content')
<div>
    <div>
        <h3> <i class="fas fa-handshake"></i> Add Partner</h3>
    </div>
    <div class="mt-4">
        <form action="{{route('create_partner')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Partner Name</label>
                <input type="text" class="form-control" placeholder="Enter Partner Name" name="name">
            </div>
            <div class="mt-3">
                <label for="">Upload Partner Logo</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
