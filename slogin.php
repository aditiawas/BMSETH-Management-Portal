<html>
<body>
<?php
include 'connect_bmseth.php';
session_start();
$myusername = $_POST['uname'];
$mypassword = md5($_POST['psw']);
$query = "select * from `login_student` where sName='$myusername' and sPasswrd='$mypassword'";
$result=mysqli_query($dbhandle,$query);
$count= mysqli_num_rows($result);
if($count==1){
	mysqli_close(NULL);
	$_SESSION['sauth']="yes";
	$q="SELECT * FROM `login_student`";
$r=mysqli_query($dbhandle,$q) or die("Cannot fetch");
while($row=mysqli_fetch_array($r))
{
	if($row['sName']==$myusername)
	{
		$_SESSION['ID']=$row['sIndex'];
	}
}
	header("Location:shome.php");
	exit;
}
else
{
	echo "<script>alert('Invalid Username or Password');window.loaction.href='ssignin.php';</script>";
}
?>
</body>
</html>