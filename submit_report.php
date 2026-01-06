<?php
session_start();
include "db.php";

$user_id = $_SESSION['user_id'];
$title = $_POST['title'];
$desc = $_POST['description'];
$location = $_POST['location'];
$date = $_POST['date'];

$imageName = "";
if ($_FILES['image']['name']) {
    $imageName = time() . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "uploads/".$imageName);
}

$sql = "INSERT INTO reports 
(user_id, title, description, location, report_date, image)
VALUES 
('$user_id','$title','$desc','$location','$date','$imageName')";

$conn->query($sql);

echo "Report Submitted Successfully";
?>
