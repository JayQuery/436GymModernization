<?php
   include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> RockCreek Gym </title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<Link rel="stylesheet" href="RockCreek_memberprofile.css" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="RockCreek.css" type="text/css">
<link rel="stylesheet" href="RockCreek_login.css" type="text/css">
<!------ Include the above in your HEAD tag ---------->
<body>
  <div class="background">
    <div class="top">
      <img class="banner" src="RockCreekLogo.jpg" alt="Logo" >
      <table class="tabletop" border= "1">
        <tr>
          <th><a href="RockCreekHome.html" title="homepage">Home</a></th>
          <th><a href="RockCreekAppointment.html" title="homepage">Make an Appointment</a></th>
          <th>About Us</th>
          <th><a href="RockCreekLogin.html" title="Appointment">Log In/Sign Up</a></th>
          <th><a href="RockCreekContactUs.html" title="Contact Us">Contact Us</a></th>
        </tr>
      </table>
    </div>
    <div class="main" >
      <div class="leftside">
	<table border= "1" class="tableleft">
<tr>
<th><img src="profile.png" height="40%;" width="100%;"/></th>
</tr>
</table>
<h2><?php echo $login_session; ?></h2>
		
	</div>
<div class="mainsub" >
	<div class="centerpiece">

</div>		
		
		
	</div>
	

	<div class="rightside">
		
			
		
	</div>
	</div>
</div>
</div>

</body>
</html>
