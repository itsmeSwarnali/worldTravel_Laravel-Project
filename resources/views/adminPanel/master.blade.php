<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<style>
    :not(.layout-fixed) .main-sidebar {
        height: inherit;
        min-height: 100%;
        position: absolute;
        top: 0;
        background-color: #040e27;
    }

    .card-body.table-responsive {
        background-color: #fcf8f2;
    }
    .card-header {
        background-color: lightseagreen!important;
    }

    .nav-sidebar>.nav-item .nav-icon{
        color: darkturquoise;
    }


    .btn-info {

        background-color: teal!important;


    }


    .brand-link .brand-image{
        float: left;
        line-height: .8;
        margin-left: 3.8px!important;
        margin-right: 0.5rem;
        margin-top: -10px!important;
        max-height: 52px!important;
        width: 50px!important;
    }


    button.btn.btn-primary {
        background-color: #17a2b8!important;
        border: #17a2b8!important;
    }

    a.brand-link {
        color:white;
        font-weight:500;
    }
    a.brand-link:hover {
        font-weight:900;
    }

</style>

<!-- Head part-->
@include('adminPanel.head')



<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('adminPanel.navBar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('adminPanel.sideBar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('main_content')

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('adminPanel.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('adminPanel.script')
</body>
</html>
