

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
          <li><a href="<?php echo e(url('/home')); ?>">Dashboard</a></li>
          <li class="active">Employees Database</li>
          </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Employees Database <a href="#" class="btn btn-primary" title="Add New"><span class="glyphicon glyphicon-plus"></span></a></div>

                <div class="panel-body">
                  <table id="employee-table" class="table-stripped">
                      <thead>
                      <tr>
                          <th>Employee ID</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Position</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(function () {
        $('#employee-table').DataTable({
            serverSide: true,
            processing: true,
            ajax: '/home/employees/data',
            columns: [
                {data: 'employeeid'},
                {data: 'name'},
                {data: 'username'},
                {data: 'email'},
                {data: 'position.positionname'},
                {data: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>