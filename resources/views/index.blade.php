<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WinterLan Academy</title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        /* Winter Colors */
        body {
            background: #f5f9ff;
            font-family: 'Segoe UI', sans-serif;
            color: #1c2b3a;
        }

        .winter-bg {
            background: linear-gradient(135deg, #e3f2ff, #c7e1ff);
        }

        .navbar {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid #d7e6f5;
        }

        .navbar-brand {
            font-weight: 700;
            color: #0d3c66 !important;
        }

        .nav-link {
            color: #0d3c66 !important;
            font-weight: 500;
        }

        .hero {
            padding: 110px 0;
            background: url('https://images.unsplash.com/photo-1608889335943-568b042d4b6c?auto=format&fit=crop&w=1350')
                center/cover no-repeat;
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 35, 75, 0.55);
        }

        .hero-content {
            position: relative;
            color: #fff;
        }

        .course-card {
            border: none;
            border-radius: 12px;
            transition: 0.3s ease;
            background: #ffffff;
        }

        .course-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        footer {
            background: #0d3c66;
            color: #fff;
            padding: 35px 0;
        }
    </style>
</head>
@extends('layout.app')
@section('content')

<!-- HERO SECTION -->
<section class="hero text-center">
    <div class="container hero-content">
        <h1 class="display-4 fw-bold">Learn Languages the Smart & Modern Way</h1>
        <p class="lead">English • Chinese • Japanese • French • Italian • Arabic</p>
        <a href="#courses" class="btn btn-light btn-lg mt-3">Explore Courses</a>
    </div>
</section>


<!-- COURSE CATEGORIES -->
<section class="py-5" id="courses">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Language Categories</h2>

        <div class="row g-4">

            <!-- English -->
            <div class="col-md-4">
                <div class="card course-card p-4">
                    <h4>English</h4>
                    <p>Master global communication with modern English lessons.</p>
                </div>
            </div>

            <!-- Chinese -->
            <div class="col-md-4">
                <div class="card course-card p-4">
                    <h4>Chinese</h4>
                    <p>Learn Mandarin with easy visual lessons and audio practice.</p>
                </div>
            </div>

            <!-- Japanese -->
            <div class="col-md-4">
                <div class="card course-card p-4">
                    <h4>Japanese</h4>
                    <p>Study Hiragana, Katakana and Kanji effectively.</p>
                </div>
            </div>

            <!-- French -->
            <div class="col-md-4">
                <div class="card course-card p-4">
                    <h4>French</h4>
                    <p>Learn the language of love with interactive lessons.</p>
                </div>
            </div>

            <!-- Italian -->
            <div class="col-md-4">
                <div class="card course-card p-4">
                    <h4>Italian</h4>
                    <p>Discover beautiful Italian vocabulary and grammar.</p>
                </div>
            </div>

            <!-- Arabic -->
            <div class="col-md-4">
                <div class="card course-card p-4">
                    <h4>Arabic</h4>
                    <p>Master Arabic letters and pronunciation quickly.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

public function index()
{
    $posts = Post::all();
    return view('posts.index', compact('posts'));
}
