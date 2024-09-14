<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('includes.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      
    <!-- Main content -->
    @yield('content')

    <!-- /.content -->
  </div>

  <!-- Small Box (Stat card) -->
  @yield('smallbox')
  <!-- /.row -->

  <!-- /.content-wrapper -->
  @include('includes.footer')


</div>
<!-- ./wrapper -->
  @include('includes.script')

</body>
</html>
