@extends('layout.app')
@section('content')
<body>
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{('index')}}">WinterLan</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{('courses')}}">Courses</a></li>

                <li class="nav-item">
                    <button onclick="toggleDarkMode()" class="btn btn-outline-primary btn-sm me-2">
                        🌙
                    </button>
                </li>

                <li class="nav-item"><a class="btn btn-primary" href="{{('signup')}}">Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <div class="signup-box" style="width:420px;">
        <h3 class="text-center mb-3">Welcome Back</h3>
        <p class="text-center text-muted-light">Login to access your courses</p>

        <form method="POST" action="/login">
@csrf
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="example@mail.com">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="••••••">
            </div>

            <button  class="btn btn-primary w-100"  href="{{('index')}}"></a>Login</button>
        </form>

        <p class="text-center mt-3">
            Don’t have an account? <a href="{{('signup')}}">Sign Up</a>
        </p>
    </div>
</div>
</body>
@endsection