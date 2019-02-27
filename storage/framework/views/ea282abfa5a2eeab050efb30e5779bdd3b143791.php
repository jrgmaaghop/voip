<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <?php $__currentLoopData = $data['round_info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="">
    <h1 class="pull-left"><?php echo e($ri['round_data']->title); ?></h1>
    <div class="pull-right">
        <a class="btn btn-success" href="<?php echo e(route('contest-addRoundCandidate',$ri['round_data']->id)); ?>">Add Contestants</a>
    </div>
  </div>

  <?php if($message = Session::get('success')): ?>
      <div class="alert alert-success">
          <p><?php echo e($message); ?></p>
      </div>
  <?php endif; ?>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <?php $__currentLoopData = $ri['other_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="x_panel">
      <div class="x_title">
        <h2>Category <?php echo e($key); ?></h2>

        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr class="headings">
                <th class="column-title">Candidate #</th>
                <th class="column-title">Name</th>
                <th class="column-title">Team</th>
                <th class="column-title no-link last"><span class="nobr">Action</span></th>
              </tr>
            </thead>
            <tbody>
              <?php if($category->count() > 0): ?>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($d->no); ?></td>
                  <td><?php echo e($d->name); ?></td>
                  <td><?php echo e($d->team); ?></td>
                  <td></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
              <tr>
                <td colspan="4" class="text-center text-warning"> No Data</td>
              </tr>
              <?php endif; ?>

            </tbody>
          </table>
        </div>


      </div>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
  <div class="clearfix"></div><br><br>

  <!-- <div class="ln_solid"></div> -->

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>