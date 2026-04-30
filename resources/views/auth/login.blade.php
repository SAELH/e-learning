<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Academy | Login</title>
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
            background: radial-gradient(circle at top right, #e0e7ff, transparent),
                        radial-gradient(circle at bottom left, #f3e8ff, transparent),
                        #f8fafc;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Animated background shapes for a modern feel */
        .shape {
            position: absolute;
            filter: blur(80px);
            z-index: -1;
            border-radius: 50%;
        }
        .shape-1 { width: 300px; height: 300px; background: rgba(99, 102, 241, 0.2); top: 10%; left: 15%; }
        .shape-2 { width: 250px; height: 250px; background: rgba(168, 85, 247, 0.2); bottom: 10%; right: 15%; }

        .login-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 440px;
        }

        .logo-text {
            font-weight: 800;
            font-size: 1.5rem;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration: none;
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #475569;
            margin-bottom: 8px;
        }

        .form-control {
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            padding: 12px 16px;
            background: white;
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
            letter-spacing: 0.5px;
            transition: transform 0.2s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3);
        }

        .btn-social {
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            padding: 10px;
            font-weight: 600;
            color: #1e293b;
            transition: background 0.2s;
        }

        .btn-social:hover { background: #f8fafc; }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #94a3b8;
            font-size: 0.8rem;
            margin: 1.5rem 0;
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

    <!-- Decorative background elements -->
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex flex-column align-items-center">
                
                <div class="card login-card">
                    <div class="text-center mb-4">
                        <h3 class="fw-800 text-dark">Welcome back</h3>
                        <p class="text-muted">Start learning something new today.</p>
                    </div>

                    <div class="d-flex gap-2">
                        <button class="btn btn-social w-100 d-flex align-items-center justify-content-center">
                            <i class="bi bi-google me-2"></i> Google
                        </button>
                        <button class="btn btn-social w-100 d-flex align-items-center justify-content-center">
                            <i class="bi bi-apple me-2"></i> Apple
                        </button>
                    </div>

                    <div class="divider"><span>OR CONTINUE WITH EMAIL</span></div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input name="email" type="email" class="form-control" placeholder="alex@example.com">
                        </div>
                        
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-label">Password</label>
                                <a href="#" class="text-primary small fw-semibold text-decoration-none mb-2">Forgot?</a>
                            </div>
                            <div class="input-group">
                                <input name="password" type="password" class="form-control" placeholder="••••••••">
                            </div>
                        </div>

                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label small text-muted" for="remember">Remember this device</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>
                    </form>

                    <p class="text-center small text-muted mb-0">
                        New here? <a href="{{ route('register') }}" class="text-primary fw-bold text-decoration-none">Create an account</a>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>