<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <title>Shri Siddhivinayaka Temple</title>

    <link href="front-end/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="front-end/Color/color.css">

  
</head>
<body>
    <nav class="navbar navbar-default bgnav">
        <div class="container-fluid">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <span class="navbar-toggler-icon"></span>          
          
          <a class="navbar-brand" style="margin-bottom:10px"><img src="front-end/img/ganeshaa.jpg" class="img-circle" width="50"  ></a>

          <div class="collapse navbar-collapse " id="navbar-collapse">
            <ul class="nav navbar-nav ">
              <li ><a href="/" >Home </a></li>
              <li><a href="about">About Us</a></li>
              <li><a href="seva">Seva </a></li>
              <li><a href="contact">Contact Us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li>
                <?php if($data['id']=='0'){?>
                <a href="login" role="button"><i class="fa-solid fa-user"></i> Login</a>

              </li>
              <li>
              <?php } else { ?>
                <li>
                  <a href="profile" class="open-button"><i class="fa-solid fa-circle-user"></i> {{$data['userdetail']->name}}</a>
                </li>
                <li><a href="log_out"><i class="fa-solid fa-power-off"></i> Log out</a></li>
              <?php } ?>

              </li>

            </ul>
          </div>
        </div>
      </nav>
  
