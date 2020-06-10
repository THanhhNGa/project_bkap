<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lấy lại mật khẩu</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/AdminLTE.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/_all-skins.min.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/style.css" />
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><b>Lấy lại mật khẩu</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Nhập vào địa chỉ email</p>
        <form action="{{route('reset')}}" method="post">
          @csrf
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
          </div>
          
          <div class="row">
            
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Gửi</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
          Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
          Google+</a>
        </div>
        <!-- /.social-auth-links -->
        <a href="#">I forgot my password</a><br>
        <a href="{{route('register_admin')}}" class="text-center">Register a new membership</a>
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    <!-- jQuery 3 -->
    <script src="{{url('/public/admin')}}/js/jquery.min.js"></script>
    <script src="{{url('/public/admin')}}/js/bootstrap.min.js"></script>
    <script src="{{url('/public/admin')}}/js/adminlte.min.js"></script>
  </body>
</html>