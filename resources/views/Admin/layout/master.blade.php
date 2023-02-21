@include('Admin.layout.header')
<!-- Navbar -->
@include('Admin.layout.navbar')
<!-- /.navbar -->
<!-- Main Sidebar Container -->
@include('Admin.layout.sidebar')

<!-- Content Wrapper. Contains page content -->
@yield('content')
<!-- /.content-wrapper -->
@include('admin.layout.footer')
