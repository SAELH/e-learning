@extends('layouts.sidebar')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="fw-bold">Welcome back, {{ Auth::user()->name }}! 👋</h2>
            <p class="text-muted">You have completed 75% of your "UI/UX Design" course.</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm p-4 rounded-4 bg-primary text-white">
                <h3>Continue Learning</h3>
                <p class="opacity-75">Advanced Interaction Design - Module 4</p>
                <div class="progress bg-white bg-opacity-25 mt-3" style="height: 10px;">
                    <div class="progress-bar bg-white" style="width: 75%"></div>
                </div>
                <button class="btn btn-light mt-4 w-25 fw-bold text-primary">Resume</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 rounded-4 h-100">
                <h5 class="fw-bold">Study Time</h5>
                <p class="display-5 fw-bold mb-0">12.4 hrs</p>
                <span class="text-success small">↑ 15% from last week</span>
            </div>
        </div>
    </div>
@endsection