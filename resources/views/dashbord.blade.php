@extends('layout.app')
@section('content')
<div class="container mt-5 pt-5">
    <h3 class="fw-bold mb-4">Your Dashboard</h3>

    <div class="dashboard-box mb-4 text-dark">
        <h5>Your Profile</h5>
        <p>Name: Nawras Ali</p>
        <p>Email: nawras@gmail.com</p>
        <button class="btn btn-outline-primary">Edit Profile</button>
    </div>

    <div class="dashboard-box text-dark">
        <h5>Your Courses</h5>
        <p>English – 40% complete</p>
        <div class="progress mb-3"><div class="progress-bar" style="width:40%"></div></div>

        <p>Japanese – 10% complete</p>
        <div class="progress mb-3"><div class="progress-bar bg-success" style="width:10%"></div></div>
    </div>
</div>
@endsection