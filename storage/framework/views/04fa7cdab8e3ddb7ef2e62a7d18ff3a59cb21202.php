<?php
  $active_menu = (isset($data['active_menu'])) ? $data['active_menu'] : '';
  $current_page = (isset($data['current_page'])) ? $data['current_page'] : '';
  // var_dump($active_menu);
  // var_dump($current_page);

?>

<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?php echo e(route('home')); ?>" class="site_title"> <img class="img-thumbnail" width="50" src="<?php echo e(asset('images/logo/logo1.jpg')); ?>" alt="logo">  <span>VSU <small>Pageant</small> </span></a>
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

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('judge')): ?>
            <li><a href="<?php echo e(route('judging-index')); ?>"><i class="fa fa-cubes"></i>Judging</a></li>
            <li><a href="<?php echo e(route('results-index')); ?>"><i class="fa fa-table"></i>Results</a></li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('team-menu')): ?>
            <li class="<?php echo e(($current_page == 'teams')?'current-page':''); ?>"><a href="<?php echo e(route('teams.index')); ?>"><i class="fa fa-group"></i>Teams</a></li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('candidate-menu')): ?>
            <li class="<?php echo e(($current_page == 'candidates')?'current-page':''); ?>"><a href="<?php echo e(route('candidates.index')); ?>"><i class="fa fa-child"></i>Candidates</a></li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('round-menu')): ?>
            <li class="<?php echo e(($current_page == 'rounds')?'current-page':''); ?>"><a href="<?php echo e(route('rounds.index')); ?>"><i class="fa fa-bullseye"></i>Rounds</a></li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('criteria-menu')): ?>
            <li class="<?php echo e(($current_page == 'criteria')?'current-page':''); ?>"><a href="<?php echo e(route('criteria.index')); ?>"><i class="fa fa-line-chart"></i>Criteria</a></li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access-system-config')): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access-system-config')): ?>
            <li ><a><i class="fa fa-sun-o"></i> Contest <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li ><a href="<?php echo e(route('contest-index')); ?>">Register contestant</a></li>
              </ul>
            </li>
            <?php endif; ?>
            <li class="<?php echo e(($active_menu == 'administration')? 'active':''); ?>"><a><i class="fa fa-gears"></i> Administration <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li class="<?php echo e(($current_page == 'roles')?'current-page':''); ?>"><a href="<?php echo e(route('roles.index')); ?>">Roles</a></li>
                <li class="<?php echo e(($current_page == 'users')?'current-page':''); ?>"><a href="<?php echo e(route('users.index')); ?>">Users</a></li>
              </ul>
            </li>
            <?php endif; ?>
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
