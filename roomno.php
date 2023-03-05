<?php
session_start();
include 'connect_bmseth.php';
if(!isset($_SESSION['wauth'])) {header("location:home.html");}
?>
<html lang="en">
<head>
  <title>Warden | Room Nos.</title>
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
	.btn{
		background-color:#e6f2ff;!important
		font-size:25pt; !important
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
    <h1><center>Room numbers</center></h1>
</div>
<form action="studcard.php" method="POST">
<div class="container">    
  <div class="row">
    <div class="col-sm-3">
      <div class="panel-primary"><input class="btn" type="submit" name="quer" value="100">
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel-primary">
       <input class="btn" type="submit" name="quer" value="101">
      </div>
    </div>
	<div class="col-sm-3"> 
      <div class="panel-primary">
        <input class="btn" type="submit" name="quer" value="102">
      </div>
    </div>
	<div class="col-sm-3"> 
      <div class="panel-primary">
        <input class="btn" type="submit" name="quer" value="103">
      </div>
    </div>
  </div>
  </br>
  <div class="row">
    <div class="col-sm-3">
      <div class="panel-primary">
        <input class="btn" type="submit" name="quer" value="104">
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel-primary">
	  <input class="btn" type="submit" name="quer" value="105">
      </div>
    </div>
	<div class="col-sm-3"> 
      <div class="panel-primary">
       <input class="btn" type="submit" name="quer" value="106">
      </div>
    </div>
	<div class="col-sm-3"> 
      <div class="panel-primary">
        <input class="btn" type="submit" name="quer" value="107">
      </div>
    </div>
  </div>
</br>
<div class="row">
    <div class="col-sm-3">
      <div class="panel-primary">
        <input class="btn" type="submit" name="quer" value="108">
      </div>
    </div>
    <div class="col-sm-3"> 
      <div class="panel-primary">
	  <input class="btn" type="submit" name="quer" value="109">
      </div>
    </div>
	<div class="col-sm-3"> 
      <div class="panel-primary">
       <input class="btn" type="submit" name="quer" value="110">
      </div>
    </div>
	<div class="col-sm-3"> 
      <div class="panel-primary">
        <input class="btn" type="submit" name="quer" value="111">
      </div>
    </div>
  </div>
</br>
<br/>  
</div>
</body>
<!-- Footer -->
<footer class="text-center">
  <p>Website developed by A&E Web Developers Inc.</p> 
</footer>
</html>