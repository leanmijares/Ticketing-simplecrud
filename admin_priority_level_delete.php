<?php
include("dbconnection/connection.php");

$sql = "Delete FROM ticket_priority WHERE priority_id='" . $_GET["priority_id"] . "'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->close();

header("Location: admin_priority_level.php");

?>