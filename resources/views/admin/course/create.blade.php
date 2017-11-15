@extends('admin.layouts.main')

@section('body')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Create Course</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title text-center">Add Course</h3>
                    </div>
                    <form action="{!! route('course.create.post') !!}" method="post">
                        {!! csrf_field() !!}
                        <div class="box-body">
                            <div class="input-group">
                                <span class="input-group-addon">Course Code</span>
                                <input name="code" type="text" class="form-control" placeholder="Course Code" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">Course Title</span>
                                <input name="title" type="text" class="form-control" placeholder="Course Title" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">Session</span>
                                <select name="session" id="" class="form-control" required>
                                    <option value="2013">2013-2014</option>
                                    <option value="2014">2014-2015</option>
                                    <option value="2015">2015-2016</option>
                                    <option value="2016">2016-2017</option>
                                    <option value="2017">2017-2018</option>
                                </select>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">Department</span>
                                <select name="department" id="" class="form-control" required>
                                    <option value="CSE">331 - Computer Science & Engineering</option>
                                </select>
                            </div>
                            <br>

                            <h4>
                                Add students to this course <br>
                                <small class="text-blue">Enter the first 7 disit of registration number.</small>

                            </h4>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                      <input name="add" type="checkbox">
                                    </span>
                                        <input name="prefix" type="text" class="form-control" placeholder="2013331***">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <div class="row">
                                <button class="btn btn-md btn-success pull-right" style="margin-right: 25px;">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection
