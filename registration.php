<!DOCTYPE html>
<html>
<head>
	<title>registration.php</title>
	<?php include 'link.php' ?>
	<?php include 'style.php' ?>
	<style type="text/css">
		body{background-color: #f1f1f1}
	</style>
</head>
<body>


<?php
include 'dbcon.php';

if (isset($_POST['submit'])) 
{
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
	
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

	$filename = $_FILES['image']['name'];
	$filetmpname = $_FILES['image']['tmp_name'];

	$folder = "ck/".$filename;

	move_uploaded_file($filetmpname, $folder);


	$emailquery = "select * from registration where email = '$email' ";
	$query = mysqli_query($con, $emailquery);

	$emailcount = mysqli_num_rows($query);

	if ($emailcount>0) 
	{
		echo "Email already exits";
	}
	else
	{

		if ($password === $cpassword) 
		{
			
			$insertquery = "INSERT INTO registration(username, email, mobile, image, password, cpassword) VALUES('$username','$email', '$mobile','$folder','$password', '$cpassword')";
			$iquery = mysqli_query($con, $insertquery);
			if ($con) 
			{
				?>
				<script>
					alert("Registration successfull")
					<?php echo "location.href = 'login.php' "; ?>
				</script>
				<?php
			}
			else
			{
				?>
				<script>
						alert("Registration not successed")
				</script>
				<?php
			}

		}
		else
		{
			echo "Password are not matching";
		}
	}
}

?>
	
		<center>
			<div class="div">
		<article class="card-body max-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center" style="background-color: #447;color: white;padding: 8px;border-radius: 3px;">Welcome to Studybook</h4>
			<h4 class="card-title mt-3 text-center">Creat Account</h4>
			<p class="text-center">Get Started with free your account</p>
			
<form action="" method="POST" enctype="multipart/form-data">

	<div class="form-group input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-user"></i></span>
		</div>
		<input type="text" name="username" class="form-control" placeholder="Full Name" required>
	</div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-envelope"></i></span>
		</div>
		<input type="email" name="email" class="form-control" placeholder="Email Address" required>
	</div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-phone"></i></span>
		</div>
		<input type="phone" name="mobile" class="form-control" placeholder="Phone Number" required>
	</div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-image"></i></span>
		</div>
		<input type="file" name="image" class="form-control" placeholder="uload image" required>
	</div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-lock"></i></span>
		</div>
		<input type="password" name="password" class="form-control" placeholder="Creat Password" required>
	</div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-lock"></i></span>
		</div>
		<input type="password" name="cpassword" class="form-control" placeholder="Conform Password" required>
	</div>
	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-primary btn-block">Creat Account</button>
	</div>
	<p class="text-center">Have an account? <a href="login.php">Log in</a></p>

</form>
</article>
</div>
</center>
</body>
</html>