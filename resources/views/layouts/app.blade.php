<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            min-height: 100vh;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="#">WinterLan Academy</a>
    <span class="text-white">Admin Panel</span>
</nav>


<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
    <ul class="nav flex-column gap-1">

    <!-- Dashboard -->
    <li class="nav-item">
        <a href="#" class="nav-link text-info fw-semibold">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
        </a>
    </li>

    <!-- Students Dropdown -->
    <li class="nav-item">
        <a class="nav-link text-info fw-semibold d-flex justify-content-between align-items-center"
           data-bs-toggle="collapse"
           href="#studentsMenu"
           role="button">
            <span>
                <i class="bi bi-people me-2"></i> Students
            </span>
            <i class="bi bi-chevron-down small"></i>
        </a>

        <div class="collapse ps-4" id="studentsMenu">
            <a href="#" class="nav-link text-light small">
                <i class="bi bi-person-plus me-2"></i> Add Student
            </a>
            <a href="#" class="nav-link text-light small">
                <i class="bi bi-list-ul me-2"></i> Students List
            </a>
        </div>
    </li>

    <!-- Courses Dropdown -->
    <li class="nav-item">
        <a class="nav-link text-info fw-semibold d-flex justify-content-between align-items-center"
           data-bs-toggle="collapse"
           href="#coursesMenu"
           role="button">
            <span>
                <i class="bi bi-journal-text me-2"></i> Courses
            </span>
            <i class="bi bi-chevron-down small"></i>
        </a>

        <div class="collapse ps-4" id="coursesMenu">
            <a href="#" class="nav-link text-light small">
                <i class="bi bi-translate me-2"></i> Arabic
            </a>
            <a href="#" class="nav-link text-light small">
                <i class="bi bi-globe me-2"></i> English
            </a>
            <a href="#" class="nav-link text-light small">
                <i class="bi bi-flag me-2"></i> Italian
            </a>
        </div>
    </li>

    <!-- Teachers Dropdown -->
    <li class="nav-item">
        <a class="nav-link text-info fw-semibold d-flex justify-content-between align-items-center"
           data-bs-toggle="collapse"
           href="#teachersMenu"
           role="button">
            <span>
                <i class="bi bi-person-video3 me-2"></i> Teachers
            </span>
            <i class="bi bi-chevron-down small"></i>
        </a>

        <div class="collapse ps-4" id="teachersMenu">
            <a href="#" class="nav-link text-light small">
                <i class="bi bi-person-plus me-2"></i> Add Teacher
            </a>
            <a href="#" class="nav-link text-light small">
                <i class="bi bi-list-ul me-2"></i> Teachers List
            </a>
        </div>
    </li>

    <!-- Settings -->
    <li class="nav-item mt-2">
        <a href="#" class="nav-link text-info fw-semibold">
            <i class="bi bi-gear me-2"></i> Settings
        </a>
    </li>

</ul>



        <!-- Content -->
        <div class="col-md-10 p-4">
            @yield('content')
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


