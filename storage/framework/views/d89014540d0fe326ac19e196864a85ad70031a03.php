<?php echo $__env->make('front-end/layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-xs-12" >
            <h2 class="titlefont textalign">SEVA DETAILS</h2>
            <hr style="border-top:3px solid #59003c ;width:10%;">
            <?php $__currentLoopData = $data['sevaloop']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-12 detailback" >
                <div class="col-lg-5 col-lg-offset-2 col-md-5 col-sm-12 col-xs-12" >
                    <img src="<?php echo e($p->seva_img); ?>" alt="img" width="60%" class="img-responsive " style="border:3px outset #F05454;padding:1%;margin:3% auto">
                </div>
                <div class="col-lg-5  col-md-5 col-sm-12 col-xs-12" style="margin-left:-5%">
                        <h2 class="detail-head"><?php echo e($p->seva_name); ?></h2>                     
                        <p class="detail-style">Timings:<?php echo e($p->time); ?></p>
                        <p class="detail-style">Duration:<?php echo e($p->duration); ?></p>
                        <p class="detail-style">Amount:&#x20B9;<?php echo e($p->amount); ?>.00</p>
                        <a href="booknow"  type="button" class="btn btn-primary" style="margin-bottom:10px ;">Book Now!! </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
<?php echo $__env->make('front-end/layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\prajn\project\resources\views/front-end/details.blade.php ENDPATH**/ ?>