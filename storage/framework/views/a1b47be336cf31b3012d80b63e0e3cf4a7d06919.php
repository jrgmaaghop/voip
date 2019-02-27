<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><small>Fill-up all information needed</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <img id="candidate-pic-display" class="img-thumbnail" src="<?php echo e(asset('images/candidates')); ?>/<?php echo e($data['candidate']->picture); ?>" alt="logo">
        </div>

        <div class="col-md-9 col-sm-9 col-xs-12">
          <!-- <form method="POST" action="http://localhost/vsupagent/roles/2" accept-charset="UTF-8"> -->
          <form method="POST" action="<?php echo e(route('candidates.update', $data['candidate']->id)); ?>" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal form-label-left"  novalidate>
            <?php echo csrf_field(); ?>
            <?php echo e(Form::hidden('_method','PUT')); ?>


            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="team">Picture <span class="required">*</span>
              </label>
              <div  class="col-md-6 col-sm-6 col-xs-12">
                <?php echo Form::file('image', array('class' => 'form-control col-md-7 col-xs-12', 'id'=>'candidate-pic-input')); ?>

              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="team">Team <span class="required">*</span>
              </label>
              <div  class="col-md-6 col-sm-6 col-xs-12">
                <select id="team" name="team" class="form-control col-md-7 col-xs-12" required>
                  <option value="">Select a team</option>
                  <?php $__currentLoopData = $data['teams']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($key); ?>" <?php echo ($data['candidate']->team_id == $key) ? 'selected':''; ?>><?php echo e($team); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="candidate_number">Candidate # <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="candidate_number" name="candidate_number" required="required" data-validate-minmax="1,20" value="<?php echo e($data['candidate']->no); ?>"class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="candidate_name">Name <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="candidate_name" class="form-control col-md-7 col-xs-12" value="<?php echo e($data['candidate']->name); ?>" name="candidate_name" placeholder="Candidate Name" required="required" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sex">Gender <span class="required">*</span>
              </label>
              <div  class="col-md-6 col-sm-6 col-xs-12">
                <select id="sex" name="sex" class="form-control col-md-7 col-xs-12" required>
                  <option value="">Select gender</option>
                  <?php $__currentLoopData = $data['sexes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($key); ?>" <?php echo ($data['candidate']->sex_id == $key) ? 'selected':''; ?>><?php echo e($sex); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span class="required">*</span>
              </label>
              <div  class="col-md-6 col-sm-6 col-xs-12">
                <select id="status" name="status" class="form-control col-md-7 col-xs-12" required>
                  <option value="">Select status</option>
                  <?php $__currentLoopData = $data['statuses']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($key); ?>" <?php echo ($data['candidate']->status_id == $key) ? 'selected':''; ?>><?php echo e($status); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <a class="btn btn-primary" href="<?php echo e(route('candidates.index')); ?>">Cancel</a>
                <button id="send" type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    //alert('');
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#candidate-pic-display').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }

    $('#candidate-pic-input').on('change', function(e){
      var image = $(this).val();
      readURL(this);
      //$('#candidate-pic-display').attr('src',image);
    });
  });
</script>
<!-- validator -->
<script src="<?php echo e(asset('vendors/validator/validator.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>