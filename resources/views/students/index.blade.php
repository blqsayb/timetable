@extends('layouts.template2')

@section('page-title', 'Students')
@section('breadcrumb', 'Students')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-user-graduate mr-2" style="color: var(--purple-700);"></i> Students List
                </h4>
                <div class="card-tools ml-auto">
                    <a class="btn btn-primary btn-sm" href="{{ route('students.create') }}">
                        <i class="fas fa-plus mr-1"></i> Add Student
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th style="width: 60px;">No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Joined</th>
                                <th style="width: 200px;" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $s)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><strong style="color: var(--slate-900);">{{ $s->name }}</strong></td>
                                    <td>{{ $s->email }}</td>
                                    <td>{{ $s->phone_number ?? '-' }}</td>
                                    <td>{{ $s->age ?? '-' }}</td>
                                    <td>{{ $s->address ?? '-' }}</td>
                                    <td>{{ $s->created_at ? $s->created_at->format('d M Y') : '-' }}</td>
                                    <td class="text-center" style="white-space: nowrap;">
                                        <div class="action-group">
                                            <a class="action-btn action-btn-view" href="{{ route('students.show', $s->id) }}" title="View">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a class="action-btn action-btn-edit" href="{{ route('students.edit', $s->id) }}" title="Edit">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('students.destroy', $s->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');" class="d-inline m-0 p-0">
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
                                    <td colspan="8" class="text-center py-4 text-muted">
                                        No students found. Click <strong>Add Student</strong> to create one.
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
