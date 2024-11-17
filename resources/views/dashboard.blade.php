@extends('base')

@section('content')

<div class="row">
    <div class="content-header">
            <h1 class="text-center">Dashboard Overview </h1>
            <p class="text-center lead">Welcome to your dashboard {{ Auth::user()->name }}. Here you can manage everything.</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text">Manage and view registered users.</p>
                        <a href="#" class="btn btn-primary">View Users</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Reports</h5>
                        <p class="card-text">Check out detailed reports on activity.</p>
                        <a href="#" class="btn btn-primary">View Reports</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Settings</h5>
                        <p class="card-text">Update your account and application settings.</p>
                        <a href="#" class="btn btn-primary">Update Settings</a>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
