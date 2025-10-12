@extends('layouts.admin_layout')

@section('content')
 <div>
        <div>
            <h3><i class="fas fa-handshake"></i> Manage Partners</h3>
        </div>
        <div class="table-responsive mt-4">
            <table class="table">
                <thead>
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Partner Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @php $rowNumber = 1 @endphp
                    @foreach ($partners as $partner)
                        <tr>
                            <th scope="row">{{ $rowNumber++ }}</th>
                            <td>
                                    <img src="{{ asset('storage/partners/' . $partner->photo) }}" alt="Partner Image"
                                        style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                            </td>
                            <td>{{ $partner->name }}</td>
                            <td>
                                <a href="{{route('edit_partner', $partner->id)}}" onclick="return confirm('Are you sure you want to edit this Partner???')">
                                    <button class="btn btn-success">Edit Partner</button>
                                </a>
                                <a href="{{route('delete_partner', $partner->id)}}" onclick="return confirm('Are you sure you want to delete this Partner???')">
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

