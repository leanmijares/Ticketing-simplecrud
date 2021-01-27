<?php
include("dbconnection/connection.php");

$sql = "Delete FROM ticket_request WHERE ticket_request_id='" . $_GET["ticket_request_id"] . "'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->close();

header("Location: admin_type_request.php");

?>