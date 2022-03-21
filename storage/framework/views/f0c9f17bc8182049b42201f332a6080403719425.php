<?php $__env->startSection('template_title'); ?>
    <?php echo trans('usersmanagement.showing-user', ['name' => $user->name]); ?>

<?php $__env->stopSection(); ?>

<?php
$levelAmount = trans('usersmanagement.labelUserLevel');
if ($user->level() >= 2) {
    $levelAmount = trans('usersmanagement.labelUserLevels');
}
?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1 mt-4">
        <div class="card">
          <div class="card-header text-white <?php if($user->activated == 1): ?> bg-success <?php else: ?> bg-danger <?php endif; ?>">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <?php echo trans('usersmanagement.showing-user-title', ['name' => $user->name]); ?>

              <div class="float-right">
                <a href="<?php echo e(route('users')); ?>" class="btn btn-light btn-sm float-right"
                    data-toggle="tooltip" data-placement="left"
                    title="<?php echo e(trans('usersmanagement.tooltips.back-users')); ?>">
                    <i class="fas fa-reply-all fa-fw " aria-hidden="true"></i>
                    <?php echo trans('usersmanagement.buttons.back-to-users'); ?>

                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 col-md-12 text-center ">
                <img src="<?php if($user->profile && $user->profile->avatar_status == 1): ?> <?php echo e($user->profile->avatar); ?> <?php else: ?> <?php echo e(Gravatar::get($user->email)); ?> <?php endif; ?>"
                  alt="<?php echo e($user->name); ?>" height="100" width="100"
                  class="rounded-circle center-block mb-3 mt-4 user-image">
              </div>
              <div class="col-sm-12 col-md-12">
                <h4 class="text-muted margin-top-sm-1 text-center text-left-tablet">
                    <?php echo e($user->name); ?>

                </h4>
                <p class="text-center text-left-tablet">
                    <strong>
                        <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>

                    </strong>
                    <?php if($user->email): ?>
                        <br />
                        <span class="text-center" data-toggle="tooltip" data-placement="top"
                            title="<?php echo e(trans('usersmanagement.tooltips.email-user', ['user' => $user->email])); ?>">
                            <?php echo e(Html::mailto($user->email, $user->email)); ?>

                        </span>
                    <?php endif; ?>
                </p>
                <?php if($user->profile): ?>
                  <div class="text-center text-left-tablet mb-4">
                    <a href="<?php echo e(url('/profile/' . $user->name)); ?>" class="btn btn-sm btn-info mb-2"
                        data-toggle="tooltip" data-placement="left"
                        title="<?php echo e(trans('usersmanagement.viewProfile')); ?>">
                        <i class="fa fa-eye fa-fw" aria-hidden="true"></i> <span
                            class="hidden-xs hidden-sm hidden-md">
                            <?php echo e(trans('usersmanagement.viewProfile')); ?></span>
                    </a>
                    <a href="/users/<?php echo e($user->id); ?>/edit" class="btn btn-sm btn-warning mb-2"
                        data-toggle="tooltip" data-placement="top"
                        title="<?php echo e(trans('usersmanagement.editUser')); ?>">
                        <i class="fas fa-edit fa-fw" aria-hidden="true"></i> <span
                            class="hidden-xs hidden-sm hidden-md">
                            <?php echo e(trans('usersmanagement.editUser')); ?> </span>
                    </a>
                    <?php echo Form::open(['url' => 'users/' . $user->id, 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => trans('usersmanagement.deleteUser')]); ?>

                    <?php echo Form::hidden('_method', 'DELETE'); ?>

                    <?php echo Form::button('<i class="fas fa-trash fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md">' . trans('usersmanagement.deleteUser') . '</span>', ['class' => 'btn btn-danger btn-sm', 'type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user?']); ?>

                    <?php echo Form::close(); ?>

                  </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="border-bottom"></div>
            <?php if($user->name): ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                    <?php echo e(trans('usersmanagement.labelUserName')); ?>

                </strong>
              </div>
              <div class="col-sm-7">
                <?php echo e($user->name); ?>

              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            <?php endif; ?>
            <?php if($user->email): ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('usersmanagement.labelEmail')); ?>

                </strong>
              </div>
              <div class="col-sm-7">
                <span data-toggle="tooltip" data-placement="top"
                  title="<?php echo e(trans('usersmanagement.tooltips.email-user', ['user' => $user->email])); ?>">
                  <?php echo e(HTML::mailto($user->email, $user->email)); ?>

                </span>
              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            <?php endif; ?>
            <?php if($user->first_name): ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                    <?php echo e(trans('usersmanagement.labelFirstName')); ?>

                </strong>
              </div>
              <div class="col-sm-7">
                  <?php echo e($user->first_name); ?>

              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            <?php endif; ?>
            <?php if($user->last_name): ?>
              <div class="col-sm-5 col-6 text-larger">
                  <strong>
                      <?php echo e(trans('usersmanagement.labelLastName')); ?>

                  </strong>
              </div>
              <div class="col-sm-7">
                  <?php echo e($user->last_name); ?>

              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            <?php endif; ?>
            <div class="col-sm-5 col-6 text-larger">
              <strong>
                  <?php echo e(trans('usersmanagement.labelRole')); ?>

              </strong>
            </div>
            <div class="col-sm-7">
              <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($user_role->name == 'User'): ?>
                  <?php $badgeClass = 'primary' ?>
                <?php elseif($user_role->name == 'Admin'): ?>
                  <?php $badgeClass = 'warning' ?>
                <?php elseif($user_role->name == 'Unverified'): ?>
                  <?php $badgeClass = 'danger' ?>
                <?php else: ?>
                  <?php $badgeClass = 'default' ?>
                <?php endif; ?>

                <span class="badge badge-<?php echo e($badgeClass); ?>"><?php echo e($user_role->name); ?></span>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="clearfix"></div>
            <div class="border-bottom"></div>
            <?php if($user->created_at): ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('usersmanagement.labelCreatedAt')); ?>

                </strong>
              </div>
              <div class="col-sm-7">
                <?php echo e($user->created_at); ?>

              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            <?php endif; ?>
            <?php if($user->updated_at): ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('usersmanagement.labelUpdatedAt')); ?>

                </strong>
              </div>
              <div class="col-sm-7">
                <?php echo e($user->updated_at); ?>

              </div>
              <div class="clearfix"></div>
              <div class="border-bottom"></div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $__env->make('modals.modal-delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
  <?php echo $__env->make('scripts.delete-modal-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php if(config('usersmanagement.tooltipsEnabled')): ?>
    <?php echo $__env->make('scripts.tooltips', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/14-03-2022/abhi 14-03/Thewayshop/resources/views/usersmanagement/show-user.blade.php ENDPATH**/ ?>