<?php

session_start();


$profile_pic = $_SESSION['image'];

if (!isset($_SESSION['username'])) 
{
	session_destroy();
	echo "<script>location.href = 'login.php'</script>";
}
if (isset($_REQUEST['logout'])) 
{
	session_destroy();
	echo "<script>location.href = 'login.php' </script>";
}

?>

<!-------------------------------------------------HTML------------------------------------------------------>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<?php include "link.php"; ?>
<?php include "style_css.php"; ?>

<style type="text/css">
	
	*
	{
		box-sizing: border-box;
		font-family: 'muli',sans-sarif;

	}
	i
	{
		transition: width 1s;
		transition: height 1s;
	}
	i:hover
	{	
		font-weight: bold;
	}
	#header-ul li{padding-right: 40px;}
	a
	{
		font-family: 'muli' sans-serif;
		font-size: 20px;
	}
	a:hover
	{

		font-weight: bold;
	}
	
</style>

</head>
<body>

<!---------------------------------------------header------------------------------------------------------>
<div style="background-color:none ">
	
      <img src="header image/ck11.png" width="100%" height="200px" class ="">
      <form action="">
      	<button type="submit" name="logout" class="login-btn">Log out</button>
      </form>
      <center><p style="font-size: 24px;padding: 7px;margin: 0px;color:#447;">Welcome to Studybook</p></center>
</div>
<!----------------------------------------header navigation  ---------------------------------------------->

   <nav class="navbar navbar-expand-lg navbar-dark sticky-top " style="background-color: #222;">
  		<a class="navbar-brand" href="#"></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    	<span class="navbar-toggler-icon"></span>
  		</button>
  	<div class="collapse navbar-collapse" id="collapsibleNavbar">
    	<ul class="navbar-nav" id="header-ul">
      		<li class="nav-item">
        		<a class="nav-link" href="home.php" style="color: white">Home</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="recruitment.php" style="color: white" >Recruitment</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="quiz.php" style="color: white">Quiz</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="material.php" style="color: white">Material</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="news.php" style="color: white">News</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="about.php" style="color: white">About</a>
      		</li> 
      		<li class="nav-item">
        		<a class="nav-link" href="feedback.php" style="color: white">Feedback</a>
      		</li>      
    	</ul>
  	</div>  
	</nav>
	
<!---------------------------------------Container-fluid-------------------------------------------------------->
			
<div class="container-fluid">

<!------------------------------------------div-row------------------------------------------->

	<div class="row" style="">

<!------------------------------Div-Profile-------------------------------------------->
		<div class="col-sm-4" style="background-color: none;padding: 0%;">

					
				<div class="card " style="margin:10px 10px 0px 10px;background-color: #447;color: white;font-size: 18px;">
					

					<center><?php echo "<img src ='".$profile_pic."' class = 'rounded'id = 'profilepic'/>"; ?></center>

					<center><font style=""><?php  echo $_SESSION['username'];  ?></font></center><br>
				
				</div><br>

<!-------------------------------------Left-Navigation------------------------------------>

		<div class="container">
				<div class="col-sm-12  card" style="background-color: #447;padding: 5px;">
					<center><a href="currentaffairs.php" style="color: white;text-decoration: none">Current Affairs</a></center>
				</div><br>
				<div class="col-sm-12  card" style="background-color: #447;padding: 5px;">
					<center><a href="historyofgujarat.php" style="color: white;text-decoration: none">History of Gujarat</a></center>
				</div><br>
				<div class="col-sm-12  card" style="background-color: #447;padding: 5px;">
					<center><a href="constitution.php" style="color: white;text-decoration: none">Constitution</a></center>
				</div><br>
				<div class="col-sm-12  card" style="background-color: #447;padding: 5px;">
					<center><a href="science.php" style="color: white;text-decoration: none">Science</a></center>
				</div><br>
				<div class="col-sm-12  card" style="background-color: #447;padding: 5px;">
					<center><a href="mathematic.php" style="color: white;text-decoration: none">Mathematics</a></center>
				</div><br>
				<div class="col-sm-12  card" style="background-color: #447;padding: 5px;">
					<center><a href="computer.php" style="color: white;text-decoration: none">Computer</a></center>
				</div><br>
				<div class="col-sm-12  card" style="background-color: #447;padding: 5px;">
					<center><a href="historyofindia.php" style="color: white;text-decoration: none">History of India</a></center>
				</div><br>
				<div class="col-sm-12  card" style="background-color: #447;padding: 5px;">
					<center><a href="worldhistory.php" style="color: white;text-decoration: none">World History</a></center>
				</div><br>
				<div class="col-sm-12  card" style="background-color: #447;padding: 5px;">
					<center><a href="haritagesiteofindia.php" style="color: white;text-decoration: none">Heritage Site</a></center>
				</div><br>
				<div class="col-sm-12  card" style="background-color: #447;padding: 5px;">
					<center><a href="cultureofgujarat.php" style="color: white;text-decoration: none">Culture of Gujarat</a></center>
				</div>	<br>
			
			</div>

		</div>   
				
			
<!----------------------------div-article----------------------------------------------------------------->
		<div class="col-sm-8" style="background-color: none;">
			
				<center>
					<h5 style="background-color: #447;color: white;border-radius: 3px;margin-top: 10px;">Feedback</h5>
				</center>
				
				
			<center>	
					<div class="card" style="width: 70%;margin-top: 30px;padding: 50px; background-color: ;">
						<form action="feedback2.php" method="POST" class="">
					
							<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-envelope"></i></span>
								</div>
									<input type="email" name="email" class="form-control" placeholder="Email" required>
							</div>
					
							<div class="form-group input-group">
						
									<textarea class="form-control" name="feedback" placeholder="Comment..." required style="width: 200px;height: 100px;"></textarea>
							</div>
									<button type="submit" name="submit" class="btn btn-success" style="width: 100px;">Send</button>
					
						</form>
					</div>
			</center>
			
			
  		</div>
  		


  			

<!----------------------------------footer------------------------------------------------->	

<div class="col-sm-12" style=" height:auto;color: white;background-color:#111;overflow:;position: ;">

	<nav class="navbar navbar-expand-sm justify-content-center navbar-alert" style="background-color:#111;">
  		<ul class="navbar-nav">
    		<li class="nav-item">
      			<a class="nav-link" href="home.php" style="color: white">Home</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="material.php" style="color: white">Material</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="about.php" style="color: white">About</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="feedback.php" style="color: white">Feedback</a>
    		</li>
  		</ul>
	</nav>
		<center>
			<p style=" ">&copy chirag parmar 2020</p>
		</center>

		<center>
			<a href="https//www.facebook.com/chiragparmar75" style="color: white"><i class="fa fa-facebook" style="font-weight: ;font-size: 18px;" ></i></a>&nbsp;
			<a href="https//www.intagram.com/ckparmar_75" style="color: white"><i class="fa fa-instagram" style="font-weight: ;font-size: 18px;" ></i></a>&nbsp;
			<a href="https//www.twitter.com/ckparmar_75" style="color: white"><i class="fa fa-twitter" style="font-weight: ;font-size: 18px;" ></i></a>&nbsp;
			<a href="https//www.youtube.com/chirag parmar" style="color: white"><i class="fa fa-youtube" style="font-weight: ;font-size: 18px;" ></i></a>&nbsp;
			<a href="https//www.linkedin.com/in/chiragparmar75" style="color: white"><i class="fa fa-linkedin" style="font-weight: ;font-size: 18px;" ></i></a>
		</center>
</div>   
  		
</div>
</div>	

</body>
</html>	  

 
  