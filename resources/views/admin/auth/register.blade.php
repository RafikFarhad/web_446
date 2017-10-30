<!DOCTYPE html>
<html>
@include('admin.includes.header')
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="{!! route('web.register') !!}"><b>Infancy</b>IT</a>
    </div>

    @include('admin.includes.alert')

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="{!! route('web.do.register') !!}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group has-feedback">
                <input name="name" type="text" class="form-control" placeholder="Full name" required>
                <span class="fa fa-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="email" type="email" class="form-control" placeholder="Email" required>
                <span class="fa fa-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Password" required>
                <span class="fa fa-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password_confirmation" type="password" class="form-control" placeholder="Retype password" required>
                <span class="fa fa-key form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-7 col-xs-offset-1">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" required> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="{!! route('web.login') !!}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

@include('admin.includes.script')
</body>
</html>