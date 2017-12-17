<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');



Route::group(['middleware' => ['role:teacher']], function () {
//    COURSE CRUD
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/create-course', 'CourseController@create')->name('course.create');
    Route::post('/create-course', 'CourseController@save')->name('course.create.post');
    Route::get('/my-course', 'CourseController@index')->name('course.index');

//    INDIVIDUAL COURSE
    Route::get('/my-course/{id}', 'SingleCourseController@index')->name('single.course');
    Route::get('/my-course/{id}/teams', 'SingleCourseController@teams')->name('single.course.teams');
    Route::post('/my-course/{id}/team/add', 'SingleCourseController@add_team')->name('single.course.team.add');
    Route::post('/my-course/{id}/team/edit', 'SingleCourseController@edit_team')->name('single.course.team.edit');
    Route::post('/my-course/{id}/team/delete/{team_id}', 'SingleCourseController@delete_team')->name('single.course.team.delete');

    Route::get('/my-course/{id}/exams', 'SingleCourseExamController@exams')->name('single.course.exams');
    Route::post('/my-course/{id}/exam/add', 'SingleCourseExamController@add_exam')->name('single.course.exam.add');
    Route::post('/my-course/{id}/exam/edit', 'SingleCourseExamController@edit_exam')->name('single.course.exam.edit');
    Route::post('/my-course/{id}/exam/delete/{exam_id}', 'SingleCourseExamController@delete_exam')->name('single.course.exam.delete');


});
