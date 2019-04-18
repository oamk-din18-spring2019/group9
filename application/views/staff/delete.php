<?php


$UID = $_POST["staff"];

$Query = "DELETE FROM staff WHERE ID='$staff_id'";
// Do a query thingy whatever its called
$statement = $db->prepare($Query);
$statement->execute();
while ($result = $statement->fetchObject()) {}

 ?>
