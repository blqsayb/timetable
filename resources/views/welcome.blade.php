<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Timetable System') }}</title>

    <!-- Google Font: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --purple-50: #f5f3ff;
            --purple-100: #ede9fe;
            --purple-200: #ddd6fe;
            --purple-600: #7c3aed;
            --purple-700: #6d28d9;
            --purple-800: #5b21b6;
            --slate-50: #f8fafc;
            --slate-100: #f1f5f9;
            --slate-200: #e2e8f0;
            --slate-500: #64748b;
            --slate-700: #334155;
            --slate-900: #0f172a;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--slate-50);
            color: var(--slate-700);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            letter-spacing: -0.011em;
            -webkit-font-smoothing: antialiased;
        }

        .landing-nav {
            background: #ffffff;
            border-bottom: 1px solid var(--slate-200);
            padding: 0.85rem 1.5rem;
        }

        .brand-badge {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            background: var(--purple-700);
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.82rem;
            font-weight: 700;
        }

        .landing-card {
            background: #ffffff;
            border: 1px solid var(--slate-200);
            border-radius: 10px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.04);
            padding: 3rem 2.5rem;
            max-width: 580px;
            width: 100%;
            margin: auto;
            text-align: center;
        }

        .btn-purple {
            background: var(--purple-700);
            border: 1px solid var(--purple-700);
            color: #ffffff;
            font-weight: 500;
            padding: 9px 20px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all .15s ease;
        }
        .btn-purple:hover {
            background: var(--purple-800);
            border-color: var(--purple-800);
            color: #ffffff;
        }

        .btn-outline-minimal {
            background: #ffffff;
            border: 1px solid var(--slate-200);
            color: var(--slate-700);
            font-weight: 500;
            padding: 9px 20px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all .15s ease;
        }
        .btn-outline-minimal:hover {
            background: var(--slate-100);
            color: var(--slate-900);
        }
    </style>
</head>
<body>
    <!-- <nav class="landing-nav">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
                <span class="brand-badge">TT</span>
                <span class="fw-semibold text-dark">Timetable System</span>
            </div>
            <div>
                @auth
                    <a href="{{ url('/home') }}" class="btn-purple btn-sm">
                        <i class="fas fa-chart-pie"></i> Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn-outline-minimal btn-sm me-2">
                        Sign In
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-purple btn-sm">
                            Register
                        </a>
                    @endif 
                @endauth
            </div>
        </div> 
    </nav> -->

    <div class="container d-flex flex-1 my-auto py-5">
        <div class="landing-card">
            <div class="mb-4">
                <div class="brand-badge mx-auto mb-3" style="width: 48px; height: 48px; font-size: 1.15rem; border-radius: 10px;">TM</div>
                <h1 class="fw-bold text-dark mb-2" style="font-size: 1.6rem; letter-spacing: -0.02em;">Timetable Management</h1>
                <p class="text-muted small mb-0">Coordinate academic schedules, venues, student cohorts, and course lecturers with a clean, unified workspace.</p>
            </div>

            <div class="d-flex justify-content-center gap-2 pt-2">
                @auth
                    <a href="{{ url('/home') }}" class="btn-purple">
                        Open Dashboard <i class="fas fa-arrow-right"></i>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn-purple">
                        Sign In <i class="fas fa-arrow-right"></i>
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-outline-minimal">
                            Create Account
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </div>

    <footer class="text-center py-3 border-top bg-white text-muted small">
        &copy; {{ date('Y') }} <b>Timetable System</b>. All rights reserved.
    </footer>
</body>
</html>
