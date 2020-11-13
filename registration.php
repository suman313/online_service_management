<?php 
include('dbcon.php');
if(isset($_POST['submit'])){
if(isset($_POST['name']) && !empty($_POST['name']))
	$name = $_POST['name'];
else
	$errorName = "Name is required";
if(isset($_POST['email']) && !empty($_POST['email']))
	$email = $_POST['email'];
else
	$errorEmail = "Email is required";

if(isset($_POST['Password']) && !empty($_POST['Password']))	
	$pswd = $_POST['Password'];
else
	$errorPwd = "Password is required";
}

if(isset($name) && isset($email) && isset($pswd)){
	$sql = "INSERT INTO user(name, email, password) VALUES ('$name','$email','$pswd')";
	if($conn->query($sql)){
		header('location:http://localhost/online_service_management/login.php');lll
	}
	else{
	$errmsg = "Something went wrong";
	}
}

 ?>
 	<div class="container text-center">
			<h2>Create your account</h2>
			<div class="row mt-4 mb-4">
				<div class="col-md-6 offset-md-3">
					<form method="post" class="shadow-lg p-4" action="">
						<div class="form-group">
							<i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
							<input class="form-control" type="text" name="name" placeholder="Name">
							<?php if(isset($errorName)){
								echo $errorName;
							} ?>
						</div>
						<div class="form-group">
							<i class="fas fa-envelope"></i><label for="email" class="font-weight-bold pl-2">Email</label>
							<input class="form-control" type="email" name="email" placeholder="Email">
							<?php if(isset($errorEmail)){
								echo $errorEmail;
							} ?>
						</div>
						<div class="form-group">
							<i class="fas fa-key"></i><label for="Password" class="font-weight-bold pl-2">Password</label>
							<input class="form-control" type="Password" name="Password" placeholder="Password">
							<?php if(isset($errorName)){
								echo $errorPwd;
							} ?>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-danger btn-block mt-4">Sign Up</button>
						</div>
					</form>
				</div>
			</div>	
	</div>
