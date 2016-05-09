<?php
$host_name = "sql207.byethost11.com";
$database = "b11_5215444_website"; // Change your database name
$username = "b11_5215444"; // Your database user id
$password = "yomhyb"; // Your password

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>