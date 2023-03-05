<?php
include 'connect_bmseth.php';
session_start();
if(!isset($_SESSION['sauth'])) {header("location:home.html");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student | Request Repairs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="bms.jfif" sizes="16x16">
<link rel="stylesheet" type="text/css" href="gen_style.css">
    <style type="text/css">
.jumbotron{
	  height:50px;
	  width:auto;
	  background-color:#004d80;
	  color:white;
	  font-size:30px;
	  }
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 65%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 65%;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 65%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: 65%;
    padding: 10px 18px;
    background-color: #f44336;
}

.card .container {
	width:100%;
    padding: 14px;
}

span.psw {
	    
        padding-top: 16px;
}
.card {
	background-color:#e6f2ff;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
	height:75%;
	width: 65%;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
  </style>
  <script type="text/javascript">
  function f1()
  {
	  return(confirm("An email will be sent to the Warden. Do you want to Send an email?"));
  }
  function f2()
  {
	  return(confirm("Your email hasn't been sent. Are you sure you want to exit?"));
  }
  </script>
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
      <a class="navbar-brand" href="home1.php"><b><font size="12pt">BMSET HOSTELS</font></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="shome.php">HOME</a></li>
        <li><a href="hostel_mess1.php">HOSTEL & MESS</a></li>
        <li><a href="warden.php">WARDENS</a></li>
        <li><a href="home1.php">CONTACT</a></li>
        <li>
          <a href="logout.php">SIGN OUT</a>
        </li>
       </ul>
    </div>
  </div>
</nav>
<center>
<div class="card">
<div class="jumbotron">
    <b>Request for Repairs</b>
</div>
<form action="repairemail.php" method ="POST" onsubmit="return(confirm('An email will be sent to the Warden. Do you want to Send an email?'););">
<label><b>Problem Details:</b></label><br/>
<textarea rows="10" cols="90" placeholder="Enter the details of your problem here..." name="message" required>
</textarea> </br><i><b>We will contact you as soon as possible. </b></i></br><br/>
<input type="submit" value="Send email"/>
<a href="shome.php"><button type="button" class="cancelbtn">Cancel</button></a>
</form>
<br/>
</div>
</center><br/><br/><br/><br/><br/><br/>
</body>
<!-- Footer -->
<footer class="text-center">
  <p>Website developed by A&E Web Developers Inc.</p> 
</footer>
</html>