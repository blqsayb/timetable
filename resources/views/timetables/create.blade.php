@extends('layouts.template2')

@section('page-title', 'Create Timetable Entry')
@section('breadcrumb', 'Create Timetable')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-7">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-plus mr-2" style="color: var(--purple-700);"></i> Create Timetable Entry
                </h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('timetables.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label>Day</label>
                        <select name="day_id" class="form-control" required>
                            <option value="">Select Day</option>
                            @foreach($days ?? [] as $d)
                                <option value="{{ $d->id }}" {{ old('day_id') == $d->id ? 'selected' : '' }}>{{ $d->day_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Subject</label>
                        <select name="subject_id" class="form-control" required>
                            <option value="">Select Subject</option>
                            @foreach($subjects ?? [] as $sub)
                                <option value="{{ $sub->id }}" {{ old('subject_id') == $sub->id ? 'selected' : '' }}>{{ $sub->subject_code }} - {{ $sub->subject_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Student Group</label>
                        <select name="group_id" class="form-control" required>
                            <option value="">Select Group</option>
                            @foreach($groups ?? [] as $g)
                                <option value="{{ $g->id }}" {{ old('group_id') == $g->id ? 'selected' : '' }}>{{ $g->name }} ({{ $g->part ?? 'N/A' }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Lecture Hall</label>
                        <select name="hall_id" class="form-control" required>
                            <option value="">Select Hall</option>
                            @foreach($halls ?? [] as $h)
                                <option value="{{ $h->id }}" {{ old('hall_id') == $h->id ? 'selected' : '' }}>{{ $h->lecture_hall_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-row mb-4">
                        <div class="form-group col-md-6 mb-0">
                            <label>Time From</label>
                            <input type="time" name="time_from" class="form-control" value="{{ old('time_from') }}" required>
                        </div>
                        <div class="form-group col-md-6 mb-0">
                            <label>Time To</label>
                            <input type="time" name="time_to" class="form-control" value="{{ old('time_to') }}" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end align-items-center pt-3 border-top">
                        <a class="btn btn-light mr-2 px-3" href="{{ route('timetables.index') }}">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-save mr-1"></i> Save Entry
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
