<?php
  $active_menu = (isset($data['active_menu'])) ? $data['active_menu'] : '';
  $current_page = (isset($data['current_page'])) ? $data['current_page'] : '';
  // var_dump($active_menu);
  // var_dump($current_page);

?>

<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">

      <a href="{{ route('home')}}" class="site_title"> <img class="img-thumbnail" width="50" src="{{asset('images/logo/logo1.jpg')}}" alt="logo">  <span> VOIP </span></a>
    </div>

    <div class="clearfix"></div>
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <!-- <h3>Menu</h3> -->
        <ul class="nav side-menu">
          <li class="{{($current_page == 'directory')?'current-page':''}}"><a href="{{route('home')}}"><i class="fa fa-home"></i>Directory</a></li>
          @guest
          @else
            <li class="{{($current_page == 'create-directory')?'current-page':''}}"><a href="{{route('create')}}"><i class="fa fa-plus"></i>Add Office</a></li>
            <!-- <li class="{{($current_page == 'dashboard')?'current-page':''}}"><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li> -->

            <!-- @can('judge')
            <li><a href="{{route('judging-index')}}"><i class="fa fa-cubes"></i>Judging</a></li>
            <li><a href="{{route('results-index')}}"><i class="fa fa-table"></i>Results</a></li>
            @endcan
          -->
          @endguest
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <!-- <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a> -->
      @guest
      <a class="" style="width:inherit" data-toggle="tooltip" data-placement="top" title="Login" href="{{ route('login') }}" >
        <span class="fa fa-sign-in" aria-hidden="true"></span>
      </a>
      @else
      <a class="" style="width:inherit" data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
      @endguest

    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
