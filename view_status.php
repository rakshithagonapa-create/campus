<?php
session_start();
include "db.php";

$user_id = $_SESSION['user_id'];

$sql = "SELECT title, status FROM reports WHERE user_id='$user_id'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['title'] . " - " . $row['status'] . "<br>";
}
?>
