@extends('layouts.template2')

@section('page-title', 'Add New Student')
@section('breadcrumb', 'Add Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-7">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-user-plus mr-2" style="color: var(--purple-700);"></i> Add New Student
                </h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Student Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter student's full name" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="student@example.com" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control" placeholder="Enter student's age" value="{{ old('age') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" placeholder="Enter student's phone number" value="{{ old('phone_number') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter student's address" value="{{ old('address') }}" required>
                    </div>

                    <div class="form-group mb-4">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password (minimum 6 characters)" required>
                    </div>

                    <div class="d-flex justify-content-end align-items-center pt-3 border-top">
                        <a class="btn btn-light mr-2 px-3" href="{{ route('students.index') }}">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-save mr-1"></i> Save Student
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
