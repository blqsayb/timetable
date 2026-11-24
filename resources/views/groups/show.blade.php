@extends('layouts.template2')

@section('page-title', 'Group Details')
@section('breadcrumb', 'Group Details')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-users mr-2" style="color: var(--purple-700);"></i>
                    Group Details
                </h4>
            </div>

            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <div class="mx-auto d-flex align-items-center justify-content-center"
                         style="width: 56px; height: 56px; border-radius: 8px; background: var(--purple-50); color: var(--purple-700); border: 1px solid var(--purple-200); font-size: 24px;">
                        <i class="fas fa-users"></i>
                    </div>

                    <h4 class="mt-3 mb-1 font-weight-bold" style="color: var(--slate-900); font-size: 1.15rem;">
                        {{ $group->name }}
                    </h4>
                    <p class="text-muted mb-0 small">Student Cohort Record</p>
                </div>

                <hr style="border-color: var(--slate-100);">

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Group ID
                    </div>
                    <div class="col-sm-8 text-muted">
                        {{ $group->id }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Group Name
                    </div>
                    <div class="col-sm-8 font-weight-semibold" style="color: var(--slate-900);">
                        {{ $group->name }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Part / Semester
                    </div>
                    <div class="col-sm-8">
                        <span class="badge badge-info">{{ $group->part ?? '-' }}</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Created On
                    </div>
                    <div class="col-sm-8 text-muted">
                        {{ $group->created_at ? $group->created_at->format('d M Y, h:i A') : '-' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Last Updated
                    </div>
                    <div class="col-sm-8 text-muted">
                        {{ $group->updated_at ? $group->updated_at->format('d M Y, h:i A') : '-' }}
                    </div>
                </div>

                <hr style="border-color: var(--slate-100);">

                <div class="d-flex align-items-center justify-content-between pt-2">
                    <a href="{{ route('groups.index') }}" class="btn-back">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                    <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-edit mr-1"></i> Edit Group
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
