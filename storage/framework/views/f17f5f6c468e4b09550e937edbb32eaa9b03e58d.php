<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Color/style_backend.css">

    <title>Category</title>
</head>
<body>
  
        <div class="col-xs-12 book-style"  >
                    <div class="col-xs-12">
                        <h3>Add Category </h3>
                    </div>
                    <form id="categoryform">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <input type="hidden" name="category_id" id="category_id">
                        <input type="hidden" name="_token" id="token2" value="<?php echo e(csrf_token()); ?>">

                            <div class="form-group">
                                <label for="categoryname"> Category Name </label>
                                <input type="text" id="categoryname" name="categoryname" class="form-control " >
                            </div>
                        </div>
                
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                            <button class="btn btn-default catsubmit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="col-xs-12 book-style">
                    <h3>List of Categories </h3>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data['categoryloop']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($p->cat_name); ?></td>
                                    <td>
                                        <button type="button" class="btn btn-default btnedit" id="edit" name="edit" onclick="editCategory(<?php echo e($p->category_id); ?>)"><img src="back-end/img/pen.png" width="20"></button>
                                        <button type="button" class="btn btn-default btndel" id="delete" name="delete" onclick="deleteCategory(<?php echo e($p->category_id); ?>)"><img src="back-end/img/delete.png" width="20"></button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                        </tbody>
                    </table>
                </div>
               
            </div>  
                
        </div>
    </div>
    
    <script defer src="https://use.fontawesome.com/releases/v6.1.2/js/all.js"></script>
    <script src="back-end/js/jquery.validate.min.js"></script>
   
    <script>
	
	Flag=0;
	$('.catsubmit').click(function(e)
			{
				
				e.preventDefault();
				$("#categoryform").validate({
					rules:{

						categoryname:
						{
							required:true
							
						}
					},
					messages:
					{
						categoryname:
						{
							required:"Please Enter Category name"
							
						}
                       
					}  
					
				});
				if($("#categoryform").valid())
				{ 
					if(Flag==0)
					{
						Flag++;
						$.ajax({
							url:"category_insert",
							type:"POST",
							data:$('#categoryform').serialize(), 
							success:function(data)
							{
							    alert('Successfully Inserted Category details!!!');
								$('#loadData').load('category');
							}
						});
					}
				}
			});

            function deleteCategory(Did)
			{
				$.ajax({
					url:"deleteCategory",
					type:"GET",
					data:'&Did='+Did,
					success:function(data)
					{
						alert("Sucessfully!", "Sucessfully Deleted Category", "success");   
						$('#loadData').load('category');
					}
				})
			}

            function editCategory(Eid)
	        {
				    	$.ajax({
						url:"editCategory",
						type:"GET",
    					data:'&Eid='+Eid,
                      	success:function(data)
						{
                          
						    var obj=JSON.parse(data);
                            $('#category_id').val(obj.category_id);                   
                            $('#categoryname').val(obj.cat_name);
						                
						  
						}
					});
		
	        }
</script>


</body>
</html><?php /**PATH C:\Users\prajn\project\resources\views/back-end/category.blade.php ENDPATH**/ ?>