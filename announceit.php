<html>
<body>
<?php
session_start();
include 'connect_bmseth.php';
if(!isset($_SESSION['wauth'])) {header("location:home.php");}
$discuss=$_POST['announce'];
$que="INSERT INTO `forum` (`Name`,`Discuss`) VALUES ('Warden','$discuss')";
$result=mysqli_query($dbhandle,$que) or die("Cannot fetch");
echo '<script>alert("The announcement has been made");window.location.href="wardenannounce.php";</script>';
?>
</body>
</html>