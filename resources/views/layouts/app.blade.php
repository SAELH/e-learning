<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Academy</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .navbar { background: #fff; border-bottom: 1px solid #eee; }
        .hero-section { padding: 100px 0; background: linear-gradient(135deg, #6366f1 0%, #4338ca 100%); color: white; }
        .btn-primary { background-color: #6366f1; border: none; padding: 12px 25px; font-weight: 600; }
        .btn-primary:hover { background-color: #4f46e5; }
        .course-card { border: none; border-radius: 15px; transition: transform 0.3s ease; }
        .course-card:hover { transform: translateY(-10px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        footer { background: #1e293b; color: #cbd5e1; padding: 60px 0 20px; }
        footer h5 { color: white; font-weight: 700; margin-bottom: 20px; }
        footer a { color: #cbd5e1; text-decoration: none; transition: 0.3s; }
        footer a:hover { color: #6366f1; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top navbar-light">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">Laravel<span class="text-dark"> Academy</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mentors</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">For Business</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-link text-decoration-none text-dark me-3">Login</a>
                    <a href="#" class="btn btn-primary rounded-pill">Join for Free</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Master New Skills with Expert Mentors</h1>
                    <p class="lead mb-5 opacity-75">Access over 5,000+ courses in Design, Development, and Marketing. Start your 14-day free trial today.</p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-light btn-lg px-4 fw-bold">Explore Courses</button>
                        <button class="btn btn-outline-light btn-lg px-4">Watch Demo</button>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="https://fls-a1aaa998-e885-42d8-b2cf-f860e77f7be8.laravel.cloud/e-learning_laravel.png" alt="Learning" class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="text-primary">Laravel Academy</h5>
                    <p>The world's leading platform for online learning. </div>
                <div class="col-6 col-lg-2 mb-4">
                    <h5>Platform</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Browse Courses</a></li>
                        <li><a href="#">Subscription</a></li>
                        <li><a href="#">Certificates</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Join our Newsletter</h5>
                    <p class="small">Get latest updates on new courses and discounts.</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
            </div>
            <hr class="mt-5 border-secondary">
            <div class="text-center pt-3">
                <p class="small mb-0">&copy; 2026 Laravel Academy Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>