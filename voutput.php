<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
</head>
</html>

<?php
include("header.html");
$con = mysql_connect("localhost","root","");
if(!$con){
	die("cannont connect". mysql_error());
	}
	mysql_select_db("mproject",$con);
	$sql = "SELECT vehicle,engineno,company,model,color,tax,name,regdate,code FROM vehicle";
	$myData = mysql_query($sql,$con);
	echo "<table>
	<tr>
	<th>vehicle</th>
	<th>engine no</th>
	<th>company</th>
	<th>model</th>
	<th>color</th>
	<th>tax</th>
	<th>name</th>
	<th>registration date</th>
	<th>code</th>

	</tr>";
	while($record = mysql_fetch_array($myData))
	{
		echo "<tr>";
		echo "<td>" . $record['vehicle'] . "</td>";
		echo "<td>" . $record['engineno'] . "</td>";
		echo "<td>" . $record['company'] . "</td>";
		echo "<td>" . $record['model'] . "</td>";
		echo "<td>" . $record['color'] . "</td>";
		echo "<td>" . $record['tax'] . "</td>";
		echo "<td>" . $record['name'] . "</td>";
		echo "<td>" . $record['regdate'] . "</td>";
		echo "<td>" . $record['code'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysql_close($con);
?>