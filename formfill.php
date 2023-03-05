<?php
session_start();
if(!isset($_SESSION['wauth'])) {header("location:home.html");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Warden | Add Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="icon" href="bms.jfif" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="gen_style.css"/>
  <style type="text/css">
.jumbotron{
	  height:50px;
	  width:auto;
	  background-color:#004d80;
	  color:white;
	  font-size:25px;
	  margin-bottom: 0;
	  }
form {
    border: 3px solid #f1f1f1;
}

input[type=text] {
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
    <p><b>Enter Student Information</b></p>
</div>
<div class="container">
<table>
<form action="enterinfo.php" method="POST">
  <tr><th>ID:</th><td><input type="text" size="4" pattern="[0-9]{4}" name="id" /required></td></tr>
  <tr><th>Room No:</th><td><input type="text" size="3" pattern="[0-9]{3}" name="room"/required></td></tr>
  <tr><th>Name:</th><td><input type="text" pattern="[A-Za-z\s]+" name="stud_name"/required></td></tr>
  <tr><th>USN:</th><td><input type="text" size="10" pattern="[1-4][A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{3}" name="usn"/required></td></tr>
  <tr><th>Branch:</th><td><select name="branch"required>
  <option value="CSE" selected="selected">Computer Science and Engineering</option>
  <option value="ISE">Information Science and Engineering</option>
  <option value="ECE">Electronics and Communication Engineering</option>
  <option value="EEE">Electrical and Electronics Engineering</option></select></td></tr>
  <tr><th>Semester:</th><td><input type="text" size="1" pattern="[1-8]" name="sem"/required></td></tr>
  <tr><th>Gender:</th><td><input type="radio" name="gen" selected="selected" value="female"/>Female<input type="radio" name="gen" value="male"/>Male</td></tr>
  <tr><th>D.O.B.:</th><td><input type="date" name="dob"/required></td></tr>
  <tr><th>Phone No.:</th><td><input type="text" pattern="[0-9]{10}" name="phone"/required></td></tr>
  <tr><th>Email ID:</th><td><input type="email" name="email"/required></td></tr>
  <tr><th>Nationality:</th><td><input type="text" pattern="[A-Za-z\s]+" name="nation"/required></td></tr>
  </table>
  <input type="submit" name="submit" value="SUBMIT"/></br>
  <a href="searchwarden.php"><button type="button" class="cancelbtn">Cancel</button></a>
 </form>
 </div>
 </div>
 </center>
 <br/>
 </body>
  <!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Website developed by A&E Web Developers Inc.</p> 
</footer>
 </html>