<?php

namespace App\Http\Controllers;

use App\Course;
use App\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SingleCourseExamController extends Controller
{
    public function exams($id)
    {
        $course = Course::findOrFail($id);
        $exams = $course->exams;
        return view('admin.singleCourse.indexExams')
            ->with('course', $course)
            ->with('exams', $exams)
            ->withTitle($course->title);
        return $id;
    }

    public function add_exam($id)
    {
        $data = Input::all();
        $rules = [
            'exam_name' => 'required|between:3,30',
            'full_mark' => 'required',
            'factor' => 'required',
        ];
        $validation = Validator::make($data, $rules);
        if($validation->fails())
        {
            return Redirect::back()->withErrors($validation);
        }
        $course = Course::findOrFail($id);
        if($course->user_id==Auth::user()->id) {
            $exam = new Exam();
            $exam->name = $data['exam_name'];
            $exam->full_mark = $data['full_mark'];
            $exam->factor = $data['factor'];
            $exam->course_id = $course->id;
            if ($exam->save())
                return Redirect::back()->with('success', 'Added successfully');
            return Redirect::back()->withInput()->with('error', 'Something went wrong. Try again.');
        }
        else
            return Redirect::back()->withInput()->with('error', 'No Access.');
    }

    public function edit_exam($id)
    {
        $data = Input::all();
        $rules = [
            'exam_name' => 'required|between:3,30',
            'full_mark' => 'required',
            'factor' => 'required',
            'exam_id' => 'required',
        ];
        $validation = Validator::make($data, $rules);
        if($validation->fails())
        {
            return Redirect::back()->withErrors($validation);
        }
        $course = Course::findOrFail($id);
        if($course->user_id==Auth::user()->id) {
            $exam = Exam::findOrfail($data['exam_id']);
            $exam->name = $data['exam_name'];
            $exam->full_mark = $data['full_mark'];
            $exam->factor = $data['factor'];
            $exam->course_id = $course->id;
            if ($exam->save())
                return Redirect::back()->with('success', 'Updated successfully');
            return Redirect::back()->withInput()->with('error', 'Something went wrong. Try again.');
        }
        else
            return Redirect::back()->withInput()->with('error', 'No Access.');
    }

    public function delete_exam($id, $exam_id)
    {
        try
        {
            $course = Course::findOrFail($id);
            if($course->user_id==Auth::user()->id)
            {
                $exam = Exam::findOrFail($exam_id);
                $exam->delete();
            }
            else throw new \Exception("No Access.");
            return Redirect::back()->with('success', 'Test deleted successfully');
        }
        catch (\Exception $e)
        {
            return Redirect::back()->with('error', $e->getMessage()); //TODO:: delete this
            return Redirect::back()->with('error', 'Something went wrong.');
        }
    }

}
