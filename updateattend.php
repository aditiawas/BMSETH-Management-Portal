<?php
include 'connect_bmseth.php';
session_start();
if(!isset($_SESSION['wauth'])) {header("location:home.html");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Warden | Attendance Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="bms.jfif" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="gen_style.css"/>
  <link rel="stylesheet" type="text/css" href="gen_style1.css"/>
  <style type="text/css">
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

	  <?php
		  $query="SELECT * FROM `studentinfo`";
		  $count1=0;
		  $count2=0;
		  $count3=0;
$result=mysqli_query($dbhandle,$query) or die("Cannot fetch");
while ($row=mysqli_fetch_array($result))
{
	if (strtotime(date("Y-m-d"))-(strtotime($row['UpdateDate']))<=(8*60*60*24))
	{
		$attend=$row['Attendance'];
		    if ($attend==6 || $attend==7)
				$count1=$count1+1;
			else if ($attend==3 || $attend==4 || $attend==5)
				$count2=$count2+1;
			else
				$count3=$count3+1;
	}
}
	     echo 'var count1='.$count1.';';
		 echo 'var count2='.$count2.';';
		 echo 'var count3='.$count3.';';
		?>
        var data = google.visualization.arrayToDataTable([
          ['Present for', 'Number Of People'],['6 to 7',count1],['3 to 5',count2],['1 to 2',count3]]);

        var options = {
          title: 'Attendance Record Pie Chart',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
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
<div class="jumbotron">
    <h1><center>Attendance Record</center></h1>
</div>
<br/><br/>
<div class="card">
<div class="container">
<table border="1">
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
<th>Attendance</th>
</tr>
<?php
$query="SELECT * FROM `studentinfo`";
$result=mysqli_query($dbhandle,$query) or die("Cannot fetch");
while ($row=mysqli_fetch_array($result))
{
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
	 echo $row['Nationality'].'</td><td>';
	 if (strtotime(date("Y-m-d"))-(strtotime($row['UpdateDate']))>(8*60*60*24))
	     echo "Update please";
	 else
		 echo $row['Attendance'].'</td></tr>';
}
echo '</table>'
?>
</div>
</br>
<div class="container">
<form action="putintodata.php" method="POST">
<label>ID:</label><br/><input type="text" name="id" placeholder="Enter ID here..." required/>
</br>
<label>Attendance:</label><br/><input type="text" name="present" placeholder="Enter attendance here..." required/>
</br>
<input type="submit" value="Submit"/>
<a href="whome.php"><button type="button" class="cancelbtn">Cancel</button></a></form></br>
</div></div></br>
<div id="piechart" style="width: 900px; height: 500px;"></div>
</center></br>
</body>
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Website developed by A&E Web Developers Inc.</p> 
</footer>
</html>