@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List of Students</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.create') }}"> Add New Student</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Address</th>
        <th>Joined On</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($students as $s)
    <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->email }}</td>
        <td>{{ $s->age }}</td>
        <td>{{ $s->address}}</td>
        <td>{{ $s->created_at }}</td>
        <td>
            <div class="action-group">
                <a class="action-btn action-btn-view" href="{{ route('students.show', $s->id) }}">
                    <i class="fas fa-eye"></i> View
                </a>
                <a class="action-btn action-btn-edit" href="{{ route('students.edit', $s->id) }}">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="{{ route('students.destroy', $s->id) }}" method="POST" class="d-inline m-0 p-0" onsubmit="return confirm('Are you sure you want to delete this student?');">
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
