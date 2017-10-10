<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
</head>
</html>
<?php
include("userheader.html");
if (isset($_POST['submit'])){
$con = mysql_connect("localhost","root","");
if(!$con){
	die("cannont connect". mysql_error());
	}
	mysql_select_db("mproject",$con);
	$searchName = $_POST['vehicle'];
	$sName = $_POST['code'];
    $sql = "SELECT vehicle, tax FROM vehicle WHERE vehicle = '".$searchName."' and code='".$sName."'";
	$myData = mysql_query($sql,$con);
	echo "<table border=2>
	<tr>
	<th>Vehicle No</th>
	<th>tax</th>
	</tr>";
	while($record = mysql_fetch_array($myData))
	{
		echo "<tr>";
		echo "<td>" . $record['vehicle'] . "</td>";
		echo "<td>" . $record['tax'] . "</td>";
		echo "</tr>";

	}
	echo "</table>";
	

	
mysql_close($con);
}
?>