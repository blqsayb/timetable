@extends('layouts.template2')

@section('page-title', 'Groups')
@section('breadcrumb', 'Groups')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0 font-weight-bold d-flex align-items-center">
                    <i class="fas fa-users mr-2" style="color: var(--purple-700);"></i> Group Cohorts
                </h4>
                <div class="card-tools ml-auto">
                    <a class="btn btn-primary btn-sm" href="{{ route('groups.create') }}">
                        <i class="fas fa-plus mr-1"></i> Add Group
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th style="width: 60px;">No</th>
                                <th>Group Name</th>
                                <th>Part / Semester</th>
                                <th>Created</th>
                                <th style="width: 200px;" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($groups as $group)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><strong style="color: var(--slate-900);">{{ $group->name }}</strong></td>
                                    <td><span class="badge badge-info">{{ $group->part ?? '-' }}</span></td>
                                    <td>{{ $group->created_at ? $group->created_at->format('d M Y') : '-' }}</td>
                                    <td class="text-center" style="white-space: nowrap;">
                                        <div class="action-group">
                                            <a class="action-btn action-btn-view" href="{{ route('groups.show', $group->id) }}" title="View">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a class="action-btn action-btn-edit" href="{{ route('groups.edit', $group->id) }}" title="Edit">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('groups.destroy', $group->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this group?');" class="d-inline m-0 p-0">
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
                                    <td colspan="5" class="text-center py-4 text-muted">
                                        No groups found. Click <strong>Add Group</strong> to create one.
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
