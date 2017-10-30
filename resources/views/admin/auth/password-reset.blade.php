@extends('layouts.app')
@section('body')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Reset Password</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home </a></li>
            <li class="active">Reset Password</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-body form">
                        <form action="{!! route('password.doReset') !!}" method="POST" class="horizontal-form" role="form">
                            {!! csrf_field() !!}
                            <div class="form-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="password" class="control-label">Password</label>
                                        <input type="password" name="password"
                                               class="form-control form-control-solid placeholder-no-fix"
                                               placeholder="Password" autocomplete="off" required/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="password_confirmation" class="control-label">Re-type Your
                                            Password</label>
                                        <input type="password" name="password_confirmation"
                                               class="form-control form-control-solid placeholder-no-fix"
                                               placeholder="Re-type Your Password" autocomplete="off" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-body">
                                <input type="submit" name="submit" class="btn btn-primary control-label" value="Submit"/>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection

@section('styles')
@endsection
@section('scripts')

@endsection