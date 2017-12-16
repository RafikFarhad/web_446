@extends('admin.layouts.main')

@section('body')

    @include('admin.singleCourse.note')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <button type="button" class="btn btn-info " data-toggle="modal" data-target="#addTeamModal">Add Team
                </button>

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
                                <th>Name</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>{!! $team->id !!}</td>
                                    <td>{!! $team->name !!}</td>
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
    <!-- Add Team Modal -->
    <div id="addTeamModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Team</h4>
                </div>
                <form action="{!! route('single.course.team.add', [$course->id]) !!}" method="POST">

                    <div class="modal-body">

                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="team_name" class="col-sm-4 control-label">Team Name</label>

                                    <div class="col-sm-8">
                                        <input type="text" name="team_name" class="form-control" id="team_name" placeholder="Team Name">
                                    </div>
                                </div>
                    </div>
                    <div class="modal-footer" style="    margin-top: 10px">
                        <button type="submit" class="btn btn-default"> Add !</button>
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
@endsection