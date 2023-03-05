<html>
<body>
<?php
session_start();
include 'connect_bmseth.php';
$searchid=$_POST['id'];
$quer=$_POST['present'];
$currentdate=date("Y-m-d");
$query="UPDATE `studentinfo` SET `Attendance`=$quer WHERE `ID`=$searchid";
mysqli_query($dbhandle,$query) or die(mysqli_error($dbhandle));
$query="UPDATE `studentinfo` SET `UpdateDate`='$currentdate' WHERE `ID`=$searchid"; 
mysqli_query($dbhandle,$query) or die(mysqli_error($dbhandle));
echo "<script>alert('Succesfully Updated');</script>";
echo "<script>location.href='updateattend.php';</script>";
?>
</body>
</html>