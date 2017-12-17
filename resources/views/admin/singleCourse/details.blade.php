@extends('admin.layouts.main')

@section('body')

    @include('admin.singleCourse.note')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3> {!! $course->student_count() !!} </h3>
                        <p>Total Students</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="{!! route('single.course.teams', [$course->id]) !!}" class="small-box-footer">
                        Course Teams<i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
                {{----}}
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{!! $course->exam_count() !!} </h3>

                        <p>Total # of Exam</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{!! route('single.course.exams', [$course->id]) !!}" class="small-box-footer">
                        Course Exams<i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><i class="fa fa-bars" aria-hidden="true"></i></h3>

                        <p>Final Tabulation</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-anchor"></i>
                    </div>
                    <a href="#" class="small-box-footer">Add Final Tabulation <i
                                class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><i class="fa fa-key" aria-hidden="true"></i></h3>

                        <p>Generate Result</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Generate Result <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>


        <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection
