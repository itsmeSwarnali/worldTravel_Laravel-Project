<?php $__env->startSection('main_content'); ?>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Admin Panel</h2>


              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <h4>Booking List</h4>
                </div>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
                <table class="table table-head-fixed text-nowrap" id="user_table">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>UserName</th>
                            <th>UserMail</th>
                            <th>UserAddress</th>
                            <th>UserConNum</th>
                            <th>BdDes</th>
                            <th>WorldDes</th>
                            <th>DepartDate</th>
                            <th>UserBudget</th>
                            <th>Member</th>
                            <th>PassImage</th>
                            <th>Msg</th>
                            <th>Status</th>

                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=0 ?>
                        <?php $__currentLoopData = $bookingListView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop -> iteration); ?></td>
                                <td><?php echo e($value -> UserName); ?></td>
                                <td><?php echo e($value -> UserEmail); ?></td>
                                <td><?php echo e($value -> UserAddress); ?></td>
                                <td><?php echo e($value -> UserConNum); ?></td>
                                <td><?php echo e($value -> BdDes); ?></td>
                                <td><?php echo e($value -> WorldDes); ?></td>
                                <td><?php echo e($value -> DepartDate); ?></td>
                                <td><?php echo e($value -> UserBudget); ?></td>
                                <td><?php echo e($value -> Member); ?></td>
                                <td><img src="<?php echo e(asset($value->PassImage)); ?>" width="35px"  height="40px"  alt="no img"></td>
                                <td><?php echo e($value -> UserMsg); ?></td>
                                <td><?php echo e($value -> status); ?></td>


                                <td>
                                    <a class="btn btn-success" href="<?php echo e(route('changeStatus',$value->id)); ?>">Approval</a>

                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminPanel.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/WorldTravel/resources/views/placesList/BookingListTable.blade.php ENDPATH**/ ?>