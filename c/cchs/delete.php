<?php
include 'database_config.php';
$id = $_GET['id'];


$sql = "DELETE FROM adminstrator WHERE name = '$id'";

if ($conn->query($sql) === TRUE) {
header("location:users.php");} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>