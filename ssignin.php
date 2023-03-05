<!DOCTYPE html>
<html>
<title>Sign In | Student</title>
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><b><font size="12pt">BMSET HOSTELS</font></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">HOME</a></li>
        <li><a href="hostel_mess.html">HOSTEL & MESS</a></li>
        <li><a href="warden.html">WARDENS</a></li>
        <li><a href="home.html">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">SIGN IN
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="wsignin.php">Warden</a></li>
            <li><a href="ssignin.php">Student</a></li> 
          </ul>
        </li>
       </ul>
    </div>
  </div>
</nav>
<center>
<div class="card">
<div class="jumbotron">
    <p><b>Student Sign In</b></p>      
</div>

<form action="slogin.php" onsubmit="return(check());" method="POST">

  <div class="container">
    <label><b>Username</b></label><br/>
    <input type="text" placeholder="Enter Username" id="uname" name="uname" required><br/>

    <label><b>Password</b></label><br/>
    <input type="password" placeholder="Enter Password" id="psw" name="psw" required><br/>
        
    <button type="submit">Login</button>
	<a href="home.html"><button type="button" class="cancelbtn">Cancel</button></a>
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <span class="psw" style="width:65%;"><a href="forgotpass.php">Forgot password?</a></span>
  </div>

</form>
<script>
function check()
{
	var uname=document.getElementById("uname").value;
	var psw=document.getElementById("psw").value;
	var i;
	var splChars = "*|,\":<>[]{}`\';()@&$=#%";
	for (i = 0; i < uname.length; i++)    
		if (splChars.indexOf(uname.charAt(i))!=-1)
		{
			alert("Illegal characters detected!");
			return false;
		}
	for (i = 0; i < psw.length; i++)
		if (splChars.indexOf(psw.charAt(i)) != -1)
		{
			alert("Illegal characters detected!");
			return false;
		}
	return true;
}
</script>
</div>
</center>
</br></br></br></br></br></br></br>
<script src="https://unpkg.com/sweetalert@2.0.8/dist/sweetalert.min.js"></script>
<!-- Footer -->
<footer class="text-center">
  <p><button onclick='swal("A&E Web Developers", "Launched amidst the hustle & bustle of the engineering life, we aim to be the comprehensive solution to your online dream.", "info");' style="background-color:#2d2d30;border:collapse">Website developed by A&E Web Developers Inc.</button></p> 
</footer>
</body>
</html>