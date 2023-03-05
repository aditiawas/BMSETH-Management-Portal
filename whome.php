<?php
session_start();
if(!isset($_SESSION['wauth'])) {header("location:home.html");}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Warden | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="bms.jfif" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="gen_style.css">
  <style type="text/css">
  .container {
      padding: 20px 20px;
  }
  .jumbotron {
	  height:200px;
      margin-bottom: 0;
	  background-color:#004d80;
	  color:white;
    }
	.panel-primary{
	border-color:#000000;
	padding:30px;
	background-color:#e6f2ff;!important
	font-size:20pt;
	font-weight:bold;
	text-align:center;
	border-radius:15px;
	color:#004d80;
	text-align:center;
	height:100px;
	}
  </style>
</head>
<!-- The scrollable area -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home2.php"><b><font size="12pt">BMSET HOSTELS</font></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="whome.php">HOME</a></li>
        <li><a href="hostel_mess2.php">HOSTEL & MESS</a></li>
        <li><a href="warden2.php">WARDENS</a></li>
        <li><a href="home2.php">CONTACT</a></li>
        <li><a href="logout.php">SIGN OUT</a>
        </li>
       </ul>
    </div>
  </div>
</nav>
<div class="jumbotron">
    <h1><center>Welcome Warden</center></h1>
</div>

<div class="container">    
  <div class="row">
    <div class="col-sm-6">
	<a href="searchwarden.php">
      <div class="panel-primary">
        Update Student Database
      </div>
	  </a>
    </div>
    <div class="col-sm-6"> 
	<a href="roomno.php">
      <div class="panel-primary">
        View Room Occupants
      </div>
	  </a>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="col-sm-6">
	<a href="updateattend.php">
      <div class="panel-primary">
        Student Attendance Record
      </div>
	  </a>
    </div>
    <div class="col-sm-6"> 
	<a href="wardenannounce.php">
      <div class="panel-primary">
        Make An Announcement
      </div>
	  </a>
    </div>
  </div>
</br>  
  <div class="row">
   <div class="col-sm-12">
   <a href="wardeninquiryforum.php">
      <div class="panel-primary">
	  Discussion/Enquiry Forum
	  </div>
	  </a>
	  </div>
	  </div>
	  </div>
<script src="https://unpkg.com/sweetalert@2.0.8/dist/sweetalert.min.js"></script>
<!-- Footer -->
</body>
</br><br/>
<footer class="text-center">
  <p><button onclick='swal("A&E Web Developers", "Launched amidst the hustle & bustle of the engineering life, we aim to be the comprehensive solution to your online dream.", "info");' style="background-color:#2d2d30;border:collapse">Website developed by A&E Web Developers Inc.</button></p> 
</footer>
</html>