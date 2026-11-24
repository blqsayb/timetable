@extends('layouts.template2')

@section('page-title', 'Timetable Entry Details')
@section('breadcrumb', 'Timetable Details')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-calendar-alt mr-2" style="color: var(--purple-700);"></i>
                    Timetable Entry Details
                </h4>
            </div>

            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <div class="mx-auto d-flex align-items-center justify-content-center"
                         style="width: 56px; height: 56px; border-radius: 8px; background: var(--purple-50); color: var(--purple-700); border: 1px solid var(--purple-200); font-size: 24px;">
                        <i class="fas fa-clock"></i>
                    </div>

                    <h4 class="mt-3 mb-1 font-weight-bold" style="color: var(--slate-900); font-size: 1.15rem;">
                        {{ $timetable->subject->subject_name ?? 'Scheduled Class' }}
                    </h4>

                    <p class="text-muted mb-0 small">
                        <span class="badge badge-info mr-1">{{ $timetable->day->day_name ?? 'Day' }}</span>
                        <strong>{{ $timetable->time_from }} - {{ $timetable->time_to }}</strong>
                    </p>
                </div>

                <hr style="border-color: var(--slate-100);">

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Entry ID
                    </div>
                    <div class="col-sm-8 text-muted">
                        {{ $timetable->id }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Day of Week
                    </div>
                    <div class="col-sm-8">
                        <span class="badge badge-info">{{ $timetable->day->day_name ?? '-' }}</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Time Slot
                    </div>
                    <div class="col-sm-8 font-weight-semibold" style="color: var(--slate-900);">
                        {{ $timetable->time_from }} - {{ $timetable->time_to }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Subject
                    </div>
                    <div class="col-sm-8">
                        @if($timetable->subject)
                            <span class="badge badge-primary mr-1">{{ $timetable->subject->subject_code }}</span>
                            <strong style="color: var(--slate-900);">{{ $timetable->subject->subject_name }}</strong>
                        @else
                            -
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Lecturer
                    </div>
                    <div class="col-sm-8">
                        {{ $timetable->subject->lecturer_name ?? '-' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Student Group
                    </div>
                    <div class="col-sm-8">
                        @if($timetable->group)
                            <strong style="color: var(--slate-900);">{{ $timetable->group->name }}</strong>
                            @if($timetable->group->part)
                                <span class="text-muted">({{ $timetable->group->part }})</span>
                            @endif
                        @else
                            -
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Lecture Hall
                    </div>
                    <div class="col-sm-8">
                        @if($timetable->hall)
                            <strong style="color: var(--slate-900);">{{ $timetable->hall->lecture_hall_name }}</strong>
                            @if($timetable->hall->lecture_hall_place)
                                <span class="text-muted">- {{ $timetable->hall->lecture_hall_place }}</span>
                            @endif
                        @else
                            -
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Created By
                    </div>
                    <div class="col-sm-8">
                        {{ $timetable->user->name ?? '-' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Created On
                    </div>
                    <div class="col-sm-8 text-muted">
                        {{ $timetable->created_at ? $timetable->created_at->format('d M Y, h:i A') : '-' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold" style="color: var(--slate-700);">
                        Last Updated
                    </div>
                    <div class="col-sm-8 text-muted">
                        {{ $timetable->updated_at ? $timetable->updated_at->format('d M Y, h:i A') : '-' }}
                    </div>
                </div>

                <hr style="border-color: var(--slate-100);">

                <div class="d-flex align-items-center justify-content-between pt-2">
                    <a href="{{ route('timetables.index') }}" class="btn-back">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                    <a href="{{ route('timetables.edit', $timetable->id) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-edit mr-1"></i> Edit Entry
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
