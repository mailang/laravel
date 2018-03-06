<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>小贷</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
   <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
   <link href="{{asset('css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{{asset('plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/app.min.js')}}" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}" type="text/javascript"></script>

    <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>


    <script src="{{asset('js/alert.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js')}}"></script>
    <script src="{{asset('js/jquery.linq.min.js')}}"></script>
    <script src="{{asset('js/jquery.json.min.js')}}"></script>
    <script src="{{asset('js/xlsx.core.min.js')}}"></script>
    <script src="{{asset('js/FileSaver.min.js')}}"></script>
    <script src="{{asset('js/tableExport.min.js')}}"></script>
  </head>
  <body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="javascript:void(0)" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">小贷</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">小贷报表管理</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              {{--<li class="dropdown messages-menu">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                  {{--<i class="fa fa-envelope-o"></i>--}}
                  {{--<span class="label label-success">4</span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                  {{--<li class="header">You have 4 messages</li>--}}
                  {{--<li>--}}
                    {{--<!-- inner menu: contains the actual data -->--}}
                    {{--<ul class="menu">--}}
                      {{--<li><!-- start message -->--}}
                        {{--<a href="#">--}}
                          {{--<div class="pull-left">--}}
                            {{--<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />--}}
                          {{--</div>--}}
                          {{--<h4>--}}
                            {{--Support Team--}}
                            {{--<small><i class="fa fa-clock-o"></i> 5 mins</small>--}}
                          {{--</h4>--}}
                          {{--<p>Why not buy a new awesome theme?</p>--}}
                        {{--</a>--}}
                      {{--</li><!-- end message -->--}}
                    {{--</ul>--}}
                  {{--</li>--}}
                  {{--<li class="footer"><a href="#">See All Messages</a></li>--}}
                {{--</ul>--}}
              {{--</li>--}}
              {{--<!-- Notifications: style can be found in dropdown.less -->--}}
              {{--<li class="dropdown notifications-menu">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                  {{--<i class="fa fa-bell-o"></i>--}}
                  {{--<span class="label label-warning">10</span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                  {{--<li class="header">You have 10 notifications</li>--}}
                  {{--<li>--}}
                    {{--<!-- inner menu: contains the actual data -->--}}
                    {{--<ul class="menu">--}}
                      {{--<li>--}}
                        {{--<a href="#">--}}
                          {{--<i class="fa fa-users text-aqua"></i> 5 new members joined today--}}
                        {{--</a>--}}
                      {{--</li>--}}
                    {{--</ul>--}}
                  {{--</li>--}}
                  {{--<li class="footer"><a href="#">View all</a></li>--}}
                {{--</ul>--}}
              {{--</li>--}}
              {{--<!-- Tasks: style can be found in dropdown.less -->--}}
              {{--<li class="dropdown tasks-menu">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                  {{--<i class="fa fa-flag-o"></i>--}}
                  {{--<span class="label label-danger">9</span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                  {{--<li class="header">You have 9 tasks</li>--}}
                  {{--<li>--}}
                    {{--<!-- inner menu: contains the actual data -->--}}
                    {{--<ul class="menu">--}}
                      {{--<li><!-- Task item -->--}}
                        {{--<a href="#">--}}
                          {{--<h3>--}}
                            {{--Design some buttons--}}
                            {{--<small class="pull-right">20%</small>--}}
                          {{--</h3>--}}
                          {{--<div class="progress xs">--}}
                            {{--<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">--}}
                              {{--<span class="sr-only">20% Complete</span>--}}
                            {{--</div>--}}
                          {{--</div>--}}
                        {{--</a>--}}
                      {{--</li><!-- end task item -->--}}
                    {{--</ul>--}}
                  {{--</li>--}}
                  {{--<li class="footer">--}}
                    {{--<a href="#">View all tasks</a>--}}
                  {{--</li>--}}
                {{--</ul>--}}
              {{--</li>--}}
              <!-- User Account: style can be found in dropdown.less -->
              {{--<li class="dropdown user user-menu">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                  {{--<img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />--}}
                  {{--<span class="hidden-xs">Alexander Pierce</span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu">--}}
                  {{--<!-- User image -->--}}
                  {{--<li class="user-header">--}}
                    {{--<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />--}}
                    {{--<p>--}}
                      {{--Alexander Pierce - Web Developer--}}
                      {{--<small>Member since Nov. 2012</small>--}}
                    {{--</p>--}}
                  {{--</li>--}}
                  {{--<!-- Menu Body -->--}}
                  {{--<li class="user-body">--}}
                    {{--<div class="col-xs-4 text-center">--}}
                      {{--<a href="#">Followers</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-4 text-center">--}}
                      {{--<a href="#">Sales</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-4 text-center">--}}
                      {{--<a href="#">Friends</a>--}}
                    {{--</div>--}}
                  {{--</li>--}}
                  {{--<!-- Menu Footer-->--}}
                  {{--<li class="user-footer">--}}
                    {{--<div class="pull-left">--}}
                      {{--<a href="#" class="btn btn-default btn-flat">Profile</a>--}}
                    {{--</div>--}}
                    {{--<div class="pull-right">--}}
                      {{--<a href="{{ route('logout') }}"--}}
                         {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>--}}
                    {{--</div>--}}
                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                      {{--{{ csrf_field() }}--}}
                    {{--</form>--}}
                  {{--</li>--}}

                {{--</ul>--}}
              {{--</li>--}}
              {{--<!-- Control Sidebar Toggle Button -->--}}
              <li class="dropdown navbar-user">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">{{ auth()->user()->name != "" ? auth()->user()->name:auth()->user()->username}}</span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInLeft">
                  <li class="arrow"></li>
                  <li><a href="{{ route('modifypassword') }}">修改密码</a></li>
                  <li class="divider"></li>
                  <li><a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">退出登录</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
   
         @include('layouts.left')

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
       @yield('title')
        </section>

        <!-- Main content -->
        <section class="content">
      <div class="box">
        <div class="info">
        @if(count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        </div>
        @include('flash::message')
        @yield('content')
        </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
   
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h5 class="modal-title" id="myModalLabel">
                    友情提示！
                </h5>
            </div>
            <div class="modal-body" tyle=" text-align:center;">
                提示内容
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<style type="text/css">
.modal-dialog{-webkit-transform:translate(0,-50%);-ms-transform:translate(0,-50%);
    -o-transform:translate(0,-50%);transform:translate(0,-50%);position:absolute;width: 280px; height:auto;left:40%;top:40%}
    .modal-header{background-color: #3c8dbc;color:white;}
    .modal-content{min-height: 200px;height: auto !important;}
</style>
    <script>
        $(function () {
            $('.table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                "oLanguage": {
                    "sProcessing":   "处理中...",
                    "sLengthMenu":   "_MENU_ 记录/页",
                    "sZeroRecords":  "没有匹配的记录",
                    "sInfo":         "显示第 _START_ 至 _END_ 项记录，共 _TOTAL_ 项",
                    "sInfoEmpty":    "显示第 0 至 0 项记录，共 0 项",
                    "sInfoFiltered": "(由 _MAX_ 项记录过滤)",
                    "sInfoPostFix":  "",
                    "sSearch":       "过滤:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "首页",
                        "sPrevious": "上页",
                        "sNext":     "下页",
                        "sLast":     "末页"
                    }
                }
            });
            var modeltext = "{{ session('modeltext')}}";
            if(modeltext != '')
            {
                $(".modal-body").text(modeltext);
                $("#myModal").modal('show');
            }
        })
    </script>
  </body>
</html>
