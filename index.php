<?php

$anniversary = strtotime("2015-10-02");
$now = time();
$datediff = $now - $anniversary;
$daysRemaining = floor($datediff/(60*60*24));
$years = round($daysRemaining / 365, 2);
// echo $years;
$hello = "world";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Rafael Reyes - Product Owner</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--
Easy Profile Template
http://www.templatemo.com/tm-467-easy-profile
-->
	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo-blue.css">
</head>
<body data-spy="scroll" data-target=".navbar-collapse">

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-wordpress">
       <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- header section -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<img src="images/20200117_213625000_iOS.jpg" width="180" height="auto" class="img-responsive img-circle tm-border" alt="templatemo easy profile">
				<hr>
				<h1 class="tm-title bold shadow">Hi, I am Rafael Reyes</h1>
				<h1 class="white bold shadow">Product Owner / Tech Enthusiast / Amateur Photographer</h1>
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">Amateur</h3>
				<h2>Photo Resume</h2>				
				<p>Take a look at some of my most recent works <a href="photos.html">here</a>.</p>
				<p>Testing PHP code <a href="photos.php">here</a>.</p>
				<p>testing php code</p>
				<?php echo $hello; ?>
				<?php echo $years; ?>


			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="skills">
				<h2 class="white">Skills</h2>
				<strong>PHP MySQL</strong>
				<span class="pull-right">70%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar"
                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
					</div>
				<strong>UI/UX Design</strong>
				<span class="pull-right">85%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar"
                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
					</div>
				<strong>Bootstrap</strong>
				<span class="pull-right">95%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar"
                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
					</div>
			</div>
		</div>
	</div>
</section>

<!-- education and languages -->
<section class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="education">
				<h2 class="white">Education</h2>
					<div class="education-content">
						<h4 class="education-title accent">Pure Mathematics</h4>
							<div class="education-school">
								<h5>University of California, San Diego</h5><span></span>
								<h5>2012 October - 2014 March</h5>
							</div>
						<p class="education-description">Courses include: Mathematics of Finance, Linear Algebra, Probability, Real Analysis, Statistics and its Applications, Micro and Macro Economics.</p>
					</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>Languages</h2>
					<ul>
						<li>Myanmar / Thai</li>
						<li>English / Spanish</li>
						<li>Chinese / Japanese</li>
						<li>Arabic / Hebrew</li>
					</ul>
			</div>
		</div>
	</div>
</section>

<!-- contact and experience -->
<section class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="contact">
				<h2>Contact</h2>
					<p><i class="fa fa-map-marker"></i>4155 Georgia St. San Diego, CA 92103</p>
					<p><i class="fa fa-phone"></i>951-816-1523</p>
					<p><i class="fa fa-envelope"></i><a href = "mailto: rcreyes.951@gmail.com">rcreyes.951@gmail.com</a></p>
			</div>
		</div>
		<div class="col-md-8 col-sm-12">
			<div class="experience">
				<h2 class="white">Experiences</h2>
					<div class="experience-content">
						<h4 class="experience-title accent">Product Development</h4>
						<h5>Axos Bank</h5><span></span>
						<h5>2020 January - Current</h5>
						<p class="education-description">Gathered business requirements and translated them into user stories for product development. Led sprint planning and grooming sessions, attended daily standups and ensured dependencies were squashed.</p>
					</div>
			</div>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/rcreyes951" class="fa fa-facebook" target="_blank"></a></li>
					<li><a href="https://twitter.com/raffyloveee" class="fa fa-twitter" target="_blank"></a></li>
					<li><a href="https://github.com/roflness/" class="fa fa-github" target="_blank"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- javascript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
