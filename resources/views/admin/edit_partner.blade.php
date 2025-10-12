@extends('layouts.admin_layout')

@section('content')
<div>
    <div>
        <h3> <i class="fas fa-handshake"></i> Edit and Update Partner</h3>
    </div>
    <div class="mt-4">
        <form action="{{route('update_partner', $partner->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
             <div>
                    <label for="">Current Photo</label>

                    <div class="mt-3">
                        <img src="{{ asset('storage/partners/' . $partner->photo) }}" alt="Team Image"
                            style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">

                    </div>
                </div>
            <div class="mt-3">
                <label for="">Partner Name</label>
                <input type="text" class="form-control" value="{{$partner->name}}" placeholder="Enter Partner Name" name="name">
            </div>
            <div class="mt-3">
                <label for="">Upload Partner Logo</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
