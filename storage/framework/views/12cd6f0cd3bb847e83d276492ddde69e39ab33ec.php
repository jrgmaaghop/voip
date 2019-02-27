<?php $__env->startSection('content'); ?>

<div class="col-md-12 col-sm-6 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><?php echo date('l');?><small><?php echo date('M-d-Y');?> &nbsp <?php echo date('h:i:sa') ?></small></h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <div class="bs-example" data-example-id="simple-jumbotron">
        <div class="jumbotron">
          <div class="row">
            <div class="col-md-4">
              <div class="d-none d-md-block" style="">
                <img class="img-thumbnail" src="<?php echo e(asset('images/logo/ati-logo-colors.png')); ?>" alt="logo">
              </div>
            </div>
            <div class="col-sm-12 col-md-8">
              <h1>Hello <?php if(auth()->guard()->guest()): ?> <?php echo e(__('')); ?> <?php else: ?> <?php echo e(Auth::user()->username); ?> <?php endif; ?> !</h1>
              <h3>Welcome to Agricultural Training Institute Region 8 Human Resource Information System.</h3>
            </div>
          </div>





        </div>
      </div>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>