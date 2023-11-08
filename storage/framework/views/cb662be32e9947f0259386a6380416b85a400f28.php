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
                  <a type="button" href="<?php echo e(route('addPlaces')); ?>" class="btn btn-info">Add Countries</a>
                </div>
              </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Country Name</th>
                        <th>Places Name</th>
                        <th>Images</th>
                        <th>Expense</th>
                        <th>Action</th>


                    </tr>
                </thead>

                <tbody>
                    <?php $i=0 ?>
                    <?php $__currentLoopData = $newPlacesList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop -> iteration); ?></td>
                            <td><?php echo e($value -> countryName); ?></td>
                            <td><?php echo e($value -> placeName); ?></td>
                            <td><img src="<?php echo e(asset($value->Image)); ?>" width="35px"  height="40px"  alt="no img"></td>
                            <td><?php echo e($value -> Expense); ?></td>
                            <td>
                                <a type="button" href="<?php echo e(route('deleteCountry',$value -> id)); ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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

<?php echo $__env->make('adminPanel.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/WorldTravel/resources/views/placesList/placesList.blade.php ENDPATH**/ ?>