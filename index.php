	<!DOCTYPE html>
	<html>
	<head>
		<title>Turnitin - Login</title>
		<link rel="shortcut icon" type="image/icon" href="images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="jquery/jquery.js"></script>
		<script src="jquery/responsiveslides.min.js"></script>
		<script>
	  $(function() {
	    $(".rslides").responsiveSlides();
	  });
	</script>
	</head>
	<?php
	if (isset($_POST['button'])) {
	$name=	$_POST['Email'];
	$pas=	$_POST['Password'];
	if((empty($name) || empty($pas)) && (empty($name) && empty($pas)))
	{
		$print="you are not a valid user";
	}
	else if ($name!='drupal' && $pas!='drupal') {
		$print="you are not a valid user";
	
	}
	else{
	include('check.php');		
	}
	}
	?>
	<body>
	<header class="sticky">

	<div class="header-content">
		<div class="logo"><img src="images/logo.png" alt="logo"></div>
		<div class="icon-apple"><a href="#"><img  src="images/icon.png" alt="icon"></a></div>
		<div class="text">Try the free Turnitin iPad app for instructors.</div>
		<div class="clear"></div>
	</div>
	</header>
	<div class="content">
	<div class="header-content">
		<div id="slider">
			<div class="slider-text">
				<div class="slider-image">
				<ul class="rslides">
	  <li><img src="images/1.jpg" alt="1"></li>
	  <li><img src="images/2.jpg" alt="2"></li>
	  <li><img src="images/3.png" alt="3"></li>
	</ul></div>
				<div class="slider-content">
					<ul class="rslides color">
	  <li class="color"><p>Hi! i am Mohammad Zeeshan <br> I am studying in Class BS <br /> Computer Science <br/>Department </p></li>
	  <li class="color"><p>Hi! i am Mohammad Zeeshan <br> I am PHP developer </p></li>
	  <li class="color"><p>Hi! i am Mohammad Zeeshan <br> I am Wordpess developer</p></li>
	</ul>
				</div>
			</div>

	<div class="assistant"><a href="#"> Discover Revision Assistant</a></div>
		</div>
		<div id="form">
		<h2>Log In</h2>
	<p style="color:white;">	<?php
	if (isset($print)) {
		echo $print;
		
	}
	else if (isset($_GET['login'])) {
	echo "Login Successfully.......";
	}
		?></p>
		<form action="" method="POST">
		<input type="text" placeholder="Username" name="username" required><br />
		<input type="password"  placeholder="Password" name="password" required><br />
		<input type="submit" class="btn" name="button" value="Log In">
		</form>
	<p><a  href="#"> Reset Password</a></p>
	<p><a href="account.php" target="_self" title="Create Account"> Create Account</a></p><hr>
	<p><a href="#">Manuals & Guides</a></p>
	<p><a href="#">Support</a></p>
	</div>	
		<div class="clear"></div>
	</div>
	</div>
	</body>
	</html>