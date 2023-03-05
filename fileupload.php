<?php
session_start();
if(!isset($_SESSION['wauth'])) {header("location:home.html");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Warden | Add Photo</title>
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
    <p><b>Edit Student Information by ID</b></p>
</div>
<div class="container">
<form enctype="multipart/form-data" action="uploadimg.php" method="POST">
<label>ID of the Student:</label><br/><input type="text" name="id" placeholder="Enter ID here..." required/></br><br/><br/>
<input type="hidden" name="MAX_FILE_SIZE" value="524288" /> 
<fieldset><legend> <p><b><i>Select a JPEG or PNG image of 512KB or smaller to be uploaded: </i></b></p>
<p><input type="file" name="upload" required/></p></legend>
</fieldset>
<input type="submit" name="submit" value="Submit" /><br/>
<a href="searchwarden.php"><button type="button" class="cancelbtn">Cancel</button></a></br><br/>
</form>
</div>
</div>
</center>
</body>
<br/><br/><br/><br/><br/><br/><br/><br/>
<footer class="text-center">
  <p>Website developed by A&E Web Developers Inc.</p> 
</footer>
</html>