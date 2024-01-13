<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">

    <link rel="stylesheet" href="front-end/css/bootstrap.min.css">
    <link rel="stylesheet" href="front-end/Color/style_backend.css">
    <title>Register</title>
</head>
<style>
    .error{color:red}
</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="loginfront">
                <div class="account-login">
                    <form id="registerform" class="register-form">

                        <input type="hidden" name="customer_id" id="customer_id">
                        <input type="hidden" name="_token" id="token2" value="{{ csrf_token() }}">

                        <h3 style="text-align:center;"> REGISTER NOW!!</h3>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" id="firstname" name="firstname" class="form-control">
                             </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" id="lastname" name="lastname" class="form-control">
                             </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="regemail">Email address</label>
                                <input type="email" id="regemail" name="regemail" class="form-control">
                             </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="mobileno">Contact Number</label>
                                <input type="text" id="mobileno" name="mobileno" class="form-control">
                             </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="regpassword">Password</label>
                                <input type="password" id="regpassword" name="regpassword" class="form-control">
                             </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="confirmpass"> Confirm Password</label>
                                <input type="password" id="confirmpass" name="confirmpass" class="form-control">
                             </div>
                        </div>
                         
                         <button class="btn registerbutton">Sign In</button>
                         <a href="login">Already have an account? Log In</a>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="front-end/js/bootstrap.min.js"></script>
    <script src="front-end/js/jquery.validate.min.js"></script>

    <script>
	
	Flag=0;
	$('.registerbutton').click(function(e)
			{
				
				e.preventDefault();
				$("#registerform").validate({
					rules:{

						firstname:
						{
							required:true
							
						},
						lastname:
						{
							required:true
							
						},
						regemail:
						{
							required:true
							
						},
						mobileno:
						{
							required:true
							
						},
						regpassword:
						{
							required:true
							
						},
						confirmpass:
						{
							required:true,
							equalTo:'#regpassword'
							
						}
					},
					messages:
					{
						firstname:
						{
							required:"Please Enter First name"
							
						},
						lastname:
						{
							required:"Please Enter Last name"
							
						},
						regemail:
						{
							required:"Please Enter Email-id "
							
						},
						mobileno:
						{
							required:"Please Enter Contact number"
							
						},
						regpassword:
						{
							required:"Please Enter Password"
							
						},
						confirmpass:
						{
							required:"Please confirm Password",
							equalTo:'Passwords not matching'
							
						}
					}  
					
				});
				if($("#registerform").valid())
				{ 
					if(Flag==0)
					{
						Flag++;
						$.ajax({
							url:"register_insert",
							type:"POST",
							data:$('#registerform').serialize(), 
							success:function(data)
							{
							    alert('Successfully Registered!!!');
                                window.location.assign('login');
								
							}
						});
					}
				}
			});
          
</script>

</body>
</html>
