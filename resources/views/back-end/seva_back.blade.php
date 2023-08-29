<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="back-end/css/bootstrap.min.css">
    <link rel="stylesheet" href="back-end/Color/style_backend.css">

    <title>Seva</title>
</head>
<body>
                <div class="col-xs-12 book-style"  >
                    <div class="col-xs-12">
                        <h3>Add Seva Details </h3>
                    </div>
                    <form id="sevaform">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <input type="hidden" name="seva_id" id="seva_id" >
                        <input type="hidden" name="_token" id="token2" value="{{ csrf_token() }}">
                        <input type="hidden" name="update_image" id="update_image" class="form-control">

                            <div class="form-group">
                                <label for="sevaname"> Seva Name </label>
                                <input type="text" id="sevaname" name="sevaname" class="form-control">
                            </div>
                        </div>
                       
                     
                        
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <label for="sevacategory"> Seva Category </label>
                              <select class="form-control" id="sevacategory" name="sevacategory">
                                  <option>-Select Category-</option>
                                  @foreach($data['categoryloop'] as $c)
                                  <option value="{{$c->category_id}}">{{$c->cat_name}}</option>
                                  @endforeach
                                </select>
                            </div>
                          </div>
                          
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="sevaimg">Add Image</label>
                                <input type="file" id="sevaimg" name="sevaimg"  class="form-control ">
                            </div>

                            <div id="img"></div>
                        </div>
                     
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="sevatime">Timings</label>
                                <input type="text" id="sevatime" name="sevatime"  class="form-control " >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="sevaduration">Duration</label>
                                <input type="text" id="sevaduration" name="sevaduration"  class="form-control " >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label  for="sevaamount">Amount (in rupees)</label>
                                <div class="input-group">
                                  <div class="input-group-addon">&#x20B9;</div>
                                  <input type="number" class="form-control" id="sevaamount" name="sevaamount">
                                  <div class="input-group-addon">.00</div>
                                </div>
                              </div>
                        </div>
                  
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="sevadescrip">Description</label>
                               <textarea  id="sevadescrip" name="sevadescrip" class="form-control "  rows="3"></textarea>
                                
                            </div>
                        </div>
                       
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                            <button class="btn btn-default sevasubmit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="col-xs-12 book-style" style="overflow-x:scroll">
                    <h3>Seva Details </h3>
                    <table class="table table-responsive text-nowrap">
                        <thead>
                            <tr>
                                <th>Seva Name </th>
                                <th>Seva Category </th>
                                <th> Image</th>
                                <th>Timings</th>
                                <th>Duration</th>
                                <th>Amount</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data['sevaloop'] as $p)
                                <tr>
                                    <td class="col-md-2">{{$p->seva_name}}</td>
                                    <td class="col-md-2">{{$p->seva_category}}</td>
                                    <td class="col-md-1"> <img src="{{$p->seva_img}}" alt="img" width="60"class="img-responsive"></td>
                                   
                                    <td class="col-md-2">{{$p->time}}</td>
                                    <td >{{$p->duration}}</td>
                                    <td class="col-md-1">{{$p->amount}}</td>
                                    <td class="col-md-1">{{$p->description}}</td>
                                    <td class="col-md-2">
                                        <button type="button" class="btn btn-default btnedit" id="edit" name="edit" onclick="editSeva({{$p->seva_id}})"><img src="back-end/img/pen.png" width="20"></button>
                                        <button type="button" class="btn btn-default btndel" id="delete" name="delete" onclick="deleteSeva({{$p->seva_id}})"><img src="back-end/img/delete.png" width="20"></button>
                                    </td>
                                </tr>
                            @endforeach
                           
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
	$('#sevaform').on('submit',(function(e)
			{
				
				e.preventDefault();
				$("#sevaform").validate({
					rules:{

						sevaname:
						{
							required:true
							
						},
                        sevacategory:
						{
							required:true
							
						},
                        sevatime:
						{
							required:true
							
						},
                        sevaduration:
                        {
                            required:true
                        },
                        sevaamount:
						{
							required:true
							
						},
                        sevadescrip:
						{
							required:true
							
						}
					},
					messages:
					{
						sevaname:
						{
							required:"Please Enter Seva name"
							
						},
                        sevacategory:
						{
							required:"Please Enter Seva Category"
							
						},
                        sevatime:
						{
							required:"Please Enter Seva time"
							
						},
                        sevaduration:
						{
							required:"Please Enter Seva duration"
							
						},
                        sevaamount:
						{
							required:"Please Enter the amount"
							
						},
                        sevadescrip:
						{
							required:"Please Enter Seva description"
							
						}
						
					}  
					
				});
				if($("#sevaform").valid())
				{ 
					if(Flag==0)
					{
						Flag++;
						$.ajax({
							url:"seva_insert",
							type:"POST",

                            data: new FormData(this),
        					contentType: false,       
        					cache: false,             
        					processData:false,
							success:function(data)
							{
							    alert('Successfully Inserted Seva details!!!');
								$('#loadData').load('bseva');
							}
						});
					}
				}
			}));

            function deleteSeva(Did)
			{
				$.ajax({
					url:"deleteSeva",
					type:"GET",
					data:'&Did='+Did,
					success:function(data)
					{
						alert("Sucessfully!", "Sucessfully Deleted Seva", "success");   
						$('#loadData').load('bseva');
					}
				})
			}

            function editSeva(Eid)
	        {
				    	$.ajax({
						url:"editSeva",
						type:"GET",
    					data:'&Eid='+Eid,
                      	success:function(data)
						{
                          
						    var obj=JSON.parse(data);
                                               
                            $('#seva_id').val(obj.seva_id);                   
                            $('#sevaname').val(obj.seva_name);
						    $('#sevacategory').val(obj.seva_category);
                            $('#sevaemail').val(obj.email);
                          
                            $('#img').html("<img src=/"+obj.seva_img+" style='width:70px;height:50px'>");
                            $('#update_image').val(obj.seva_img); 

                            $('#sevatime').val(obj.time);  
                            $('#sevaduration').val(obj.duration);
                            $('#sevaamount').val(obj.amount);
                            $('#sevadescrip').val(obj.description);
						}
					});
		
	        }
</script>


</body>
</html>