@extends('layouts.admin_layout')

@section('content')
 <div>
        <div style="display: flex; flex-direction:row; justify-content:space-between; align-items:center">
            <h3><i class="fas fa-quote-left"></i> Manage Testimony</h3>
            <a href="{{route('add_testimony')}}">
                <button class="btn btn-success">Add More</button>
            </a>
        </div>
        <div class="table-responsive mt-4">
            <table class="table">
                <thead>
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @php $rowNumber = 1 @endphp
                    @foreach ($testimonies as $testimony)
                        <tr>
                            <th scope="row">{{ $rowNumber++ }}</th>
                            <td>
                                @if ($testimony->photo == null)
                                    <i class="fas fa-user"></i>
                                @else
                                    <img src="{{ asset('storage/testimonies/' . $testimony->photo) }}" alt="Team Image"
                                        style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                                @endif
                            </td>
                            <td>{{ $testimony->name }}</td>
                            <td>{{ $testimony->email }}</td>
                            <td >
                                <a href="{{route('view_testimony', $testimony->id)}}">
                                    <button class="btn btn-info">View Information</button>
                                </a>
                                <a href="{{route('edit_testimony', $testimony->id)}}" onclick="return confirm('Are you sure you want to edit this Testimony???')">
                                    <button class="btn btn-success">Edit</button>
                                </a>
                                <a href="{{route('delete_testimony', $testimony->id)}}" onclick="return confirm('Are you sure you want to delete this Testimony???')">
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
