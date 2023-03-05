<?php
include 'connect_bmseth.php';
session_start();
if(!isset($_SESSION['wauth'])) {header("location:home.html");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Warden | Enquiry Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="gen_style1.css">
  <link rel="icon" href="bms.jfif" sizes="16x16">
<link rel="stylesheet" type="text/css" href="gen_style.css">
  <style type="text/css">
  .container {
      padding: 20px 20px;
  }
  input[type=text], input[type=password] {
    width: 65%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
  .jumbotron{
	  height:50px;
	  width:auto;
	  background-color:#004d80;
	  color:white;
	  font-size:30px;
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
	.card .container {
		text-align:left;
		font-size:20px;
	width:100%;
    padding: 14px;
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
    <p><b>Discussion/enquiry forum</b></p>
	</div>
	<div class="container">
<?php
$query="SELECT * FROM `forum`";
$result=mysqli_query($dbhandle,$query) or die("Cannot fetch");
while ($row=mysqli_fetch_array($result))
{
     echo $row['Name'].': '.$row['Discuss'].'</br></br>';
}
?>
</div>
</div>
</body>
</br></br>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!-- Footer -->
<footer class="text-center">
  <p>Website developed by A&E Web Developers Inc.</p> 
</footer>
</html>