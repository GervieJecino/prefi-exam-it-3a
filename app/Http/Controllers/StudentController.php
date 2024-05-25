<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::all();
        return response()->json(['students' => $students]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'birthdate' => 'required|date_format:Y-m-d',
            'sex' => 'required|string|in:MALE,FEMALE',
            'address' => 'required|string',
            'year' => 'required|integer',
            'course' => 'required|string',
            'section' => 'required|string',
        ]);

        $student = Student::create($request->all());
        return response()->json(['student' => $student], 201);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return response()->json(['student' => $student]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'birthdate' => 'required|date_format:Y-m-d',
            'sex' => 'required|string|in:MALE,FEMALE',
            'address' => 'required|string',
            'year' => 'required|integer',
            'course' => 'required|string',
            'section' => 'required|string',
        ]);
        $student->update($request->all());
        return response()->json(['student' => $student]);
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return response()->json(['message' => 'Student deleted successfully']);
    }
}
