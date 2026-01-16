@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<h3 class="mb-4">WinterLan Academy Dashboard</h3>
<p class="text-muted">Language Learning Management System</p>


<!-- Cards -->
<div class="row mb-4">

    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5>Students</h5>
                <h3>320</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5>Arabic Courses</h5>
                <h3>6</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <h5>English Courses</h5>
                <h3>8</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-danger">
            <div class="card-body">
                <h5>Italian Courses</h5>
                <h3>4</h3>
            </div>
        </div>
    </div>

</div>


<!-- Table -->
<div class="card">
    <div class="card-header bg-dark text-white">
        Latest Students
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Language</th>
                    <th>Level</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ahmed Ali</td>
                    <td>Arabic</td>
                    <td>Beginner</td>
                    <td><span class="badge bg-success">Active</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Sarah John</td>
                    <td>English</td>
                    <td>Intermediate</td>
                    <td><span class="badge bg-success">Active</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Marco Rossi</td>
                    <td>Italian</td>
                    <td>Beginner</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
