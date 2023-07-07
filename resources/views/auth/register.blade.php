<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>register</title>
    @include('layouts.partials._header')
</head>

<body class="register-page">
    <div class="register-box">
        <div class="register-logo">
            <b>{{ __('register.app_name') }}</b>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">{{ __('register.new_user') }}</p>
            <form action="../../index.html" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="{{ __('register.fullname') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="{{ __('register.email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="{{ __('register.password') }}">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="{{ __('register.re_password') }}">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <button type="submit"
                            class="btn btn-primary btn-block btn-flat">{{ __('register.btn_register') }}</button>
                    </div><!-- /.col -->
                    <div class="col-xs-6">
                        <a href="#" class="btn btn-primary btn-block btn-flat">{{ __('register.btn_login') }}</a>
                    </div><!-- /.col -->
                </div>
            </form>

        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>
