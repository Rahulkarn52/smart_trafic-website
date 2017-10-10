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
	$sql = "SELECT license,name,finedate,fineamount,registrationdate,code FROM license";
	$myData = mysql_query($sql,$con);
	echo "<table>
	<tr>
	<th>licence</th>
	<th>name</th>
	<th>fine date & time</th>
	<th>fine amount</th>
	<th>reg date</th>
	<th>code</th>
    </tr>";
	while($record = mysql_fetch_array($myData))
	{
		echo "<tr>";
		echo "<td>" . $record['license'] . "</td>";
		echo "<td>" . $record['name'] . "</td>";
		echo "<td>" . $record['finedate'] . "</td>";
		echo "<td>" . $record['fineamount'] . "</td>";
		echo "<td>" . $record['registrationdate'] . "</td>";
		echo "<td>" . $record['code'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";

	mysql_close($con);
?>