<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">

        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <?php if(auth()->guard()->guest()): ?>
                <?php else: ?>
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="<?php echo e(url('/')); ?>">
                        <i class="material-icons col-blue-grey">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="../../pages/typography.html">
                        <i class="material-icons col-blue-grey">extension</i>
                        <span>Single Menu</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons col-blue-grey">trending_down</i>
                        <span>Multi Level Menu</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item - 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Level - 2</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Menu Item</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <span>Level - 3</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span>Level - 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access-system-config')): ?>
                    <li class="header bg-red">Administration</li>
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>
                    <li>
                        <a href="<?php echo e(route('users.index')); ?>">
                            <i class="material-icons col-blue-grey">person</i>
                            <span>User Management</span>
                        </a>
                    </li>
                  <?php endif; ?>
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>
                    <li>
                        <a href="<?php echo e(route('roles.index')); ?>">
                            <i class="material-icons col-blue-grey">accessibility</i>
                            <span>Role Management</span>
                        </a>
                    </li>
                  <?php endif; ?>
                <?php endif; ?>

                <?php endif; ?>


                <li class="header bg-blue-">Account</li>
                <?php if(auth()->guard()->guest()): ?>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-blue-grey">arrow_forward</i>
                        <span>Login in</span>
                    </a>
                </li>
                <?php else: ?>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-blue-grey">lock</i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">

                        <i class="material-icons col-blue-grey">arrow_back</i>

                        <span><?php echo e(__('Logout')); ?></span>
                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
                <?php endif; ?>

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2019 <a href="javascript:void(0);">ATI HRIS</a>.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->

</section>
