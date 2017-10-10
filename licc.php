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
	$searchName = $_POST['license'];
	$sName = $_POST['code'];
    $sql = "SELECT license, finedate, fineamount FROM license WHERE license = '".$searchName."' and code = '".$sName."'";
	$myData = mysql_query($sql,$con);
	echo "<table border=2>
	<tr>
	<th>License No</th>
	<th>Fine Amount</th>
	<th>Fine Date & Time</th>
	
	</tr>";
	while($record = mysql_fetch_array($myData))
	{
		echo "<tr>";
		echo "<td>" . $record['license'] . "</td>";
		echo "<td>" . $record['fineamount'] . "</td>";
		echo "<td>" . $record['finedate'] . "</td>";
		
		echo "</tr>";

	}
	echo "</table>";
	

	
mysql_close($con);
}
?>
