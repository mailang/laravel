<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>登录</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{asset('plugins/iCheck/square/blue.css')}}" rel="stylesheet" type="text/css" />
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <b  style="color:white;">安徽省小额贷款公司 </b><br><span style="color: #d2d6de;">报表管理系统 </span>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <form action="{{ route('login') }}" method="post">
          {{ csrf_field() }}
          {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
            {{--<label for="name" class="col-md-4 control-label">Username</label>--}}

            {{--<div class="col-md-6">--}}
              {{--<input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

              {{--@if ($errors->has('name'))--}}
                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
              {{--@endif--}}
            {{--</div>--}}
          {{--</div>--}}
          {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

            {{--<div class="col-md-6">--}}
              {{--<input id="password" type="password" class="form-control" name="password" required>--}}

              {{--@if ($errors->has('password'))--}}
                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
              {{--@endif--}}
            {{--</div>--}}
          {{--</div>--}}
          @if(count($errors)>0)
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <div class="form-group has-feedback">
            <input id="name" type="username" name="username" class="form-control" placeholder="用户名" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input id="password" name="password" type="password" class="form-control" placeholder="密码" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>


        <div class="social-auth-links text-center">
        <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
        </div><!-- /.social-auth-links -->
            </form>
        {{--<a href="#">I forgot my password</a><br>--}}
        {{--<a href="register.html" class="text-center">Register a new membership</a>--}}

      </div><!-- /.login-box-body -->
     <div style="padding-top: 100px; color:white; font-size: 12px; text-align: center;">   联系方式：156****8956 </div>

    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
