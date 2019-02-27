<?php $__env->startSection('content'); ?>
<div class="login-page">

<div class="login-box">
    <div class="logo p-t-10">
        <a href="javascript:void(0);">Authentication</b></a>
        <small>Human Resource Information System</small>
    </div>
    <div class="card">
        <div class="body">
            <!-- <form id="sign_in" method="POST"> -->
              <form id="sign_in" method="POST" action="<?php echo e(route('login')); ?>" aria-label="<?php echo e(__('Login')); ?>">
                  <?php echo csrf_field(); ?>
                <div class="msg col-deep-orange">Authorized Personnel Only</div>
                <hr>
                <!-- <div class="body"> -->
                    <?php if($errors->has('email')): ?>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo e($errors->first('email')); ?>

                    </div>
                    <?php endif; ?>

                    <?php if($errors->has('password')): ?>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo e($errors->first('password')); ?>

                    </div>
                    <?php endif; ?>
                <!-- </div> -->

                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="remember" id="remember" class="filled-in chk-col-pink" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <input class="form-check-input" type="checkbox" name="remember" id="rememberme" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>