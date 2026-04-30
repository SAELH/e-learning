@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <h2 class="fw-bold">Popular Courses</h2>
                    <p class="text-muted">Hand-picked by our education experts</p>
                </div>
                <a href="#" class="btn btn-outline-primary mb-3">View All</a>
            </div>
            <div class="row g-4">
                @foreach($courses as $course)
                <div class="col-md-4">
                    <div class="card course-card h-100">
                        <img src="{{ \Storage::url($course->thumbnail) }}" class="card-img-top p-2 rounded-4" alt="Web Dev">
                        <div class="card-body">
                            <span class="badge bg-soft-primary text-primary mb-2" style="background: #e0e7ff;">{{ $course->category }}</span>
                            <h5 class="card-title fw-bold">{{ $course->name }}</h5>
                            <p class="card-text text-muted small">{{ $course->description }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fw-bold text-primary">{{ $course->price }}</span>
                                <span class="text-warning small">★ 4.9 (2k reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection