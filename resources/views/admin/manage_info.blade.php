@extends('layouts.admin_layout')

@section('content')
 <div>
        <div>
            <h3><i class="fas fa-address-book"></i> Contact Informations</h3>
        </div>
        <div class="table-responsive mt-4">
            <table class="table">
                <thead>
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @php $rowNumber = 1 @endphp
                    @foreach ($infos as $info)
                        <tr>
                            <th scope="row">{{ $rowNumber++ }}</th>
                            <td>
                                    {{$info->name}}
                            </td>
                            <td>{{ $info->email }}</td>
                            <td>
                                {{$info->phone}}
                            </td>
                            <td>
                                <a href="{{route('view_information', $info->id)}}">
                                    <button class="btn btn-success">View Information</button>
                                </a>
                                <a href="{{route('delete_information', $info->id)}}" onclick="return confirm('Are you sure you want to delete this Information???')">
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

