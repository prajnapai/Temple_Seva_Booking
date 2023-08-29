<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="back-end/css/bootstrap.min.css">
    <link rel="stylesheet" href="back-end/Color/style_backend.css">

    <title>Admin</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="login">
                <div class="account-login">
                    <form class="login-form" id="loginform">
                    <input type="hidden" name="_token" id="token2" value="<?php echo e(csrf_token()); ?>">
                    <div class="login-box-msg"></div>

                        <h3 style="text-align:center;">Welcome ADMIN!</h3>
                        <div class="form-group">
                            <label class="sr-only " for="email">Email address</label>
                            <input type="email" placeholder="Email" id="email" name="email" class="form-control">
                         </div>
                         <div class="form-group">
                            <label class="sr-only " for="password">Password</label>
                            <input type="password" placeholder="Password" id="password" name="password" class="form-control">
                         </div>
                         <button class="btn loginbutton">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="back-end/js/bootstrap.min.js"></script>

    <script src="back-end/js/jquery.validate.min.js"></script>

    <script>
			$('.loginbutton').click(function(e)
			{
				e.preventDefault();
				$.ajax({
					url:'admin_login',
					type:'POST',
					data:$('#loginform').serialize(),
					success:function(data)
					{
						
						if(data==1)
						{
							window.location.assign('dashboard');
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
</html><?php /**PATH C:\Users\prajn\project\resources\views/back-end/admin.blade.php ENDPATH**/ ?>