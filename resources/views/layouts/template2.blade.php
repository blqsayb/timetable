<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('page-title', 'Dashboard') | {{ config('app.name', 'Timetable System') }}</title>

  <!-- Google Font: Inter (Crisp Minimalist Sans) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

  <style>
    /* ===== MINIMALIST PURPLE DESIGN SYSTEM ===== */
    :root {
      --purple-50: #f5f3ff;
      --purple-100: #ede9fe;
      --purple-200: #ddd6fe;
      --purple-500: #8b5cf6;
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

    /* ===== BASE & TYPOGRAPHY ===== */
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
      background-color: var(--slate-50) !important;
      color: var(--slate-700) !important;
      font-size: 0.875rem;
      letter-spacing: -0.011em;
      -webkit-font-smoothing: antialiased;
    }

    /* ===== NAVBAR ===== */
    .main-header.navbar {
      background: #ffffff !important;
      border-bottom: 1px solid var(--slate-200) !important;
      box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.03) !important;
      padding: 0.65rem 1.25rem;
    }
    .main-header .nav-link {
      color: var(--slate-600) !important;
      font-weight: 500;
      font-size: 0.85rem;
      padding: 0.5rem 0.75rem;
      transition: color .15s ease;
    }
    .main-header .nav-link:hover {
      color: var(--purple-700) !important;
    }

    /* ===== MINIMALIST LIGHT SIDEBAR ===== */
    .main-sidebar {
      background: #ffffff !important;
      border-right: 1px solid var(--slate-200) !important;
      box-shadow: none !important;
    }
    .brand-link {
      border-bottom: 1px solid var(--slate-200) !important;
      padding: 16px 20px !important;
      background: #ffffff !important;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .brand-badge {
      width: 30px;
      height: 30px;
      border-radius: 6px;
      background: var(--purple-700);
      color: #ffffff;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 0.8rem;
      font-weight: 700;
      flex-shrink: 0;
    }
    .brand-text {
      font-family: 'Inter', sans-serif;
      font-weight: 600 !important;
      font-size: 0.95rem;
      letter-spacing: -0.02em;
      color: var(--slate-900) !important;
      margin-left: 0 !important;
    }

    /* User Profile Panel */
    .user-panel {
      border: 1px solid var(--slate-200) !important;
      padding: 10px 12px !important;
      background: var(--slate-50);
      border-radius: 8px;
      margin: 12px 12px 14px !important;
    }
    .user-panel .user-icon-circle {
      width: 34px;
      height: 34px;
      border-radius: 6px;
      background: var(--purple-700);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
      font-weight: 600;
      font-size: 0.85rem;
      flex-shrink: 0;
    }
    .user-panel .info {
      padding-left: 10px;
      overflow: hidden;
    }
    .user-panel .user-name {
      font-weight: 600;
      color: var(--slate-900) !important;
      font-size: 0.825rem;
      margin-bottom: 1px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      display: block;
    }
    .user-panel .user-email {
      font-size: 0.72rem;
      color: var(--slate-500);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      display: block;
    }

    /* Sidebar Navigation Links */
    .nav-sidebar .nav-header {
      color: var(--slate-400) !important;
      font-size: 0.68rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 12px 14px 4px !important;
      background: transparent !important;
    }
    .nav-sidebar .nav-link {
      border-radius: 6px !important;
      margin: 2px 8px !important;
      padding: 8px 12px !important;
      color: var(--slate-600) !important;
      font-size: 0.84rem;
      font-weight: 500;
      transition: all .15s ease;
      display: flex;
      align-items: center;
    }
    .nav-sidebar .nav-link .nav-icon {
      font-size: 0.88rem;
      width: 20px;
      text-align: center;
      margin-right: 10px;
      color: var(--slate-400);
      transition: color .15s ease;
    }
    .nav-sidebar .nav-link:hover {
      background: var(--slate-100) !important;
      color: var(--slate-900) !important;
    }
    .nav-sidebar .nav-link:hover .nav-icon {
      color: var(--purple-700);
    }
    .nav-sidebar .nav-link.active {
      background: var(--purple-50) !important;
      color: var(--purple-700) !important;
      font-weight: 600;
      border: 1px solid var(--purple-100);
    }
    .nav-sidebar .nav-link.active .nav-icon {
      color: var(--purple-700) !important;
    }

    /* Sidebar Logout Item */
    .sidebar-logout-link {
      color: #dc2626 !important;
      font-weight: 500 !important;
      border-top: 1px solid var(--slate-200);
      margin-top: 10px !important;
      padding-top: 10px !important;
    }
    .sidebar-logout-link .nav-icon {
      color: #dc2626 !important;
    }
    .sidebar-logout-link:hover {
      background: #fef2f2 !important;
      color: #b91c1c !important;
    }

    /* ===== CONTENT WRAPPER ===== */
    .content-wrapper {
      background: var(--slate-50) !important;
      min-height: calc(100vh - 57px);
    }
    .content-header h1 {
      font-family: 'Inter', sans-serif;
      font-weight: 600;
      font-size: 1.35rem;
      letter-spacing: -0.02em;
      color: var(--slate-900);
    }
    .breadcrumb-item a {
      color: var(--purple-700);
      font-weight: 500;
      text-decoration: none;
    }
    .breadcrumb-item a:hover {
      color: var(--purple-800);
      text-decoration: underline;
    }
    .breadcrumb-item.active {
      color: var(--slate-500);
    }

    /* ===== CARDS ===== */
    .card {
      border: 1px solid var(--slate-200) !important;
      border-radius: 8px !important;
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.03), 0 1px 2px -1px rgba(0, 0, 0, 0.03) !important;
      background: #ffffff !important;
      transition: none;
    }
    .card-header {
      background: #ffffff !important;
      border-bottom: 1px solid var(--slate-100) !important;
      font-weight: 600;
      color: var(--slate-900) !important;
      border-radius: 8px 8px 0 0 !important;
      padding: 12px 18px !important;
    }
    .card-title {
      font-weight: 600 !important;
      color: var(--slate-900) !important;
      font-size: 0.95rem !important;
      letter-spacing: -0.01em;
    }
    .card-body {
      color: var(--slate-700);
      padding: 18px;
    }

    /* ===== BUTTONS ===== */
    .btn {
      font-weight: 500;
      font-size: 0.84rem;
      border-radius: 6px !important;
      padding: 7px 14px;
      transition: all .15s ease;
      letter-spacing: -0.005em;
    }
    .btn-primary {
      background: var(--purple-700) !important;
      border: 1px solid var(--purple-700) !important;
      color: #ffffff !important;
      box-shadow: 0 1px 2px 0 rgba(109, 40, 217, 0.15) !important;
    }
    .btn-primary:hover, .btn-primary:focus {
      background: var(--purple-800) !important;
      border-color: var(--purple-800) !important;
      color: #ffffff !important;
      box-shadow: none !important;
      transform: none !important;
    }
    .btn-light, .btn-secondary {
      background: #ffffff !important;
      border: 1px solid var(--slate-200) !important;
      color: var(--slate-700) !important;
    }
    .btn-light:hover, .btn-secondary:hover {
      background: var(--slate-50) !important;
      border-color: var(--slate-300) !important;
      color: var(--slate-900) !important;
    }
    .btn-success {
      background: #059669 !important;
      border: 1px solid #059669 !important;
      color: #ffffff !important;
    }
    .btn-success:hover {
      background: #047857 !important;
      border-color: #047857 !important;
    }
    .btn-danger {
      background: #dc2626 !important;
      border: 1px solid #dc2626 !important;
      color: #ffffff !important;
    }
    .btn-danger:hover {
      background: #b91c1c !important;
      border-color: #b91c1c !important;
    }
    .btn-info {
      background: var(--purple-50) !important;
      border: 1px solid var(--purple-200) !important;
      color: var(--purple-700) !important;
    }
    .btn-info:hover {
      background: var(--purple-700) !important;
      border-color: var(--purple-700) !important;
      color: #ffffff !important;
    }

    /* ===== TABLES ===== */
    .table {
      border: 1px solid var(--slate-200);
      margin-bottom: 0;
    }
    .table thead th {
      background: var(--slate-50);
      border-bottom: 1px solid var(--slate-200) !important;
      border-top: none;
      font-weight: 600;
      font-size: .75rem;
      text-transform: uppercase;
      letter-spacing: .04em;
      color: var(--slate-600);
      padding: 10px 14px;
    }
    .table td {
      vertical-align: middle;
      color: var(--slate-700);
      border-top: 1px solid var(--slate-100);
      padding: 10px 14px;
      font-size: 0.85rem;
    }
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: #fbfcfe;
    }
    .table-hover tbody tr:hover {
      background-color: var(--slate-100);
    }

    /* ===== MINIMALIST ACTION BUTTONS ===== */
    .action-group {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 5px;
      white-space: nowrap;
    }
    .action-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 4px;
      padding: 4px 9px;
      font-size: 0.76rem;
      font-weight: 500;
      border-radius: 5px;
      text-decoration: none !important;
      line-height: 1.35;
      transition: all 0.15s ease;
      cursor: pointer;
      box-shadow: none !important;
    }
    .action-btn i {
      font-size: 0.74rem;
    }
    .action-btn-view {
      background: var(--purple-50);
      color: var(--purple-700) !important;
      border: 1px solid var(--purple-200);
    }
    .action-btn-view:hover {
      background: var(--purple-700);
      color: #ffffff !important;
      border-color: var(--purple-700);
    }
    .action-btn-edit {
      background: var(--slate-50);
      color: var(--slate-700) !important;
      border: 1px solid var(--slate-200);
    }
    .action-btn-edit:hover {
      background: var(--slate-900);
      color: #ffffff !important;
      border-color: var(--slate-900);
    }
    .action-btn-delete {
      background: #fef2f2;
      color: #dc2626 !important;
      border: 1px solid #fecaca;
    }
    .action-btn-delete:hover {
      background: #dc2626;
      color: #ffffff !important;
      border-color: #dc2626;
    }

    /* ===== MINIMALIST BACK BUTTON ===== */
    .btn-back {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: #ffffff;
      color: var(--slate-600) !important;
      border: 1px solid var(--slate-200) !important;
      font-weight: 500;
      font-size: 0.82rem;
      padding: 6px 12px;
      border-radius: 6px;
      transition: all 0.15s ease;
      text-decoration: none !important;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
    }
    .btn-back:hover {
      background: var(--slate-50);
      border-color: var(--slate-300) !important;
      color: var(--slate-900) !important;
    }
    .btn-back i {
      font-size: 0.78rem;
    }

    /* ===== FORMS ===== */
    .form-control {
      border-radius: 6px !important;
      border: 1px solid var(--slate-300);
      padding: 8px 12px;
      background-color: #ffffff;
      color: var(--slate-900);
      font-size: 0.86rem;
      transition: border-color .15s, box-shadow .15s;
    }
    .form-control:focus {
      border-color: var(--purple-600);
      background-color: #ffffff;
      box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.15);
      color: var(--slate-900);
      outline: none;
    }
    label {
      font-weight: 500;
      color: var(--slate-700);
      font-size: 0.825rem;
      margin-bottom: 4px;
    }

    /* ===== ALERTS ===== */
    .alert {
      border-radius: 6px;
      border: 1px solid transparent;
      padding: 12px 16px;
      font-size: 0.85rem;
    }
    .alert-success {
      background: #f0fdf4;
      color: #166534;
      border-color: #bbf7d0;
    }
    .alert-danger {
      background: #fef2f2;
      color: #991b1b;
      border-color: #fecaca;
    }
    .alert-warning {
      background: #fffbeb;
      color: #92400e;
      border-color: #fde68a;
    }
    .alert-info {
      background: var(--purple-50);
      color: var(--purple-700);
      border-color: var(--purple-200);
    }

    /* ===== BADGES ===== */
    .badge {
      font-weight: 500;
      padding: 4px 8px;
      border-radius: 4px;
      font-size: 0.74rem;
    }
    .badge-primary {
      background: var(--purple-700);
      color: #ffffff;
    }
    .badge-info {
      background: var(--purple-50);
      color: var(--purple-700);
      border: 1px solid var(--purple-200);
    }

    /* ===== FOOTER ===== */
    .main-footer {
      border-top: 1px solid var(--slate-200);
      background: #ffffff;
      font-size: .8rem;
      color: var(--slate-500);
      padding: 14px 20px;
    }
    .main-footer strong {
      color: var(--slate-900);
      font-weight: 600;
    }

    /* ===== DROPDOWNS ===== */
    .dropdown-menu {
      border-radius: 6px;
      border: 1px solid var(--slate-200);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      padding: 6px;
    }
    .dropdown-item {
      border-radius: 4px;
      padding: 8px 12px;
      font-size: .84rem;
      color: var(--slate-700);
      transition: background .12s, color .12s;
    }
    .dropdown-item:hover {
      background: var(--slate-100);
      color: var(--slate-900);
    }

    /* ===== SCROLLBAR ===== */
    ::-webkit-scrollbar {
      width: 6px;
    }
    ::-webkit-scrollbar-track {
      background: var(--slate-50);
    }
    ::-webkit-scrollbar-thumb {
      background: var(--slate-300);
      border-radius: 3px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: var(--slate-400);
    }
  </style>

  @yield('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto align-items-center">
      @guest
        @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link btn btn-sm px-3 py-1 mr-2" href="{{ route('login') }}" style="background: #fff; border: 1px solid var(--slate-200); color: var(--slate-700); font-weight: 500;">
              <i class="fas fa-sign-in-alt mr-1"></i> Login
            </a>
          </li>
        @endif
        @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link btn btn-sm px-3 py-1 text-white" href="{{ route('register') }}" style="background: var(--purple-700); border: 1px solid var(--purple-700); font-weight: 500;">
              <i class="fas fa-user-plus mr-1"></i> Register
            </a>
          </li>
        @endif
      @endguest
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
      <span class="brand-badge">TT</span>
      <span class="brand-text">Timetable</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      @auth
      <div class="user-panel d-flex align-items-center">
        <div class="image">
          <div class="user-icon-circle">
            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
          </div>
        </div>
        <div class="info">
          <a href="#" class="user-name" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
          <span class="user-email" title="{{ Auth::user()->email }}">{{ Auth::user()->email ?? 'user@gmail.com' }}</span> 
        </div>
      </div>
      @endauth

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- 1. Dashboard -->
          <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i> 
              <p>Dashboard</p>
            </a>
          </li>

          <!-- 2. Forms Section -->
          <li class="nav-header">Manage</li>

          <li class="nav-item">
            <a href="{{ url('/students') }}" class="nav-link {{ request()->is('students*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>Students</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/subjects') }}" class="nav-link {{ request()->is('subjects*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>Subjects</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/groups') }}" class="nav-link {{ request()->is('groups*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>Groups</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/halls') }}" class="nav-link {{ request()->is('halls*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-building"></i>
              <p>Lecture Halls</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/timetables') }}" class="nav-link {{ request()->is('timetables*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Timetables</p>
            </a>
          </li>

          @yield('sidebar-menu')

          <!-- 3. Logout -->
          @auth
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link sidebar-logout-link"
               onclick="event.preventDefault(); document.getElementById('sidebar-logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
            <form id="sidebar-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
          @endauth

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header py-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('page-title', 'Dashboard')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right mb-0">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              @yield('breadcrumb-items')
              <li class="breadcrumb-item active">@yield('breadcrumb', 'Dashboard')</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Flash messages & Content -->
    <section class="content pb-4">
      <div class="container-fluid">
        @if(session('success') || session('status'))
          <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
            <i class="fas fa-check-circle mr-2"></i>{{ session('success') ?? session('status') }}
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
          </div>
        @endif
        @if(session('error'))
          <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
            <i class="fas fa-exclamation-circle mr-2"></i>{{ session('error') }}
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
          </div>
        @endif
        @if(isset($errors) && $errors->any())
          <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
            <i class="fas fa-exclamation-triangle mr-2"></i>
            <ul class="mb-0 pl-3">
              @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
              @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
          </div>
        @endif

        @yield('content')
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>&copy; {{ date('Y') }} Timetable System.</strong> All rights reserved.
    <div class="float-right d-none d-sm-inline-block text-muted">
      Group 5B
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>

<script>
  $(function () {
    // Alert close button
    $('.alert .close').on('click', function () {
      $(this).closest('.alert').fadeOut('fast', function () {
        $(this).remove();
      });
    });
  });
</script>

@yield('scripts')
</body>
</html>
