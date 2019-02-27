<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Contestant to <?php echo e($data['round_info']->title); ?></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('contest-index')); ?>"> Back</a>
        </div>
    </div>
</div>

<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="x_panel">
      <div class="x_title">
        <h2>List of Candidate</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <ul class="list-unstyled msg_list">
            <?php $__currentLoopData = $data['candidateslist']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
              <a>
                <span class="image">
                  <img src="<?php echo e(asset('images/candidates')); ?>/<?php echo e($clist->picture); ?>" alt="img">
                </span>
                <span>
                  <span><?php echo e($clist->name); ?></span>
                  <span class="time">Candidate no. <?php echo e($clist->no); ?></span>
                </span>
                <span class="message">
                  <?php echo e($clist->team); ?>

                </span>
                <span class="pull-right">
                  <form method="POST" action="<?php echo e(route('contest-storeRoundCandidate')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="candidate_id" value="<?php echo e($clist->id); ?>">
                    <input type="hidden" name="round_id" value="<?php echo e($data['round_id']); ?>">
                    <button class="btn btn-sm btn-success" type="submit" name="button"><i class="fa fa-plus"></i> Add to round</button>
                  </form>
                </span>
              </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="x_panel">
      <div class="x_title">
        <h2>Round Candidates</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <ul class="list-unstyled msg_list">
            <?php $__currentLoopData = $data['roundcandidates']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
              <a>
                <span class="image">
                  <img src="<?php echo e(asset('images/candidates')); ?>/<?php echo e($rc->picture); ?>" alt="img">
                </span>
                <span>
                  <span><?php echo e($rc->name); ?></span>
                  <span class="time">Candidate no. <?php echo e($rc->no); ?></span>
                </span>
                <span class="message">
                  <?php echo e($rc->team); ?>

                </span>
                <span class="pull-right">
                  <form method="POST" action="<?php echo e(route('contest-removeRoundCandidate')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="candidate_id" value="<?php echo e($rc->id); ?>">
                    <input type="hidden" name="round_id" value="<?php echo e($data['round_id']); ?>">
                    <button class="btn btn-sm btn-success" type="submit" name="button"><i class="fa fa-cross"></i> Remove</button>
                  </form>
                </span>
              </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>