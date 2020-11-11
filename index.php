
<!DOCTYPE html>
<html>
<head>
	<title>OSMS</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

</head>
<body>
	<!-- Navigation starts -->
	<nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="index.php">Humanager</a>
		<span class="navbar-text">Your satisfaction is our first priority</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuItem" >
    		<span class="navbar-toggler-icon"></span>
  		</button>
		<div class="collapse navbar-collapse" id="menuItem">
    		 <ul class="navbar-nav ml-auto custom-nav">
    		 	<li class="nav-item"><a class="nav-link" href="home.php">Home</a>
    		 	</li>
    		 	<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a>
    		 	</li>
    		 	<li class="nav-item"><a class="nav-link" href="about.php">About Us</a>
    		 	</li>
    		 	<li class="nav-item"><a class="nav-link" href="service.php">Services We Provide</a></li>
    		 </ul>
		</div>
	</nav>
	<!-- Navigation Ends -->

	<!-- Start Header Jumbotron  -->
	<header class="jumbotron back-image" style="background-image:url(images/service12.jpg);">
		<div>
			<h1 class="text-light text-uppercase font-weight-bold" >Welcome to Humanager</h1>
			<p class="text-light">Your Satisfaction is our first priority</p>
			<a href="#" ><button class="btn btn-success">LogIn</button></a>
			<a href="#" ><button class="btn btn-success">Register</button></a>	
			
		</div>
		
	</header>
	<!-- header Ends -->

	<!-- Starts intro -->
	<div class="jumbotron">
		<div class="container">
			<h3 class="text-center">Humanager Services</h3>
			<p>We are the world's best home service provider serving you for more than 15 years.
				Here we have the best team of experts in the world who are working in their professions
				for a long period of time. We never compromise with the work we do for you. We make sure
				that you experience the best return on investment. No matter what area in your home is damaged,
				we are here to help you to fix that. Book your service today. Hurry UP!!! Offers going in every 
				booking you have till 1st November..
			</p>
		</div>
	</div>
	<!-- Intro Ends -->
	<!-- Start services -->
	<div class="container text-center">
			<h2 >Our Services</h3>
			<div class="row mt-4 ">
				<div class="col-sm-4 mb-4">
					<a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
					<p class="mt-4">Electronic Appliances</p>
				</div>
				<div class="col-sm-4 mb-4">
					<a href="#"><i class="fas fa-wrench fa-8x"></i></a>
					<p class="mt-4">All Assembly</p>
				</div>
				<div class="col-sm-4 mb-4">
					<a href="#"><i class="fas fa-recycle fa-8x text-secondary"></i></a>
					<p class="mt-4">Damage Repair</p>
				</div>
			</div>
	</div>
	<!-- Ends services -->
	<!-- Start registration Form -->
	<?php include('registration.php') ?>
	<!-- Ends registration Form -->

	<!-- Start testimonial pages -->
	<div class="jumbotron mb-4 mt-4">
		<div class="container">
			<h1 class="text-center mb-4">See what others saying!!</h1>
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="card card-shadow-lg mb-2 text-center">
						<div class="card-body text-center">
							<img src="images/christopher.jpg" class="img-fluid" style=" border-radius: 100%;" >
						</div>
						<h4 class="card-title">Christopher Lin</h4>
						<p class="card-text">Finally found a one stop solution for all my home remidies. Exellent service! Will call them again if need.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="card card-shadow-lg mb-2 text-center">
						<div class="card-body text-center">
							<img src="images/dan.jpg" class="img-fluid" style=" border-radius: 100%;" >
						</div>
						<h4 class="card-title">Dan Lok</h4>
						<p class="card-text">I used to stuggle finding workers who can repair my house related damages. Finally got something which provides best quality work in less cost.</p>
						
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="card card-shadow-lg mb-2 text-center">
						<div class="card-body text-center">
							<img src="images/luis.jpg"  class="img-fluid" style="height: 50%; width: 45%; border-radius: 100%;" >
						</div>
						<h4 class="card-title">Luis Garcia</h4>
						<p class="card-text">Helped me to fix my issue with air conditioner and pipe line damage. Being able to find every problem solution to one place is very satisfying for me.</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Ends testimonial pages -->

	<!-- start contact us section -->
	<div class="container">
		<h2 class="text-center mb-4">Contact Us</h2>
		<div class="row mb-4">
			<div class="col-lg-6 col-sm-8">
				<form method="post" action="contactUs.php">
					<div class="form-group">
						<div class="form-group">
							<input class="form-control" type="text" name="firstname" placeholder="First Name">
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="lastname" placeholder="Last Name">
						</div>
						<div class="form-group">
							<input class="form-control" type="email" name="email" placeholder="Email Address">
						</div>
						<div class="form-group">
							<textarea class="form-control" type="text" name="comment" placeholder="Comment" style="height: 150px;"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-success">
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-sm-4">
				
			</div>
		</div>
	</div>
	<!-- Ends contact us section -->

	<!-- Javascript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/proper.min.js"></script>
	<script src="js/all.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>