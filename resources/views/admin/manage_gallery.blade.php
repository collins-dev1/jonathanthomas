@extends('layouts.admin_layout')

@section('content')
 <div>
        <div style="display: flex; flex-direction:row; justify-content:space-between; align-items:center">
            <h3><i class="fas fa-images"></i> Manage Gallery</h3>
            <a href="{{route('add_gallery')}}">
                <button class="btn btn-success">Add More</button>
            </a>
        </div>
        <div class="table-responsive mt-4">
            <table class="table">
                <thead>
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @php $rowNumber = 1 @endphp
                    @foreach ($gallerys as $gallery)
                        <tr>
                            <th scope="row">{{ $rowNumber++ }}</th>
                            <td>
                                    <img src="{{ asset('storage/gallerys/' . $gallery->photo) }}" alt="Partner Image"
                                        style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                            </td>
                            <td>
                                <a href="{{route('delete_gallery', $gallery->id)}}" onclick="return confirm('Are you sure you want to delete this Photo from Gallery Page???')">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

