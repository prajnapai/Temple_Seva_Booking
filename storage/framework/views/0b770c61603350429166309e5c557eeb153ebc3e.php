<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
    <div class="col-xs-12 profile-style" >
        <div class="col-xs-12">
             <h3> History</h3>
                <table class="table table-responsive">
                    <thead>
                            <tr>
                                <th>Booking Id</th>
                                <th>Date</th>
                                <th>Devotee Name</th>
                                <th>Seva Name</th>
                                <th>Amount</th>
                                <th>Invoice</th>
                            </tr>
                    </thead>
                    <tbody>
                            <?php $__currentLoopData = $data['bookingloop']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($b->booking_id); ?></td>
                                <td><?php echo e($b->date); ?></td>
                                <td><?php echo e($b->devotee_name); ?></td>
                                <td><?php echo e($b->seva_name); ?></td>
                                <td><?php echo e($b->amount); ?>.00</td>
                                
                                <td><a href="invoice?booking_id=<?php echo e($b->booking_id); ?>">Download</a></td>
                              
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                       
                </table>
        </div>
        
                   
           
    </div>
       
</div>
     
<?php /**PATH C:\Users\prajn\project\resources\views/front-end/history.blade.php ENDPATH**/ ?>