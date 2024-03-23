<html>
<head>
<?php include "header.php" ?>
</head>


<body>
<?php include "top.php";  ?>
<br/>
<br/>
<a href = admin_home.php><img src = goback.png></a>
<div>
<br/>
<br/>
<center><h2 align = center>Manage International</h2></center>
<form method = post enctype='multipart/form-data'>
<table align = center>
<tr>
<td>
Enter Recipe ID</td><td><input type = text name = rid></td>
<tr>

<td>Enter Recipe Name</td> <td><input type = text name = rname></td>
</tr>
<tr>
<td>
Country</td><td>
<select name = rcountry>
<option value = chinese>Chinese</option>
<option value = continental>Continental</option>
<option value = french>French</option>
<option value = fusion>Fusion</option>
<option value = italian>Italian</option>
<option value = japanese>Japanese</option>
<option value = thai>Thai</option>
</select>
</td>
<tr>
<td>Recipe Image</td><td><input type = file name = "rimage" id = "rimage"></td>
</tr>
<td>Recipe Ingredient</td><td><input type = text name = ringredient></td>
</tr>
<td>Recipe Description</td><td><input type = text name = rdescription></td>
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
$rid = $_POST['rid'];
$rname = $_POST['rname'];
$rcountry = $_POST['rcountry'];

move_uploaded_file($_FILES['rimage']['tmp_name'],"upload_image/".$_FILES['rimage']['name']);
			$rimage = "upload_image/".$_FILES['rimage']['name'];

			
$ringredient = $_POST['ringredient'];
$rdescription = $_POST['rdescription'];



$query = "insert into international values('','$rname','$rcountry','$rimage','$ringredient','$rdescription')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$rid = $_POST['rid'];
$rname = $_POST['rname'];
$rcountry = $_POST['rcountry'];

move_uploaded_file($_FILES['rimage']['tmp_name'],"upload_image/".$_FILES['rimage']['name']);
			$rimage = "upload_image/".$_FILES['rimage']['name'];

			
$ringredient = $_POST['ringredient'];
$rdescription = $_POST['rdescription'];

$query = "update international set rname='$rname',rcountry='$rcountry',rimage='$rimage',ringredient='$ringredient',rdescription='$rdescription' where rid='$rid'";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$rid = $_POST['rid'];

$query = "delete from international where rid=$rid";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{


$query = "select * from international";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Recipe ID</td>";
echo "<td>Recipe Name</td>";
echo "<td>Country</td>";
echo "<td>Recipe Image</td>";
echo "<td>Recipe Ingredient</td>";
echo "<td>Recipe Description</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo '<td><img src="'.$column['rimage'].'" width="100"></td>';
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";

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