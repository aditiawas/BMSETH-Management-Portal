<?php 
session_start();
if(!isset($_SESSION['wauth'])) {header("location:home.html");}
include 'connect_bmseth.php';
$id=$_POST['id'];
$query = "SELECT * FROM `studentinfo` WHERE `ID`=$id";
$result=mysqli_query($dbhandle,$query) or die ("Not possible");
while($row=mysqli_fetch_array($result))
{
$allowed = array ('image/pjpeg','image/jpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png','image/x-png');
if(in_array($_FILES['upload']['type'],$allowed))
{
	 $namefile=$_FILES['upload']['name'];
     if (move_uploaded_file($_FILES['upload']['tmp_name'],"uploads/{$_FILES['upload']['name']}"))
     {
		 $qu="UPDATE `studentinfo` SET `Photo`='$namefile' WHERE `ID`=$id";
		 mysqli_query($dbhandle,$qu) or die(mysqli_error($dbhandle));
		 echo '<script>alert("The file '.$namefile.' has been uploaded!");</script>';
		 echo '<script>location.href="searchwarden.php";</script>';
	 }
}
else 
     echo '<p Class="error"> Please upload a jpeg or Png image.</p>';
 
if($_FILES['upload']['error'] > 0)
{
echo '<p class="error">The file could not be uploaded because: <strong>'; 
switch($_FILES['upload']['error'])
{
case 1:
print 'The file exceeds the upload_max_filesize setting
inphp.ini.';
break;
case 2:
print 'The file exceeds the MAX_FILE_SIZE setting in 
the HTML form.'; 
break;
case 3:
print 'The file was only partially uploaded.'; 
break;
case 4:
print 'No file was uploaded'; 
break;
case 6:
print 'No temporary folder was available'; 
break;
case 7:
print 'Unable to write to the disk'; 
break;
case 8:
print 'file upload stopped.'; 
break;
default: 
print 'A system error occurred.';
break;
}
print '</strong></p>'; 
} 
 
if (file_exists ($_FILES['upload']['tmp_name']) && is_file($_FILES['upload']['tmp_name']))
     unlink ($_FILES['upload']['tmp_name']);
}
?>