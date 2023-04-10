<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{!! asset('plugins/fontawesome-free/css/all.min.css') !!}">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- DataTables -->
  <link rel="stylesheet" href="{!! asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') !!}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!! asset('dist/css/adminlte.min.css') !!}">
</head>

<body class="hold-transition sidebar-mini"  style="background-color: lavender">
  <div class="wrapper"  style="background-color: lavender">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light"  style="background-color: lavender">
      <!-- Left navbar links -->
      <ul class="navbar-nav" style="background-color: lavender">
        <li class="nav-item"  style="background-color: lavender">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu open">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <img src="{!! asset('dist/img/logo1.png') !!}" class="user-image" alt="User Image">
                  <span class="hidden-xs">Admin User</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header" style="background-color: darkgrey">
                    <img src="{!! asset('dist/img/logo1.png') !!}" class="img-circle" alt="User Image">
                    <p style="color:azure"> 
                      Admin User                
                    </p>
                  </li>
                  
                  <li class="user-footer">
                    <div class="float-left">
                      <a href="{{ route('role-edit', auth()->user()->user_id) }}" class="btn btn-default btn-success" style="background-color: darkorchid; color:beige">Profile</a>
                     </div>
                    <div class="float-right">
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat" style="background-color: darkorchid; color:beige">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                          @csrf
                          {{-- <i class="nav-icon fas fa-lock"></i> --}}
                          {{-- <p> --}}
                            Logout
                          {{-- </p> --}}
                        </form>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </li> 
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="{!! asset('dist/img/nft123.png') !!}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p style="color: #FFFFFF">
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" >
                <i class="nav-icon fas fa-users"></i>
                <p style="color: #FFFFFF">
                  Users Management
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('adminsprofile') }}" class="nav-link ">
                    <i class="far fas fa-user"></i>
                    <p style="color: #FFFFFF">&nbsp;
                       Admin
                    </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('userslist') }}" class="nav-link ">
                    <i class="far fas fa-users"></i>
                    <p style="color: #FFFFFF">&nbsp;
                      Users
                    </p>
                  </a>
                </li>
              </ul>
           </li>
            <li class="nav-item ">
              <a href="#" class="nav-link ">
                <i class="far fas fa-user"></i>
                <p style="color: #FFFFFF">&nbsp;
                  NFT Management
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('nftslist') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: #FFFFFF">&nbsp;
                      ALL NFTs
                    </p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item ">
              <a href="3" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p style="color: #FFFFFF">&nbsp;
                  All Transactions 
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('transactiondetails') }}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p style="color: #FFFFFF">&nbsp;
                      All Transactions Logs
                    </p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"  style="background-color: lavender">
      @yield('content')
      @yield('body')
      {{-- @yield('scripts') --}}
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
    <footer class="main-footer"  style="background-color: lavender">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{!! asset('plugins/jquery/jquery.min.js') !!}"></script>
  <!-- Bootstrap 4 -->
  <script src="{!! asset('plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  
  <!-- DataTables  & Plugins -->
<script src="{!! asset('plugins/datatables/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
<script src="{!! asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
<script src="{!! asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>
<script src="{!! asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') !!}"></script>
<script src="{!! asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') !!}"></script>
<script src="{!! asset('plugins/jszip/jszip.min.js') !!}"></script>
<script src="{!! asset('plugins/pdfmake/pdfmake.min.js') !!}"></script>
<script src="{!! asset('plugins/pdfmake/vfs_fonts.js') !!}"></script>
<script src="{!! asset('plugins/datatables-buttons/js/buttons.html5.min.js') !!}"></script>
<script src="{!! asset('plugins/datatables-buttons/js/buttons.print.min.js') !!}"></script>
<script src="{!! asset('plugins/datatables-buttons/js/buttons.colVis.min.js') !!}"></script>
@yield('scripts')
  <!-- AdminLTE App -->
  <script src="{!! asset('dist/js/adminlte.min.js') !!}"></script>
</body>

</html>