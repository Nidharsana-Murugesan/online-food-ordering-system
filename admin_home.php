<html>
<head>
<?php
include "header.php"; ?>
</head>
<body>
<?php    include "top.php"; ?>
<div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
	<br/>	
<?php
/*
on authentic page, only valid users of website can visit
strangers(anonymous) are not allowed
*/
@session_start();
include_once "dbconfigure.php";
$msg="";
if(verifyuser())
{
if(fetchrole()=='admin')
	{
	$un=fetchusername();
	$msg="Welcome $un , <br /><a 	href='signout.php'>Signout</a>";
	}
	else
	{
header("Location:loginerror.php");
	}
}
else
{
header("Location:loginerror.php");
}
?>



<html >
<head>

</head>
<body>
<br/>
<br/>
<br/>
<?php
echo $msg;

?>
	<br/>
<br/>
<br/>
<br/>
			
				<center><h2 align = center>Admin Home Page</h2></center>
				
				
					<p style = "font-size : 30pt">Services
<ul style = "color : red">
<li><a href = manageVegFastFood.php>Manage Veg Fast Food</a></li>
<li><a href = manageNonVegFastFood.php>Manage Non Veg Fast Food</a></li>
<li><a href = managePizza.php>Manage Pizza</a></li>
<li><a href = manageSoup.php>Manage Soup</a></li>
<li><a href = manageBurger.php>Manage Burger</a></li>
<li><a href = manageChinese.php>Manage Chinese</a></li>
<li><a href = manageSandwich.php>Manage Sandwich</a></li>
<li><a href = manageIndian.php>Manage Indian</a></li>
<li><a href = manageThai.php>Manage Thai</a></li>
<li><a href = manageBooking.php>Manage Booking</a></li>
<li><a href = manage-feedback.php>Manage Feedback</a></li>
<li><a href = siteuser.php>Admin Profile</a></li>
<ul>
</p>
				
			
			</body>
</html>


</div>
<?php  include "bottom.php"; ?>
</body>
</html>