<header>
     <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</header>
<!-- NAVBAR -->

  <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">WinterLan Academy</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <!-- <li class="nav-item"><a class="nav-link" href="{{route('courses')}}">Courses</a></li> -->
                <li class="nav-item"><a class="nav-link" href="{{route('dashbord')}}">Dashboard</a></li>

                <li class="nav-item">
                    <button onclick="toggleDarkMode()" class="btn btn-outline-primary btn-sm me-2">
                        🌙
                    </button>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>

            </ul>
        </div>
    </div>
</nav>
