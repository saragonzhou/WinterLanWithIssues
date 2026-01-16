@extends('layout.app')
@section('content')
<div class="container mt-5 pt-5">
    <h2 class="fw-bold text-center mb-4">Available Language Courses</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="course-card">
                <h4>English</h4>
                <p>Beginner → Advanced levels</p>
                <a href="{{route('english')}}" class="btn btn-primary">Start Learning</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="course-card">
                <h4>Japanese</h4>
                <p>Hiragana, Katakana, Kanji</p>
                <a href="{{route('japnese')}}" class="btn btn-primary">Start Learning</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="course-card">
                <h4>Arabic</h4>
                <p>Letters, Grammar, Speaking</p>
                <a href="{{route('arabic')}}" class="btn btn-primary">Start Learning</a>
            </div>
        

</div>
<div class="container mt-5 pt-5">
    <h2 class="fw-bold text-center mb-4">Most learning Language Courses</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="course-card">
                <h4>English</h4>
                <p>Beginner → Advanced levels</p>
                <a href="{{route('english')}}" class="btn btn-primary">Start Learning</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="course-card">
                <h4>Chinese</h4>
                <p>Hanzi, Hanyu, Tones</p>
                <a href="{{route('chinese')}}" class="btn btn-primary">Start Learning</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="course-card">
                <h4>French</h4>
                <p>Letters, Grammar, Speaking</p>
                <a href="{{route('french')}}" class="btn btn-primary">Start Learning</a>
            </div>
        

</div>
<div class="container mt-5 pt-5">
    <h2 class="fw-bold text-center mb-4">Most Challanging Language Courses</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="course-card">
                <h4>Italian</h4>
                <p>Beginner → Advanced levels</p>
                <a href="{{route('italian')}}" class="btn btn-primary">Start Learning</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="course-card">
                <h4>Japanese</h4>
                <p>Hiragana, Katakana, Kanji</p>
                <a href="{{route('japnese')}}" class="btn btn-primary">Start Learning</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="course-card">
                <h4>Arabic</h4>
                <p>Letters, Grammar, Speaking</p>
                <a href="{{route('arabic')}}" class="btn btn-primary">Start Learning</a>
            </div>
        

</div>
<div class="container mt-5 pt-5">
    <h2 class="fw-bold text-center mb-4">Most Talked Language Courses</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="course-card">
                <h4>English</h4>
                <p>Beginner → Advanced levels</p>
                <a href="{{route('english')}}" class="btn btn-primary">Start Learning</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="course-card">
                <h4>Chinese</h4>
                <p>Hanzi, Hanyu, Tones</p>
                <a href="{{route('chinese')}}" class="btn btn-primary">Start Learning</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="course-card">
                <h4>Arabic</h4>
                <p>Letters, Grammar, Speaking</p>
                <a href="{{route('arabic')}}" class="btn btn-primary">Start Learning</a>
            </div>
        

</div>
@endsection