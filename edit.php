<html>
<body>
<?php
session_start();
include 'connect_bmseth.php';
if(!isset($_SESSION['wauth'])) {header("location:home.html");}
$searchid=$_POST['thisid'];
$change=$_POST['searchid'];
$quer=$_POST['quer'];
$query="SELECT * FROM `studentinfo` WHERE `ID` = $searchid";
$result=mysqli_query($dbhandle,$query) or die("Cannot fetch");
if (count($result)!=1)
	echo '<script>window.alert("Such a record does not exist");
		 window.location.href="editit.php";</script>';
else
while ($row=mysqli_fetch_array($result))
{
		 $qu="UPDATE `studentinfo` SET `$change`='$quer' WHERE `ID`=$searchid";
         mysqli_query($dbhandle,$qu) or die(mysqli_error($dbhandle));
		 echo ("<script>window.alert('Succesfully Updated');
		 window.location.href='searchwarden.php';</script>");
}
?>
</body>
</html>