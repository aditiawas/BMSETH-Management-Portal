<?php
include 'connect_bmseth.php';
session_start();
if(!isset($_SESSION['wauth'])) {header("location:home.html");}
?>
<html lang="en">
<head>
  <title>Warden | Search Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="bms.jfif" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="gen_style1.css">
  <style type="text/css">
  table{width:100%;cellpadding:10px !important;}
	tr:nth-child(odd) {background: #e6f2ff;}
tr:nth-child(even) {background: #cce5ff;}
th{background:#99ccff;}
.jumbotron{
	  height:50px;
	  width:auto;
	  background-color:#004d80;
	  color:white;
	  font-size:25px;
	  }
form {
    border: 3px solid #f1f1f1;
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
	width: 90%;
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
<br/>
<center>
<div class="card">
<div class="jumbotron">
    <p><b>Search Results</b><p>
</div>
<br/><br/>
<div class="container">
<table>
<tr>
<th>ID</th>
<th>Room No.</th>
<th>Name</th>
<th>USN</th>
<th>Branch</th>
<th>Semester</th>
<th>Gender</th>
<th>DOB</th>
<th>Phone No.</th>
<th>Email ID</th>
<th>Nationality</th>
</tr>
<?php
$quer=$_POST['quer'];
$searchid=$_POST['SearchID'];
$quer=stripslashes($quer);
$searchid=stripslashes($searchid);
$query="SELECT * FROM `studentinfo`";
$result=mysqli_query($dbhandle,$query) or die("Cannot fetch");
$flag=0;
while ($row=mysqli_fetch_array($result))
{
	 if ($row[$searchid]==$quer)
	 {
		 $flag=1;
	 echo '<tr><td>';
	 echo $row['ID'].'</td><td>';
	 echo $row['Room No.'].'</td><td>';
     echo $row['Name'].'</td><td>';
	 echo $row['USN'].'</td><td>';
	 echo $row['Branch'].'</td><td>';
     echo $row['Semester'].'</td><td>';
	 echo $row['Gender'].'</td><td>';
	 echo $row['DOB'].'</td><td>';
	 echo $row['Phone No.'].'</td><td>';
	 echo $row['Email ID'].'</td><td>';
	 echo $row['Nationality'].'</td><td></tr>';
	 }
}
if ($flag==0)
{
	echo '<script>alert("No such entry exists. Try another one.");location.href="searchwarden.php";</script>';
}
echo '</table>';
?>
</p>
</div>
<a href="searchwarden.php"><button type="button" class="cancelbtn">Return</button></a>
</div>
</center>
<br/><br/><br/><br/><br/><br/>
</body>
<footer class="text-center">
  <p>Website developed by A&E Web Developers Inc.</p> 
</footer>
</html>