<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="back-end/css/bootstrap.min.css">
    <link rel="stylesheet" href="back-end/Color/style_backend.css">

    <title>Dashboard</title>
</head>
<body>
   
               
                <div class="col-xs-12 pass-style">
                    <div class="col-xs-12">
                        <h3>Change Password</h3>
                    </div>
                    <form id="passwordform">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <input type="hidden" name="_token" id="token2" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="oldpass"> Old Password</label>
                                <input type="password" id="oldpass" name="oldpass" class="form-control " >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="newpass">New Password </label>
                                <input type="password" id="newpass" name="newpass"  class="form-control ">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="confirmpass"> Confirm Password</label>
                                <input type="password" id="confirmpass" name="confirmpass" class="form-control ">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                            <button class="btn btn-default passwordsubmit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
               
            </div>  
                
        </div>
    </div>
    
  
    <script defer src="https://use.fontawesome.com/releases/v6.1.2/js/all.js"></script>
    <script src="back-end/js/jquery.validate.min.js"></script>
    <script>
	
	
	$('.passwordsubmit').click(function(e)
			{
				
				e.preventDefault();
				$("#passwordform").validate({
					rules:{

						oldpass:
						{
							required:true
							
						},
                        newpass:
						{
							required:true
							
						},
                        confirmpass:
                        {
                            required:true,
                            equalTo:'#newpass'
                        }
							
					},
					messages:
					{
						oldpass:
						{
							required:"Please Enter Old Password"
							
						},
                        newpass:
						{
							required:"Please Enter  New Password"
							
						},
                        confirmpass:
                        {
                            required:"Please Confirm Password",
                            equalTo:'Passwords not matching'
                        }
						
					}  
					
				});
				if($("#passwordform").valid())
				{ 
					$.ajax({
							url:"password_insert",
							type:"POST",
							data:$('#passwordform').serialize(), 
							success:function(data)
							{
                                if(data==1)
						        {
                                    alert('Successfully Changed the Password!!!');
                                    $('#loadData').load('password');
							    }
                                else
                                {
                                    alert('Wrong old Password!!!');
                                }
					        }							    
						});
					}
				});
</script>
   
</body>
</html>