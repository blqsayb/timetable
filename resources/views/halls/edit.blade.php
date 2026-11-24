@extends('layouts.template2')

@section('page-title', 'Edit Lecture Hall')
@section('breadcrumb', 'Edit Hall')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-7">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-edit mr-2" style="color: var(--purple-700);"></i> Edit Lecture Hall
                </h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('halls.update', $hall->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label>Lecture Hall Name</label>
                        <input type="text" name="lecture_hall_name" class="form-control" value="{{ old('lecture_hall_name', $hall->lecture_hall_name) }}" required>
                    </div>

                    <div class="form-group mb-4">
                        <label>Location / Place</label>
                        <input type="text" name="lecture_hall_place" class="form-control" value="{{ old('lecture_hall_place', $hall->lecture_hall_place) }}" required>
                    </div>

                    <div class="d-flex justify-content-end align-items-center pt-3 border-top">
                        <a class="btn btn-light mr-2 px-3" href="{{ route('halls.index') }}">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-save mr-1"></i> Update Hall
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
