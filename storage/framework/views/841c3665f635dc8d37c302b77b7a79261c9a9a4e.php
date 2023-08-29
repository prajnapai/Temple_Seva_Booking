<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="back-end/css/bootstrap.min.css">
    <link rel="stylesheet" href="back-end/Color/style_backend.css">

    <title>Bookings</title>
</head>
<body>
                

                <div class="col-xs-12 book-style" style="overflow-x:scroll">
                    <h3>Booking Details </h3>
                    <table class="table table-responsive text-nowrap">
                        <thead>
                            <tr>
                                <th>Devotee Name </th>
                                <th>Email </th>
                                <th>Seva Name</th>
								<th>Date</th>
                                <th> Contact Number</th>
                                <th>Amount</th>
                                <th>Invoice</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data['bookingloop']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($b->devotee_name); ?></td>
                                    <td><?php echo e($b->email); ?></td>
                                    <td><?php echo e($b->seva_name); ?></td>
									<td><?php echo e($b->date); ?></td>
                                    <td><?php echo e($b->contact); ?></td>
                                    <td><?php echo e($b->amount); ?>.00</td>
                                    <td><a href="invoice?booking_id=<?php echo e($b->booking_id); ?>">Download</a></td>
                                    
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                        </tbody>
                    </table>
                </div>
               
            </div>  
                
        </div>
    </div>
    

    <script src="back-end/js/jquery.validate.min.js"></script>
   
           


</body>
</html><?php /**PATH C:\Users\prajn\project\resources\views/back-end/bookings.blade.php ENDPATH**/ ?>