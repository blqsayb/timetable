@extends('layouts.template2')

@section('page-title', 'Student Details')
@section('breadcrumb', 'Student Details')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-user-graduate mr-2" style="color: var(--purple-700);"></i>
                    Student Details
                </h4>
            </div>

            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <div class="mx-auto d-flex align-items-center justify-content-center"
                         style="width: 56px; height: 56px; border-radius: 8px; background: var(--purple-50); color: var(--purple-700); border: 1px solid var(--purple-200); font-size: 24px;">
                        <i class="fas fa-user"></i>
                    </div>

                    <h4 class="mt-3 mb-1 font-weight-bold" style="color: var(--slate-900); font-size: 1.15rem;">
                        {{ $student->name }}
                    </h4>
                    <p class="text-muted mb-0 small">Student Profile Record</p>
                </div>

                <hr style="border-color: var(--slate-100);">

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Student ID
                    </div>
                    <div class="col-sm-8 text-muted">
                        {{ $student->id }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Full Name
                    </div>
                    <div class="col-sm-8 font-weight-semibold" style="color: var(--slate-900);">
                        {{ $student->name }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Email Address
                    </div>
                    <div class="col-sm-8">
                        {{ $student->email }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Phone Number
                    </div>
                    <div class="col-sm-8">
                        {{ $student->phone_number ?? '-' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Age
                    </div>
                    <div class="col-sm-8">
                        {{ $student->age ?? '-' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Address
                    </div>
                    <div class="col-sm-8">
                        {{ $student->address ?? '-' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Registered On
                    </div>
                    <div class="col-sm-8">
                        {{ $student->created_at ? $student->created_at->format('d M Y') : '-' }}
                    </div>
                </div>

                <hr style="border-color: var(--slate-100);">

                <div class="d-flex align-items-center justify-content-between pt-2">
                    <a href="{{ route('students.index') }}" class="btn-back">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-edit mr-1"></i> Edit Student
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
