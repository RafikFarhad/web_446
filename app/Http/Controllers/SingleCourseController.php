<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class SingleCourseController extends Controller
{
    public function index($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.singleCourse.details')
            ->with('course', $course)
            ->withTitle($course->title);
    }

    public function students($id)
    {
        $course = Course::findOrFail($id);
        $students = $course->students;
        return view('admin.singleCourse.indexStudents')
            ->with('course', $course)
            ->with('students', $students)
            ->withTitle($course->title);
        return $id;
    }

    public function add_students($id)
    {
        $data = Input::all();
        $rules = [
            'reg_no' => 'required|size:10'
        ];
        $validation = Validator::make($data, $rules);
        if($validation->fails())
        {
            return Redirect::back()->withErrors($validation);
        }
        $course = Course::findOrFail($id);
        $student = Student::where('reg_no', $data['reg_no'])->first();
        if($student==null)
        {
            return Redirect::back()->with('error', 'No student with this registration no. Please create his/her entry first.');
        }
        try
        {
            $course->students()->attach($student->id);
        }
        catch(\Exception $e)
        {
            return Redirect::back()->with('error', 'Already added to this course.');
        }
        return Redirect::back()->with('success', 'Added successfully');
    }


}
