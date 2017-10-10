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
<form id="frm" action="vinsert.php" method="post">
Vehicle:
<input type="text" name="uvehicle" ></br>
Engine no:
<input type="text" name="uengineno"></br>
Company:
<input type="text" name="ucompany"></br>
Model:
<input type="text" name="umodel"></br>
Color:
<input type="text" name="ucolor"></br>
Tax:
<input type="text" name="utax"></br>
Name:
<input type="text" name="uname"></br>
Rehistration Date:
<input type="text" name="uregdate"></br>
Code:
<input type="text" name="ucode"></br></br>
<input type="submit" name="send" value="submit" class="sub"></br>
</form>
</div>
</center>
</body>
<html>