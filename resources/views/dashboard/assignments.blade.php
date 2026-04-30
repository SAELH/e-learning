@extends('layouts.sidebar')

@section('content')
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-xl-9 col-lg-11 mx-auto">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Courses</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Web Development</a></li>
                    <li class="breadcrumb-item active">New Assignment</li>
                </ol>
            </nav>
            
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="fw-bold mb-0">Create Assignment</h2>
                <div class="badge bg-soft-info text-primary p-2 px-3" style="background: #e0e7ff;">Draft Mode</div>
            </div>

            <form action="#" class="needs-validation" novalidate>
                <div class="row g-4">
                    
                    <div class="col-lg-8">
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-body p-4">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">Assignment Title</label>
                                    <input type="text" class="form-control border-2" placeholder="e.g. Build a Responsive Landing Page">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold">Instructions for Students</label>
                                    <textarea class="form-control border-2" rows="8" placeholder="Describe the task, requirements, and what you're looking for..."></textarea>
                                    <div class="form-text mt-2">
                                        <i class="bi bi-info-circle"></i> Be specific about the deliverables.
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <label class="form-label fw-bold">Reference Files (Optional)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control border-2" id="inputGroupFile02">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                    <small class="text-muted">Upload PDFs, ZIPs, or images students might need.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-header bg-transparent border-bottom p-3">
                                <h6 class="mb-0 fw-bold">Submission Settings</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Due Date</label>
                                    <input type="datetime-local" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Max Points</label>
                                    <input type="number" class="form-control" placeholder="100">
                                </div>
                                <div class="mb-0">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Submission Type</label>
                                    <select class="form-select">
                                        <option value="file">File Upload</option>
                                        <option value="link">URL / Link</option>
                                        <option value="text">Online Text</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-body">
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="lateSub">
                                    <label class="form-check-label fw-semibold" for="lateSub">Allow late submissions</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="notifications" checked>
                                    <label class="form-check-label fw-semibold" for="notifications">Notify students</label>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-bold">Create Assignment</button>
                                <button type="button" class="btn btn-link w-100 text-muted mt-2 text-decoration-none small">Discard</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection