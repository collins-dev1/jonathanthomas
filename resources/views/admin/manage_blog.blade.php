@extends('layouts.admin_layout')

@section('content')
 <div>
        <div>
            <h3><i class="fas fa-blog"></i>  Manage Blog</h3>
        </div>
        <div class="table-responsive mt-4">
            <table class="table">
                <thead>
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Blog Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @php $rowNumber = 1 @endphp
                    @foreach ($blogs as $blog)
                        <tr>
                            <th scope="row">{{ $rowNumber++ }}</th>
                            <td>
                                    <img src="{{ asset('storage/blogs/' . $blog->photo) }}" alt="Blog Image"
                                        style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                            </td>
                            <td>{{ $blog->title }}</td>
                            <td >
                                <a href="{{route('view_blog', $blog->id)}}">
                                    <button class="btn btn-info">View Information</button>
                                </a>
                                <a href="{{route('edit_blog', $blog->id)}}" onclick="return confirm('Are you sure you want to edit this blog???')">
                                    <button class="btn btn-success">Edit Blog</button>
                                </a>
                                <a href="{{route('delete_blog', $blog->id)}}" onclick="return confirm('Are you sure you want to delete this Blog???')">
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

