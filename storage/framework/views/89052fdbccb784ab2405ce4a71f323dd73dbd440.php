<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <?php echo $__env->make('toast::messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <ul class="breadcrumb">
          <li><a href="<?php echo e(url('/home')); ?>">Dashboard</a></li>
          <li class="active">Role Management</li>
          </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Role Management</div>

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
                        <form action="<?php echo e(url('/home/role/changepermission')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="<?php echo e($role->positionid); ?>" >
                        <td><input type="checkbox" onClick="this.form.submit()" name="press" value="press" <?php echo e($role->press ? 'checked' : ''); ?>></td>
                        <td><input type="checkbox" onClick="this.form.submit()" name="users" value="users" <?php echo e($role->users ? 'checked' : ''); ?>></td>
                        <td><input type="checkbox" onClick="this.form.submit()" name="news" value="news" <?php echo e($role->news ? 'checked' : ''); ?>></td>
                        <td><input type="checkbox" onClick="this.form.submit()" name="payroll" value="payroll" <?php echo e($role->payroll ? 'checked' : ''); ?>></td>
                        <td><input type="checkbox" onClick="this.form.submit()" name="employees" value="employees" <?php echo e($role->employees ? 'checked' : ''); ?>></td>
                        <td><input type="checkbox" onClick="this.form.submit()" name="recruitment" value="recruitment" <?php echo e($role->recruitment ? 'checked' : ''); ?>></td>
                        <td><input type="checkbox" onClick="this.form.submit()" name="marketing" value="marketing" <?php echo e($role->marketing ? 'checked' : ''); ?>></td>
                        <td><input type="checkbox" onClick="this.form.submit()" name="sales" value="sales" <?php echo e($role->sales ? 'checked' : ''); ?>></td>
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