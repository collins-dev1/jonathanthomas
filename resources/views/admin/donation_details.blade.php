@extends('layouts.admin_layout')

@section('content')
<div>
    <div>
        <h3>
            <a href="{{route('manage_donation')}}"><i class="fas fa-chevron-left dropdown-arrow"></i></a>
            <i class="fas fa-hand-holding-heart"></i> Donation Details</h3>
    </div>
    <div class="mt-4">
        <div>
            <label for="">Full Name</label>
            <input type="text" value="{{$donate->name}}" class="form-control" readonly>
        </div>
        <div class="mt-3">
            <label for="">Email Address</label>
            <input type="text" value="{{$donate->email}}" class="form-control" readonly>
        </div>
         <div class="mt-3">
            <label for="">Phone Number</label>
            <input type="text" value="{{$donate->phone}}" class="form-control" readonly>
        </div>
         <div class="mt-3">
            <label for="">Home Address</label>
            <input type="text" value="{{$donate->address}}" class="form-control" readonly>
        </div>
         <div class="mt-3">
            <label for="">Amount</label>
            <input type="text" value="{{$donate->amount}}" class="form-control" readonly>
        </div>
        <div class="mt-3">
            <label for="">Payment Status</label>
            @if ($donate->payment_status == 0)
            <h5 class="text-danger fw-bold">Pending .....</h5>
            @elseif ($donate->payment_status == 1)
            <h5 class="text-success fw-bold">Approved</h5>
            @endif
        </div>
         <div class="mt-3">
            <label for="">Purpose</label>
            <textarea name="" class="form-control" readonly id="" cols="30" rows="10">{{$donate->purpose}}</textarea>
        </div>
    </div>
</div>
@endsection
