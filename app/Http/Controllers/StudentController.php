<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        $rooms = Room::all();
        $courses = Course::all();
        return view('students.create', compact('rooms', 'courses'));
    }

    public function store()
    {
        $data = request()->validate(
            [
                'room_id' => 'required|numeric',
                'fees' => 'required',
                'start_date' => 'required',
                'course_id' => 'required|string',
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'gender' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'level' => 'required',
                'age' => 'required|numeric',
                'paid' => 'required',
                'checked_in' => 'required',
            ]
        );

        Student::create($data);

        session()->flash('message', 'Student added successfully');

        return to_route('students.index');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $rooms = Room::all();
        $courses = Course::all();

        return view('students.edit', compact('student', 'rooms', 'courses'));
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
                'room_id' => 'required|numeric',
                'fees' => 'required',
                'start_date' => 'required',
                'course_id' => 'required|string',
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'gender' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'level' => 'required',
                'age' => 'required|numeric',
                'paid' => 'required',
                'checked_in' => 'required',
            ]
        );

        $student = Student::find($id);

        $student->room_id = $request->room_id;
        $student->fees = $request->fees;
        $student->start_date = $request->start_date;
        $student->course_id = $request->course_id;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->gender = $request->gender;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->level = $request->level;
        $student->age = $request->age;
        $student->paid = $request->paid;
        $student->checked_in = $request->checked_in;

        $student->save();

        session()->flash('message', 'Student record updated successfully');

        return to_route('students.index');
    }

    public function destroy($id)
    {
        Student::destroy($id);

        session()->flash('message', 'Student record deleted successfully');

        return to_route('students.index');
    }
}
