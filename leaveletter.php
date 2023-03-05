<?php
session_start();
if(!isset($_SESSION['sauth'])) {header("location:home.html");}
include 'connect_bmseth.php';
$from=$_POST['from'];
$to=$_POST['to'];
$messg=$_POST['message'];
$pers=$_SESSION['ID'];
$query = "SELECT * FROM `studentinfo` WHERE `ID`=$pers";
$result=mysqli_query($dbhandle,$query) or die ("Not possible");
$count= mysqli_num_rows($result);
if($count==1)
{
	$row=mysqli_fetch_array($result);
	require 'PHPMailer_5.2.4/PHPMailerAutoload.php';
	$mail=new PHPMailer();
    $mailto="royalkatefan@gmail.com";
    $mailSub='Requesting leave-'.$from.' to '.$to.'-'.$row['Name'];
    $mailMsg=$messg.' -'.$row['Name'].' Email: '.$row['Email ID'].' Room No.:'.$row['Room No.'];
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
       echo '<script>alert("Mail sent");window.location.href="shome.php";</script>';
    }
}
else
{
	echo '<script>alert("Not in our records");</script>';
}
echo '<script>window.location.href="application.php";</script>';
?>