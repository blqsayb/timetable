@extends('layouts.template2')

@section('page-title', 'Edit Student')
@section('breadcrumb', 'Edit Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-7">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-user-edit mr-2" style="color: var(--purple-700);"></i> Edit Student
                </h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label>Student Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $student->email) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control" value="{{ old('age', $student->age) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $student->phone_number) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{ old('address', $student->address) }}" required>
                    </div>

                    <div class="form-group mb-4">
                        <label>New Password (leave blank if keeping current)</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter new password">
                    </div>

                    <div class="d-flex justify-content-end align-items-center pt-3 border-top">
                        <a class="btn btn-light mr-2 px-3" href="{{ route('students.index') }}">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-save mr-1"></i> Update Student
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
