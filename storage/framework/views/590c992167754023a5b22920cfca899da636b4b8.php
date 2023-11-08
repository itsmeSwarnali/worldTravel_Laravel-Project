<?php $__env->startSection('main_content'); ?>
<div class="full-row">
        <div class="row">
                <div class="owl-carousel owl-theme owl-places">

                    <?php $__currentLoopData = $otherPlaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <a href="">
                                <div class="owl-img">
                                    <img class="mask" src="<?php echo e(asset($value->Image)); ?>" width="35px"  height="40px"  alt="no img">
                                </div>

                                <div class="welcome wow zoomIn">
                                    <h1 class="text-center">Welcome To <?php echo e($value->countryName); ?></h1>
                                    <a href="#booking-form"><button class="btn book text-center">Book Now</button></a>
                                </div>

                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div> <!--owl-carousel-->
        </div><!--row-->


</div><!--full-row-->

    <!----Registration--->

<div class="full-row bg-darkblue Registration">
    <div class="container mx-20">
        <div class="row  align-items-center">
            <div class="col-xl-3">

                <h3 class="text-white">Where you want to go?</h3>

            </div>

            <div class="col-lg-1"> </div>

            <div class="col-lg-8">
                <div class="search_wrap ">

                    <form class="search_form d-flex" action="#">

                        <div class="input_field me-2">
                            <input type="text"  class="form-control" placeholder="Where to go?">
                        </div>

                        <div class="input_field" id="datetimepicker">

                            <input class="form-control" type="text" id="datepicker" placeholder="Pick a Date">

                        </div>

                        <div class="input_field">

                            <select class="form-control select" name="places" id="places">
                                <option data-display="Travel type">Travel type</option>
                                <option value="1">Some option</option>
                                <option value="2">Another option</option>
                            </select>

                        </div>

                        <div> <button class="search_btn btn">Search</button> </div>

                    </form>
                </div>

            </div>
        </div><!--row-->
    </div><!--container-->
</div><!--full-row-->


    <!--Explore Bangladesh-->

<div class="full-row pt-5 pb-5 exp-bd mt-5">
    <div class="container">
        <div class="row">
            <h2>Explore Bangladesh</h2>
            <p>These popular destinations have a lot to offer</p>
        </div>

        <div class="row">
            <div class="owl-carousel owl-theme owl-bd">

                <?php $__currentLoopData = $bdPlaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <a href="">
                        <img src="<?php echo e(asset($value->Image)); ?>" width="35px"  height="40px"  alt="no img">
                        <h5 class="mt-4"><?php echo e($value->placeName); ?></h5>
                        <a href="#" class="btn btn_places"><?php echo e($value->Expense); ?> Taka</a>

                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div> <!--owl-carousel-->
        </div><!--row-->
    </div> <!--container-->
</div> <!--full-row -->

     <!----Popular Destination--->

<div class="full-row popular-destination" id="gallery">
         <div class="container">

            <div class="row">
                 <h1 class="mx-auto text-center">Popular Destination</h1>
                 <p class="mx-auto text-center">Suffered alteration in some form, by injected humour or good day <br>randomised booth anim 8-bit hella wolf moon beard words.</p>
            </div>

            <div class="row mx-3 mt-5">

              <?php $__currentLoopData = $otherPlaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-lg-4 col-sm-12 ">
                      <div class="box wow fadeInLeft">
                          <img class="mask" src="<?php echo e(asset($value->Image)); ?>" width="35px"  height="40px"  alt="no img">
                          <!--img class="mask" src="frontAssets/img/france.jpg" alt=""> -->
                            <div class="d_place">
                              <h3 class="white"><?php echo e($value->countryName); ?></h3>
                              <h5 class="white"><?php echo e($value->placeName); ?></h5>
                              <a href="#" class="btn btn_places"><?php echo e($value->Expense); ?> $</a>
                            </div>

                      </div>
                  </div>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

         </div>
</div>



<div class="full-row">
  <div class="container-fluid">
      <div class="row">
        <iframe width="560" height="550" src="https://www.youtube.com/embed/ynC_MRPBoyM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
  </div>
</div>


                                            


<div class="full-row pt-5 pb-5 booking-form" id="booking-form">
    <div class="container">
        <h1 class="text-center pt-2 pb-4 wow fadeInUp">Make a Schedule for Travelling</h1>

        <form role="form" action="<?php echo e(route('bookingList')); ?>" class="main-form" method="post" id="quickForm" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="user_name" class="form-control" placeholder="Full name">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="user_email" class="form-control" placeholder="Email address">
                </div>


                <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="user_conNum" class="form-control" placeholder="Phone Number">
                </div>


                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="user_address" class="form-control" placeholder="Your Location">
                </div>


                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="user_des_inBD" id="departement" class="custom-select">
                        <option value="">Destination Places within Bangladesh</option>
                        <?php $__currentLoopData = $bdPlaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->placeName); ?>"><?php echo e($value->placeName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>


                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                   <select name="user_des_inWorld" id="departement" class="custom-select">
                        <option value="">Destination Places outside Bangladesh</option>
                        <?php $__currentLoopData = $otherPlaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->countryName); ?>"><?php echo e($value->countryName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>


                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="departing_date" class="form-control">
                </div>


                <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="user_budget" class="form-control" placeholder="Your Budget">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInUp member" data-wow-delay="300ms">
                    <input type="text" name="members" class="form-control" placeholder="Members">
                </div>

                <div class="form-group col-12 col-sm-6 pt-2 d-flex">
                    <label for="passportImage">Passport Image:</label>
                    <input type="file" name="pass_image" class="form-control" id="passportImage" >

                </div>

                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="10" placeholder="Enter message"></textarea>
                </div>

            </div>

            <button type="submit" class="btn book btn-primary mt-3 wow zoomIn">Book</button>
        </form>
    </div>
</div> <!-- .page-section -->



<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/WorldTravel/resources/views/frontend/index.blade.php ENDPATH**/ ?>