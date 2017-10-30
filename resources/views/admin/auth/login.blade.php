<!DOCTYPE html>
<html>
@include('admin.includes.header')
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{!! route('web.login') !!}"><b>Infancy</b>IT</a>
    </div>
@include('admin.includes.alert')
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{!! route('web.do.login') !!}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group has-feedback">
                <input name="email" type="email" class="form-control" placeholder="Email">
                <span class="fa fa-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Password">
                <span class="fa fa-key form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-7 col-xs-offset-1">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>



        <a href="{!! route('password.reset') !!}">I forgot my password</a><br>
        <a href="{!! route('web.register') !!}" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@include('admin.includes.script')

</body>
</html>














