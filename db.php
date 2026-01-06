<?php
$conn = new mysqli("localhost", "root", "", "campusassist");

if ($conn->connect_error) {
    die("Connection failed");
}
?>
