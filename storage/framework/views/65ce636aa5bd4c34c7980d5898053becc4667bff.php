 <!--Explore Bangladesh-->

 <div class="full-row pt-5 pb-5 exp-bd mt-5">
    <div class="container">
        <div class="row">
            <h2>Explore Bangladesh</h2>
            <p>These popular destinations have a lot to offer</p>
        </div>

        <div class="row">
            <div class="owl-carousel owl-theme owl-bd">
                <div class="item">
                    <a href="">
                        <img src="frontAssets/img/dhaka.jpg" alt="">
                        <h5 class="mt-4">Dhaka</h5>
                        <p>4 places</p>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <img src="frontAssets/img/coxbazar.jpg" alt="">
                        <h5 class="mt-4">coxbazar</h5>
                        <p>4 places</p>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <img src="frontAssets/img/kuakata.jpg" alt="">
                        <h5 class="mt-4">kuakata</h5>
                        <p>4 places</p>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="frontAssets/img/rangamati.jpg" alt="">
                        <h5 class="mt-4">rangamati</h5>
                        <p>4 places</p>
                    </a>
                        
                </div>

                <div class="item">
                    <a href="">
                        <img src="frontAssets/img/srimongol.jpg" alt="">
                        <h5 class="mt-4">srimongol</h5>
                        <p>4 places</p>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="frontAssets/img/syhlet.jpg" alt="">
                        <h5 class="mt-4">syhlet</h5>
                        <p>4 places</p>
                    </a>
                </div>

                <div class="item">
                    <a href="">
                        <img src="frontAssets/img/chi.jpg" alt="">
                        <h5 class="mt-4">chi</h5>
                        <p>4 places</p>
                    </a>
                </div>

                <?php $__currentLoopData = $bdPlacesView; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <a href="">
                        <img src="<?php echo e(asset($value->Image)); ?>" width="35px"  height="40px"  alt="no img">
                        <h5 class="mt-4"><?php echo e($value->placeName); ?></h5>
                        <a href="#" class="btn btn_places"><?php echo e($value -> Expense); ?></a>
                        
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> <!--owl-carousel-->
        </div><!--row-->
    </div> <!--container-->
</div> <!--full-row --><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/WorldTravel/resources/views/frontend/bdDestination.blade.php ENDPATH**/ ?>