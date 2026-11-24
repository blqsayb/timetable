@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List of Groups</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('groups.create') }}"> Add New Group</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Group Name</th>
        <th>Part</th>
        <th>Created On</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($groups as $group)
    <tr>
        <td>{{ $group->id }}</td>
        <td>{{ $group->name }}</td>
        <td>{{ $group->part ?? '-' }}</td>
        <td>{{ $group->created_at }}</td>
        <td>
            <div class="action-group">
                <a class="action-btn action-btn-view" href="{{ route('groups.show', $group->id) }}">
                    <i class="fas fa-eye"></i> View
                </a>
                <a class="action-btn action-btn-edit" href="{{ route('groups.edit', $group->id) }}">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="{{ route('groups.destroy', $group->id) }}" method="POST" class="d-inline m-0 p-0" onsubmit="return confirm('Are you sure you want to delete this group?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="action-btn action-btn-delete">
                        <i class="fas fa-trash-alt"></i> Delete
                    </button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
</table>
@endsection
