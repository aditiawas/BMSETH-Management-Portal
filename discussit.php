<html>
<body>
<?php
session_start();
include 'connect_bmseth.php';
$id=$_SESSION['ID'];
$discuss=$_POST['discuss'];
$query="SELECT * FROM `studentinfo` WHERE `ID`=$id";
$result=mysqli_query($dbhandle,$query) or die("Cannot fetch");
while ($row=mysqli_fetch_array($result))
{
$nam=$row['Name'];
echo $nam;
$query="INSERT INTO `forum` (`Name`,`Discuss`) VALUES ('$nam','$discuss')";
mysqli_query($dbhandle,$query) or die(mysqli_error($dbhandle));
}
header("location:studenquiryforum.php");
?>
</body>
</html>