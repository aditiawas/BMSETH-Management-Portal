<html>
<body>
<?php
session_start();
include 'connect_bmseth.php';
$id=$_POST['id'];
$room=$_POST['room'];
$stud_name=$_POST['stud_name'];
$usn=$_POST['usn'];
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$gen=$_POST['gen'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$nation=$_POST['nation'];
$query="INSERT INTO `studentinfo`(`ID`,`Room No.`,`Name`,`USN`,`Branch`,`Semester`,`Gender`,`DOB`,`Phone No.`,`Email ID`,`Nationality`) VALUES('$id','$room','$stud_name','$usn','$branch','$sem','$gen','$dob','$phone','$email','$nation')";
mysqli_query($dbhandle,$query) or die(mysqli_error($dbhandle));
echo ("<script>window.alert('Succesfully Added');
		 window.location.href='searchwarden.php';</script>");
?>
</body>
</html>