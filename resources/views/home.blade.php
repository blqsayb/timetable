@extends('layouts.template2')

@section('page-title', 'Dashboard')
@section('breadcrumb', 'Dashboard')

@section('content')
<!-- Welcome Card -->
<div class="card mb-4">
    <div class="card-body p-4 d-flex flex-wrap align-items-center justify-content-between">
        <div>
            <h3 class="font-weight-bold mb-1" style="color: var(--slate-900); font-size: 1.25rem;">
                Welcome back, {{ Auth::user()->name ?? 'User' }}
            </h3>
            <p class="text-muted mb-0 small">Timetable Management System overview. Select a module below to view or update records.</p>
        </div>
    </div>
</div>

<!-- Quick Feature Cards -->
<div class="row">
    <!-- Students Card -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                    <div style="width: 40px; height: 40px; border-radius: 6px; background: var(--purple-50); border: 1px solid var(--purple-100); display: flex; align-items: center; justify-content: center; color: var(--purple-700); flex-shrink: 0;">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="ml-3">
                        <h5 class="card-title mb-0 font-weight-bold" style="color: var(--slate-900); font-size: 0.95rem;">Students</h5><br>
                        <small class="text-muted d-block">Registered accounts</small>
                    </div>
                </div>
                <p class="card-text text-muted small flex-grow-1">View, create and update registered student records and contact details.</p>
                <a href="{{ url('/students') }}" class="btn btn-primary btn-sm btn-block">
                    Open Students <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Groups Card -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                    <div style="width: 40px; height: 40px; border-radius: 6px; background: var(--purple-50); border: 1px solid var(--purple-100); display: flex; align-items: center; justify-content: center; color: var(--purple-700); flex-shrink: 0;">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="ml-3">
                        <h5 class="card-title mb-0 font-weight-bold" style="color: var(--slate-900); font-size: 0.95rem;">Student Groups</h5><br>
                        <small class="text-muted d-block">Class cohorts</small>
                    </div>
                </div>
                <p class="card-text text-muted small flex-grow-1">Manage student group cohorts, classes, and semester parts.</p>
                <a href="{{ url('/groups') }}" class="btn btn-primary btn-sm btn-block">
                    Open Groups <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Halls Card -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                    <div style="width: 40px; height: 40px; border-radius: 6px; background: var(--purple-50); border: 1px solid var(--purple-100); display: flex; align-items: center; justify-content: center; color: var(--purple-700); flex-shrink: 0;">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="ml-3">
                        <h5 class="card-title mb-0 font-weight-bold" style="color: var(--slate-900); font-size: 0.95rem;">Lecture Halls</h5>
                        <br>
                        <small class="text-muted d-block">Venues & Locations</small>
                    </div>
                </div>
                <p class="card-text text-muted small flex-grow-1">Manage classrooms, lecture halls, and designated building locations.</p>
                <a href="{{ url('/halls') }}" class="btn btn-primary btn-sm btn-block">
                    Open Halls <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Subjects Card -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                    <div style="width: 40px; height: 40px; border-radius: 6px; background: var(--purple-50); border: 1px solid var(--purple-100); display: flex; align-items: center; justify-content: center; color: var(--purple-700); flex-shrink: 0;">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="ml-3">
                        <h5 class="card-title mb-0 font-weight-bold" style="color: var(--slate-900); font-size: 0.95rem;">Subjects</h5><br>
                        <small class="text-muted d-block">Courses & Lecturers</small>
                    </div>
                </div>
                <p class="card-text text-muted small flex-grow-1">Course codes, subject titles, and assigned faculty lecturers.</p>
                <a href="{{ url('/subjects') }}" class="btn btn-primary btn-sm btn-block">
                    Open Subjects <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Timetables Card -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body d-flex flex-column">
                <div class="d-flex align-items-center mb-3">
                    <div style="width: 40px; height: 40px; border-radius: 6px; background: var(--purple-50); border: 1px solid var(--purple-100); display: flex; align-items: center; justify-content: center; color: var(--purple-700); flex-shrink: 0;">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="ml-3">
                        <h5 class="card-title mb-0 font-weight-bold" style="color: var(--slate-900); font-size: 0.95rem;">Timetables</h5><br>
                        <small class="text-muted d-block">Master Schedule</small>
                    </div>
                </div>
                <p class="card-text text-muted small flex-grow-1">Coordinate lecture scheduling across groups, halls, and time slots.</p>
                <a href="{{ url('/timetables') }}" class="btn btn-primary btn-sm btn-block">
                    Open Timetables <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
