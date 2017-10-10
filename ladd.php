<?php
include("header.html");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
<div>
<form id="frm" action="linsert.php" method="post">
License:
<input type="text" name="ulicense" ></br>
Name:
<input type="text" name="uname"></br>
Fine Amount:
<input type="text" name="fineamount"></br>
Rehistration Date:
<input type="text" name="ureg"></br>
Code:
<input type="text" name="ucode"></br></br>
<input type="submit" name="send" value="submit" class="sub"></br>
</form>
</div>
</center>
</body>
<html>