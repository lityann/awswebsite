<?php
$user = "lityann";
$password = "L1ty@nnz";
$database = "lityann";
$table = "login_user";

try {
	$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
	echo "<h2>LOGIN_USER</h2><ol>";
	foreach($db->query("SELECT * FROM $table") as $row) {
		echo "<li>" . $row ['name'] . "</li>";
	}
	echo "</ol>";
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}
?>
