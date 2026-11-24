@extends('layouts.template2')

@section('page-title', 'Add New Subject')
@section('breadcrumb', 'Add Subject')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-7">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-plus mr-2" style="color: var(--purple-700);"></i> Add New Subject
                </h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('subjects.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label>Subject Code</label>
                        <input type="text" name="subject_code" class="form-control" placeholder="e.g. CSC520" value="{{ old('subject_code') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Subject Name</label>
                        <input type="text" name="subject_name" class="form-control" placeholder="e.g. Advanced Operating Systems" value="{{ old('subject_name') }}" required>
                    </div>

                    <div class="form-group mb-4">
                        <label>Lecturer Name</label>
                        <input type="text" name="lecturer_name" class="form-control" placeholder="e.g. Dr. Aminah" value="{{ old('lecturer_name') }}" required>
                    </div>

                    <div class="d-flex justify-content-end align-items-center pt-3 border-top">
                        <a class="btn btn-light mr-2 px-3" href="{{ route('subjects.index') }}">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-save mr-1"></i> Save Subject
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
