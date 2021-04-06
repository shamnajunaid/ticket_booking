<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
   
    <!-- Font Awesome Icons -->
   
    <!-- Theme style -->
    <link href="{{ asset('public/assets/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('public/assets/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('public/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
  
    <!-- Theme style -->
    <link href="{{ asset('public/assets/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
  
  </head>
  <body class="login-page">
     <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form method="POST" action="{{ route('login') }}">
                        @csrf
          <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
             <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
           
          </div>
          <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
               <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
           
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-xs-4 pull-right">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
<!-- /.social-auth-links -->

      

      </div><!-- /.login-box-body -->
    </div>
    <!-- jQuery 2.1.3 -->
    <script src="{{ asset('public/assets/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('public/assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{ asset('public/assets/plugins/iCheck/icheck.min.js" type="text/javascript') }}"></script>
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