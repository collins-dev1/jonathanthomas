@extends('layouts.admin_layout')

@section('content')
<!-- Stats Cards -->
        <div class="stats-cards">
            <div class="card stats-card">
                <div class="stats-icon blue">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="stats-info">
                    <h3>1,254</h3>
                    <p>Total Orders</p>
                </div>
            </div>
            <div class="card stats-card">
                <div class="stats-icon green">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stats-info">
                    <h3>3,217</h3>
                    <p>Total Customers</p>
                </div>
            </div>
            <div class="card stats-card">
                <div class="stats-icon purple">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stats-info">
                    <h3>$9,254</h3>
                    <p>Total Revenue</p>
                </div>
            </div>
            <div class="card stats-card">
                <div class="stats-icon pink">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stats-info">
                    <h3>12.5%</h3>
                    <p>Growth Rate</p>
                </div>
            </div>
        </div>
@endsection
