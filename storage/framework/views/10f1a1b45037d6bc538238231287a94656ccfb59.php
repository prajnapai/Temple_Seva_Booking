<?php echo $__env->make('front-end/layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div>
          <img src="front-end/img/bg2.png" alt="ganesha_logo" width="100%">
        </div>
  <div class="col-xs-12">
      <div class="col-xs-12 padding">
          <h2 class="titlefont textalign">SEVA LIST</h2>  
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <?php $__currentLoopData = $data['categoryloop']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div id="<?php echo e($c->cat_name); ?>">
              <h1 class="sevaheading"><?php echo e($c->cat_name); ?></h2>
           
          <?php $__currentLoopData = $data['sevaloop']->where('seva_category',$c->category_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <?php if($p->seva_category == $c->category_id): ?>             
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div style="text-align: center;">
                  <div class="thumbnail_seva">
                    <img src="<?php echo e($p->seva_img); ?>" class="img-responsive" style="padding:5% 11%">
                    <div style="margin-top:-8%">
                      <h3><?php echo e($p->seva_name); ?></h3>
                      <p><?php echo e($p->description); ?></p>
                      <a href="details"  type="button" class="btn btn-primary" style="margin-bottom:10px ;">Seva Details</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif ;?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>   
            
          
         
      </div>
  </div>
<?php echo $__env->make('front-end/layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\prajn\project\resources\views/front-end/seva.blade.php ENDPATH**/ ?>