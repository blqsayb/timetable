@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List of Subjects</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('subjects.create') }}"> Add New Subject</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Code</th>
        <th>Name</th>
        <th>Lecturer</th>
        <th>Created On</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($subjects as $subject)
    <tr>
        <td>{{ $subject->id }}</td>
        <td>{{ $subject->subject_code }}</td>
        <td>{{ $subject->subject_name }}</td>
        <td>{{ $subject->lecturer_name ?? '-' }}</td>
        <td>{{ $subject->created_at }}</td>
        <td>
            <div class="action-group">
                <a class="action-btn action-btn-view" href="{{ route('subjects.show', $subject->id) }}">
                    <i class="fas fa-eye"></i> View
                </a>
                <a class="action-btn action-btn-edit" href="{{ route('subjects.edit', $subject->id) }}">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" class="d-inline m-0 p-0" onsubmit="return confirm('Are you sure you want to delete this subject?');">
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
