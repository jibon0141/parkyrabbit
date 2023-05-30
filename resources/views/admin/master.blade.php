<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perky Rabbit | Dashboard</title>
    
    @include('admin.include.css')
    
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">

    

    <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('assets/backend_assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
      </div>
      <!-- Navbar -->
      @include('admin.include.nav')
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      @include('admin.include.asidebar')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        
        
        <!-- /.content-header -->
        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      @include('admin.include.footer')
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('admin.include.js')
    <!-- jQuery -->
  </body>
</html>