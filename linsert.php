
<?php
 ob_start();
  include("db.php");
  if(isset($_POST['send'])!="")
  {
  $ulicense=mysql_real_escape_string($_POST['ulicense']);
  $uname=mysql_real_escape_string($_POST['uname']); 
  $ufinedate=mysql_real_escape_string($_POST['ufinedate']);
  $ufineamount=mysql_real_escape_string($_POST['ufineamount']);
  $ureg=mysql_real_escape_string($_POST['ureg']);
  $ucode=mysql_real_escape_string($_POST['ucode']);
  $update=mysql_query("INSERT INTO license (license,name,finedate,fineamount,registrationdate,code) VALUES ('$ulicense','$uname',now(),'$ufineamount','$ureg','$ucode')");
  
  if($update)
  {
    header('Location:alic.php');
  }
  else
  {
    die(mysql_error());
  }
  }
 ob_end_flush();
?>