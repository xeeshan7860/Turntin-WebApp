<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<link rel="shortcut icon" type="image/icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/account.css">
</head>
<?php
if (isset($_POST['button'])) {
$name=	$_POST['name'];
$pass=	$_POST['pass'];
if((empty($name) || empty($pass)) && (empty($name) && empty($pass)))
{
	$print="Please fill Boxes";
}
else {
include('insert.php');
		
}


}



?>


<body>
<div class="main">
	<div class="logo">
		<img src="images/logo.png" alt="logo">
	</div>
	<div class="content">
		<h1>Create a User Profile</h1>
		<h3>Have You Ever Used Turnitin?</h3>
<p>
If you've used Turnitin before, you can use the same email and password to log in. You can keep all your papers and grades together, even if you're now in a different class or a different school!</p>
	<form action="" method="POST">
Email<br/> <input autofocus type="text" name="name" placholder="Email" ><br />
Password<br /><input type="password" name="pass" placholder="Password" ><br />
<p style="color:blue;">	<?php
if (isset($print)) {
	echo $print."<br/>";
	
}
else if (isset($_GET['submission'])) {
echo "Your Account has been created "."<br/>";
}
?> </p>
<input type="submit" name="button" value="Create Account">
</form>
	</div>



</div>

</body>
</html>