@extends('admin.layouts.main')
@section('body')
    @include('admin.singleCourse.note')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header text-center">
                        <h3 class="box-title">{!! $exam->name !!}</h3>
                        <h4> Full Mark: {!! $exam->full_mark !!} --- Count: {!! $exam->factor !!}% </h4>
                        <p><small>Double click to edit a mark.</small></p>
                        {{--<div class="box-tools">--}}
                        {{--<div class="input-group input-group-sm" style="width: 150px;">--}}
                        {{--<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">--}}

                        {{--<div class="input-group-btn">--}}
                        {{--<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <button type="button" class="btn btn-success btn-sm"
                                data-toggle="modal"
                                data-target="#viewExamModal{!! $exam->id !!}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            View & Edit Exam Details
                        </button>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Team Name/ID </th>
                                <th>Obtained Mark</th>
                                <th>
                                    Final Mark <br>
                                    <small>(after performing {!! $exam->factor !!}%)</small>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($exam->teams as $team)
                                <tr>
                                    <td>{!! $team->id !!}</td>
                                    <td>{!! $team->name !!}</td>
                                    <td>
                                        <a href="#" id="mark"  class="mark" data-token="{!! csrf_token() !!}"
                                           data-name="mark"
                                           data-type="text"
                                           data-url="{!! route('single.course.exam.mark.update', [$course->id, $team->pivot->exam_id, $team->id]) !!}"  data-title="Edit Mark">
                                            {!!   $team->pivot->mark  !!}
                                        </a>
                                    </td>
                                    <td>
                                        {!! $team->pivot->mark*$exam->factor/100.0 !!}
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
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $.fn.editable.defaults.mode = 'popup';
            $.fn.editable.defaults.send = "always";
            $.fn.editableform.buttons =
                '<button type="submit" class="btn btn-primary btn-sm editable-submit">'+
                '<i class="fa fa-fw fa-check"></i>'+
                '</button>'+
                '<button type="button" class="btn btn-default btn-sm editable-cancel">'+
                '<i class="fa fa-fw fa-times"></i>'+
                '</button>';
            $.fn.editable.defaults.params = function (params) {
                params._token = $(this).data("token");
                return params;
            };
            url = $(this).data('url');
            $('.mark').editable({
                placement: 'top',
                validate:function(value){
                    //console.log(isNaN(value))
                    if($.trim(value) === '')
                    {
                        return 'This field is required';
                    }
                    if(isNaN(value))
                    {
                        return 'Must be a number';
                    }
                },
                display: function(value, response) {
                    return false;   //disable this method
                },
                success: function(response, newValue) {
                    alert(response);
                    $(this).html( newValue);
                }
            });
        });
    </script>
@stop