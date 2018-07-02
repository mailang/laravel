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
          @if(auth()->user()->type=='1')
          <ul class="sidebar-menu">
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>报表管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('reportform.addreport')}}"><i class="fa fa-circle-o"></i>报表填报</a></li>
                <li><a href="{{route('reportform.reportlist')}}"><i class="fa fa-circle-o"></i>查看历史报表</a></li>
              </ul>
            </li>
          </ul>  
             <ul class="sidebar-menu">
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>企业管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('company.index')}}"><i class="fa fa-circle-o"></i>查看企业信息</a></li>
              </ul>
            </li>
          </ul>  
        @else 
        @if(auth()->user()->type=='2')
           <ul class="sidebar-menu">
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>报表管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="{{route('summaryform.uploadlist')}}"><i class="fa fa-circle-o"></i>查看上传报表</a></li>
                  <li><a href="{{route('summaryform.create')}}"><i class="fa fa-circle-o"></i>报表填报</a></li>
                  <li><a href="{{route('summaryform.index')}}"><i class="fa fa-circle-o"></i>查看历史报表</a></li>
              </ul>
            </li>
          </ul>
     @endif
            @if(auth()->user()->type=='3')
                <ul class="sidebar-menu">
                    <li class="treeview active">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>报表管理</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('summaryform.uploadlist')}}"><i class="fa fa-circle-o"></i>查看上传报表</a></li>
                            <li><a href="{{route('summaryform.index')}}"><i class="fa fa-circle-o"></i>查看历史报表</a></li>
                        </ul>
                    </li>
                </ul>
            @endif
   @endif
        </section>
        <!-- /.sidebar -->
      </aside>
