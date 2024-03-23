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
if(fetchrole()=='customer')
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
			
				<center><h2 align = center>Customer Home Page</h2></center>
				
				
					<p style = "font-size : 30pt">Services
<ul style = "color : red">
<li><a href = vegfastfood.php>Veg Fast Food</a></li>
<li><a href = NonVegfastfood.php>Non Veg Fast Food</a></li>
<li><a href = Pizza.php>Pizza</a></li>
<li><a href = Soup.php>Soup</a></li>
<li><a href = Burger.php>Burger</a></li>
<li><a href = Chinese.php>Chinese</a></li>
<li><a href = Sandwich.php>Sandwich</a></li>
<li><a href = Indian.php>Indian</a></li>
<li><a href = Thai.php>Thai</a></li>
<li><a href = feedback.php>Feedback</a></li>
<li><a href = siteuser.php>Customer Profile</a></li>
<ul>
</p>
				
			
			</body>
</html>


</div>
<?php  include "bottom.php"; ?>
</body>
</html>