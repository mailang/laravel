   <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          {{--<div class="user-panel">--}}
            {{--<div class="pull-left image">--}}
              {{--<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />--}}
            {{--</div>--}}
            {{--<div class="pull-left info">--}}
              {{--<p>Alexander Pierce</p>--}}
              {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
            {{--</div>--}}
          {{--</div>--}}
          <!-- search form -->
            <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..." />
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>报表管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('reportform.addreport')}}"><i class="fa fa-circle-o"></i>上传报表</a></li>
                <li><a href="{{route('reportform.seereport')}}"><i class="fa fa-circle-o"></i>企业查看报表</a></li>
                <li><a href="{{route('reportform.reportlist')}}"><i class="fa fa-circle-o"></i>查看区域报表</a></li>
                <li><a href="{{route('reportform.submitreport')}}"><i class="fa fa-circle-o"></i>审核报表</a></li>
              </ul>
            </li>
          </ul>

        </section>
        <!-- /.sidebar -->
      </aside>
