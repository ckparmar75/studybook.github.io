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


<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<?php include "fontawesome.php"; ?>
<?php include "style_css_backup.php"; ?>

<style type="text/css">
	
	*
	{
		box-sizing: border-box;
	}
	i
	{
		transition: width 1s;
		transform: height 1s;
	}
	i:hover
	{
		width: 25px;
		height: 52px;
	}
	@media(min-width: 468px)
	{
	#nav-left ::after
	{
		width: 100%
		content: "" ;

	}
}
	/* .img-header
	{
		position: absolute;
		top: 0;
		left: 0;
		z-index: -1;
	} */

	
	/* .profilepic ::after
	{
		content: "";
		clear: both;
		display: block;
	} */

	/*@media(max-width: 400px)
	{
		.nav-left
		{
			width: 100%;
			height: auto;
			margin-left: 0px;

		}
	}/*
	
</style>

</head>
<body LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>

<!-----------------------Div-wrapper----------------------------------->	
<div style="width: 100%;height: auto;background-color: pink;border:0px solid purple" id="div-wrapper">

<!--------------------------header------------------------------>
<div style="width: 100%;height:auto;background-color:white;margin: 0px;padding: 0px;" cellspacing="0" cellpadding="0">
	
      <img src="ck2.png" width="100%" height="300px" class ="img-header">
      <form action="">
      	<button type="submit" name="logout" class="login-btn">Log out</button>
      </form>
      <center><p style="font-size: 24px;padding: 7px;margin: 0px;">Welcome to my web <?php  echo $_SESSION['username'];  ?></p></center>
</div> 

<!----------------------header navigation  --------------------->
<div style="width: 100%;height:auto;" cellpadding="0" cellspacing="0">
   <nav id="nav-header">																
   <ul id="ul1">
	  <li id="active"><a href="home.php">Home</a></li>
	  <li><a href="news.php">News</a></li>
	  <li><a href="recruitment.php">Recruitment</a></li>
	  <li><a href="quiz.php">Quiz</a></li>
	  <li><a href = "material.php">Material</a></li>
	  <li><a href="quiz.php">Time Table</a></li>
	  <li ><a href="about.php">About</a></li>
	  <li><a href="feedback.php">Feedback</a></li>
	  

	  
	</ul> 
   </nav>
</div>   
     
<!------------------------section-------------------------->
<section>
	<!----------------------------------div-main------------------------------------------------------->
	<div style="width: 100%; height:500px;margin: 0px;background-color: orange;">
		
			<!---------------------------------------left-navigation----------------------------->
			<nav style="width: 25%;height:500px;background-color: #999;margin-top: 0px;float: left;overflow: auto;" id="nav-left">

				<!------------------------------div-image------------------------->
				<div style="width: 100%;height: 40%;background-color: #999;margin-top: 0px;margin-right: 0%;margin-left: 0%;position: sticky;" class="div-image" >

					<?php echo "<img src ='".$profile_pic."' class = 'profilepic'/>"; ?>

					<center><font style=""><?php  echo $_SESSION['username'];  ?></font></center>
				</div>
				
				<ul id="ul-left">
					<li><a href="currentaffairs.php">Current Affairs</a></li>
					<li><a href="magazine.php">Magazine</a></li>
				    <li><a href="question.php">Questions</a></li>
				    <li><a href="constitution.php">Constitution</a></li>
				    <li><a href="gujaratgk.php">Gujarat GK</a></li>
				    <li><a href="indiagk.php">India GK</a></li>
				    <li><a href="worldgk.php">World GK</a></li>
				    <li><a href="gujaratigrammar.php">Gujarati Grammar</a></li>
				    <li><a href="englishgrammar.php">English Grammar</a></li>
				    <li><a href="modelpaper.php">Model Paper</a></li>
				    <li><a href="sahitya.php">Gujarati Sahitya</a></li>
				    
				    
				</ul>
			</nav>
		<!----------------------------div-article----------------------------------------------------------------->
		<div style="width: 75%;height:500px;background-color:white; color:;margin-top: 0px;position:;overflow: auto;">
			<article style="padding: 10px; margin: 0px;">
    			<p style="font-size: 24px">(1). Who is the prime minister of india ?</p>
    			<form action="" method="POST">
    				<input type="radio" name="r1">Narendra Modi
    				<input type="radio" name="r1">Rahul Ganghi
    				<input type="radio" name="r1">Amit Shah
    				<input type="radio" name="r1">Ramnath Kovind
    			</form>
  			</article>
  			<article style="padding: 10px; margin: 0px;">
    			<h1>Mumbai</h1>
    			<p>Mumbai is the capital city of Maharastra. It is the most populous city in the  India, with a metropolitan area of over 13 million inhabitants.</p>
    			<p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  			</article>
  			<article style="padding: 10px; margin: 0px;">
    			<h1>London</h1>
    			<p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    			<p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  			</article>
  			<article style="padding: 10px; margin: 0px;">
    			<h1>London</h1>
    			<p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    			<p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  			</article>
  			<article style="padding: 10px; margin: 0px;">
    			<h1>London</h1>
    			<p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    			<p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  			</article>
  			

  		</div>
  			

		
	</div>
</section>	  
      
<!----------------------------------footer------------------------------------------------->	
<div style="width: 100%; height:auto;margin-bottom: 0px;padding:5px;color: white;background-color:#333;overflow:;position: ;">

	<ul class="ul-footer">
		<li><a href="home.php">Home</a></li>
		<li><a href="quiz.php">Material</a></li>
	    <li ><a href="about.php">About</a></li>
	    <li><a href="feedback.php">Feedback</a></li>
	</ul>
		<p style="margin-top: 8%;margin-left: 45%;margin-right: 40%;">&copy chirag parmar 2020</p>
		<center>
			<a href="http//www.facebook.com/chiragparmar75" style="color: white"><i class="fa fa-facebook" style="font-weight: ;font-size: 18px;" ></i></a>&nbsp;
			<a href="http//www.intagram.com/ckparmar_75" style="color: white"><i class="fa fa-instagram" style="font-weight: ;font-size: 18px;" ></i></a>&nbsp;
			<a href="http//www.twitter.com/ckparmar_75" style="color: white"><i class="fa fa-twitter" style="font-weight: ;font-size: 18px;" ></i></a>&nbsp;
			<a href="http//www.youtube.com/chirag parmar" style="color: white"><i class="fa fa-youtube" style="font-weight: ;font-size: 18px;" ></i></a>
		</center>
</div>   

</div>
</body>
</html>	  

 
  