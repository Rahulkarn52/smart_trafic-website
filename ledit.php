
<!DOCTYPE>
<html>
<head>
<title>Main Page</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>
<body>
<?php 
ob_start();
include('db.php');
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $fineamt=$_POST['afm'];
  $updated=mysql_query("UPDATE license SET 
	 fineamount='$fineamt' WHERE id='$id'")or die();
  if($updated)
  {
  header('Location:alic.php');
  }
  else
  {
    die("error". mysql_error());
  }
}
}
ob_end_flush();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<?php 
include("header.html");
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("SELECT * FROM license WHERE id='$id'");
  while($profile=mysql_fetch_array($getselect))
  {
    $fa=$profile['fineamount'];
?>
<h1 class="display">
  <form action="" method="post" name="insertform">
    <p class="ab">Fine Amount: <input type="text" name="afm" required value="<?php echo $fa; ?>" id="inputid" />
    </p></br>
    <p>
      <input type="submit" name="update" value="Update" class="sub" />
    </p>
  </form>
</div>
<?php } } ?>
</body>
</html>

