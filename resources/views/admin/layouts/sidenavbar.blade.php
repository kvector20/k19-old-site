  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="@if (Auth::user()->image == '')
        {{ asset('/admin_style/images/avatar.jpg') }}
        @else
        {{ App\Helpers\Helpers::storage(Auth::user()->image) }}
              @endif" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        @can('topics.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-book"></i> <span>Topics</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('topics.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('topics.create', Auth::user())
                <li><a href="{{ route('topics.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('headlines.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-file"></i> <span>Headlines</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('headlines.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('headlines.create', Auth::user())
                <li><a href="{{ route('headlines.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('workshops.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-graduation-cap"></i> <span>Workshops</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('workshops.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('workshops.create', Auth::user())
                <li><a href="{{ route('workshops.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('events.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-calendar"></i> <span>Events</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('events.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('events.create', Auth::user())
                <li><a href="{{ route('events.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('participants19.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i> <span>Participants</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('participants19.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
            </ul>
          </li>
        @endcan

        @can('admins.view', Auth::user())
          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Admins</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('admins.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
              @can('admins.create', Auth::user())
                <li><a href="{{ route('admins.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
              @endcan
            </ul>
          </li>
        @endcan

        @can('roles.view', Auth::user())
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Roles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{ route('roles.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
            @can('roles.create', Auth::user())
              <li><a href="{{ route('roles.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
            @endcan
          </ul>
        </li>
        @endcan

        @can('permissions.view', Auth::user())
        <li class="treeview">
          <a href="#">
            <i class="fa fa-check-circle"></i> <span>Permissions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{ route('permissions.index') }}"><i class="fa text-red fa-circle-o"></i> View</a></li>
            @can('permissions.create', Auth::user())
              <li><a href="{{ route('permissions.create') }}"><i class="fa text-purple fa-circle-o"></i> New</a></li>
            @endcan
          </ul>
        </li>
        @endcan
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>