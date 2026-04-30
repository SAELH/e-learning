<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Academy | Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 280px;
            --primary-color: #6366f1;
        }

        body { background-color: #f8f9fa; overflow-x: hidden; }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #ffffff;
            border-right: 1px solid #e5e7eb;
            z-index: 1000;
            transition: all 0.3s;
        }

        .sidebar .nav-link {
            color: #4b5563;
            padding: 12px 20px;
            border-radius: 8px;
            margin: 4px 15px;
            display: flex;
            align-items: center;
        }

        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: #f3f4ff;
            color: var(--primary-color);
        }

        .sidebar .nav-link i { margin-right: 12px; font-size: 1.2rem; }

        /* Main Content Adjustment */
        .main-wrapper {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Footer Adjustments */
        footer { margin-top: auto; background: #fff; border-top: 1px solid #e5e7eb; padding: 30px 0; }

        /* Mobile Responsive */
        @media (max-width: 991.98px) {
            .sidebar { transform: translateX(-100%); }
            .sidebar.show { transform: translateX(0); }
            .main-wrapper { margin-left: 0; }
        }
    </style>
</head>
<body>

    <aside class="sidebar d-flex flex-column" id="sidebarMenu">
        <div class="p-4">
            <a class="navbar-brand fw-bold text-primary fs-3" href="#">Laravel<span class="text-dark"> Academy</span></a>
        </div>
        
        <ul class="nav flex-column flex-grow-1">
            <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link active"><i class="bi bi-grid"></i> Dashboard</a></li>
            <li class="nav-item"><a href="{{ route('dashboard.courses') }}" class="nav-link"><i class="bi bi-book"></i>Courses</a></li>
            <li class="nav-item"><a href="{{ route('dashboard.assignments') }}" class="nav-link"><i class="bi bi-journal-bookmark"></i> Assignments</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-chat-dots"></i> Messages</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-trophy"></i> Certificates</a></li>
            <hr class="mx-3">
            <li class="nav-item"><a href="#" class="nav-link"><i class="bi bi-gear"></i> Settings</a></li>
            <li class="nav-item"><a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
            <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
            </form>
        </ul>

        <div class="p-3 border-top">
            <div class="d-flex align-items-center">
                <img src="https://ui-avatars.com/api/?name=Alex+Smith&background=6366f1&color=fff" class="rounded-circle me-2" width="40" alt="Profile">
                <div>
                    <p class="mb-0 small fw-bold">Alex Smith</p>
                    <a href="#" class="text-muted small text-decoration-none">Logout</a>
                </div>
            </div>
        </div>
    </aside>

    <div class="main-wrapper">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3">
            <div class="container-fluid px-4">
                <button class="btn btn-outline-primary d-lg-none me-3" id="mobileToggle">
                    <i class="bi bi-list"></i>
                </button>
                
                <form class="d-none d-md-flex w-50">
                    <input class="form-control me-2 rounded-pill bg-light border-0" type="search" placeholder="Search for lessons..." aria-label="Search">
                </form>

                <div class="ms-auto d-flex align-items-center">
                    <button class="btn position-relative me-3">
                        <i class="bi bi-bell fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                    </button>
                    <button class="btn btn-primary rounded-pill px-4">Upgrade to Pro</button>
                </div>
            </div>
        </nav>

        <main class="p-4 container-fluid">
            @yield('content')
        </main>

        <footer>
            <div class="container-fluid px-4">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="small text-muted mb-0">&copy; 2026 Laravel Academy. Made with ❤️ for students.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="#" class="small text-muted me-3">Support</a>
                        <a href="#" class="small text-muted me-3">Privacy</a>
                        <a href="#" class="small text-muted">Terms</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        const mobileToggle = document.getElementById('mobileToggle');
        const sidebar = document.getElementById('sidebarMenu');

        mobileToggle.addEventListener('click', () => {
            sidebar.classList.toggle('show');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 992 && !sidebar.contains(e.target) && !mobileToggle.contains(e.target)) {
                sidebar.classList.remove('show');
            }
        });
    </script>
</body>
</html>