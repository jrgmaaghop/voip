<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="x_content">

  <h1>Criteria: <?php echo e($data['criteria_info']->desc); ?></h1>

  <!-- start project list -->
  <?php $__currentLoopData = $data['candidates']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <h3><?php echo e($key); ?></h3>
  <table class="table table-striped projects table-hover">
    <thead>
      <tr>
        <th style="width:15%">Team Name</th>
        <th style="width:25%">Candidate Name</th>
        <th style="width:10%">Candidate #</th>
        <th style="width:10%">Score</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $candidate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <tr>
        <td> <h4><?php echo e($c->candidate_team); ?></h4> </td>
        <td>
          <h4> <span><img src="<?php echo e(asset('/images/candidates/')); ?>/<?php echo e($c->candidate_picture); ?>" class="avatar" alt="Avatar"></span>&nbsp <?php echo e($c->candidate_name); ?></h4>
        </td>
        <td>
          Candidate # <?php echo e($c->candidate_no); ?>

        </td>
        <td>
          <form class="" action="<?php echo e(route('judging-savescore')); ?>" method="post" novalidate>
            <?php echo csrf_field(); ?>
            <div class="input-group">
              <input type="hidden" name="rcsid" value="<?php echo e($c->rcsid); ?>">
              <input type="hidden" name="rcid" value="<?php echo e($c->round_candidate_id); ?>">
              <input type="hidden" name="cid" value="<?php echo e($c->criteria_id); ?>">
              <input type="hidden" name="uid" value="<?php echo e($c->user_id); ?>">
              <input type="hidden" name="rid" value="<?php echo e($data['round_id']); ?>">
                <input value="<?php echo e($c->score); ?>" type="number" id="score" name="score" required="required" data-validate-minmax="0,<?php echo e($data['criteria_info']->max_score); ?>" class="form-control" required>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-success">Save</button>
              </span>
            </div>
          </form>
        </td>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <!-- end project list -->
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<!-- validator -->
    <script src="<?php echo e(asset('vendors/validator/validator.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>