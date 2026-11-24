<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $students = User::latest()->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|min:6',
            'age'          => 'nullable|integer',
            'phone_number' => 'nullable|string|max:20',
            'address'      => 'nullable|string|max:255',
        ]);

        User::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'password'     => Hash::make($request->password),
            'age'          => $request->age,
            'phone_number' => $request->phone_number,
            'address'      => $request->address,
        ]);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show(User $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(User $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, User $student)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|unique:users,email,' . $student->id,
            'age'          => 'nullable|integer',
            'phone_number' => 'nullable|string|max:20',
            'address'      => 'nullable|string|max:255',
        ]);

        $data = [
            'name'         => $request->name,
            'email'        => $request->email,
            'age'          => $request->age,
            'phone_number' => $request->phone_number,
            'address'      => $request->address,
        ];

        if ($request->filled('password')) {
            $request->validate(['password' => 'min:6']);
            $data['password'] = Hash::make($request->password);
        }

        $student->update($data);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(User $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
