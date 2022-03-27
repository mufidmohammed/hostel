<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        $student_total = Student::count();
        $room_total = Room::count();
        $course_total = Course::count();

        $paid_students = Student::where('paid', true)->count();
        $students_checked_in = Student::where('checked_in', true)->count();

        $total_amount_paid = 0.0;
        foreach(Student::where('paid', true)->get() as $student)
        {
            $total_amount_paid += $student->fees;
        }

        return view('dashboard', compact('student_total', 'room_total', 'course_total', 'paid_students', 'total_amount_paid', 'students_checked_in'));

    }
}
