<?php
  $active_menu = (isset($data['active_menu'])) ? $data['active_menu'] : '';
  $current_page = (isset($data['current_page'])) ? $data['current_page'] : '';
  // var_dump($active_menu);
  // var_dump($current_page);

?>

<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?php echo e(route('home')); ?>" class="site_title"> <img class="img-thumbnail" width="50" src="<?php echo e(asset('images/logo/ati-logo-colors.png')); ?>" alt="logo">  <span>HRIS <small>(ATI VIII)</small> </span></a>
    </div>

    <div class="clearfix"></div>
    <br />
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <!-- <h3>Menu</h3> -->
        <ul class="nav side-menu">
          <li class="<?php echo e(($current_page == 'home')?'current-page':''); ?>"><a href="<?php echo e(route('home')); ?>"><i class="fa fa-home"></i>Home</a></li>
          <?php if(auth()->guard()->guest()): ?>
          <?php else: ?>
          <li class="<?php echo e(($current_page == 'dashboard')?'current-page':''); ?>"><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
          <li class="<?php echo e(($active_menu == 'administration')? 'active':''); ?>"><a><i class="fa fa-gears"></i> Administration <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="<?php echo e(($current_page == 'roles')?'current-page':''); ?>"><a href="<?php echo e(route('roles.index')); ?>">Roles</a></li>
              <li class="<?php echo e(($current_page == 'users')?'current-page':''); ?>"><a href="<?php echo e(route('users.index')); ?>">Users</a></li>
            </ul>
          </li>
          <?php endif; ?>
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
      <?php if(auth()->guard()->guest()): ?>
      <a class="" style="width:inherit" data-toggle="tooltip" data-placement="top" title="Login" href="<?php echo e(route('login')); ?>" >
        <span class="fa fa-sign-in" aria-hidden="true"></span>
      </a>
      <?php else: ?>
      <a class="" style="width:inherit" data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
      <?php endif; ?>

    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
