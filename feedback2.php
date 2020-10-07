<?php
session_start();
include "dbcon.php";

if (isset($_POST['submit'])) 
{
	$email = $_POST['email'];
	$feedback = $_POST['feedback'];

	$query = "INSERT INTO feedback (email , feedback) VALUES('$email' , '$feedback')";
	$q = mysqli_query($con , $query);

	if ($q) 
	{
		?>
		<script>
			alert("feedback sent successfully !!!");
		</script>

		<?php
		
		echo "<script>location.href = 'feedback.php'</script>";
	}
	else
	{
		echo "error";
	}
}
else
{
	echo "connection error";
}
	



?>