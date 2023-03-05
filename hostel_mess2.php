<?php
session_start();
if((!isset($_SESSION['wauth']))&&isset($_SESSION['sauth'])) {
if(isset($_SESSION['sauth'])) {header("location:hostel_mess1.php");} else{
header("location:hostel_mess.html");}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BMSETH | Hostel&Mess</title>
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
<body id="college" data-spy="scroll" data-target=".navbar" data-offset="50">

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
        <li><a href="#college">HOSTEL & MESS</a></li>
        <li><a href="warden2.php">WARDENS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li>
          <a href="logout.php">SIGN OUT</a>
        </li>
       </ul>
    </div>
  </div>
</nav>
<center><img src="img3.png" alt="Hostel3" height="393px" width="1152px"/></center>
<div id="college" class="container text-left"><br/>
  <h3 style="font-size:25px;background-color:#004d80; color:white;line-height:150%;text-align:center;">Hostel</h3>
  <blockquote style="text-align:justify;"><i>Life Means:<br/>Maggi Noodles,<br/>A Hostel Room,<br/>3:25 A.M.<br/><br/> - Hostelite</i></blockquote>
  <p style="line-height:150%; font-size:20px; text-align:justify;"><b>THE BMSETH HOSTELS:</b> B.M.S College of Engineering has an extensive campus spread in nearly 15 acres of land. The area consists of several buildings - old and modern, with well laid roads, play grounds and lawns. Apart from this, the hostel complex on the southern side of the college campus consists various hostel blocks. The BMSET Hostel is a place to grow and evolve one’s personality. Academics indeed is one of the area of primary concern of our management as we are among the pioneers of education in our Country. One of the salient features of the Hostel is its care for students.<br/>
<b>HOSTEL UNIT-I :</b> MAIN HOSTEL:  Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. comprising of a ground plus two floors with a small basement to accommodate 150 pre-final and final year students in single rooms. The facilities available include water heaters with a capacity of 3000 liters per day, TV lounge, Volley Ball Court, Indoor games like Carom Board, Table Tennis and a Multi Gym. Washing machine are provided to the students for their convenience.<br/>
<b>GIRLS HOSTEL BLOCK UNIT-II:</b> This block was constructed between 1980-1984 with a plinth area of 42,586 sq. feet to accommodate Female students. The hostel has Ground plus 5 floors consisting of 125 fully furnished rooms. All rooms are provided on twin sharing basis. The basement consists of warden’s office, Visitors lounge, reading room, kitchen and a dining hall, solar water heaters of 6,000 liters capacity, two lifts to carry 8 passengers each are provided. There are TV lounges and reading rooms in alternate floors and the lounge in the top floor accommodates indoor games like Table Tennis etc. Managed by International co-operation division<br/>
<b>Hostel Unit-III: BOYS HOSTEL-</b> This unit constructed in 2003 to accommodate 288 boys has a plinth area of 5,611.29sq meters (60,377.48 sq. ft.) comprising of basement, ground and five upper floors. All rooms are on twin sharing basis. Basement is meant for vehicle parking. Each floor consists of three wings and in each wing, there are 8 rooms totalling to 24 rooms per floor. Each student is provided with a wardrobe, study table, chair, cot and overhead book storing cabinet. solar heaters of 7500 litres capacity are installed in terrace. Two lifts to carry 9 Passengers each with 7 Stops and fire-fighting services are installed. Other facilities include reading rooms, two TV lounges, visitors lounge, Indoor games like Carom, Table Tennis.<br/>
<b>Hostel Unit-IV: GIRLS HOSTEL-</b> This hostel building was constructed in 2003 exclusively for accommodating 117girl students with a plinth area of 5402 sq. meters (5,8125 sq. ft.) comprising of basement, ground and three upper floors. Three Students are accommodated in each room. Warden’s office, visitors lounge, reading room, dining hall, TV lounge, indoor games are Provided in the basement and parking for two wheelers is provided on the eastern side adjacent to the compound wall. There are 9 rooms in each floor and 10 rooms in each of the upper floors, solar water heater of 5,000 liters capacity, two lifts to carry 5 passengers each with 5 stops are provided. Washing machines are provided in all wings.<br/>
<b>Main Hostel (Phase-1) (GIRLS HOSTEL): </b>This newly constructed hostel is also exclusively for girl students. This new hostel building with a plinth area of 539 sq meters (5,799.64 sq. ft.) comprising of basement, ground and three upper floors was completed in the year 2012 to accommodate 76 girls. All rooms are twin sharing with attached toilet and bathrooms with internet facility. Basement is meant for vehicle parking. Each floor consists of three wings (east, middle and west). There are 10 rooms in each floor, out of which nine rooms are twin sharing and one room is single occupancy. Each student is provided with a wardrobe, study table, chair, cot and book storing cabinet. The building is equipped with solar water heating System of 3,000 LPD capacity. The facilities include reading room, 24/7 Wi-fi-Internet accessibility, TV, Gymnasium, Washing machine, power back-up, RO drinking water system, indoor sports facilities and parking space for student vehicles. (Two wheelers only) The hostels are strictly under CC TV surveillance.<br/>
<b>Main Hostel Dining Block:</b> Two separate dining halls are available for boys & girls, which accommodates 180 boys & 60 girls at a time. This has both vegetarian and non-vegetarian centralized modern kitchens. Stores for provisions, vegetables and other commodities are placed in the basement. A branch of the Allahabad Bank and internet centre are located on the western side of the dining block. The board room of the hostel committee, office of the Indian hostels, Secretary and Warden’s chambers and the residence of the assistant warden are located in the first floor of the dining block.<br/>
<b>Multi-Purpose Hall:</b> A multipurpose hall, a part of the hostel complex, with the dimensions of 100’ x 43’ was constructed in the year 1985. This is used for conducting the meetings, seminars, functions organized by the management, cultural programs, farewell functions, get-togethers, food arrangements for examiners etc. This hall is equipped with a stage and can accommodate about 200 peoples, attached with a green room, required furniture and audio systems. During UTSAV this hall is exclusively used for conducting auditions and musical events.<br/>
<b>Annexure-I (Outside Campus-Rented Buildings) New Boys Hostel-I</b>(about 300 Mtrs. from Main Hostel) Address: BMSET Hostel annexure-1 (I) (Mathrushree Comforts) # 48, New #710/2, 2nd Block, BSK 1st Stage, Ashoknagar, Bengaluru-560050 Accommodation Available:34 17 Rooms(Twin Sharing)<br/>
<b>Annexure-II (Outside Campus-Rented Building) New Boys Hostel-II (</b>about 300 Mtrs. from Main Hostel) Address: BMSET Hostel annexure-11 (II) (Muniyamman Nilaya) # 898/25, 2nd Block, BSK 1st Stage, Ashoknagar, Bengaluru-560050 Accommodation Available:48 24 Rooms(Twin Sharing)<br/>
<b>Annexure-III (Outside Campus-Rented Building) New Hostel</b> (Adjacent to Mess Block)) Address: BMSET Hostel annexure-111 (III) (Chinnapa Krupa) # 9/3, 2nd Cross, N.R. Colony, Basavanagudi, Bengaluru-560019 Accommodation Available:44 22 Rooms(Twin Sharing)<br/>
<b>Annexure-IV (Outside Campus-Rented Building) - Boys hostel </b>( about 1000 mts from Main hostel) Address: #73, vidhyapeetha road, Balaji Nagar, BSK 3rd Stage, Bengaluru-560085. Accommodation Available:50<br/>
<b>Annexure-V (Outside Campus-Rented Building) - Boys hostel</b> ( about 400 mts from Main hostel) Address: #73, vidhyapeetha road, 6th Cross, Ashoknagar, BSK 3rd Stage, Bengaluru-560085. Accommodation Available: 60<br/>
</p>
<h3 style="font-size:25px;background-color:#004d80; color:white;line-height:150%;text-align:center;">Mess</h3>
  <p style="line-height:150%; font-size:20px; text-align:justify;"><b>Mess Regulations & Mess Charges</b>
  <ul>
  <li>The mess arrangement of the hostel is compulsory for all the inmates without any exception i.e., no student is allowed to stay in the hostel without being a member of mess.</li>
  <li>When the hostels have excess demand for accommodation and is unable to provide accommodation to all the applicants, the students who find accommodation nearby may be permitted to have the mess facility by collecting full charges for that academic year with an undertaking from such students that they shall join the hostels as and when the hostels provide them accommodation. However, this number shall not exceed 25 at any time.</li>
  <li>Such students have to submit a separate request form in the format provided by paying the prescribed fee and submit the same to the office.</li>
  <li>Students should sign the mess joining register kept in the mess at the time of joining the mess.</li>
  <li>Service in the mess shall be between scheduled hours only & closed after lunch on every Saturday for maintenance. The Mess timings are as follows and the students should strictly adhere to these timings.</li>
  </ul><center>
  <table cellpadding="10" style="border-collapse:collapse; font-size:20px; line-height:150%;">
 <tr> <th colspan="2">Working Days Timings</th></tr>
<tr><td>Breakfast - </td><td> 7.00 am to 9.00 am</td></tr>
<tr><td>Lunch - </td><td> 12.45 pm to 2.45 pm</td></tr>
<tr><td>Snacks - </td><td> 4.45 pm to 5.45 pm</td></tr>
<tr><td>Dinner - </td><td> 7.00 pm to 9.00 pm</td></tr>
</table></center>
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
  <a class="up-arrow" href="#college" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><button onclick='swal("A&E Web Developers", "Launched amidst the hustle & bustle of the engineering life, we aim to be the comprehensive solution to your online dream.", "info");' style="background-color:#2d2d30;border:collapse">Website developed by A&E Web Developers Inc.</button></p> 
</footer>

</body>
</html>