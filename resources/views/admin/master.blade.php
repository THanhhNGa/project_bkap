<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('public/admin')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/AdminLTE.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/_all-skins.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/style.css" />
  <script src="{{url('public')}}/ckeditor/ckeditor.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('index')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <ul class="nav navbar-nav navbar-right" style="margin-right: 10px">
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi {{Auth::user()->name}} <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Thông tin</a></li>
            <li><a href="{{route('logout_admin')}}">Thoát tài khoản</a></li>
          </ul>
        </li>
        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi Admin Manager <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('login_admin')}}">Đăng nhập</a></li>
            <li><a href="{{route('register_admin')}}">Đăng ký</a></li>
          </ul>
        </li>
        @endif

      </ul>

    </nav>
  </header>
  <!-- =============================================== -->
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý tài khoản</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list_admin')}}"><i class="fa fa-circle-o"></i> Danh sách tài khoản</a></li>
            <li><a href="{{route('register_admin')}}"><i class="fa fa-circle-o"></i> Thêm mới tài khoản</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý danh mục</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list_category')}}"><i class="fa fa-circle-o"></i> Danh sách danh mục SP</a></li>
            <li><a href="{{route('add_category')}}"><i class="fa fa-circle-o"></i> Thêm mới danh mục SP</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list_product')}}"><i class="fa fa-circle-o"></i> Danh sách sản phẩm</a></li>
            <li><a href="{{route('add_product')}}"><i class="fa fa-circle-o"></i> Thêm mới sản phẩm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý đơn hàng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('order_list')}}"><i class="fa fa-circle-o"></i> Danh sách hóa đơn</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý tin tức</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list_blog')}}"><i class="fa fa-circle-o"></i> Danh sách tin tức</a></li>
            <li><a href="{{route('add_blog')}}"><i class="fa fa-circle-o"></i> Thêm mới tin tức</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý banner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list_banner')}}"><i class="fa fa-circle-o"></i> Danh sách banner</a></li>
            <li><a href="{{route('add_banner')}}"><i class="fa fa-circle-o"></i> Thêm mới banner</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Quản lý comment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list_comment')}}"><i class="fa fa-circle-o"></i> Danh sách comment</a></li>
          </ul>
        </li>
        <li>
          <a href="">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Hot</small>
            </span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       
        @yield('title')
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          
        </div>
        <div class="box-body">
         @yield('main')
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="{{url('/public/admin')}}/js/jquery.min.js"></script>
<script src="{{url('/public/admin')}}/js/bootstrap.min.js"></script>
<script src="{{url('/public/admin')}}/js/adminlte.min.js"></script>
<script src="{{url('/public/admin')}}/js/chart.min.js"></script>
@yield('js')
</body>
</html>
