<html>
<head>
<?php include "header.php" ?>
</head>


<body>
<?php include "top.php"  ?>



<?php 
include "dbconfigure.php";
session_start();
$u = $_SESSION['sun'];
$query1 = "select * from siteuser where username='$u'";
$rs1 = my_select($query1);
$row1 = mysql_fetch_array($rs1);

$customername = $row1[0];
$email = $row1[6];
$contact = $row1[7];


$fid = $_GET['fid'];
$query = "select * from vegfastfood where fid='$fid'";
$rs = my_select($query);
$row = mysql_fetch_array($rs);

$fid = $row[0];
$fname = $row[1];
$price = $row[3];


$query2 = "insert into booking values('','$customername','$contact','$email',$fid,'$fname','$price')";
$n = my_iud($query2);

echo "<div style = 'position : absolute ; top : 500px ; left : 400px'>$n Record Saved <br/>Booking Successfull</div>";
?>
<br/>
<br/>
<br/>
<a href = customer_home.php><img src = goback.png></a>
<div>
<br/>
<br/>




</div>
<!-- Bottom section -->
<?php include "bottom.php" ?>
</body>
</html>