
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perky Rabbit| Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/backend_assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/backend_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/backend_assets/dist/css/adminlte.min.css')}}">

</head>

<body class="hold-transition login-page">
<div class="login-box ">
  <div class="login-logo">
    <a href="../../index2.html"><b class="text-warning">Perky </b><span class="" style="color:#89B000" >Rabbit</span></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">

    <div class="card-body login-card-body">
    
    @if ($message = Session::get('warning'))
          <div class="alert alert-block" style="background-color:#D4EDDA">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong class="text-danger font-weight">{{ $message }}</strong>
          </div>
          @endif

          @if ($message = Session::get('success'))
          <div class="alert alert-light alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong class="text-success font-weight">{{ $message }}</strong>
          </div>
          @endif


      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{url('/login-status')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <span class="focus-input100"></span>
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>

              </span>
              @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <div class="input-group mb-3">
          @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              <span style="color: red;" class="text-danger"> {{$errors->first('email')}}</span>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
           
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
          </div>
             
          </div>
        </div>
        <div class="input-group mb-3">
           <span style="color: red;" class="text-danger"> {{$errors->first('password')}}</span>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <br>
      <br>

      <form method="get" action="{{url('/registration')}}">

      <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register Here</button>
          </div>


</form>





        </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('assets/backend_assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/backend_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/backend_assets/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
