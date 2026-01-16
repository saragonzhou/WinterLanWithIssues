  <!-- Bootstrap CSS -->
   <header>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</header>
@extends('layout.app')
@section('content')
<body>
    
<div class="signup-box w-50 ">
    <h3 class="text-center mb-3">Create Your Account</h3>
    <p class="text-center text-muted">Start learning languages today</p>

    <form class ="form m-5 p-5" method="POST" action="/signup">
@csrf>
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" placeholder="Enter your full name">
        </div>

        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" placeholder="example@mail.com">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Create a password">
        </div>

        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm password">
        </div>

        <button class="btn btn-primary w-100 mt-3" href="{{route('index')}}">Sign Up</a></button>

        <p class="text-center mt-3">
            Already have an account? <a href="{{route('login')}}">Login</a>
        </p>
    </form>
</div>


</body>
@endsection