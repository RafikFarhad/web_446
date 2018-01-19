@extends('admin.layouts.main')

@section('body')

    @include('admin.singleCourse.note')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="custom-row pull-right">
                <button type="button" class="btn btn-success btn-lg"
                        data-toggle="modal" data-target="#addExamModal">Add New Test
                </button>
            </div>
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header text-center">
                        <h3 class="box-title">All tests of this course</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Exam Name</th>
                                <th>Full Mark</th>
                                <th>Factor</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($exams as $exam)
                                <tr>
                                    <td>{!! $exam->id !!}</td>
                                    <td>{!! $exam->name !!}</td>
                                    <td>{!! $exam->full_mark !!}</td>
                                    <td>{!! $exam->factor !!} %</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm"
                                                data-toggle="modal"
                                                data-target="#viewExamModal{!! $exam->id !!}">
                                            <i class="fa fa-eye" aria-hidden="true"></i> View & Edit
                                        </button>
                                    </td>
                                    <td>
                                        <a href="#"
                                           class="btn btn-danger btn-xs btn-archive deleteBtn"
                                           data-toggle="modal"
                                           data-target="#deleteConfirm"
                                           deleteId="{!! $exam->id!!}">
                                            Delete
                                        </a>
                                    </td>
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

    @foreach($exams as $exam)
        <!-- View Exam Modal -->
        <div id="viewExamModal{!! $exam->id !!}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit: <strong>{!! $exam->name !!}</strong></h4>
                    </div>
                    <form action="{!! route('single.course.exam.edit', [$course->id]) !!}" method="POST">
                        <div class="modal-body">
                            <div class="form-horizontal">
                                {!! csrf_field() !!}
                                <input type="hidden" name="exam_id" value="{!! $exam->id !!}">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exam_name" class="col-sm-3 control-label">Test Name *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="exam_name" class="form-control" id="exam_name"
                                                   placeholder="Test name eg: Attendance / Submission 1 / Viva 1 "
                                                   value="{!! $exam->name !!}" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="full_mark" class="col-sm-3 control-label">Full Mark *</label>

                                        <div class="col-sm-9">
                                            <input type="number" name="full_mark" class="form-control" id="full_mark"
                                                   placeholder="Total Mark for this test"
                                                   value="{!! $exam->full_mark !!}" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="factor" class="col-sm-3 control-label">Count this test as %</label>

                                        <div class="col-sm-9">
                                            <input type="number" name="factor" class="form-control" id="factor"
                                                   placeholder="20% / 30% / 50%"
                                                   value="{!! $exam->factor !!}" required>
                                        </div>
                                    </div>


                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success pull-right">Update Exam Details !!!</button>
                                </div>
                                <!-- /.box-footer -->
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    @endforeach


    <!-- Delete Modal -->
    <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>
                <div class="modal-body">
                    Are you sure to delete this Test?
                </div>
                <div class="modal-footer">
                    <form action="{!! route('single.course.exam.delete', [0, 0]) !!}" method="POST" class="deleteForm">
                        {!! csrf_field() !!}
                        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                        <input type="submit" class="btn btn-danger" value="Yes. Delete!">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Add Exam Modal -->
    <div id="addExamModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Test</h4>
                </div>
                <form action="{!! route('single.course.exam.add', [$course->id]) !!}" method="POST">
                    <div class="modal-body">
                        <div class="form-horizontal">
                            {!! csrf_field() !!}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exam_name" class="col-sm-3 control-label">Test Name *</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="exam_name" class="form-control" id="exam_name"
                                               placeholder="Test name eg: Attendance / Submission 1 / Viva 1 " required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="full_mark" class="col-sm-3 control-label">Full Mark *</label>

                                    <div class="col-sm-9">
                                        <input type="number" name="full_mark" class="form-control" id="full_mark"
                                               placeholder="Total Mark for this test" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="factor" class="col-sm-3 control-label">Count this test as %</label>

                                    <div class="col-sm-9">
                                        <input type="number" name="factor" class="form-control" id="factor"
                                               placeholder="20% / 30% / 50%" required>
                                    </div>
                                </div>


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-success pull-right">Register New Test !</button>
                            </div>
                            <!-- /.box-footer -->
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- /.content -->
@endsection


@section('script')
    {{--<script>--}}
    {{--function addForm() {--}}
    {{--BootstrapDialog.show({--}}
    {{--title: 'Button Hotkey',--}}
    {{--message: $('<textarea class="form-control" placeholder="Try to input multiple lines here..."></textarea>'),--}}
    {{--buttons: [{--}}
    {{--label: '(Enter) Button A',--}}
    {{--cssClass: 'btn-primary',--}}
    {{--hotkey: 13, // Enter.--}}
    {{--action: function() {--}}
    {{--alert('You pressed Enter.');--}}
    {{--}--}}
    {{--}]--}}
    {{--});--}}
    {{--}--}}
    {{--</script>--}}
    <script>
        $(document).on("click", ".deleteBtn", function () {
            var deleteId = $(this).attr('deleteId');
            var url = "<?php echo URL::route('single.course.exam.delete', [$course->id, false]); ?>";
            $(".deleteForm").attr("action", url + '/' + deleteId);
        });
    </script>
@endsection