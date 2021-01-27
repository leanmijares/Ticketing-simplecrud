<?php
include("dbconnection/connection.php");

$sql = "Delete FROM user_account WHERE id='" . $_GET["id"] . "'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->close();

header("Location: admin_user.php");

?>