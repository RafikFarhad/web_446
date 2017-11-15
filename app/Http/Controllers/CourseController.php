<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Auth::user()->courses;
        return view('admin.course.index')
            ->with('courses', $courses);
    }
    public function create()
    {
        return view('admin.course.create');
    }
    public function save()
    {
        $data = Input::all();
        $course = new Course();
        $course->user_id = Auth::user()->id;
        $course->code = $data['code'];
        $course->title = $data['title'];
        $course->session = $data['session'];
        $course->department = $data['department'];
        try
        {
            $course->save();
        }
        catch( \Exception $e)
        {
            return Redirect::back()->withInput()->with('error', $e->getMessage()); //TODO: fix this
        }
        return Redirect::route('course.index')->with('success', 'Course added succesfully');
    }

}
