<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Academy | Create Your Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #6366f1;
            --accent: #a855f7;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: radial-gradient(circle at top left, #f3e8ff, transparent),
                        radial-gradient(circle at bottom right, #e0e7ff, transparent),
                        #f8fafc;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 0;
        }

        .shape {
            position: absolute;
            filter: blur(80px);
            z-index: -1;
            border-radius: 50%;
        }
        .shape-1 { width: 400px; height: 400px; background: rgba(168, 85, 247, 0.15); top: -10%; right: -5%; }
        .shape-2 { width: 350px; height: 350px; background: rgba(99, 102, 241, 0.15); bottom: -10%; left: -5%; }

        .signup-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 30px;
            padding: 3rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .logo-text {
            font-weight: 800;
            font-size: 1.5rem;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration: none;
        }

        .role-selector .btn-check:checked + .btn {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .role-selector .btn {
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            padding: 10px;
            font-weight: 600;
            color: #64748b;
        }

        .form-control {
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            padding: 12px 16px;
            transition: all 0.2s;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border: none;
            padding: 14px;
            border-radius: 12px;
            font-weight: 700;
            transition: transform 0.2s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #94a3b8;
            font-size: 0.75rem;
            margin: 1.5rem 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .divider::before, .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e2e8f0;
        }
        .divider span { padding: 0 10px; }
    </style>
</head>
<body>

    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex flex-column align-items-center">
                
                <div class="card signup-card">
                    <div class="text-center mb-4">
                        <h3 class="fw-800 text-dark">Create Account</h3>
                        <p class="text-muted">Join thousands of students worldwide.</p>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('store_employee') }}">
                        @csrf
                        <div class="row g-3 mb-3">
                            <label class="form-label">Username</label>
                            <input name="name" type="text" class="form-control" placeholder="Alex">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input name="email" type="email" class="form-control" placeholder="alex@example.com">
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label">Create Password</label>
                            <input name="password" type="password" class="form-control" placeholder="••••••••">
                            <small class="text-muted mt-1 d-block" style="font-size: 0.7rem;">Use 8+ characters with a mix of letters & numbers.</small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Confirm Password</label>
                            <input name="password_confirmation" type="password" class="form-control" placeholder="••••••••">
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-4">Start Your Journey</button>

                        <div class="divider"><span>Or sign up with</span></div>

                        <div class="d-flex gap-2 mb-4">
                            <button type="button" class="btn border w-100 rounded-3 py-2 fw-semibold small">
                                <i class="bi bi-google me-2"></i>Google
                            </button>
                            <button type="button" class="btn border w-100 rounded-3 py-2 fw-semibold small">
                                <i class="bi bi-apple me-2"></i>Apple
                            </button>
                        </div>
                    </form>

                    <p class="text-center small text-muted mb-0">
                        Already have an account? <a href="{{ route('login') }}" class="text-primary fw-bold text-decoration-none">Sign In</a>
                    </p>
                </div>

                <div class="mt-4 text-center">
                    <p class="small text-muted">By signing up, you agree to our <a href="#" class="text-dark">Terms</a> and <a href="#" class="text-dark">Privacy</a>.</p>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>