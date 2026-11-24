@extends('layouts.template2')

@section('page-title', 'Add New Group')
@section('breadcrumb', 'Add Group')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-7">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-plus mr-2" style="color: var(--purple-700);"></i> Add New Group
                </h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('groups.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label>Group Name</label>
                        <input type="text" name="name" class="form-control" placeholder="e.g. CS240-5B" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group mb-4">
                        <label>Part / Semester</label>
                        <input type="text" name="part" class="form-control" placeholder="e.g. Part 5" value="{{ old('part') }}" required>
                    </div>

                    <div class="d-flex justify-content-end align-items-center pt-3 border-top">
                        <a class="btn btn-light mr-2 px-3" href="{{ route('groups.index') }}">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-save mr-1"></i> Save Group
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
