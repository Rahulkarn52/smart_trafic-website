<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Displeing and Editnig</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("header.html");
 if (isset($_POST['submit'])){
$con = mysql_connect("localhost","root","");
if(!$con){
  die("cannont connect". mysql_error());
  }
  mysql_select_db("mproject",$con);
  $searchName = $_POST['vehicle'];
  $sql = "SELECT * FROM vehicle WHERE vehicle = '".$searchName."'";
  $myData = mysql_query($sql ,$con);
  $i=1;
};
  while($userrow=mysql_fetch_array($myData))
  
  {
  $id=$userrow['id']; 
  $a=$userrow['vehicle'];
  $b=$userrow['engineno']; 
  $c=$userrow['company'];
  $d=$userrow['model'];
  $e=$userrow['color'];
  $f=$userrow['tax'];
  $g=$userrow['name'];
  $h=$userrow['regdate'];
  $i=$userrow['code'];
 
?>



<h1 class="display">
  <p class="ab"> vehicle : <span class="ab"><?php echo $a; ?></span></p><br />
  <p class="ab"> Engine no: <span class="ab"><?php echo $b; ?></span></p><br />
  <p class="ab"> Company : <span class="ab"><?php echo $c; ?></span></p><br />
  <p class="ab"> Model : <span class="ab"><?php echo $d; ?></span></p><br />
  <p class="ab"> Color : <span class="ab"><?php echo $e; ?></span></p><br />
  <p class="ab"> Tax : <span class="ab"><?php echo $f; ?></span></p><br />
  <p class="ab"> Name : <span class="ab"><?php echo $g; ?></span></p><br />
  <p class="ab"> Registration Date : <span class="ab"><?php echo $h; ?></span></p><br />
  <p class="ab"> Code : <span class="ab"><?php echo $i; ?></span></p><br />
  <a href="vdelete.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
        <span class="delete" title="Delete"> delete </span> </a>
  <a href="vedit.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> Edit </span></a></br></br>
</div>
<?php } ?>
</body>
</html>