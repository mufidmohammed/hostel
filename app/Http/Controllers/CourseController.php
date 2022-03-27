<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $courses = Course::latest()->get();

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store()
    {
        $data = request()->validate([
            'type' => 'required',
            'name' => 'required'
        ]);

        Course::create($data);

        session()->flash('message', 'Course Added Successfully');

        return back();
    }

    public function edit($id)
    {
        $course = Course::find($id);

        return view('courses.edit', compact('course'));
    }

    public function update(Course $course)
    {
        request()->validate([
            'type' => 'required',
            'name' => 'required',
        ]);

        $course->name = request('name');
        $course->type = request('type');
        $course->save();

        session()->flash('message', 'Course updated successfully');

        return to_route('courses.index');
    }

    public function destroy($id)
    {
        Course::destroy($id);

        session()->flash('message', 'Course has been removed successfully');

        return to_route('courses.index');
    }
}
