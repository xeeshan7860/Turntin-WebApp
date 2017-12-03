<?php
// $username=$_POST['username'];
// $password=$_POST['password'];
$localhost="localhost";
$dbname="drupal";
$pass="";
$db="turn";
$connect=mysqli_connect($localhost,$dbname,$pass,$db);
$sql="SELECT * from login WHERE Email='".$name."' AND Password='".$pas."' LIMIT 1 ";
$value=mysqli_query($connect,$sql);
if (mysqli_num_rows($value)==1) {
header("location: index.php? login=login Succesfully" );
}
else
{
header("location: index.php" );
}
?>