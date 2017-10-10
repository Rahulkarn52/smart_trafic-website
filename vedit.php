
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
include("header.html");
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
  $c=$_POST['co'];
  $t=$_POST['ta'];
  $n=$_POST['na'];

  $updated=mysql_query("UPDATE vehicle SET 
		color='$c', tax='$t', name='$n' WHERE id='$id'")or die();
  if($updated)
  {
  header('Location:avec.php');
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
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("SELECT * FROM vehicle WHERE id='$id'");
  while($profile=mysql_fetch_array($getselect))
  {
    $fc=$profile['color'];
    $ft=$profile['tax'];
    $fn=$profile['name'];
?>
<h1 class="display">
  <form action="" method="post" name="insertform">
    <p class="ab">Color :
      <input type="text" name="co" required value="<?php echo $fc; ?>" id="inputid" />
    </p></br>
    <p class="ab">
      Tax:
      <input type="text" name="ta" required value="<?php echo $ft; ?>" id="inputid" />
    </p></br>
    <p class="ab">
     Name:
      <input type="text" name="na" required value="<?php echo $fn; ?>" id="inputid" />
    </p></br>
    <p>
      <input type="submit" name="update" value="Update" class="sub" />
    </p>
  </form>
</div>
<?php } } ?>
</body>
</html>


