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
			
				<center><h5 style="background-color: #447;color: white;border-radius: 3px;margin-top: 10px;">About us</h5></center>

				<article style="padding: 10px; margin: 0px;">
    				<p><b>www.studybook.com</b> is the best web portal for the students who prepareing for government exam. This web portal provided many kind of knowledge and we provide many kind of general knowledge pdf file like Magazine, Current affairs, Gujarati grammar, Mathematics, Culture of india , Constitution of Inida, World GK, India GK, Gujarat GK, Geology of India, Gujarati sahitya, Science & Technology etc..</p>
    			
    				<p><b>Studybook</b> is the No 1 Educational Website where you will be able to find details about various Jobs on different categories, Results, Syllabus, Old Papers and much more. The system of education is fast developing in India. Every year different educational institutes and government organizations conduct various types of exams in order to select the ideal candidates. A number of competitive exams are conducted for both the undergraduate and postgraduate students for professional courses or for securing government jobs. The exam formats and the difficulty level of the test vary from subject to subject.</p>

    
    				<p style="border-bottom: 1px solid #447"><b>Studybook : overview</b></p>
    				<p><b>Founder: Chirag Parmar</b><br><p>This web portal is very helpful for the students who preparing for exam.The exams are mostly objective in nature and are conducted all across the country. Cracking a competitive exam is quite tough and every year lakhs of aspirants try their luck for the limited number of seats. Now, from where do the candidates get the information about these competitive exams or the recruitment of government jobs? So <b>Studybook</b> is helping all the students and candidates by providing latest information about jobs and all other competitive exams.</p>
    				<p style="border-bottom: 1px solid #447"><b>Recruitment</b></p>
    				<p>Studybook provided exam information like Talati, Bin sachivalaya clerk, TAT, TET, GPSC, UPSC, Centeral government exam like Bank, SSC, DRDO, ONGC etc..and we provided educational information for Higher secondary student and Primary students </p>
    				<p style="border-bottom: 1px solid #447"><b>Material</b></p>
    				<p>Whenever you want download pdf fie for exam click on material <b>Studybook</b> provided many general knowlende file like Gujarat GK, India GK, World GK, Culture of India, Constitution of India, Gujarati Grammar, English Grammar, Mathematics, Science, Reasoning, Current Affairs, Gujarati Sahitya etc...All pdf file available in this web portal.</p>
    				<p style="border-bottom: 1px solid #447"><b>Quiz</b></p>
    				<p>We provide Quiz for students for best preparation and improove their knowledge we provide many question in quiz so hurry up and play quiz for your best preparation</p>
    				<p style="border-bottom: 1px solid #447"><b>News</b></p>
    				<p><b>Studybook</b> provide many kind of news paper like Gujarat samachar, Sandesh, Divya bhaskar, Magazine, Times of India, Hindustan time, The Hindu etc...click on News and get news for your better knowledge </p>
    			</article>	
  			
			
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

 
  