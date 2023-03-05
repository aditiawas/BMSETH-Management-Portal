<html>
<body>
<?php
include 'connect_bmseth.php';
session_start();
$myusername = $_POST['uname'];
$mypassword = $_POST['psw'];
$query = "select * from `login_warden` where wName='$myusername' and wPasswrd='$mypassword'";
$result=mysqli_query($dbhandle,$query);
$count= mysqli_num_rows($result);

mysqli_close($dbhandle);

if($count==1){
	$_SESSION['wauth']="yes";
	echo'<script>window.location.href="whome.php";</script>';
	exit;
}
else {
	echo'<script>alert("Login unsuccessful");';
	echo'location.href="wsignin.php";</script>';
}
?>
</body>
</html>