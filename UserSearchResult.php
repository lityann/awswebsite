<?php
$host = "localhost";
$user = "lityann";
$password = "L1ty@nnz";
$database = "lityann";
$table = "login_user";

$gett = $_GET["q"];
$con = mysqli_connect($host,$user,$password);
if (!$con)
{
	die('could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,$database);

mysqli_set_charset($con, "utf8");

$sql="select * from $table WHERE id = '".$gett."'";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
	<tr>
<th>ID</th>
<th>User name</th>
<th>User E-mail</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['mail'] . "</td>";
	echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
