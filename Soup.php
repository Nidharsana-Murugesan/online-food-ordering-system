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
<a href = customer_home.php><img src = goback.png></a>
<div>
<br/>
<br/>
<center><h2 align = center>soup</h2></center>
<form method = post enctype='multipart/form-data'>
<table align = center>


<td>Enter Food Name</td> <td><input type = text name = fname></td>
</tr>
<tr>


<tr>
<td>Search Via Price </td><td><input type = text name = price1> To <input type = text name = price2></td>
</tr>

<tr>
<td colspan = 2>
<input type = submit name = search1 value = "Search ALL">
<input type = submit name = search2 value = "Search Via Name">
<input type = submit name = search3 value = "Search Via Price">
</td>
</tr>
</table>
</form>
<?php
include "dbconfigure.php";

if(isset($_POST['search1']))
{


$query = "select * from soup";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1 width=100%>";
echo "<tr>";
echo "<td>Food ID</td>";
echo "<td>Food Name</td>";
echo "<td>Food Image</td>";
echo "<td>Price</td>";

echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><img src="'.$column['fimage'].'" width="100"></td>';
echo "<td>$column[3]</td>";

echo "</tr>";
}
echo "</table>";
}



if(isset($_POST['search2']))
{

$fname = $_POST['fname'];
$query = "select * from soup where fname='$fname'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1 width=100%>";
echo "<tr>";
echo "<td>Food ID</td>";
echo "<td>Food Name</td>";
echo "<td>Food Image</td>";
echo "<td>Price</td>";
echo "<th>Book Now</th>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><img src="'.$column['fimage'].'" width="100"></td>';
echo "<td>$column[3]</td>";
echo '<td><a href="purchase_cart.php?fid='.$column['fid'].'">
														Order Now
													</a></td>';
echo "</tr>";
}
echo "</table>";
}




if(isset($_POST['search3']))
{

$price1 = $_POST['price1'];
$price2 = $_POST['price2'];
$query = "select * from soup where price>='$price1' and price<='$price2'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1 width=100%>";
echo "<tr>";
echo "<th>Food ID</th>";
echo "<th>Food Name</th>";
echo "<th>Food Image</th>";
echo "<th>Price</th>";
echo "<th>Book Now</th>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo '<td><img src="'.$column['fimage'].'" width="100"></td>';
echo "<td>$column[3]</td>";
echo '<td><a href="purchase_cart.php?fid='.$column['fid'].'">
														Order Now
													</a></td>';
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