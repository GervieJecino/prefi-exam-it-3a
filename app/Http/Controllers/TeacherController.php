<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $teachers = Teacher::all();
        return response()->json(['teachers' => $teachers]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'birthdate' => 'required|date_format:Y-m-d',
            'sex' => 'required|string|in:MALE,FEMALE',
            'address' => 'required|string',
            'subject' => 'required|string',
            'years_of_experience' => 'required|integer|min:0',
        ]);

        $teacher = Teacher::create($request->all());
        return response()->json(['teacher' => $teacher], 201);
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return response()->json(['teacher' => $teacher]);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'birthdate' => 'required|date_format:Y-m-d',
            'sex' => 'required|string|in:MALE,FEMALE',
            'address' => 'required|string',
            'subject' => 'required|string',
            'years_of_experience' => 'required|integer|min:0',
        ]);
        $teacher->update($request->all());
        return response()->json(['teacher' => $teacher]);
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return response()->json(['message' => 'Teacher deleted successfully']);
    }
}
