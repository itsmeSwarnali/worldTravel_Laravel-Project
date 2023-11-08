<!--
    Author : Swarnali Mollick
    Date   : 09-April-2021
-->

<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frontend.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <?php echo $__env->make('frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <?php echo $__env->yieldContent('main_content'); ?>

    
    

    <?php echo $__env->make('frontend.subscribe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.scroll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/WorldTravel/resources/views/frontend/master.blade.php ENDPATH**/ ?>