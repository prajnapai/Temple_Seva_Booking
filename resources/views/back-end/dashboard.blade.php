<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="back-end/css/bootstrap.min.css">
    <link rel="stylesheet" href="back-end/Color/style_backend.css">

    <title>Dashboard</title>

<style>
  .error{
    color:red;
  }
</style>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 ">
                <nav id="sidebar" style="padding-bottom: 60vh;">
                    <div class="sidebar-header">
                    <h3> WELCOME</h3>
                    </div>
                
                    <ul class="list-unstyled components">
                    
                    <li class="active">
                        <a href="dashboard" ><i class="fa-solid fa-dashboard"></i>  Dashboard</a>
                    </li>
                  
                    <li>
                        <a href="category" class="menu"><i class="fa-solid fa-file"></i>  Category</a>
                    </li>
                    <li>
                        <a href="bseva" class="menu"><i class="fa-solid fa-list"></i>  Seva</a>
                    </li>
                    <li>
                        <a href="bookings" class="menu"><i class="fa-solid fa-book"></i>  Bookings</a>
                    </li>
                    <li>
                        <a href="password" class="menu"><i class="fa-solid fa-key"></i>  Change Password</a>
                    </li>
                    </ul>
                </nav> 
            </div>
        
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
                <div style="float: right;padding-top:6px;">
                  <a class="btn btn-default" href="logout" role="button" style="background-color:#59003c;color:white">Logout</a>
                </div>
                <div id="loadData">
                    <div class="col-xs-12 "style="margin:3% auto;">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 card-style" > 
                            <div class="card">
                                <div class="card-body">
                                    <h2>{{$data['catcount']}}</h2>
                                    <p>Category</p>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12  card-style"> 
                            <div class="card">
                                <div class="card-body">
                                <h2>{{$data['sevacount']}}</h2>
                                <p>Seva</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 card-style"> 
                            <div class="card">
                                <div class="card-body">
                                <h2>{{$data['bookcount']}}</h2>
                                <p>Bookings</p>
                                </div>
                            </div>
                    </div>
                    </div>  

                </div>
            </div>
        </div>
        <div class="col-xs-12 ">
            <p style="color: black;font-weight: 600;text-align:center">© Copyright 2022 | All Rights Reserved Shri Siddhivinayaka Temple.</p>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="back-end/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v6.1.2/js/all.js"></script>


    <script>
	$('.menu').click(function(e)
	{
		e.preventDefault();
		$('#loadData').load($(this).attr('href'));
	});
</script>
</body>
</html>