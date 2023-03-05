<?php
include 'connect_bmseth.php';
session_start();
$delid=$_POST['delid'];
if(!isset($_SESSION['wauth'])) {header("location:home.html");}
$q="SELECT * FROM `studentinfo` WHERE `ID` = $delid";
$res=mysqli_query($dbhandle,$q);
$c=mysqli_num_rows($res);
if ($c<1)
	echo '<script>alert("No such record exists");location.href="deleteit.php";</script>';
$query="DELETE FROM `studentinfo` WHERE `ID` = $delid";
$result=mysqli_query($dbhandle,$query);
echo ("<script>alert(".$result.");window.alert('Succesfully Deleted');
	    	 window.location.href='searchwarden.php';</script>");
?>