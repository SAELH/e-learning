@extends('layouts.sidebar')

@section('content')
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-xl-8 col-lg-10 mx-auto">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="fw-bold mb-0">Edit Course</h2>
                <button class="btn btn-outline-secondary btn-sm">Save as Draft</button>
            </div>

            <form action="{{ route('update_course', ['id' => $course->id]) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-header bg-transparent border-bottom p-4">
                        <h5 class="mb-0 fw-bold">Basic Information</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Course Title</label>
                            <input type="text" class="form-control form-control-lg border-2" name="name" value="{{ $course->name }}" required>
                            @error('name')
                                <div class="invalid-feedbaCK "><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Category</label>
                                <select class="form-select border-2" name="category">
                                    <option value="Development" {{ $course->category == 'Development' ? 'selected' : '' }}>Development</option>
                                    <option value="Design" {{ $course->category == 'Design' ? 'selected' : '' }}>Design</option>
                                    <option value="Business" {{ $course->category == 'Business' ? 'selected' : '' }}>Business</option>
                                </select>
                                @error('category')
                                    <div class="invalid-feedbaCK "><span class="text-danger">{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Level</label>
                                <select class="form-select border-2" name="level">
                                    <option value="Beginner" {{ $course->level == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                                    <option value="Intermediate" {{ $course->level == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                    <option value="Expert" {{ $course->level == 'Expert' ? 'selected' : '' }}>Expert</option>
                                </select>
                                @error('level')
                                    <div class="invalid-feedbaCK "><span class="text-danger">{{ $message }}</span></div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="form-label fw-semibold">Short Description</label>
                            <textarea class="form-control border-2" rows="3" name="description">{{ $course->description }}</textarea>
                            @error('description')
                                <div class="invalid-feedbaCK "><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row g-4 mb-4">
                    <div class="col-md-7">
                        <div class="card border-0 shadow-sm rounded-4 h-100">
                            <div class="card-header bg-transparent border-bottom p-4">
                                <h5 class="mb-0 fw-bold">Course Thumbnail</h5>
                            </div>
                            <div class="card-body p-4 text-center">
                                <div class="border border-2 border-dashed rounded-4 p-5 bg-light mb-3">
                                    <i class="bi bi-cloud-arrow-up display-4 text-primary"></i>
                                    <p class="mt-2 mb-0">Drag & drop your image here</p>
                                    <small class="text-muted">High-res (1280x720) JPG or PNG</small>
                                </div>
                                <input name="thumbnail" type="file" class="form-control" id="courseThumbnail" value="{{ $course->thumbnail }}" accept=".jpg, .jpeg, .png">
                                @error('thumbnail')
                                    <div class="invalid-feedbaCK "><span class="text-danger">{{ $message }}</span></div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card border-0 shadow-sm rounded-4 h-100">
                            <div class="card-header bg-transparent border-bottom p-4">
                                <h5 class="mb-0 fw-bold">Pricing</h5>
                            </div>
                            <div class="card-body p-4">
                                <label class="form-label fw-semibold">Course Price ($)</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text border-2">$</span>
                                    <input name="price" type="number" class="form-control border-2" value="{{ $course->price }}">
                                </div>
                                <div class="form-check form-switch mt-3">
                                    <input class="form-check-input" type="checkbox" id="freeCourse">
                                    <label class="form-check-label" for="freeCourse">This is a free course</label>
                                    @error('price')
                                        <div class="invalid-feedbaCK "><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-3 mb-5">
                    <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill shadow">Edit Course</button>
                    <button type="button" class="btn btn-light btn-lg px-5 rounded-pill">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection