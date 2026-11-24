@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List of Timetables</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('timetables.create') }}"> Add New Entry</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Day</th>
        <th>Time</th>
        <th>Subject</th>
        <th>Group</th>
        <th>Hall</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($timetables as $timetable)
    <tr>
        <td>{{ $timetable->id }}</td>
        <td>{{ $timetable->day->day_name ?? $timetable->day_id }}</td>
        <td>{{ $timetable->time_from }} - {{ $timetable->time_to }}</td>
        <td>{{ $timetable->subject->subject_name ?? $timetable->subject_id }}</td>
        <td>{{ $timetable->group->name ?? $timetable->group_id }}</td>
        <td>{{ $timetable->hall->lecture_hall_name ?? $timetable->hall_id }}</td>
        <td>
            <div class="action-group">
                <a class="action-btn action-btn-view" href="{{ route('timetables.show', $timetable->id) }}">
                    <i class="fas fa-eye"></i> View
                </a>
                <a class="action-btn action-btn-edit" href="{{ route('timetables.edit', $timetable->id) }}">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="{{ route('timetables.destroy', $timetable->id) }}" method="POST" class="d-inline m-0 p-0" onsubmit="return confirm('Are you sure you want to delete this timetable entry?');">
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
