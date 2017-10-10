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
  $searchName = $_POST['license'];
  $sql = "SELECT * FROM license WHERE license = '".$searchName."'";
  $myData = mysql_query($sql ,$con);
  $i=1;
};
  while($userrow=mysql_fetch_array($myData))
  
  {
  $id=$userrow['id'];  
  $lic=$userrow['license'];
  $uname=$userrow['name']; 
  $ufd=$userrow['finedate'];
  $ufa=$userrow['fineamount'];
  $ureg=$userrow['registrationdate'];
  $uco=$userrow['code'];
 
?>



<h1 class="display">
  <p class="ab"> License : <span class="ab"><?php echo $lic; ?></span></p><br />
  <p class="ab"> Name : <span class="ab"><?php echo $uname; ?></span></p><br />
  <p class="ab"> Fine Date : <span class="ab"><?php echo $ufd; ?></span></p><br />
  <p class="ab"> Fine Amount : <span class="ab"><?php echo $ufa; ?></span></p><br />
  <p class="ab"> Registration Date : <span class="ab"><?php echo $ureg; ?></span></p><br />
  <p class="ab"> Code : <span class="ab"><?php echo $uco; ?></span></p><br />
  <a href="ldelete.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
        <span class="delete" title="Delete"> Delete </span> </a>
  <a href="ledit.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> Edit </span></a></br></br>
</h1>
<?php } ?>
</body>
</html>