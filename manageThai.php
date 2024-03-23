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
<center><h2 align = center>Manage Thai</h2></center>
<form method = post enctype='multipart/form-data'>
<table align = center>
<tr>
<td>
Enter Food ID</td><td><input type = text name = fid></td>
<tr>

<td>Enter Food Name</td> <td><input type = text name = fname></td>
</tr>
<tr>

<tr>
<td>Food Image</td><td><input type = file name = "fimage" id = "fimage"></td>
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
$fid = $_POST['fid'];
$fname = $_POST['fname'];


move_uploaded_file($_FILES['fimage']['tmp_name'],"upload_image/".$_FILES['fimage']['name']);
			$fimage = "upload_image/".$_FILES['fimage']['name'];

			

$price = $_POST['price'];



$query = "insert into thai values('','$fname','$fimage','$price')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$fid = $_POST['fid'];
$fname = $_POST['fname'];


move_uploaded_file($_FILES['fimage']['tmp_name'],"upload_image/".$_FILES['fimage']['name']);
			$fimage = "upload_image/".$_FILES['fimage']['name'];

			

$price = $_POST['price'];

$query = "update thai set fname='$fname',fimage='$fimage',price='$price' where fid='$fid'";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$fid = $_POST['fid'];

$query = "delete from thai where fid=$fid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{


$query = "select * from thai";
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
?>


</div>
<!-- Bottom section -->
<?php include "bottom.php" ?>
</body>
</html>