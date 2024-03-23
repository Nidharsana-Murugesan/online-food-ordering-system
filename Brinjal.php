<html>
<head>
<?php include "header.php" ?>
</head>


<body>
<?php include "top.php"  ?>
<div>
<br/>
<br/>
<h2 align = center>Brinjal</h2>
<?php
include "dbconfigure.php";


$query = "select * from ingredient where rtype='brinjal'";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1 width = 100%>";
echo "<tr>";
echo "<td>Recipe Name</td>";
echo "<td>Type</td>";
echo "<td>Recipe Image</td>";
echo "<td>Recipe Ingredient</td>";
echo "<td>Recipe Description</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";

echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td><img src = '$column[3]' width = 100 height = 100></td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";

echo "</tr>";
}
echo "</table>";
?>
</div>
<!-- Bottom section -->
<?php include "bottom.php" ?>
</body>
</html>