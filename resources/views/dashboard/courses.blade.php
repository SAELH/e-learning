@extends('layouts.sidebar')

@section('content')
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-xl-8 col-lg-10 mx-auto">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="fw-bold mb-0">Create New Course</h2>
                <button class="btn btn-outline-secondary btn-sm">Save as Draft</button>
            </div>

            <form action="{{ route('add_course') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-header bg-transparent border-bottom p-4">
                        <h5 class="mb-0 fw-bold">Basic Information</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Course Title</label>
                            <input type="text" class="form-control form-control-lg border-2" name="name" placeholder="e.g. Advanced Laravel Patterns" required>
                            @error('name')
                                <div class="invalid-feedbaCK "><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Category</label>
                                <select class="form-select border-2" name="category">
                                    <option value="" selected>Select Category</option>
                                    <option value="Development">Development</option>
                                    <option value="Design">Design</option>
                                    <option value="Business">Business</option>
                                </select>
                                @error('category')
                                    <div class="invalid-feedbaCK "><span class="text-danger">{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Level</label>
                                <select class="form-select border-2" name="level">
                                    <option value="" selected>Select Level</option>
                                    <option value="beginner">Beginner</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="expert">Expert</option>
                                </select>
                                @error('level')
                                    <div class="invalid-feedbaCK "><span class="text-danger">{{ $message }}</span></div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="form-label fw-semibold">Short Description</label>
                            <textarea class="form-control border-2" rows="3" name="description" placeholder="A brief summary of what students will learn..."></textarea>
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
                                <input name="thumbnail" type="file" class="form-control" id="courseThumbnail">
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
                                    <input name="price" type="number" class="form-control border-2" placeholder="0.00">
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
                    <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill shadow">Publish Course</button>
                    <button type="button" class="btn btn-light btn-lg px-5 rounded-pill">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- COURSE LIST TABLE SECTION -->
<div class="row mt-5 mb-5">
    <div class="col-xl-8 col-lg-10 mx-auto">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-header bg-transparent border-bottom p-4 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-bold">Recently Added Courses</h5>
                <div class="input-group input-group-sm w-25">
                    <input type="text" class="form-control" placeholder="Search courses...">
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4 py-3 border-0">Course Name</th>
                                <th class="py-3 border-0">Category</th>
                                <th class="py-3 border-0">Level</th>
                                <th class="py-3 border-0">Price</th>
                                <th class="py-3 border-0 text-end pe-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td class="ps-4">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset($course->thumbnail) }}" class="rounded me-3" width="40" alt="">
                                        <div>
                                            <div class="fw-bold">{{ $course->name }}</div>
                                            <div class="small text-muted">0 Students</div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-light text-dark border">{{ $course->category }}</span></td>
                                <td><span class="badge bg-light text-dark border">{{ $course->level }}</span></td>
                                <td class="fw-semibold">{{ $course->price }}</td>
                                <td class="text-end pe-4">
                                    <button class="btn btn-sm btn-light border me-1" onclick="window.location='{{ route('edit_course', ['id' => $course->id]) }}'"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-light border text-danger" onclick="window.location='{{ route('delete_course', ['id' => $course->id]) }}'"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-transparent border-0 p-4">
                <nav class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Showing 3 of 12 courses</small>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection