<?php
$localhost="localhost";
$username="root";
$password="";
$db="turnitin";
$connect=mysqli_connect($localhost,$username,$password,$db);
$sql="INSERT into login (Email,Password)values('".$name."','".$pass."')";
if (mysqli_query($connect,$sql)) {
	header("location:account.php? submission=Your Account Has been created");
}
?>