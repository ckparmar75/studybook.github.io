<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>login.php</title>
	<?php include 'link.php' ?>
	<?php include 'style.php' ?>
</head>
<body style="background-color:#f1f1f1;">

<?php

include 'dbcon.php';

if (isset($_POST['submit'])) 
{

	$email = $_POST['email'];
	$password = $_POST['password'];

	$email_search = "select * from registration where email = '$email' && password = '$password' ";

	$query = mysqli_query($con, $email_search);

	$email_count = mysqli_num_rows($query);

	if ($email_count)
	{
		
		$email_pass = mysqli_fetch_assoc($query);
		
		$_SESSION['username'] = $email_pass['username'];
		$_SESSION['image'] = $email_pass['image'];

	

		if ($email_pass) 
		{
			echo "Login Successfull";
			echo "<script>location.href = 'home.php'</script>";
		}
		else
		{
			?>
		<script>
			alert("Incorrect Email or Password")
		</script>
		<?php
		}

	}
	else
	{
		?>
		<script>
			alert("Invalid Email ID")
		</script>
		<?php
	}
}

?>

	
		<center>
			<div class="div">
		<article class="card-body max-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center" style="background-color: #447;color: white;padding: 8px;border-radius: 3px;">Welcome to Studybook</h4>
			<h4 class="card-title mt-3 text-center">Log in Account</h4>
			
<form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

	
	<div class="form-group input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-envelope"></i></span>
		</div>
		<input type="email" name="email" class="form-control" placeholder="Email" required>
	</div>
	
	<div class="form-group input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"><i class="fa fa-lock"></i></span>
		</div>
		<input type="password" name="password" class="form-control" placeholder="Password" required>
	</div>
	
	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
	</div>
	<p class="text-center">Not have an Account? <a href="registration.php">Sign up Here</a></p>

</form>
</article>
</div>
</center>

</body>
</html>