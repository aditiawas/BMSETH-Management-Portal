<?php
include 'connect_bmseth.php';
session_start();
if(!isset($_SESSION['sauth'])) {header("location:home.html");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student | Attendance Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="icon" href="bms.jfif" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="gen_style1.css">
  <link rel="stylesheet" type="text/css" href="gen_style.css">
  <style type="text/css">
  .container {
      padding: 20px 20px;
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
    background-color: #f44336;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 65%;
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
      <a class="navbar-brand" href="home1.php"><b><font size="12pt">BMSET HOSTELS</font></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="shome.php">HOME</a></li>
        <li><a href="hostel_mess1.php">HOSTEL & MESS</a></li>
        <li><a href="warden1.php">WARDENS</a></li>
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
    <p><b>Attendance Details</b></p>
</div>
</br></br>
<div class="container">
<?php
$id=$_SESSION['ID'];
$query="SELECT * FROM `studentinfo`";
$result=mysqli_query($dbhandle,$query) or die("Cannot fetch");
while ($row=mysqli_fetch_array($result))
{
	if ($row['ID']==$id)
	{
	echo'<br/>Attendance for last week:</br><br/>';
	if (strtotime(date("Y-m-d"))-(strtotime($row['UpdateDate']))>(8*60*60*24))
	     echo "<b>Sorry but it has not been updated yet...";
	 else
	 {
	   echo '<table><tr><td>';
	   echo 'No.of days present: </td><th>'.$row['Attendance'];
	   echo '</br></th></tr><tr><td colspan="2" style="color:#e6f2ff;">-</td></tr><tr><td>No.of days absent:<br/></td><th>'.(7-$row['Attendance'].'<br/></th></tr></table>');
	 }
	}
}
?>
<br/>
</div>
</div>
</center>
</body>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br></br>
<!-- Footer -->
<footer class="text-center">
  <p>Website developed by A&E Web Developers Inc.</p> 
</footer>
</html>