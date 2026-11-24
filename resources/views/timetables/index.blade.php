@extends('layouts.template2')

@section('page-title', 'Timetables')
@section('breadcrumb', 'Timetables')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-calendar-alt mr-2" style="color: var(--purple-700);"></i> Timetable Schedule
                </h4>
                <div class="card-tools ml-auto">
                    <a class="btn btn-primary btn-sm" href="{{ route('timetables.create') }}">
                        <i class="fas fa-plus mr-1"></i> Add Entry
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th style="width: 60px;">No</th>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Subject</th>
                                <th>Group</th>
                                <th>Hall</th>
                                <th style="width: 200px;" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($timetables as $timetable)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><span class="badge badge-info">{{ $timetable->day->day_name ?? $timetable->day_id }}</span></td>
                                    <td><strong>{{ $timetable->time_from }} - {{ $timetable->time_to }}</strong></td>
                                    <td>
                                        <strong style="color: var(--slate-900);">{{ $timetable->subject->subject_code ?? '' }}</strong>
                                        <span class="text-muted d-block small">{{ $timetable->subject->subject_name ?? '-' }}</span>
                                    </td>
                                    <td>{{ $timetable->group->name ?? '-' }}</td>
                                    <td>{{ $timetable->hall->lecture_hall_name ?? '-' }}</td>
                                    <td class="text-center" style="white-space: nowrap;">
                                        <div class="action-group">
                                            <a class="action-btn action-btn-view" href="{{ route('timetables.show', $timetable->id) }}" title="View">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a class="action-btn action-btn-edit" href="{{ route('timetables.edit', $timetable->id) }}" title="Edit">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('timetables.destroy', $timetable->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this timetable entry?');" class="d-inline m-0 p-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="action-btn action-btn-delete" title="Delete">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4 text-muted">
                                        No timetable entries found. Click <strong>Add Entry</strong> to schedule one.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
