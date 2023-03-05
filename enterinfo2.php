<html>
<body>
<?php
session_start();
include 'connect_bmseth.php';
if(!isset($_SESSION['sauth'])) {header("location:home.html");}
echo $_POST['searchid'];
$ans=$_SESSION['ID'];
$searchid=$_POST['searchid'];
$quer=$_POST['quer'];
$query="SELECT * FROM `studentinfo`";
$result=mysqli_query($dbhandle,$query) or die("Cannot fetch");
while ($row=mysqli_fetch_array($result))
{
	 if ($_SESSION['ID']==$row['ID'])
	 {
		 if ($searchid=='Phone No.')
	         $qu="UPDATE `studentinfo` SET `$searchid` = $quer WHERE `ID`=$ans";
		 else if ($searchid=='Email ID')
			      $qu="UPDATE `studentinfo` SET `$searchid`='$quer' WHERE `ID`=$ans";
         echo $qu;
		 sleep (3);
         mysqli_query($dbhandle,$qu) or die(mysqli_error($dbhandle));
		 break;
	 }
}
header("Location: studentdetails.php");
?>
</body>
</html>