<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use App\Team;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
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

    public function teams($id)
    {
        $course = Course::findOrFail($id);
        $teams = $course->teams;
        return view('admin.singleCourse.indexTeams')
            ->with('course', $course)
            ->with('teams', $teams)
            ->withTitle($course->title);
        return $id;
    }

    public function add_team($id)
    {
        $data = Input::all();
        $rules = [
            'team_name' => 'required|between:3,30',
            'member' => 'required'
        ];
        $validation = Validator::make($data, $rules);
        if($validation->fails())
        {
            return Redirect::back()->withErrors($validation);
        }
        DB::beginTransaction();
        $course = Course::findOrFail($id);
        $team = new Team();
        $team->name = $data['team_name'];
        $team->course_id = $course->id;
        $team->save();
        $message = [];
        foreach ($data['member'] as $member)
        {
            if($member==null) continue;
            $student = Student::where('reg_no', $member)->first();

            if ($student == null) {
                array_push($message, 'No student with registration number: '.$member.'.');
                continue;
            }
            try {
                $team->students()->attach($student->id);
            } catch (\Exception $e) {
                array_push($message, $e->getMessage());
                array_push($message, 'Registration no: '.$member.' already added to this course.');
            }
        }
        if(sizeof($message)==0)
        {
            DB::commit();
            return Redirect::back()->with('success', 'Added successfully');
        }
        DB::rollback();
        return Redirect::back()->withInput()->withErrors($message);
    }

    public function edit_team($id)
    {
        $data = Input::all();
        $rules = [
            'team_id' => 'required',
            'team_name' => 'required|between:3,30',
            'member' => 'required'
        ];
        $validation = Validator::make($data, $rules);
        if($validation->fails())
        {
            return Redirect::back()->withErrors($validation);
        }
        try
        {
            $course = Course::findOrFail($id);
            DB::beginTransaction();
            if($course->id==Auth::user()->id)
            {
                $team = Team::findOrFail($data['team_id']);
                $team->name = $data['team_name'];
                $team->save();
                $message = [];
                $students = [];
                foreach ($data['member'] as $member)
                {
                    if($member==null) continue;
                    $student = Student::where('reg_no', $member)->first();

                    if ($student == null) {
                        array_push($message, 'No student with registration number: '.$member.'.');
                        continue;
                    }
                    array_push($students, $student->id);
                }
                try {
                    $team->students()->sync($students);
                } catch (\Exception $e) {
                    array_push($message, $e->getMessage());
                    array_push($message, 'Same student can\'t be in two team');
                }
                if(sizeof($message)==0)
                {
                    DB::commit();
                    return Redirect::back()->with('success', 'Updated successfully');
                }
                DB::rollback();
                return Redirect::back()->withInput()->withErrors($message);
            }
            else throw new Exception("No Access.");
        }
        catch (\Exception $e)
        {
            return Redirect::back()->with('error', $e->getMessage()); //TODO:: delete this
            return Redirect::back()->with('error', 'Something went wrong.');
        }
    }

    public function delete_team($id, $team_id)
    {
        try
        {
            $course = Course::findOrFail($id);
            if($course->id==Auth::user()->id)
            {
                $team = Team::findOrFail($team_id);
                $team->delete();
            }
            else throw new Exception("No Access.");
            return Redirect::back()->with('success', 'Team deleted successfully');
        }
        catch (\Exception $e)
        {
            return Redirect::back()->with('error', $e->getMessage()); //TODO:: delete this
            return Redirect::back()->with('error', 'Something went wrong.');
        }
    }



}
