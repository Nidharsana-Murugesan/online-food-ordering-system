<html>
<head>
<?php
include "header.php";
?>
</head>
<body>
<?php include "top.php" ?>
<div>
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
if(fetchrole()=='user')
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
<?php
echo $msg;

?>
			
				<h2 align = center>Customer Home Page</h2>
				
				
					<p style = "font-size : 30pt">Services
<ul style = "color : red">
<li><a href = buses.php>View Buses</a></li>
<li><a href = hotels.php>View Hotels</a></li>
<li><a href = locations.php>View Locations</a></li>
<ul>
</p>
					
			</body>
</html>

</div>
<?php  include "bottom.php "?>
</body>
</html>