<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Auth') | {{ config('app.name', 'Timetable System') }}</title>

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
            --slate-300: #cbd5e1;
            --slate-400: #94a3b8;
            --slate-500: #64748b;
            --slate-600: #475569;
            --slate-700: #334155;
            --slate-800: #1e293b;
            --slate-900: #0f172a;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
            background-color: var(--slate-50);
            color: var(--slate-700);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            letter-spacing: -0.011em;
            -webkit-font-smoothing: antialiased;
        }

        /* ===== NAVBAR ===== */
        .auth-navbar {
            background: #ffffff !important;
            border-bottom: 1px solid var(--slate-200) !important;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.03);
            padding: 0.75rem 1.25rem;
        }
        .auth-brand {
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--slate-900) !important;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none !important;
            letter-spacing: -0.02em;
        }
        .auth-brand-badge {
            width: 30px;
            height: 30px;
            border-radius: 6px;
            background: var(--purple-700);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 0.8rem;
            font-weight: 700;
        }
        .auth-nav-link {
            font-weight: 500;
            font-size: 0.84rem;
            color: var(--slate-600) !important;
            padding: 6px 14px !important;
            border-radius: 6px;
            transition: all .15s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .auth-nav-link:hover {
            background: var(--slate-100);
            color: var(--slate-900) !important;
        }
        .auth-nav-link.active {
            background: var(--purple-50) !important;
            color: var(--purple-700) !important;
            font-weight: 600;
            border: 1px solid var(--purple-100);
        }

        /* ===== MAIN CONTAINER ===== */
        main.auth-main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 16px;
        }

        /* ===== AUTH CARD ===== */
        .auth-card {
            background: #ffffff;
            border: 1px solid var(--slate-200);
            border-radius: 10px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.04), 0 1px 2px -1px rgba(0, 0, 0, 0.04);
            overflow: hidden;
        }
        .auth-card-body {
            padding: 2.2rem 2.2rem;
        }
        @media (max-width: 576px) {
            .auth-card-body {
                padding: 1.5rem 1.25rem;
            }
        }

        .auth-icon-tile {
            width: 42px;
            height: 42px;
            border-radius: 8px;
            background: var(--purple-50);
            color: var(--purple-700);
            border: 1px solid var(--purple-200);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin: 0 auto 12px;
        }
        .auth-title {
            font-weight: 600;
            font-size: 1.25rem;
            color: var(--slate-900);
            letter-spacing: -0.02em;
            margin-bottom: 3px;
            text-align: center;
        }
        .auth-subtitle {
            font-size: 0.84rem;
            color: var(--slate-500);
            margin-bottom: 22px;
            text-align: center;
        }

        /* ===== FORMS ===== */
        .auth-label {
            font-weight: 500;
            color: var(--slate-700);
            font-size: 0.825rem;
            margin-bottom: 4px;
            display: block;
        }
        .auth-input-group {
            position: relative;
            display: flex;
            width: 100%;
        }
        .auth-input-group .input-icon {
            background-color: var(--slate-50);
            border: 1px solid var(--slate-300);
            border-right: none;
            color: var(--slate-500);
            border-radius: 6px 0 0 6px;
            padding: 8px 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.85rem;
            width: 40px;
            flex-shrink: 0;
            transition: all .15s;
        }
        .auth-input-group .form-control {
            border: 1px solid var(--slate-300);
            border-left: none;
            border-radius: 0 6px 6px 0;
            padding: 8px 12px;
            font-size: 0.86rem;
            color: var(--slate-900);
            background-color: #ffffff;
            transition: border-color .15s, box-shadow .15s;
        }
        .auth-input-group .form-control.has-toggle {
            border-right: none;
            border-radius: 0;
        }
        .auth-input-group .btn-password-toggle {
            border: 1px solid var(--slate-300);
            border-left: none;
            background: #ffffff;
            color: var(--slate-400);
            border-radius: 0 6px 6px 0;
            padding: 8px 12px;
            cursor: pointer;
            transition: all .15s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-input-group .btn-password-toggle:hover {
            color: var(--slate-700);
        }
        .auth-input-group:focus-within .input-icon {
            border-color: var(--purple-600);
            color: var(--purple-700);
            background-color: var(--purple-50);
        }
        .auth-input-group .form-control:focus {
            border-color: var(--purple-600);
            box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.15);
            outline: none;
            color: var(--slate-900);
        }
        .auth-input-group:focus-within .btn-password-toggle {
            border-color: var(--purple-600);
        }

        .invalid-feedback {
            color: #dc2626;
            font-size: 0.78rem;
            margin-top: 4px;
            font-weight: 500;
        }

        .auth-check-input {
            accent-color: var(--purple-700);
            width: 1rem;
            height: 1rem;
            cursor: pointer;
            border-radius: 3px;
            border: 1px solid var(--slate-300);
            margin-top: 2px;
        }
        .auth-check-label {
            font-size: 0.825rem;
            color: var(--slate-600);
            cursor: pointer;
            user-select: none;
            margin-left: 6px;
        }

        /* ===== BUTTONS ===== */
        .btn-auth-primary {
            background: var(--purple-700) !important;
            border: 1px solid var(--purple-700) !important;
            color: #ffffff !important;
            font-weight: 500;
            font-size: 0.875rem;
            padding: 9px 18px;
            border-radius: 6px;
            transition: all .15s ease;
            width: 100%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            box-shadow: 0 1px 2px 0 rgba(109, 40, 217, 0.15);
            text-decoration: none !important;
        }
        .btn-auth-primary:hover {
            background: var(--purple-800) !important;
            border-color: var(--purple-800) !important;
            color: #ffffff !important;
            box-shadow: none;
        }

        .auth-link {
            color: var(--purple-700);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.825rem;
            transition: color .15s;
        }
        .auth-link:hover {
            color: var(--purple-800);
            text-decoration: underline;
        }

        .auth-divider {
            border-top: 1px solid var(--slate-100);
            margin: 20px 0 16px 0;
        }
        .auth-footer-prompt {
            text-align: center;
            font-size: 0.825rem;
            color: var(--slate-500);
            margin: 0;
        }

        /* Footer */
        .auth-global-footer {
            padding: 14px 20px;
            text-align: center;
            font-size: 0.8rem;
            color: var(--slate-500);
            border-top: 1px solid var(--slate-200);
            background: #ffffff;
        }
        .auth-global-footer b {
            color: var(--slate-800);
            font-weight: 600;
        }

        .alert-theme-success {
            background-color: #f0fdf4;
            border: 1px solid #bbf7d0;
            color: #166534;
            border-radius: 6px;
            padding: 10px 14px;
            font-size: 0.84rem;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <div id="app" class="d-flex flex-column min-vh-100">
        <!-- Top Navigation -->
        <nav class="navbar navbar-expand-md auth-navbar">
            <div class="container">
                <a class="navbar-brand auth-brand" href="{{ url('/') }}">
                    <span class="auth-brand-badge">TT</span>
                    <span>Timetable System</span>
                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fas fa-bars" style="color: var(--slate-700);"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto align-items-center gap-1">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link auth-nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">
                                        <i class="fas fa-sign-in-alt"></i>
                                        <span>{{ __('Login') }}</span>
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link auth-nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">
                                        <i class="fas fa-user-plus"></i>
                                        <span>{{ __('Register') }}</span>
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle auth-nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-circle"></i>
                                    <span>{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end shadow-sm" style="border-radius: 6px; border: 1px solid var(--slate-200);" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item py-2" href="{{ route('home') }}" style="color: var(--slate-700); font-size: 0.84rem;">
                                        <i class="fas fa-chart-pie me-2" style="color: var(--purple-700);"></i> {{ __('Dashboard') }}
                                    </a>
                                    <div class="dropdown-divider" style="border-color: var(--slate-200);"></div>
                                    <a class="dropdown-item py-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                       style="color: #dc2626; font-size: 0.84rem;">
                                        <i class="fas fa-sign-out-alt me-2"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content Area -->
        <main class="auth-main">
            @yield('content')
        </main>

        <!-- Global Footer -->
        <footer class="auth-global-footer">
            <div class="container d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
                <div>
                    &copy; {{ date('Y') }} <b>Timetable System</b>. All rights reserved.
                </div>
                <div class="text-muted">
                    Group 5B
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>
</html>
