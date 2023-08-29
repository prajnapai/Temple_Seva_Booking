<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">

    <link rel="stylesheet" href="front-end/css/bootstrap.min.css">
    <link rel="stylesheet" href="front-end/Color/style_backend.css">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="loginfront">
                <div class="account-login">
                    <form class="login-form" id="signinform">
                    <input type="hidden" name="_token" id="token2" value="<?php echo e(csrf_token()); ?>">
                    <div class="login-box-msg"></div>

                        <h3 style="text-align:center;"> CUSTOMER LOGIN</h3>
                        <div class="form-group">
                            <label class="sr-only " for="email">Email address</label>
                            <input type="email" placeholder="Email" id="email" name="email" class="form-control">
                         </div>
                         <div class="form-group">
                            <label class="sr-only " for="password">Password</label>
                            <input type="password" placeholder="Password" id="password" name="password" class="form-control">
                         </div>
                         <button class="btn signinbutton">Submit</button>
                         <a href="register">Do not have an account? Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="front-end/js/bootstrap.min.js"></script>
    <script src="front-end/js/jquery.validate.min.js"></script>


    <script>
			$('.signinbutton').click(function(e)
			{
				e.preventDefault();
				$.ajax({
					url:'login_insert',
					type:'POST',
					data:$('#signinform').serialize(),
					success:function(data)
					{
						
						if(data==1)
						{
							window.location.assign('/');
						}
						
						else
						{
							$('.login-box-msg').html("<span style='color:red'>Invalid username/password .</span>");
						} 
					},
					error: function(XMLHttpRequest, textStatus, errorThrown)
					{
						
						$('.login-box-msg').html("<span style='color:red'>server not connected</span>");
					} 
				});
			})
		</script>
</body>
</html><?php /**PATH C:\Users\prajn\project\resources\views/front-end/login.blade.php ENDPATH**/ ?>