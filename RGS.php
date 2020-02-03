<?php //include('server.php');?> 
<!DOCTYPE html>
<html lang="en" >

<head>
  
   <title>Tour Company</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
			<link rel="images/icon"   href="icon.png">
		  </head>
  
  
  
      <link rel="stylesheet" href="loginHTMLCSS/css/style.css">

  
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: rgba(249, 251, 251, 0.92)">
    <a class="navbar-brand" href="index.php">Sunhill Hotel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#RM">Rooms</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#AB">About Us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#OH">Our Hotels</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#CU">Contact Us</a>
            </li>


        </ul>
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="RGS.php">Register</a>
            </li>


        </ul>
    </div>
</nav>


<div class="container">
	<section id="content">
		<form method = "post" action="server.php" >
                <!-- display validation errors here -->
			 <?php  include('errors.php');?>

            <h1>Register</h1>
			<div>
				<input type="text" placeholder="Add your Name"       name= "firstName" />
			</div>
			<div>
				<input type="text" placeholder="Add your Last Name"  name= "lastName" />
			</div>
			<div>
				<input type="text" placeholder=" Add your Age"       name= "age" />
			</div>
			<div>
				<input type="text" placeholder ="Add your Email"    name= "email" />
			</div>
			<div>
				<input type="text" placeholder ="Add your Adresse"  name= "adresse" />
			</div>
			<div>
				<input type="text" placeholder ="Add your State"   name= "state" />
			</div>
			<div>
				<input type="password" placeholder="Add your Password"  name= "password" />
			</div>
			<div>
				<input type="password" placeholder="Confirm your Password"  name= "confirmPassword" />
			</div>
			<div>
				<input type="submit" name= "register" value="Register" />
				<a href="login.php">Sign In</a>
				<a href="RGS.php">Sign Up</a>
			</div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
  
<footer class="container-fluid">
    <div class="row bg-dark py-5    " style="min-height: 30vh">
        <div class="col-md-12">
            <div class="container text-light">
                <h4 class="text-center">Find us on</h4>

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-facebook-official fa-2x" ></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-twitter-square fa-2x" ></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-instagram fa-2x" ></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-google-plus-square fa-2x" ></i></a>
                    </li>
                </ul>

                <p class="text-uppercase text-center mt-5">Copyright &copy Ibrahim Thaqi</p>
            </div>
        </div>


    </div>


</footer>
</body>
</html>

