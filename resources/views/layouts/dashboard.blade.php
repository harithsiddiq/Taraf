<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>دف جرافكس</title>

    @include('dashboard.include.dash-style')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('dashboard.components.navbar')

    <!-- Main Sidebar Container -->
    @include('dashboard.components.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!--          <h1 class="m-0 text-dark">Starter Page</h1>  -->
                    </div>

                </div>
            </div>
        </div>
        <!-- /.content-header -->

        @yield('content')


    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="d-none d-sm-inline">
            <strong>    جميع الحقوق محوظة لدف جرافكس </strong>
        </div>

    </footer>
</div>
</div>

    @include('dashboard.include.dash-script')

</body>
</html>
