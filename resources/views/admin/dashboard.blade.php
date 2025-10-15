@extends('layouts.admin_layout')

@section('content')
<!-- Stats Cards -->
        <div class="stats-cards">
            <div class="card stats-card">
                <div class="stats-icon blue">
                    <i class="fas fa-hand-holding-heart"></i>
                </div>
                <div class="stats-info">
                    <h3 class="text-center">{{$donation}}</h3>
                    <p>Total Donation</p>
                </div>
            </div>
            <div class="card stats-card">
                <div class="stats-icon green">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stats-info">
                    <h3 class="text-center">{{$team}}</h3>
                    <p>Total Team</p>
                </div>
            </div>
            <div class="card stats-card">
                <div class="stats-icon purple">
                    <span class="text-success fw-bold">₦</span>

                </div>
                <div class="stats-info">
                    <h3 class="text-center">₦{{ number_format($totalApprovedDonations, 2) }}</h3>
                    <p>Total Approved Donations</p>
                </div>
            </div>
            <div class="card stats-card">
                <div class="stats-icon pink">
                    <i class="fas fa-blog"></i>
                </div>
                <div class="stats-info">
                    <h3 class="text-center">{{$blog}}</h3>
                    <p>Total Blog</p>
                </div>
            </div>
            <div class="card stats-card">
                <div class="stats-icon pink">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="stats-info">
                    <h3 class="text-center">{{$partner}}</h3>
                    <p>Total Partner</p>
                </div>
            </div>
            <div class="card stats-card">
                <div class="stats-icon pink">
                    <i class="fas fa-images"></i>
                </div>
                <div class="stats-info">
                    <h3 class="text-center">{{$gallery}}</h3>
                    <p>Total Partner</p>
                </div>
            </div>
            <div class="card stats-card">
                <div class="stats-icon pink">
                    <i class="fas fa-address-book"></i>
                </div>
                <div class="stats-info">
                    <h3 class="text-center">{{$info}}</h3>
                    <p>Total Contact Information</p>
                </div>
            </div>
        </div>
@endsection
