
<?php
 ob_start();
  include("db.php");
  if(isset($_POST['send'])!="")
  {
  $uvehicle=mysql_real_escape_string($_POST['uvehicle']);
  $uengineno=mysql_real_escape_string($_POST['uengineno']); 
  $ucompany=mysql_real_escape_string($_POST['ucompany']);
  $umodel=mysql_real_escape_string($_POST['umodel']);
  $ucolor=mysql_real_escape_string($_POST['ucolor']);
  $utax=mysql_real_escape_string($_POST['utax']);
  $uname=mysql_real_escape_string($_POST['uname']);
  $uregdate=mysql_real_escape_string($_POST['uregdate']);
  $ucode=mysql_real_escape_string($_POST['ucode']);

  $update=mysql_query("INSERT INTO vehicle (vehicle,engineno,company,model,color,tax,name,regdate,code) VALUES ('$uvehicle','$uengineno','$ucompany','$umodel','$ucolor','$utax','$uname','$uregdate','$ucode')");
  
  if($update)
  {
	  header('Location:avec.php');
  }
  else
  {
	  die(mysql_error());
  }
  }
 ob_end_flush();
?>