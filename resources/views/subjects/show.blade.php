@extends('layouts.template2')

@section('page-title', 'Subject Details')
@section('breadcrumb', 'Subject Details')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-book mr-2" style="color: var(--purple-700);"></i>
                    Subject Details
                </h4>
            </div>

            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <div class="mx-auto d-flex align-items-center justify-content-center"
                         style="width: 56px; height: 56px; border-radius: 8px; background: var(--purple-50); color: var(--purple-700); border: 1px solid var(--purple-200); font-size: 24px;">
                        <i class="fas fa-book"></i>
                    </div>

                    <h4 class="mt-3 mb-1 font-weight-bold" style="color: var(--slate-900); font-size: 1.15rem;">
                        {{ $subject->subject_name }}
                    </h4>
                    <p class="text-muted mb-0 small">
                        <span class="badge badge-primary px-2 py-1">{{ $subject->subject_code }}</span>
                    </p>
                </div>

                <hr style="border-color: var(--slate-100);">

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Subject ID
                    </div>
                    <div class="col-sm-8 text-muted">
                        {{ $subject->id }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Subject Code
                    </div>
                    <div class="col-sm-8 font-weight-semibold">
                        <span class="badge badge-primary">{{ $subject->subject_code }}</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Subject Name
                    </div>
                    <div class="col-sm-8 font-weight-semibold" style="color: var(--slate-900);">
                        {{ $subject->subject_name }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Lecturer In-Charge
                    </div>
                    <div class="col-sm-8">
                        {{ $subject->lecturer_name ?? '-' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Created On
                    </div>
                    <div class="col-sm-8 text-muted">
                        {{ $subject->created_at ? $subject->created_at->format('d M Y, h:i A') : '-' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Last Updated
                    </div>
                    <div class="col-sm-8 text-muted">
                        {{ $subject->updated_at ? $subject->updated_at->format('d M Y, h:i A') : '-' }}
                    </div>
                </div>

                <hr style="border-color: var(--slate-100);">

                <div class="d-flex align-items-center justify-content-between pt-2">
                    <a href="{{ route('subjects.index') }}" class="btn-back">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                    <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-edit mr-1"></i> Edit Subject
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
