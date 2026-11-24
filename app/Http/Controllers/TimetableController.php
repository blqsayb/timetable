<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use App\Models\Group;
use App\Models\Subject;
use App\Models\Hall;
use App\Models\Day;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timetables = Timetable::with(['group', 'subject', 'hall', 'day'])->latest()->get();
        $groups = Group::all();
        $subjects = Subject::all();
        $halls = Hall::all();
        $days = Day::all();
        return view('timetables.index', compact('timetables', 'groups', 'subjects', 'halls', 'days'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all();
        $subjects = Subject::all();
        $halls = Hall::all();
        $days = Day::all();
        return view('timetables.create', compact('groups', 'subjects', 'halls', 'days'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'subject_id' => 'required|exists:subjects,id',
            'hall_id' => 'required|exists:halls,id',
            'day_id' => 'required|exists:days,id',
            'time_from' => 'required',
            'time_to' => 'required',
        ]);

        $data = $request->only(['group_id', 'subject_id', 'hall_id', 'day_id', 'time_from', 'time_to']);
        $data['user_id'] = auth()->id();

        Timetable::create($data);

        return redirect()->route('timetables.index')->with('success', 'Timetable created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Timetable $timetable)
    {
        $timetable->load(['group', 'subject', 'hall', 'day', 'user']);
        return view('timetables.show', compact('timetable'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Timetable $timetable)
    {
        $groups = Group::all();
        $subjects = Subject::all();
        $halls = Hall::all();
        $days = Day::all();
        return view('timetables.edit', compact('timetable', 'groups', 'subjects', 'halls', 'days'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Timetable $timetable)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'subject_id' => 'required|exists:subjects,id',
            'hall_id' => 'required|exists:halls,id',
            'day_id' => 'required|exists:days,id',
            'time_from' => 'required',
            'time_to' => 'required',
        ]);

        $timetable->update($request->only(['group_id', 'subject_id', 'hall_id', 'day_id', 'time_from', 'time_to']));

        return redirect()->route('timetables.index')->with('success', 'Timetable updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timetable $timetable)
    {
        $timetable->delete();

        return redirect()->route('timetables.index')->with('success', 'Timetable deleted successfully.');
    }

    
}
