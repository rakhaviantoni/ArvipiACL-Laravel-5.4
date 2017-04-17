

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <?php echo $__env->make('toast::messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <ul class="breadcrumb">
          <li><a href="<?php echo e(url('/home')); ?>">Dashboard</a></li>
          <li class="active">Role Permission</li>
          </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Role Permission</div>

                <div class="panel-body">
                  <table class="table table-striped table-hover ">
                    <thead>
                      <tr>
                        <th>Position/Role</th>
                        <th>Press Release</th>
                        <th>Users</th>
                        <th>News</th>
                        <th>Payroll</th>
                        <th>Employees</th>
                        <th>Recruitment</th>
                        <th>Marketing</th>
                        <th>Sales</th>
                      </tr>
                      </thead>

                      <tbody>
                      <tr>
                      <!-- <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> -->
                      <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->username); ?></td> -->
                        <td><?php echo e($role->positionname); ?></td>
                        <form action="<?php echo e(url('/home/role/changepermission/press')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($role->positionid); ?>" >
                        <td><input type="checkbox" onClick="this.form.submit()" <?php echo e($role->press ? 'checked' : ''); ?>></td>
                      </form>
                      <form action="<?php echo e(url('/home/role/changepermission/users')); ?>" method="POST">
                      <?php echo csrf_field(); ?>

                      <input type="hidden" name="id" value="<?php echo e($role->positionid); ?>" >
                        <td><input type="checkbox" onClick="this.form.submit()" <?php echo e($role->users ? 'checked' : ''); ?>></td></form>
                        <form action="<?php echo e(url('/home/role/changepermission/news')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($role->positionid); ?>" >
                        <td><input type="checkbox" onClick="this.form.submit()" <?php echo e($role->news ? 'checked' : ''); ?>></td></form>
                        <form action="<?php echo e(url('/home/role/changepermission/payroll')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($role->positionid); ?>" >
                        <td><input type="checkbox" onClick="this.form.submit()" <?php echo e($role->payroll ? 'checked' : ''); ?>></td></form>
                        <form action="<?php echo e(url('/home/role/changepermission/employees')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($role->positionid); ?>" >
                        <td><input type="checkbox" onClick="this.form.submit()" <?php echo e($role->employees ? 'checked' : ''); ?>></td></form>
                        <form action="<?php echo e(url('/home/role/changepermission/recruitment')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($role->positionid); ?>" >
                        <td><input type="checkbox" onClick="this.form.submit()" <?php echo e($role->recruitment ? 'checked' : ''); ?>></td></form>
                        <form action="<?php echo e(url('/home/role/changepermission/marketing')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($role->positionid); ?>" >
                        <td><input type="checkbox" onClick="this.form.submit()" <?php echo e($role->marketing ? 'checked' : ''); ?>></td></form>
                        <form action="<?php echo e(url('/home/role/changepermission/sales')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($role->positionid); ?>" >
                        <td><input type="checkbox" onClick="this.form.submit()" <?php echo e($role->sales ? 'checked' : ''); ?>></td>
                        </form>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>