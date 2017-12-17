@extends('admin.layouts.main')

@section('body')

    @include('admin.singleCourse.note')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="custom-row pull-right">
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#addTeamModal">Add
                    Team
                </button>
            </div>
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header text-center">
                        <h3 class="box-title">All Registered Teams</h3>
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
                                <th>Team Name/ID </th>
                                <th>Total Students</th>
                                <th>View & Edit</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>{!! $team->id !!}</td>
                                    <td>{!! $team->name !!}</td>
                                    <td>{!! $team->students_count() !!}</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                                data-target="#viewTeamModal{!! $team->id !!}">
                                            <i class="fa fa-eye" aria-hidden="true"></i> View & Edit
                                        </button>
                                    </td>
                                    <td>
                                        <a href="#"
                                           class="btn btn-danger btn-xs btn-archive deleteBtn"
                                           data-toggle="modal"
                                           data-target="#deleteConfirm"
                                           deleteId="{!! $team->id!!}">
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

    @foreach($teams as $team)
        <!-- View Team Modal -->
        <div id="viewTeamModal{!! $team->id !!}" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit {!! $team->name !!}</h4>
                    </div>
                    {{--<form action="{!! route('single.course.team.add', [$course->id]) !!}" method="POST">--}}
                    <div class="modal-body">
                        <form action="{!! route('single.course.team.edit', [$course->id]) !!}" method="POST"
                              class="form-horizontal">
                            {!! csrf_field() !!}
                            <input type="hidden" name="team_id" value="{!! $team->id !!}">
                            <div class="box-body virtual-div{!! $team->id !!}">
                                <div class="form-group">
                                    <label for="team_name" class="col-sm-3 control-label">Team Name *</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="team_name" class="form-control" id="Desired Team Name"
                                               value="{!! $team->name !!}" required>
                                    </div>
                                </div>
                                @php(
                                $i = 0
                                )
                                @foreach($team->students as $student)
                                <div class="form-group">
                                    <label for="member" class="col-sm-3 control-label">Student {!! ++$i !!} {!! $i==1?'*':'' !!} </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="member[]" class="form-control" id="member"
                                               {!! $i==1?'required':'' !!}
                                               value="{!! $student->reg_no !!}"
                                        >
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="button" class="btn btn-primary pull-left" onclick="addMore({!! $team->id !!})">Add More Student</button>
                                <button type="submit" class="btn btn-success pull-right">Update Team !!!</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>

                    </div>
                    {{--<div class="modal-footer" style="    margin-top: 10px">--}}
                    {{--<button type="submit" class="btn btn-default"> Add !</button>--}}
                    {{--</div>--}}
                    {{--</form>--}}
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
                    Are you sure to delete?
                </div>
                <div class="modal-footer">
                    <form action="{!! route('single.course.team.delete', [0, 0]) !!}" method="POST" class="deleteForm">
                        {!! csrf_field() !!}
                        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                        <input type="submit" class="btn btn-danger" value="Yes. Delete!">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Add Team Modal -->
    <div id="addTeamModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Team</h4>
                </div>
                {{--<form action="{!! route('single.course.team.add', [$course->id]) !!}" method="POST">--}}
                <div class="modal-body">
                    <form action="{!! route('single.course.team.add', [$course->id]) !!}" method="POST"
                          class="form-horizontal">
                        {!! csrf_field() !!}
                        <div class="box-body  virtual-div0">
                            <div class="form-group">
                                <label for="team_name" class="col-sm-3 control-label">Team Name *</label>
                                <div class="col-sm-9">
                                    <input type="text" name="team_name" class="form-control" id="Desired Team Name"
                                           value="Team No: **" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="member" class="col-sm-3 control-label">Student 1 *</label>

                                <div class="col-sm-9">
                                    <input type="text" name="member[]" class="form-control" id="member"
                                           placeholder="Student 1" required>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="button" class="btn btn-primary pull-left" onclick="addMore(0)">Add More Student</button>

                            <button type="submit" class="btn btn-success pull-right">Register New Team !</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>

                </div>
                {{--<div class="modal-footer" style="    margin-top: 10px">--}}
                {{--<button type="submit" class="btn btn-default"> Add !</button>--}}
                {{--</div>--}}
                {{--</form>--}}
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
            var url = "<?php echo URL::route('single.course.team.delete', [$course->id, false]); ?>";
            $(".deleteForm").attr("action", url + '/' + deleteId);
        });
        function addMore(id)
        {
            console.log('ID: '+id );
            var wrapper   = $(".virtual-div" + id); //Fields wrapper
            var add_button = $(".add_field_button"+id); //Add button ID

            //$(add_button).click(function(e) //on add input button click
            {
                //e.preventDefault();
                $(wrapper).append(
                    '<div class="form-group">\n' +
                    '<label for="member" class="col-sm-3 control-label">New Student</label>\n' +
                    '<div class="col-sm-8">\n' +
                    '<input type="text" name="member[]" class="form-control" id="member"\n' +
                    'placeholder="New Student">\n' +
                    '</div>\n' +
                    '<div class="col-sm-1 remove-icon" id="#del">' +
                    '<a  href="#" class="remove_field"> <i class="fa fa-times" aria-hidden="true"></i> </a> ' +
                    '</div>' +
                    '</div>');


            }
        }
        function remove(id)
        {
//            console.log('ID: '+id );
            var wrapper   = $(".virtual-div" + id); //Fields wrapper
            var add_button = $(".add_field_button"+id); //Add button ID
            //$(add_button).click(function(e) //on add input button click
            {
                $(this).parents(".form-group").remove();
            }
        }
        $(document).ready(function () {
            $(document).on("click", ".remove_field", function (e) //user click on remove text
            {
                console.log('DELETE CLICKED');
                e.preventDefault();
                $(this).parents(".form-group").remove();
            });
            // console.log("ready!");
        });
    </script>
@endsection