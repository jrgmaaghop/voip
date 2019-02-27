<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name', 'ATI HRIS')); ?></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <?php if(auth()->guard()->guest()): ?>
              <?php else: ?>
                <li><a href="javascript:void(0);">Welcome <?php echo e(Auth::user()->username); ?></a></li>
              <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
