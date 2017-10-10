<?php
$con = mysql_connect("localhost","root","");
if(!$con){
	die("cannont connect". mysql_error());
	}
	mysql_select_db("mproject",$con);
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM admin WHERE username = '".$user."' and password = '".$pass."'";
$myData = mysql_query($sql,$con);
$row = mysql_fetch_array($myData);
 if ($row['username'] == $user && $row['password'] == $pass)
 {
 	header("location:adsel.php");
 }
 else
 {
 	header("location: admin.php");
 }
 mysql_close($con);
?>