<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bar-chart"></i> Round <small>and</small> Criteria </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <!-- start accordion -->
      <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
        <?php $__currentLoopData = $data['criteria_per_round']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cpr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="panel">
          <a class="panel-heading" role="tab" id="heading-round-<?php echo e($cpr['round_info']->id); ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse-round-<?php echo e($cpr['round_info']->id); ?>" aria-expanded="true" aria-controls="collapse-round-<?php echo e($cpr['round_info']->id); ?>">
            <h4 class="panel-title"><?php echo e($cpr['round_info']->title); ?></h4>
          </a>
          <div id="collapse-round-<?php echo e($cpr['round_info']->id); ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-round-<?php echo e($cpr['round_info']->id); ?>">
            <div class="panel-body">
              <div class="buttons">
                      <!-- Standard button -->
                <?php $__currentLoopData = $cpr['criteria_info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ci): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('judging-setscore',[$ci->id,$cpr['round_info']->id,Auth::user()->id])); ?>" class="btn btn-default btn-lg btn-block"><?php echo e($ci->desc); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <!-- end of accordion -->
    </div>
  </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>