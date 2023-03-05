<?php
session_start();
if((!isset($_SESSION['sauth']))&&isset($_SESSION['wauth'])) {
if(isset($_SESSION['wauth'])) {header("location:warden2.php");}else{
header("location:warden.html");}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>BMSETH | Wardens</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="icon" href="bms.jfif" sizes="16x16">
   <link rel="stylesheet" type="text/css" href="gen_style.css"/>
</head>
<!-- The scrollable area -->
<body id="tour" data-spy="scroll" data-target=".navbar" data-offset="50">

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
        <li><a href="#tour">WARDENS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li>
          <a href="logout.php">SIGN OUT</a>
        </li>
       </ul>
    </div>
  </div>
</nav>
<center><img src="img2.jpg" alt="Hostel3" height="393px" width="1152px"/></center>
<!-- Container -->
<div id="about" class="container text-center"><br/>
  <h3 style="font-size:25px; background-color:#004d80; color:white;line-height:150%;">Wardens</h3>
  <blockquote style="text-align:justify;"><i>Out here we spell 'warden' as 'P-A-R-E-N-T'.<br/><br> - Ex-Hostelite</i></blockquote>
  <p style="line-height:150%; font-size:20px; text-align:center;">
  <table style="border-collapse:collapse;font-size:20px; line-height:150%;"><tr><th>Name: </th><td>Dr. Giridhara G Ph.D (IISc)</td></tr>
<tr><th>Designation: </th><td>Professor</td></tr>
<tr><th>Department: </th><td>Mechanical Department</td></tr>
<tr><th>Role: </th><td>Secretary, BMSET Hostels</td></tr>
<tr><th>Contact details: </th><td>080-26679928</td></tr>
<tr><th>E Mail ID: </th><td>secretary.hostel@bmsce.ac.in<br/>ggiridhar.mech@bmsce.ac.in</td></tr>
</table><br/><br/>
<table style="border-collapse:collapse;font-size:20px; line-height:150%;"><tr><th>Name: </th><td>Tharanath R</td></tr>
<tr><th>Designation: </th><td>Associate Professor</td></tr>
<tr><th>Department: </th><td>Civil Engineering</td></tr>
<tr><th>Role: </th><td>Joint secretary</td></tr>
<tr><th>Contact details: </th><td>9880887102</td></tr>
<tr><th>E Mail ID: </th><td>thar.civ@bmsce.ac.in</td></tr>
</table><br/><br/>
<table style="border-collapse:collapse;font-size:20px; line-height:150%;"><tr><th>Name: </th><td>Dr. Umadevi V</td></tr>
<tr><th>Designation: </th><td>Associate Professor</td></tr>
<tr><th>Department: </th><td>Computer Science and Engineering</td></tr>
<tr><th>Role: </th><td>Warden- IH(NH)-Girls</td></tr>
<tr><th>Contact details: </th><td>8762742909</td></tr>
<tr><th>E Mail ID: </th><td>umadevi.cse@bmsce.ac.in</td></tr>
</table>
</p>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container"> <br/><hr/><br/>
  <h3 class="text-center" style="font-size:25px;background-color:#004d80; color:white;line-height:150%;">Contact Us</h3>
      <center>
      <p style="line-height:150%; font-size:20px;"><span class="glyphicon glyphicon-map-marker"></span> Hanumanthanagar, Bengaluru</p>
      <p style="line-height:150%; font-size:20px;"><span class="glyphicon glyphicon-phone"></span> Phone: 25534252</p>
      <p style="line-height:150%; font-size:20px;"><span class="glyphicon glyphicon-envelope"></span> Email: bmshostels@gmail.com</p>
      </center>
</div>

<!-- Add Google Maps -->
<div id="find" class="container">
  <h3 class="text-center" style="font-size:25px;">Find Us</h3>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1156.0569161565263!2d77.56460633158905!3d12.940052028043256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sBMS+Hostel%2C+Bull+Temple+Road%2C+Basavanagudi%2C+Bengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1506243206850" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</center>
</div>
<script src="https://unpkg.com/sweetalert@2.0.8/dist/sweetalert.min.js"></script>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#tour" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><button onclick='swal("A&E Web Developers", "Launched amidst the hustle & bustle of the engineering life, we aim to be the comprehensive solution to your online dream.", "info");' style="background-color:#2d2d30;border:collapse">Website developed by A&E Web Developers Inc.</button></p> 
</footer>

</body>
</html>