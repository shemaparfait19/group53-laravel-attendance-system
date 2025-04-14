@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <h2>Dashboard</h2>
            <p class="text-muted">Welcome back, {{ Auth::user()->name }}</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Students</h5>
                    <p class="card-text">Manage student records, add new students, or update existing information.</p>
                    <a href="{{ route('students.index') }}" class="btn btn-primary">Manage Students</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Attendance</h5>
                    <p class="card-text">Record and manage daily attendance for all students.</p>
                    <a href="{{ route('attendance.index') }}" class="btn btn-primary">Manage Attendance</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Quick Record</h5>
                    <p class="card-text">Quickly record today's attendance for students.</p>
                    <a href="{{ route('attendance.create') }}" class="btn btn-success">Record Attendance</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 