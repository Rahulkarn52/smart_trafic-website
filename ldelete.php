<?php
  ob_start();
  include("db.php");
  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $delete=mysql_query("DELETE FROM license WHERE id='$delete'");
  if($delete)
  {
	  header("Location:alic.php");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>