<?php
include 'connect_bmseth.php';
$idis=$_POST['id'];
$emailis=$_POST['emailid'];
$query = "SELECT * FROM `studentinfo` WHERE `ID`=$idis AND `Email ID` LIKE '$emailis'";
$result=mysqli_query($dbhandle,$query) or die ("Not possible");
$count= mysqli_num_rows($result);
if($count==1)
{
	require 'PHPMailer_5.2.4/PHPMailerAutoload.php';
	$mail=new PHPMailer();
$mailto=$emailis;
$mailSub='Password change requested';
$s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 8)), 0, 8);
echo $s;
$mailMsg='Hi! It seems like you forgot your password. So we are giving you a new one. Are we not great? Just kidding... Your new password is:  '.$s;
$has=md5($s);
$query = "UPDATE `login_student` SET `sPasswrd` = '$has' WHERE `sIndex`=$idis";
$result=mysqli_query($dbhandle,$query) or die ("Not done");
$mail->IsSmtp();
$mail->SMTPDebug=0;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Host="smtp.gmail.com";
$mail->Port=587;
$mail->IsHTML(true);
$mail->Username="bmsethostel@gmail.com";
$mail->Password="bmseth123";
$mail->SetFrom("bmseth@gmail.com");
$mail->Subject=$mailSub;
$mail->Body=$mailMsg;
$mail->AddAddress($mailto);
if(!$mail->Send())
{
echo '<script>alert("Mail not sent");</script>'. $mail->ErrorInfo;
}
else
{
echo '<script>alert("Mail sent");</script>';
}
}
else
{
	echo '<script>alert("Not in our records");</script>';
}
echo '<script>window.location.href="ssignin.php";</script>';
?>