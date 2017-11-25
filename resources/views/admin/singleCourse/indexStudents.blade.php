@extends('admin.layouts.main')

@section('body')

    @include('admin.singleCourse.note')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div>
                    <div class="customRow">
                        <form action="{!! route('single.course.students.add', [$course->id]) !!}" method="POST">
                            {!! csrf_field() !!}
                            <div class="input-group input-group-md col-md-6 col-md-offset-6">
                                <input name="reg_no" type="text" class="form-control" required placeholder="Add Students">
                                <span class="input-group-btn">
                              <button type="submit" class="btn btn-info btn-flat">Add!</button>
                            </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header text-center">
                        <h3 class="box-title">All Registered Students</h3>
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
                                <th>Name</th>
                                <th>Registration No</th>
                                <th>Department</th>
                                <th>Session</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{!! $student->id !!}</td>
                                    <td>{!! $student->name !!}</td>
                                    <td>{!! $student->reg_no !!}</td>
                                    <td>{!! $student->department !!}</td>
                                    <td>{!! $student->session !!}</td>
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
