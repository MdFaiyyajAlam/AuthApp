@extends('base')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-lg border-0">
                <div class="card-header text-center bg-primary text-white">
                    <h4 class="mb-0">User Profile</h4>
                </div>
                <div class="card-body text-center">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle mb-3" width="150">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="text-muted mb-4">Software Developer</p>
                    <div class="list-group list-group-flush text-start">
                        <p class="list-group-item"><strong>Email:</strong> {{ $user->email }}</p>
                        <p class="list-group-item"><strong>Phone:</strong> +123 456 7890</p>
                        <p class="list-group-item"><strong>Address:</strong> 123 Main Street, New York, NY</p>
                        <p class="list-group-item"><strong>Age:</strong> 29</p>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-primary me-2">Edit Profile</button>
                        <button class="btn btn-outline-danger">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
