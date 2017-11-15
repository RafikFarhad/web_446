@extends('admin.layouts.main')

@section('body')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">My Courses</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content"><div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">My Courses</h3>
                        {{--<div class="box-tools">--}}
                            {{--<div class="input-group input-group-sm" style="width: 150px;">--}}
                                {{--<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">--}}

                                {{--<div class="input-group-btn">--}}
                                    {{--<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Code</th>
                                    <th>Title</th>
                                    <th>Department</th>
                                    <th>Session</th>
                                    <th>Started at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    <td>{!! $course->id !!}</td>
                                    <td>{!! $course->code !!}</td>
                                    <td>{!! $course->title !!}</td>
                                    <td>{!! $course->department !!}</td>
                                    <td>{!! $course->session !!}</td>
                                    <td>{!! Carbon::parse($course->created_at)->format('j S F, Y'); !!}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection
