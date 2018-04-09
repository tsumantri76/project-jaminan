<!DOCTYPE html>
<html>
  <head>
    <!-- header_include.blade.php -->
    @include('layouts.header_include')
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
      <div class="main-header">
        @include('layouts.header')
      </div>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Content Header (Page header) -->
          <section class="content">
            @yield('content')
          </section>
          <!-- /.content -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-wrapper -->
    </div>
    <footer class="main-footer">
      @include('layouts.footer')
    </footer>
    <!-- ./wrapper -->
   @include('layouts.footer_include')
  </body>
</html>