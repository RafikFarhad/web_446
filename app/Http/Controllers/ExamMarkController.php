<?php

namespace App\Http\Controllers;

use App\Course;
use App\Exam;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ExamMarkController extends Controller
{
    public function index($id, $exam_id)
    {
        $course = Course::findOrFail($id);
        $exam = Exam::findOrFail($exam_id);
        if($course->user_id!=Auth::user()->id)
        {
            return Redirect::back('warning', 'No Access');
        }
        if($exam->course_id != $id)
        {
            return Redirect::back('warning', 'No Access');
        }
        $teams = $course->teams->pluck('id');
        $exam->teams()->syncWithoutDetaching($teams);

        return view('admin.exammark.index')
            ->with('course', $course)
            ->with('exam', $exam)
            ->withTitle($course->title);
    }

    public function ajaxMarkUpdate($id, $exam_id, $team_id)
    {
        $course = Course::findOrFail($id);
        $exam = Exam::findOrFail($exam_id);
        $team = Team::findOrFail($team_id);
        if($course->user_id!=Auth::user()->id || $exam->course_id != $id)
        {
            return 'Can not be updated.';
        }
        $data = Input::all();
        if($data['value'] > $exam->full_mark)
        {
            return 'Mark can not be greater then fullmark.';
        }
        $temp = $exam->teams()->where('team_id', $team_id)->first()->pivot;
        $temp->mark = $data['value'];
        $temp->save();
        return 'Updated.';
    }
}
