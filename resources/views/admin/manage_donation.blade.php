@extends('layouts.admin_layout')

@section('content')
    <div>
        <div>
            <h3><i class="fas fa-hand-holding-heart"></i> Manage Donation</h3>
        </div>
        <div class="table-responsive mt-4">
            <table class="table">
                <thead>
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @php $rowNumber = 1 @endphp
                    @foreach ($donates as $donate)
                        <tr>
                            <th scope="row">{{ $rowNumber++ }}</th>
                            <td>{{ $donate->name }}</td>
                            <td>{{ $donate->email }}</td>
                            <td>{{ $donate->phone }}</td>
                            <td>{{ $donate->amount }}</td>
                            <td>
                                @if ($donate->payment_status == 0)
                                    <h6 class="text-danger fw-bold">Pending......</h6>
                                @elseif ($donate->payment_status == 1)
                                    <h6 class="text-success fw-bold">Approved</h6>
                                @endif
                            </td>
                            <td class="d-flex flex-row justify-center align-items-center gap-3">
                                <a href="{{route('donation_details', $donate->id)}}">
                                    <button class="btn btn-primary">View Information</button>
                                </a>
                                @if ($donate->payment_status == 0)
                                <a href="{{route('approve', $donate->id)}}" onclick="return confirm('Are you sure you want to Approve this Payment???')">
                                    <button class="btn btn-success">Approve Payment</button>
                                </a>
                                @elseif ($donate->payment_status == 1)
                                <a href="{{route('unapprove', $donate->id)}}" onclick="return confirm('Are you sure you want to Unapprove this Payment???')">
                                    <button class="btn btn-danger">UnApprove Payment</button>
                                </a>
                                @endif
                                <a href="{{route('delete_donation', $donate->id)}}" onclick="return confirm('Are you sure you want to Delete this Donation???')">
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
