<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <?php if(auth()->guard()->guest()): ?>
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            Account
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?php echo e(route('login')); ?>"><i class="fa fa-sign-in pull-right"></i> Login</a> </li>
          </ul>
          <?php else: ?>
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo e(asset('images/profiles/profile-image.jpg')); ?>" alt=""><?php echo e(Auth::user()->username); ?>

            <span class=" fa fa-angle-down"></span>
          </a>

          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?php echo e(route('changepassword',Auth::user()->id)); ?>"><i class="fa fa-lock pull-right"></i> Change Password</a> </li>
            <li><a href="javascript:;"><i class="fa fa-user pull-right"></i> Profile</a></li>
            <li><a href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                  ><i class="fa fa-sign-out pull-right"></i> <?php echo e(__('Logout')); ?></a></li>

          </ul>
          <?php endif; ?>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->
