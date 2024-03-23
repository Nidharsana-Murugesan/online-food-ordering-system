<html>
<head>
<?php include "header.php" ?>
</head>


<body>
<?php include "top.php";  ?>
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
<br/>
<a href = admin_home.php><img src = goback.png></a>
<div>
<br/>
<br/>
<center><h2 align = center>Manage Booking</h2></center>
<form method = post enctype='multipart/form-data'>
<table align = center>
<tr>
<td>
Booking ID</td><td><input type = text name = bookingid></td>
<tr>

<td>Customer Name</td> <td><input type = text name = customername></td>
</tr>
<tr>

<tr>
<td>Contact Number</td><td><input type = text name = "contact"></td>
</tr>
<tr>
<td>Email ID</td><td><input type = text name = email></td>
</tr>

<tr>
<td>Food ID</td><td><input type = text name = fid></td>
</tr>

<tr>
<td>Food Name</td><td><input type = text name = fname></td>
</tr>

<tr>
<td>Price</td><td><input type = text name = price></td>
</tr>
<tr>
<td colspan = 2>
<input type = submit name = save value = Save>
<input type = submit name = modify value = Modify>
<input type = submit name = remove value = Remove>
<input type = submit name = search value = Search>
</td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
$bookingid = $_POST['bookingid'];
$customername = $_POST['customername'];
$contact = $_POST['contact'];

$email = $_POST['email'];
$fid = $_POST['fid'];
$fname = $_POST['fname'];
$price = $_POST['price'];



$query = "insert into newbooking values('','$customername','$contact','$email','$fid','$fname','$price')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$bookingid = $_POST['bookingid'];
$customername = $_POST['customername'];
$contact = $_POST['contact'];

$email = $_POST['email'];
$fid = $_POST['fid'];
$fname = $_POST['fname'];
$price = $_POST['price'];

$query = "update newbooking set customername='$customername',contact='$contact',email='$email',fid='$fid',fname='$fname',price='$price' where bookingid='$bookingid'";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$bookingid = $_POST['bookingid'];
$customername = $_POST['customername'];
$contact = $_POST['contact'];

$email = $_POST['email'];
$fid = $_POST['fid'];
$fname = $_POST['fname'];
$price = $_POST['price'];

$query = "delete from newbooking where bookingid=$bookingid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{


$query = "select * from newbooking";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1 width=100%>";
echo "<tr>";
echo "<td>Booking ID</td>";
echo "<td>Customer Name</td>";
echo "<td>Contact</td>";
echo "<td>Email</td>";
echo "<td>Food ID</td>";
echo "<td>Food Name</td>";
echo "<td>Price</td>";

echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";


echo "</tr>";
}
echo "</table>";
}
?>


</div>
<!-- Bottom section -->
<?php include "bottom.php" ?>
</body>
</html>